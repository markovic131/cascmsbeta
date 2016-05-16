var gulp = require("gulp");
var shell = require('gulp-shell');
var elixir = require('laravel-elixir');
var themeInfo = require('./theme.json');

var task = elixir.Task;
elixir.extend("stylistPublish", function() {
    new task("stylistPublish", function() {
        return gulp.src("").pipe(shell("php ../../artisan stylist:publish " + themeInfo.name));
    }).watch("**/*.scss");
});
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

elixir(function (mix) {

    /**
     * Compile SASS
     */
    mix.sass('main.scss', 'assets/css/beta.css').stylistPublish();

    /**
     * Concat scripts
     */
    // mix.scripts([
    //     '/vendor/jquery/dist/jquery.js',
    //     '/vendor/bootstrap/dist/js/bootstrap.min.js',
    //     '/vendor/prism/prism.js',
    //     '/js/bootswatch.js'
    // ], null, 'resources');

    /**
     * Copy Bootstrap fonts
     */
    // mix.copy(
    //     'resources/assets/img',
    //     'assets/img'
    // );

    /**
     * Copy Fontawesome fonts
     */
    // mix.copy(
    //     'resources/vendor/font-awesome/fonts',
    //     'assets/fonts'
    // );
});
