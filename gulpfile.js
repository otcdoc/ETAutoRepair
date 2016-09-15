//const elixir = require('laravel-elixir');

//require('laravel-elixir-vue');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

/*elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js');
});*/


/*var gulp = require('gulp');
var uncss = require('gulp-uncss');

gulp.task('default', function() {
	gulp.src('public/css/style.css')
	.pipe(uncss({ html: ['http://localhost:8000/test'] }))
	.pipe(gulp.dest('dest'));
});*/

var gulp = require('gulp');
var cssnano = require('gulp-cssnano');

gulp.task('default', function () {
    gulp.src('./dest/ministyle.css')
    .pipe(cssnano())
    .pipe(gulp.dest('./out'));
});

/*var htmlmin = require('gulp-htmlmin');
var gulp = require('gulp');

gulp.task('compress', function() {
    var opts = {
        collapseWhitespace:    true,
        removeAttributeQuotes: true,
        removeComments:        true,
        minifyJS:              true
    };

    gulp.src('./storage/framework/views/*')
        .pipe(htmlmin(opts))
        .pipe(gulp.dest('./storage/framework/views/'));
});*/