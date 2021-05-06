const { watch, series } = require('gulp');
const gulp = require('gulp');
const sass = require('gulp-sass');
const browserSync = require('browser-sync').create();
const fileinclude = require('gulp-file-include');
const sassGlob = require('gulp-sass-glob');

// browserSync.init({
//     server: {
//         baseDir: './docs',
//         index: '/index.html'
//     }
// });

function style() {
    return gulp
        .src('assets/scss/global.scss')
        .pipe(sassGlob())
        .pipe(sass())
        .on('error', sass.logError)
        .pipe(gulp.dest('assets/css'));
}

// function moveimg() {
//     return gulp.src(['./src/assets/img/*']).pipe(gulp.dest('./docs/assets/img'));
// }

// function movejs() {
//     return gulp.src(['./src/assets/js/*']).pipe(gulp.dest('./docs/assets/js'));
// }

// function catMoveJS() {
//     return gulp.src('./src/**/*.html').pipe(useref()).pipe(gulp.dest('docs'));
// }

// function include() {
//     return gulp
//         .src(['./src/*.html'])
//         .pipe(
//             fileinclude({
//                 prefix: '@@',
//                 basepath: '@file'
//             })
//         )
//         .pipe(gulp.dest('./docs'));
// }

exports.default = function () {
    gulp.watch("assets/scss/**/*").on(
        'change',
        series(style)
    );
};
