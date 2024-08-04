'use strict';

const gulp = require( 'gulp' );
const rtlcss = require( 'gulp-rtlcss' );
const rename = require( 'gulp-rename' );
const browserSync = require( 'browser-sync' ).create();
const sourcemaps = require( 'gulp-sourcemaps' );
const environments = require( 'gulp-environments' );
const postcss = require( 'gulp-postcss' );

const development = environments.development;
const production = environments.production;

// Sass.
gulp.task( 'styles', function () {
	return gulp
		.src( [ 'src/styles/*.css' ] )
		.pipe( development( sourcemaps.init() ) )
		.pipe( postcss() )
		.pipe( development( sourcemaps.write( '.' ) ) )
		.pipe( gulp.dest( './' ) )
		.pipe( production( rtlcss() ) )
		.pipe( production( rename( { suffix: '-rtl' } ) ) )
		.pipe( production( gulp.dest( './' ) ) )
		.pipe( browserSync.stream() );
} );

// Copy Fonts.
gulp.task( 'fonts', function () {
	return gulp
		.src( [ 'src/fonts/**/*.*' ], { buffer: true, removeBOM: false } )
		.pipe( gulp.dest( 'assets/fonts' ) );
} );

// Reload.
gulp.task( 'reload', ( cb ) => {
	browserSync.reload();
	cb();
} );

// Watch.
gulp.task( 'watch', function () {
	browserSync.init( {
		proxy: process.env.DEV_SERVER_URL,
		open: 'yes' === process.env.BROWSERSYNC_OPEN ? true : false,
	} );

	gulp.watch( 'src/styles/**/*.css', gulp.series( 'styles', 'reload' ) );
	gulp.watch( './**/*.php' ).on( 'change', browserSync.reload );
} );

// Tasks.
gulp.task( 'default', gulp.series( 'watch' ) );
gulp.task( 'build', gulp.series( 'styles', 'fonts' ) );
