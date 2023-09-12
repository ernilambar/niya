'use strict';

const gulp = require( 'gulp' );
const rtlcss = require( 'gulp-rtlcss' );
const rename = require( 'gulp-rename' );
const browserSync = require( 'browser-sync' ).create();
const sourcemaps = require( 'gulp-sourcemaps' );
const environments = require( 'gulp-environments' );
const postcss = require( 'gulp-postcss' );
const postcssPresetEnv = require( 'postcss-preset-env' );

const development = environments.development;
const production = environments.production;

// Sass.
gulp.task( 'styles', function() {
	return gulp.src( [ 'src/styles/*.css' ] )
		.pipe( development( sourcemaps.init() ) )
		.pipe( postcss( [
			postcssPresetEnv(),
		] ) )
		.pipe( development( sourcemaps.write( '.' ) ) )
		.pipe( gulp.dest( './' ) )
		.pipe( production( rtlcss() ) )
		.pipe( production( rename( { suffix: '-rtl' } ) ) )
		.pipe( production( gulp.dest( './' ) ) )
		.pipe( browserSync.stream() );
} );

// Reload.
gulp.task( 'reload', ( cb ) => {
	browserSync.reload();
	cb();
} );

// Watch.
gulp.task( 'watch', function() {
	browserSync.init( {
		proxy: process.env.DEV_SERVER_URL,
		open: false,
	} );

	gulp.watch( './**/*.php' ).on( 'change', browserSync.reload );
} );

// Tasks.
gulp.task( 'default', gulp.series( 'watch' ) );
gulp.task( 'build', gulp.series( 'styles' ) );
