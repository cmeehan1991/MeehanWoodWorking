const{series,parallel} = require('gulp');
const gulp = require('gulp');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const rename = require('gulp-rename');
const cleanCSS = require('gulp-clean-css');


function defaultTask(cb){
	cb();
}


function minifyJs(cb){
	gulp.src('assets/js/global/dist/app.js')
	.pipe(concat('min.allscripts.js'))
	.pipe(uglify())
	.pipe(gulp.dest('assets/js/global/dist'));
	
	cb();
}

function minifyStyles(cb){
	gulp.src('assets/styles/css/dist/app.css')
	.pipe(concat('min.allstyles.css'))
	.pipe(cleanCSS({compatibility: 'id8'}))
	.pipe(gulp.dest('assets/styles/css/dist'));
	
	cb();
}


exports.default = defaultTask
exports.minify = parallel(minifyJs, minifyStyles);