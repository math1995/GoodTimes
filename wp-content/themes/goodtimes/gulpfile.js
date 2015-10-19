var gulp = require('gulp');
var sass = require('gulp-sass');
var jshint = require('gulp-jshint'); 
var concat = require('gulp-concat');
var imagemin = require('gulp-imagemin');
var plumber = require('gulp-plumber');
var notify = require('gulp-notify');
var plumberErrorHandler = { errorHandler: notify.onError({
 
    title: 'Gulp',
 
    message: 'Error: <%= error.message %>'
 
  })
 
};

var livereload = require('gulp-livereload');



gulp.task('default', function(){
 
    console.log('default gulp task...')
 
});

gulp.task('sass', function () {
 
    gulp.src('./css/*.scss')
 
        .pipe(sass())
 
        .pipe(gulp.dest(''));
 
});
 
gulp.task('default', ['sass']);

gulp.task('js', function () {
 
	gulp.src('js/*.js')
	 
	.pipe(jshint())
	 
	.pipe(jshint.reporter('fail'))
	 
	.pipe(concat('theme.js'))
	 
	.pipe(gulp.dest('js'));
 
});

gulp.task('default', ['sass', 'js']);

gulp.task('img', function() {
 
  gulp.src('img/*.{png,jpg,gif}')
 
    .pipe(imagemin({
 
      optimizationLevel: 7,
 
      progressive: true
 
    }))
 
    .pipe(gulp.dest('img'))
 
});

gulp.task('default', ['sass', 'js', 'img']);

gulp.task('watch', function() {
 
  gulp.watch('css/*.scss', ['sass']);
 
  gulp.watch('js/*.js', ['js']);
 
  gulp.watch('img/*.{png,jpg,gif}', ['img']);
 
});

gulp.task('default', ['sass', 'js', 'img', 'watch']);

gulp.task('sass', function () {
 
  gulp.src('./css/*.scss')
 
    .pipe(plumber(plumberErrorHandler))
 
    .pipe(sass())
 
    .pipe(gulp.dest(''))
 
});


gulp.task('sass', function () {
 
  gulp.src('./css/*.scss')
 
    .pipe(plumber(plumberErrorHandler))
 
    .pipe(sass())
 
    .pipe(gulp.dest('./css'))
 
    .pipe(livereload());
 
});

gulp.task('watch', function() {
 
  livereload.listen();
 
  gulp.watch('css/*.scss', ['sass']);
 
  gulp.watch('js/*.js', ['js']);
 
  gulp.watch('img/*.{png,jpg,gif}', ['img']);
 
});










