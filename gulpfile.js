// Mike's PWIM Gulp Workflow
'use strict';

// REQUIRED STUFF
var    gulp = require('gulp'),
browserSync = require('browser-sync').create(),
   cleanCSS = require('gulp-clean-css'),
     concat = require('gulp-concat'),
     uglify = require('gulp-uglify'),
     rename = require('gulp-rename'),
      gutil = require('gulp-util'),
       sftp = require('gulp-sftp-up4'),
       sass = require('gulp-sass'),
       maps = require('gulp-sourcemaps');


// SETUP PATHS
const base_path = './',
            src = base_path + '_dev',
           dist = base_path + 'assets',
          paths = {
              js: src  + '/js/*.js' ,
            scss: src  + '/sass/app.scss',
        critical: src  + '/sass/critical.scss',
          };


// BUILD CRITICAL CSS
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


// BUILD STYLES CSS
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


// BUILD SCRIPTS JS
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


// RUN A SERVER WITH BROWSER SYNC
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


// DEPLOY TO OUR SERVER JUST THE WORDPRESS THEME
gulp.task('sftp', function () {
    return gulp.src(['./**', '!./_dev/**', '!./node_modules/**'])
        .pipe(sftp({
            host: '138.68.233.224',
            port: '7989',
            remotePath: '/var/www/pwim/public_html/app/themes/pwim/',
            auth: 'privateKeyCustom'
        }));
});


// DO THESE THINGS WHEN I SAY SO
gulp.task('default', ['serve']);
gulp.task('build', ['makeCRITICAL', 'makeCSS', 'makeJS']);
gulp.task('deploy', ['sftp']);