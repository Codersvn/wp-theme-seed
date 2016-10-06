var gulp = require('gulp');
var cssmin = require('gulp-cssmin');
var rename = require('gulp-rename');
var concat = require("gulp-concat");

module.exports = function() {
    gulp.src([
            './dist/app.css'
        ])
        .pipe(cssmin())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(concat("app.min.css"))
        .pipe(gulp.dest('./dist'));
};
