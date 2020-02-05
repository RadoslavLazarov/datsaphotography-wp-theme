const gulp = require('gulp');
const sass = require('gulp-sass');
const browserify = require('gulp-browserify');
const prefix = require('gulp-autoprefixer');
const minify = require('gulp-minify');
const cleanCSS = require('gulp-clean-css');

gulp.task('scssCompiler', () => gulp.src('./client/scss/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(prefix({ overrideBrowserslist: ['> 0.2%'] }))
    // .pipe(cleanCSS({ compatibility: 'ie8' }))
    .pipe(gulp.dest('./public/css/')));

gulp.task('scss:watch', () => {
    gulp.watch('./client/scss/**/*.scss', ['scssCompiler']);
});

gulp.task('jsCompiler', () => {
    gulp.src(['client/js/**/*.js'])
        .pipe(browserify({
            insertGlobals: true,
        }))
        // .pipe(minify())
        .pipe(gulp.dest('public/js/'));
});

gulp.task('jsCompiler:watch', () => {
    gulp.watch('client/js/**/*.js', ['jsCompiler']);
});

gulp.task('scss', ['scssCompiler', 'scss:watch']);
gulp.task('js', ['jsCompiler', 'jsCompiler:watch']);
gulp.task('default', ['scss', 'js']);
