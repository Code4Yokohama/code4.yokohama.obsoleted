'use strict';

// SETTINGS --------------------------------------
var config = {
	outputStyle_CSS: "compact",
	autoPrefixMode: ['last 2 versions', 'Safari >= 10'],
	browserSync: {
		reloadDelay: 2000,
		useHttps: false,
		ghostMode: {
			clicks: true,
			forms: true,
			scroll: true
		},
		port: 5963,
		ui: {
			port: 5960
		},
		useProxy: true,
		// options for local mode
		localDocmentRoot: "../",
		localIndexFile: "index.html",
		// options for proxy mode
		remoteServer: "localhost:8888/",
		webSocket: true
	}
}


// LOAD MODULES ----------------------------------
var gulp            = require('gulp');
var cache           = require('gulp-cached');
var gulpIf          = require('gulp-if');
var filter          = require('gulp-filter');
var plumber         = require('gulp-plumber');
var sassInheritance = require('gulp-sass-multi-inheritance');
var sass            = require('gulp-sass');
var sourcemap       = require('gulp-sourcemaps');
var autoprefix      = require('gulp-autoprefixer');
var consoleColor    = require('gulp-color');
var uglify          = require('gulp-uglify');
var browserSync     = require('browser-sync').create();

// Helper Functions ------------------------------
var objMerge = function (obj1, obj2) {
	if (!obj2) {
		obj2 = {};
	}
	for (var attrname in obj2) {
		if (obj2.hasOwnProperty(attrname)) {
			obj1[attrname] = obj2[attrname];
		}
	}
};
// TASK LIST -------------------------------------
gulp.task('browser-sync', function(){
	console.log('initialize browser sync');

	var bsOptions = {
		https: config.browserSync.useHttps,
		ghostMode: config.browserSync.ghostMode,
		port: config.browserSync.port,
		ui: {
			port: config.browserSync.ui.port
		},
		reloadDelay: config.browserSync.reloadDelay
	};

	var bsServerOptions = {};
	if (config.browserSync.useProxy) {
		bsServerOptions = {
			proxy: {
				target: config.browserSync.remoteServer,
				ws: config.browserSync.webSocket
			}
		};
	} else {
		bsServerOptions = {
			server: {
				baseDir: config.browserSync.localDocmentRoot,
				indes: config.browserSync.localIndexFile
			}
		};
	}

	objMerge(bsOptions,bsServerOptions);
	browserSync.init(bsOptions);
});

gulp.task('bs-reload',function(done){
	browserSync.reload();
	done();
});

// -----------------------------------------------
gulp.task('build:sass', function(){
	return gulp.src('scss/**/*.scss')
		.pipe(gulpIf(global.isWatching, cache('sass')))
		.pipe(sassInheritance({dir: 'scss/'}))
		.pipe(sourcemap.init())
		.pipe(plumber())
		.pipe(sass({
			outputStyle: config.outputStyle_CSS,
			sourcemap: true
		}).on('error', sass.logError))
		.pipe(autoprefix({
			browsers: config.autoPrefixMode,
			cascade: false
		}))
		.pipe(sourcemap.write('.'))
		.pipe(gulp.dest('css/'))
		.pipe(browserSync.stream());
});

// watch flag
gulp.task('setWatch',function(){
	global.isWatching = true;
});

// watch task
gulp.task('watch', ['setWatch','build:sass','browser-sync'], function(){
	console.log('This task NOT INCLUDE the compression images.');
	console.log('If you want to image compression, please type this command:');
	console.log(consoleColor('--------------------------------------','YELLOW'));
	console.log(consoleColor('$ npm run compress:img','RED'));
	console.log(consoleColor('--------------------------------------','YELLOW'));
	console.log('start watching : ' + consoleColor('src/','GREEN'));

// for browser sync
var watch_html = gulp.watch('../**/*.{html,php}');
	watch_html.on('change', function(event){
		console.log(consoleColor(event.type,'RED') + ' : ' + consoleColor(event.path,'GREEN'));
		browserSync.reload()
	});

// sass build
var watch_sass = gulp.watch('scss/**/*.scss',['build:sass','bs-reload']);
	watch_sass.on('change', function(event){
		console.log(consoleColor(event.type,'RED') + ' : ' + consoleColor(event.path,'GREEN'));
	});
});

gulp.task('default',function(){
	console.log(consoleColor('default task is nothing.','GREEN'));
	console.log(consoleColor('--------------------------------------','YELLOW'));
	console.log(consoleColor('# Watch and compile CSS and minify JS','BLUE'));
	console.log(consoleColor('$ npm start','RED'));
	console.log('');
	console.log(consoleColor('# Compress image files (without watching)','BLUE'));
	console.log(consoleColor('$ npm run compress:img','RED'));
	console.log(consoleColor('--------------------------------------','YELLOW'));
});
