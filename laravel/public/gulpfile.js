var gulp = require('gulp');
var watch = require('gulp-watch');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var uglify = require('gulp-uglify');

gulp.task('default', function() {  
});

gulp.task('css', function() {
  watch('./sass/**/*.sass', function (event) {
        console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
        gulp.src('./sass/**/*.sass')
            .pipe(sass({ includePaths : ['./sass/tools'] }))
			.pipe(autoprefixer())
            .pipe(gulp.dest('./src/'));
    });
});

gulp.task('js', function() {
    watch('./js/**/*.js', function (event) {
        console.log('File ' + event.path + ' was ' + event.type + ', running tasks...');
		gulp.src('./js/**/*.js')
            .pipe(concat('main.js'))
			//.pipe(uglify())
            .pipe(gulp.dest('./src/'));
    });
  
});
