// Requires these plugin
var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var browserSync = require('browser-sync').create();
var concat = require('gulp-concat');

// TASKS

// browser sync

gulp.task('browserSync', function() {
  browserSync.init({
    server: {
      baseDir: '.'
    },
  })
})

// sass

gulp.task('sass', function(){
  return gulp.src('scss/**/*.scss')
    .pipe(sourcemaps.init())
	.pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
	.pipe(sourcemaps.write('.'))
    .pipe(gulp.dest(''))
    .pipe(browserSync.reload({
      stream: true
    }))
});

// watch

gulp.task('watch', ['browserSync', 'sass'], function(){
  gulp.watch('scss/**/*.scss', ['sass']); 
  gulp.watch('*.html', browserSync.reload); 
  gulp.watch('js/**/*.js', browserSync.reload);
})
