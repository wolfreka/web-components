'use strict';

const watchify = require('watchify');
const browserify = require('browserify');
const gulp = require('gulp');
const debug = require('gulp-debug');
const source = require('vinyl-source-stream');
const buffer = require('vinyl-buffer');
const gutil = require('gulp-util');
const sourcemaps = require('gulp-sourcemaps');
const uglify = require('gulp-uglify');
const autoprefixer = require('gulp-autoprefixer');
const gulpif = require('gulp-if');
const plumber = require('gulp-plumber');
const cssminify = require('gulp-minify-css');
const babel = require('gulp-babel');
const rename = require('gulp-rename');
const merge = require('merge-stream');
const runSequence = require('run-sequence');
const del = require('del');
const sass = require('gulp-sass');
const babelify = require('babelify');

var bundle;

function onError(err) {
	gutil.log(gutil.colors.red('Error:'), err);
	this.emit('end');
}

function onSuccess(msg) {
	gutil.log(gutil.colors.green('Build:'), msg);
}

function getBrowserify(dev) {
	if(!bundle) {
		bundle = browserify({
			debug: !dev,
			entries: 'src/js/web-components.js',
			cache: {},
			packageCache: {},
			extensions: ['.js', '.jsx'],
		})
		.transform(
			babelify
		);

		if(dev) {
			bundle.plugin(watchify);
			bundle.on('update', function() {
				return getJS(dev);
			});
			bundle.on('log', onSuccess);
			bundle.on('error', onError);
		}
	}

	return bundle;
}

function getJS(dev) {
	return getBrowserify(dev).bundle()
		.on('error', onError)
		.pipe(source('web-components.js'))
		.pipe(debug({title: 'web-components JS:'}))
		.pipe(buffer())
		.pipe(plumber({errorHandler: onError}))
		.pipe(gulpif(dev, sourcemaps.init({loadMaps: true})))
		.pipe(gulpif(!dev, gulp.dest('./build')))
		.pipe(gulpif(!dev, uglify()))
		.pipe(gulpif(!dev, rename({ extname: '.min.js' })))
		.pipe(gulpif(dev, sourcemaps.write('./')))
		.pipe(gulp.dest('./build'));
}

function getSass(dev) {
	return gulp.src('src/scss/web-components.scss')
		.on('error', onError)
		.pipe(debug({title: 'web-components scss:'}))
		.pipe(plumber({errorHandler: onError}))
		.pipe(gulpif(dev, sourcemaps.init({loadMaps: true})))
		.pipe(sass())
		.pipe(autoprefixer({
			browsers: ['last 2 versions', 'IE 10']
		}))
		.pipe(gulpif(!dev, gulp.dest('./build')))
		.pipe(gulpif(!dev, cssminify()))
		.pipe(gulpif(!dev, rename({ extname: '.min.css' })))
		.pipe(gulpif(dev, sourcemaps.write('./')))
		.pipe(gulp.dest('./build'));
}

gulp.task('clean:build', () => {
	return del('./build');
});

gulp.task('clean:prepublish', () => {
	return del(['./lib', './sass']);
});

gulp.task('sass', () => {
	return getSass(true);
});

gulp.task('js', () => {
	return getJS(true);
});

gulp.task('dev', ['clean:build'], () => {
	gulp.watch('src/scss/**/*.scss', ['sass']);
	return merge(getSass(true), getJS(true));
});

gulp.task('build', ['clean:build'], () => {
	return merge(getSass(false), getJS(false));
});

gulp.task('prepublish:js', () => {
	process.env.NODE_ENV='production';
	return gulp.src('src/js/**/*.js')
			.pipe(babel())
			.pipe(gulp.dest('./lib/'));
});

gulp.task('prepublish:sass', () => {
	return gulp.src('src/scss/*.scss')
		.pipe(gulp.dest('./sass/'));
});

gulp.task('prepublish', ['clean:prepublish'], (done) => {
	return runSequence('prepublish:js', 'prepublish:sass', 'build', done);
});

gulp.task('postpublish', ['clean:prepublish']);
gulp.task('default', ['dev']);
