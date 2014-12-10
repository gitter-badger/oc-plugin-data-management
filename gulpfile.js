/**
 * @todo i18n for bootstrap-checkbox
 * @todo sourcemap error when write
 * @todo jquery compile problem with define
 * @todo gulp dep in npm
 */

var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
var del = require('del');
var gulp = require('gulp');
var hub = require('gulp-hub');
var less = require('gulp-less');
var minifyCSS = require('gulp-minify-css');
var notify = require('gulp-notify');
var path = require('path');
var plumber = require('gulp-plumber');
var resolveDependencies = require('gulp-resolve-dependencies');
var sourcemaps = require('gulp-sourcemaps');
var uglify = require('gulp-uglify');

var assets_directory = 'assets/';
var bower_directory = assets_directory + 'vendor/';

hub(bower_directory + 'axc.class2css/gulpfile.js');

function show_notify(title, message)
{
	return notify( {
		'title': title,
		'message': message,
		onLast: true,
		icon: path.join(__dirname, assets_directory + 'images/gulp/icon-notify.png')
	} );
}

function manage_error()
{
	return plumber( { errorHandler: notify.onError(
		{
			title: 'Error',
			message: '<%= error.message %>',
			onLast: true,
			icon: path.join(__dirname, assets_directory + 'images/gulp/icon-error.png')
		} )
	} );
}

function run_less(src, output, title, include_paths)
{
	return gulp.src(src + '.less')
		.pipe( manage_error() )
//		.pipe( sourcemaps.init( {
//			loadMaps: true
//		} ) )
		.pipe ( less( { 
			compress: true,
			paths: include_paths
		} ) )
//		.pipe(sourcemaps.write('../maps') )
		.pipe( concat(output + '.css') )
		.pipe( autoprefixer('last 10 versions', 'ie 9') )
		.pipe( minifyCSS( { keepBreaks: false } ) )
		.pipe( gulp.dest(assets_directory + 'css') )
		.pipe( show_notify(title, 'LESS compiled, prefixed and minified') );
}

function run_clean(src, title, message)
{
	return gulp.src(src, { read: false } )
		.pipe( manage_error() )
		.pipe( clean( { force: true } ) )
		.pipe( show_notify(title, message + ' cleaned') );
}

function run_copy(src, dest, title, message)
{
	return gulp.src(src)
		.pipe( manage_error() )
		.pipe( gulp.dest(dest) )
		.pipe( show_notify(title, message + ' copied') );
}

gulp.task('less', function () 
{
	return run_less(assets_directory + 'less/*', 'home', 'AxC DataManagement', [
		assets_directory + 'less',
		assets_directory,
	] );
});

gulp.task('clean', function ()
{
	//run_clean(assets_directory + 'javascript', 'Seldac', 'JS');
	//run_clean(assets_directory + 'css', 'Seldac', 'CSS');
	//run_clean(assets_directory + 'fonts', 'Seldac', 'Fonts');
});