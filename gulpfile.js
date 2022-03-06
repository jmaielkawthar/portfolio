

const { src, dest, watch, series} = require('gulp');
const sass = require('gulp-sass')(require('sass')); // This is different from the video since gulp-sass no longer includes a default compiler. Install sass as a dev dependency `npm i -D sass` and change this line from the video.
const prefix = require('gulp-autoprefixer');
const minify = require('gulp-clean-css');
const terser = require('gulp-terser');
const imagemin = require('gulp-imagemin');
const imagewebp = require('gulp-webp');

//compile, prefix, and min scss
function compilescss() {
  return src('src/scss/*.scss') // change to your source directory
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
    'node_modules/bootstrap/dist/js/bootstrap.min.js',
    'src/js/main.js'
  ]) // change to your source directory
    .pipe(terser())
    .pipe(dest('dist/js')); // change to your final/public directory
}

//watchtask
function watchTask(){
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