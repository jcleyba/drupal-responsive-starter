var gulp       = require('gulp');
var less       = require('gulp-less');
var watch      = require('gulp-watch');
var cleanCSS = require('gulp-clean-css');
var livereload = require('gulp-livereload');
var sourcemaps = require('gulp-sourcemaps'); 
 
gulp.task('less', function () {
  gulp.src('less/style.less')
    .pipe(sourcemaps.init())
    .pipe(less())
    .pipe(cleanCSS({compatibility: 'ie8'}))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('css'))
    .pipe(livereload());
});
 
gulp.task('watch', function() {
  livereload.listen(4000);
  gulp.watch('less/*.less', ['less']);
});