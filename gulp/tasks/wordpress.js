const gulp = require('gulp');
const rename = require('gulp-rename');
const urlAdjuster = require('gulp-css-url-adjuster');

gulp.task('copyPHP', function() {
    gulp.src('./wp/*.php')
        .pipe(gulp.dest('C:/xampp/htdocs/bpdcc/wp-content/themes/bpdcc/'));
});

gulp.task('copyCSS', function() {
    gulp.src('./dist/styles.css')
        .pipe(rename('style.css'))
        .pipe(gulp.dest('C:/xampp/htdocs/bpdcc/wp-content/themes/bpdcc/'));
});

gulp.task('copyJS', function() {
    //
});