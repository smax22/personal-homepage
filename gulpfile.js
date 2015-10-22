var input = 'resources/assets/';
var output = 'public/src/';

var gulp = require('gulp'),
	jshint = require('gulp-jshint'),
	sass = require('gulp-sass'),
	sourcemaps = require('gulp-sourcemaps'),
	autoprefixer = require('gulp-autoprefixer'),
	concat = require('gulp-concat'),
	uglify = require('gulp-uglify'),
	gzip = require('gulp-gzip'),
	imagemin = require('gulp-imagemin');

gulp.task('default', ['watch']);

gulp.task('jshint', function() {
	return gulp.src(input + 'js/**/*.js')
		.pipe(jshint())
		.pipe(jshint.reporter('jshint-stylish'));
});

gulp.task('build-js', function() {
	return gulp.src(input + 'js/**/*.js')
		.pipe(sourcemaps.init())
		.pipe(sourcemaps.write())
		.pipe(concat('bundle.js'))
		.pipe(uglify())
		.pipe(gulp.dest(output + 'js'));
});

gulp.task('vendor', function() {
	return gulp.src(input + 'vendor/**/*.js')
		.pipe(concat('vendor.js'))
		.pipe(uglify())
		.pipe(gzip())
		.pipe(gulp.dest(output + 'vendor'));
});

gulp.task('build-css', function() {
	return gulp.src(input + 'scss/**/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass())
		.pipe(sourcemaps.write())
		.pipe(autoprefixer({
            browsers: ['last 2 versions'],
            cascade: false
        }))
		.pipe(concat('bundle.css'))
		.pipe(gulp.dest(output + '/css'));
});

gulp.task('imageopt', function() {
	return gulp.src(input + 'images/**/*')
		.pipe(imagemin({
			progressive: true
		}))
		.pipe(gulp.dest(output + 'images'));
});

gulp.task('watch', function() {
	gulp.watch(input + 'js/**/*.js', ['jshint', 'build-js']);
	gulp.watch(input + 'scss/**/*.scss', ['build-css']);
	gulp.watch(input + 'images/**/*', ['imageopt']);
});