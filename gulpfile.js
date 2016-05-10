var gulp = require('gulp'),
    less = require('gulp-less'),
    con = require('gulp-concat'),
   	prefixer = require('gulp-autoprefixer'),
   	minify = require('gulp-minify-css'),
   	smap = require('gulp-sourcemaps');


var paths = {
    less: 'assets/less/',
    css: 'assets/css/'
};
gulp.task('default', ['less']);
gulp.task('watch', function () {
	gulp.watch(paths.less + '/**/*.less', ['less']);
});
gulp.task('less', function() {
   gulp.src( paths.less + 'innovation.less' )
      .pipe(smap.init())
      .pipe(less())
      //.pipe(con('main.css'))
      .pipe(prefixer())
      .pipe(minify())
      .pipe(smap.write())
      .pipe(gulp.dest(paths.css))
});