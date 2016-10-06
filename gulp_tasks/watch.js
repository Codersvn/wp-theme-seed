var gulp = require('gulp');
var watch = require('gulp-watch');
module.exports = function() {
    watch(['assets/js/**/*.js'], function() {
        gulp.run([
            'jshint',
            'browserify'
        ]);
    });
    gulp.watch('./assets/css/**/*.scss', ['sass', 'minify_css']);
}
