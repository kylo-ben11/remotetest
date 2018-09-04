var gulp = require('gulp');
// Requires the gulp-sass plugin
var sass = require('gulp-sass');



gulp.task('sass', function(){
  return gulp.src('source-files')
    .pipe(sass()) // Using gulp-sass
    .pipe(gulp.dest('destination'))
});

gulp.task('sass', function(){
  return gulp.src('shapely-child/scss/styles.scss')
    .pipe(sass()) // Converts Sass to CSS with gulp-sass
    .pipe(gulp.dest('shapely-child/css'))
});

var cache = require('gulp-cache');
var imagemin = require('gulp-imagemin');
var imageminPngquant = require('imagemin-pngquant');
var imageminZopfli = require('imagemin-zopfli');
var imageminMozjpeg = require('imagemin-mozjpeg'); //need to run 'brew install libpng'
// var imageminGiflossy = require('imagemin-giflossy');

//compress all images
gulp.task('imagemin', function() {
    return gulp.src(['img/*.{gif,png,jpg,svg}'])
        .pipe(cache(imagemin([
            //png
            imageminPngquant({
                speed: 1,
                quality: 98 //lossy settings
            }),
            imageminZopfli({
                more: true
                // iterations: 50 // very slow but more effective
            }),
            // //gif
            // // imagemin.gifsicle({
            // //     interlaced: true,
            // //     optimizationLevel: 3
            // // }),
            // //gif very light lossy, use only one of gifsicle or Giflossy
            // imageminGiflossy({
            //     optimizationLevel: 3,
            //     optimize: 3, //keep-empty: Preserve empty transparent frames
            //     lossy: 2
            // }),
            //svg
            imagemin.svgo({
                plugins: [{
                    removeViewBox: false
                }]
            }),
            //jpg lossless
            imagemin.jpegtran({
                progressive: true
            }),
            //jpg very light lossy, use vs jpegtran
            imageminMozjpeg({
                quality: 85
            })
        ])))
        .pipe(gulp.dest('dist'));
});
