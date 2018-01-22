var gulp = require('gulp'),
    sass = require('gulp-sass'),
    concat = require('gulp-concat');

// Configuration Default
gulp.task('default',['sass', 'watch']);

// Configuration SASS
gulp.task('sass', function(){
    return gulp.src('assets/src/sass/**/*.scss')
        .pipe(concat('style.min.css')) // Concat
        .pipe(sass({outputStyle: 'compressed'}).on('error', sass.logError))
        .pipe(gulp.dest('assets/css'))
});

// Configuration watch for auto-run
gulp.task('watch', function(){
    gulp.watch('assets/src/sass/**/*.scss',['sass']);
});
