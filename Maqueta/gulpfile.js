'use strict';
 
// dependencias
var gulp = require('gulp');
var postcss = require('gulp-postcss');
var autoprefixer = require('autoprefixer');
var sass = require('gulp-sass');
var concat = require('gulp-concat-css');
 

// variables
const config = {
    root: './src',
}



//  task to perform

gulp.task('sass', function () {
  var processors = [
  	autoprefixer({
  		browsers: ['last 70 versions']
  	})
  ];
// looks for errors and shows them
  return gulp.src(`${config.root}/styles/*.scss`)
  .pipe(sass().on('error', sass.logError)) 
  .pipe(concat('main.css'))
  .pipe(postcss(processors))
  .pipe(gulp.dest(`${config.root}/styles/`))

});
 



gulp.task('watch', ['sass'], function(){
	gulp.watch(`${config.root}/styles/**/*.scss`,['sass']);
});


// run sass 
gulp.task('default', ['sass']);