const elixir = require('laravel-elixir');
require('laravel-elixir-vue-2');

const gulp = require('gulp');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss')
       .webpack('app.js');
});


//拷贝 bower 下载的 admin-lte 中需要的资源文件到 public 目录
gulp.task('copyAdminLte', function () {

    //css
    gulp.src('public/bower_components/AdminLTE/bootstrap/css/bootstrap.min.css')
        .pipe(gulp.dest('public/css/libs'));
    gulp.src('public/bower_components/font-awesome/css/font-awesome.min.css')
        .pipe(gulp.dest('public/css/libs'));
    gulp.src('public/bower_components/Ionicons/css/ionicons.min.css')
        .pipe(gulp.dest('public/css/libs'));
    gulp.src('public/bower_components/AdminLTE/dist/css/AdminLTE.css')
        .pipe(gulp.dest('public/css/libs'));
    gulp.src('public/bower_components/AdminLTE/dist/css/skins/skin-green-light.css')
        .pipe(gulp.dest('public/css/libs'));

    //js
    gulp.src('public/bower_components/AdminLTE/plugins/jQuery/jquery-2.2.3.min.js')
        .pipe(gulp.dest('public/js/libs'));

    gulp.src('public/bower_components/AdminLTE/bootstrap/js/bootstrap.min.js')
        .pipe(gulp.dest('public/js/libs'));

    gulp.src('public/bower_components/AdminLTE/dist/js/app.js')
        .pipe(gulp.dest('public/js/libs'));

    //img
    gulp.src('public/bower_components/AdminLTE/dist/img/**')
        .pipe(gulp.dest('public/img'));

    //fonts
    gulp.src('public/bower_components/font-awesome/fonts/*')
        .pipe(gulp.dest('public/css/fonts'));
    gulp.src('public/bower_components/Ionicons/fonts/*')
        .pipe(gulp.dest('public/css/fonts'));

});



