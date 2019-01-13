// Mike's PWIM Gulp Workflow
'use strict';

// Require our stuff
var    gulp = require('gulp'),
browserSync = require('browser-sync').create(),
   cleanCSS = require('gulp-clean-css'),
     concat = require('gulp-concat'),
     uglify = require('gulp-uglify'),
     rename = require('gulp-rename'),
      gutil = require('gulp-util'),
       sass = require('gulp-sass'),
       maps = require('gulp-sourcemaps');


// Set those paths
const base_path = './',
            src = base_path + '_dev',
           dist = base_path + 'assets',
          paths = {
              js: src  + '/js/*.js' ,
            scss: src  + '/sass/app.scss',
        critical: src  + '/sass/critical.scss',
          };


// Do important stuff with SASS
gulp.task('makeCRITICAL', () => {
    return gulp.src(paths.critical)
        .pipe(sass())
        .pipe(cleanCSS({compatibility: '*'}, {level: '2'}))
        .pipe(rename({
            basename: 'criticalCSS',
            extname: '.php'
          }))
        .pipe(gulp.dest('_inc/'))
        .pipe(browserSync.stream());
});


// Do stuff with SASS
gulp.task('makeCSS', () => {
    return gulp.src(paths.scss)
        .pipe(maps.init())
        .pipe(sass())
        .pipe(cleanCSS({compatibility: '*'}, {level: '2'}))
        .pipe(rename('styles.min.css'))
        .pipe(maps.write('./'))
        .pipe(gulp.dest(dist))
        .pipe(browserSync.stream());
});


// Do stuff with Javascript
gulp.task('makeJS', () => {
    return gulp.src(paths.js)
        .pipe(maps.init())
        .pipe(concat('scripts.js'))
        .pipe(uglify())
        .on('error', function (err) { gutil.log(gutil.colors.red('[Error]'), err.toString()); })
        .pipe(rename('scripts.min.js'))
        .pipe(maps.write('./'))
        .pipe(gulp.dest(dist))
        .pipe(browserSync.stream());
});


// Setup a Gulp Server with Browser Sync
gulp.task('serve', ['makeCRITICAL', 'makeCSS', 'makeJS'], function() {
    browserSync.init({
        proxy: 'http://pwim.beta/'
    });
    gulp.watch(src + '/sass/*.scss', ['makeCRITICAL', 'makeCSS']).on('change', browserSync.reload);
    gulp.watch(src + '/js/*.js', ['makeJS']).on('change', browserSync.reload);
    gulp.watch('*.php').on('change', browserSync.reload);
    gulp.watch('_inc/*.php').on('change', browserSync.reload);
    gulp.watch('_lib/*.php').on('change', browserSync.reload);
});


// Do this stuff by default
gulp.task('default', ['serve']);
gulp.task('build', ['makeCRITICAL', 'makeCSS', 'makeJS']);