var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var autoprefixer  = require("gulp-autoprefixer");
var browserSync = require('browser-sync').create();
var reload = browserSync.reload;
var srcFiles = './wp-content/themes/szablon-webyou';

// gulp.task('default', ['sass', 'watch', 'browser-sync']);


gulp.task('sass', done => {
  return gulp.src(srcFiles+'/scss/main.scss')
    .pipe(sourcemaps.init())
    .pipe(sass({outputStyle: 'compressed'}))
    .pipe(autoprefixer())
    .pipe(sourcemaps.write())
    .pipe(gulp.dest(srcFiles+'/build/'))
    .pipe(browserSync.stream())
    done();
});


gulp.task('watch', function(){
  gulp.watch(srcFiles+'/**/*.scss', gulp.series('sass'));
  browserSync.reload();
});

gulp.task('browser-sync', () => {
  browserSync.init({
    proxy: 'http://localhost/webyou/'
  });

  gulp.watch(srcFiles+'/**/*.php').on("change", reload);
  gulp.watch(srcFiles+'/**/bulid.css').on("change", reload);
  gulp.watch(srcFiles+'/**/*.js').on("change", reload);

});

gulp.task('default', gulp.parallel(
        'sass',
        'watch',
        'browser-sync'
  )
);