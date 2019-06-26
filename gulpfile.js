var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;

// gulp.task('default', ['sass', 'watch', 'browser-sync']);


gulp.task('sass', done => {
  return gulp.src('./wp-content/themes/webyou/scss/main.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./wp-content/themes/webyou/build/'))
    .pipe(browserSync.stream())
    done();
});


gulp.task('watch', function(){
  gulp.watch('./wp-content/themes/webyou/**/*.scss', gulp.series('sass'));
  browserSync.reload();
});

gulp.task('browser-sync', () => {
  browserSync.init({
    proxy: 'http://localhost/webyou/'
  });

  gulp.watch('./wp-content/themes/webyou/**/*.php').on("change", reload);
  gulp.watch('./wp-content/themes/webyou/**/*.css').on("change", reload);

});

gulp.task('default', gulp.parallel(
        'sass',
        'watch',
        'browser-sync'
  )
);