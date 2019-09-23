var gulp = require('gulp');
var browsersync = require('browser-sync').create();
var sass = require('gulp-sass');

//Compilar o Sass
gulp.task('sass', function () {

    return gulp.src(['node_modules/bootstrap/scss/bootstrap.scss', 'src/scss/*.scss'])
        .pipe(sass())
        .pipe(gulp.dest("src/css"))
        .pipe(browsersync.stream());

});

//Mover js para src/js
gulp.task('js', function () {

    return gulp.src(['node_modules/bootstrap/dist/js/bootstrap.min.js', 'node_modules/jquery/dist/jquery.min.js',
        'node_modules/popper.js/dist/umd/popper.min.js'])
    .pipe(gulp.dest("src/js"))
    .pipe(browsersync.stream());

});


// Servidor para olhar os HTML/SCSS
gulp.task('server', ['sass'], function () {

    browsersync.init({
        server: "./src"
    });

    gulp.watch(['node_modules/bootstrap/scss/bootstrap.scss', 'src/scss/*.scss'], ['sass']);
    gulp.watch("src/*.php").on('change', browserSync.reload);

});

gulp.task('default', ['js', 'server']);
