/* Gulpfile */

var gulp = require('gulp'),
	concat = require('gulp-concat'),
	minifycss = require('gulp-cssnano'),
	rename = require('gulp-rename'),
	runSequence = require('run-sequence'),
	sass = require('gulp-sass'),
	uglify = require('gulp-uglify')
	;

var config = {
	name: 'pcos'
};

var sources = {
	sass: [
		'Barfleet_WP_Theme/library/scss/{,*/}*.scss'
	]
};

gulp.task('build-css', function() {
	gulp.src('Barfleet_WP_Theme/library/scss/*.scss')
		.pipe(sass({style: 'compressed'}))
		.pipe(gulp.dest('Barfleet_WP_Theme/library/css'))
	;

	return gulp.src('Barfleet_WP_Theme/library/scss/*.scss')
		.pipe(sass({style: 'compressed'}))
		.pipe(rename({suffix: '.min'}))
		.pipe(minifycss())
		.pipe(gulp.dest('Barfleet_WP_Theme/library/css'))
	;
});

gulp.task('watch', function(callback) {
	gulp.watch(sources.sass, {interval: 500}, ['build-css']);
});

gulp.task('build', function(callback) {
	runSequence(
		'build-css',
		callback
	);
});

gulp.task('default', ['watch']);
