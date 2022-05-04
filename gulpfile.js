

const { src, dest, watch, series } = require('gulp');
const  connect = require('gulp-connect-php');
const browserSync = require('browser-sync');
const sass = require('gulp-sass')(require('sass')); // This is different from the video since gulp-sass no longer includes a default compiler. Install sass as a dev dependency `npm i -D sass` and change this line from the video.
const prefix = require('gulp-autoprefixer');
const minify = require('gulp-clean-css');
//const terser = require('gulp-terser');
const uglify = require('gulp-uglify');
const concat = require('gulp-concat');
const imagemin = require('gulp-imagemin');
const imagewebp = require('gulp-webp');
const rename = require('gulp-rename');

//compile, prefix, and min scss
function compilescss() {
  return src('src/scss/main.scss') // change to your source directory
    .pipe(sass())
    .pipe(prefix('last 2 versions'))
    .pipe(minify())
    .pipe(dest('dist/css')) // change to your final/public directory
};

//optimize and move images
function optimizeimg() {
  return src('src/images/*.{jpg,png}') // change to your source directory
    .pipe(imagemin([
      imagemin.mozjpeg({ quality: 80, progressive: true }),
      imagemin.optipng({ optimizationLevel: 2 }),
    ]))
    .pipe(dest('dist/images')) // change to your final/public directory
};

//optimize and move images
function webpImage() {
  return src('dist/images/*.{jpg,png}') // change to your source directory
    .pipe(imagewebp())
    .pipe(dest('dist/images')) // change to your final/public directory
};


// minify js
function jsmin(){
  return src([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    //'node_modules/bootstrap/dist/js/bootstrap.bundle.js',
    'node_modules/slick-carousel/slick/slick.js',
   // 'node_modules/masonry-layout/dist/masonry.pkgd.min.js',
   // 'node_modules/@fancyapps/fancybox/dist/jquery.fancybox.js',
    'src/js/main.js',
  ]) // change to your source directory

    // .pipe(concat('main.js'))
    // .pipe(dest('src/js'))
    .pipe(rename('main.min.js'))
    .pipe(uglify())
    .pipe(dest('dist/js')); // change to your final/public directory
    done();
}

//watchtask
function watchTask(){
  connect.server({
    // base: './Templates/'
  }, function () {
    browserSync({
        proxy: '127.0.0.1:8000'
    });
});
  watch('src/scss/**/*.scss', compilescss); // change to your source directory
  watch('src/js/*.js', jsmin); // change to your source directory
  watch('src/images/*', optimizeimg); // change to your source directory
  watch('dist/images/*.{jpg,png}', webpImage); // change to your source directory
}


// Default Gulp task 
exports.default = series(
  compilescss,
  jsmin,
  optimizeimg,
  webpImage,
  watchTask
);