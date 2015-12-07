var gulp = require('gulp');
var watch = require('gulp-watch');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

gulp.task('default', function() {  
});

gulp.task('css', function() {
  watch('./www/css/**/*.sass', function (event) {
        console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
        gulp.src('./www/css/**/*.sass')
            .pipe(sass({ includePaths : ['./www/css/tools'] }))
			.pipe(autoprefixer())
            .pipe(gulp.dest('./www/src/'));
    });
});

gulp.task('js', function() {
    watch('./www/js/**/*.js', function (event) {
        console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
		gulp.src('./www/js/**/*.js')
            .pipe(concat('main.js'))
			//.pipe(uglify())
            .pipe(gulp.dest('./www/src/'));
    });
  
});
