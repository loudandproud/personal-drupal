
var gulp = require('gulp');
var plumber = require('gulp-plumber');
var rename = require("gulp-rename");
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
var cleanCss = require('gulp-clean-css');
var uglify = require('gulp-uglify');
var imagemin = require('gulp-imagemin');
var spritesmith = require('gulp.spritesmith');
//var browserSync = require('browser-sync');


gulp.task('sass', function(){
gulp.src('src/sass/**/*.scss')
		.pipe(plumber())
		.pipe(sass())
		.pipe(autoprefixer())
		.pipe(cleanCss({compatibility: 'ie10'}))
		.pipe(gulp.dest('./'))
		//.pipe(browserSync.reload({stream:true}));
});

gulp.task('sprite',function(){
	var spriteData = gulp.src('images/*.png').pipe(spritesmith({
		imgName: 'sprite.png',
		cssName: '_sprite.scss',
		imgPath: 'images/sprite.png',
		cssFormat: 'scss',
		algorithm: 'top-down',
		cssVarMap: function(sprite){
			sprite.name = 'sprite-'+sprite.name;
		}
	}));
	spriteData.img
		.pipe(gulp.dest('images/'));

	spriteData.css
		.pipe(gulp.dest('sass/base/'));
});

gulp.task('images', function(){
	gulp.src('source/images/**/*')
		.pipe(imagemin())
		.pipe(gulp.dest('images'))
		.pipe(browserSync.reload({stream:true}));
});

gulp.task('js', function(){
	gulp.src(['src/js/**/*.js', '!js/test/**/*.js'])
		.pipe(plumber())
		.pipe(uglify())
		.pipe(gulp.dest('./js/'))
});

 gulp.task('default'/*,['server']*/,function(){
 	gulp.watch(['src/js/**/*.js','!js/test/**/*.js','!./gulpfile.js'],['js']);
 	gulp.watch('src/sass/**/*.scss',['sass']);
 	gulp.watch('source/images/**/*',['images']);
 });

 // gulp.task('default',function(){
 // 	gulp.run('sprite');
 // });
