// Récupération des dépendances
const gulp = require("gulp");
const sass = require("gulp-sass")(require('sass'));
const browserSync = require("browser-sync").create();
const sourcemaps = require('gulp-sourcemaps');


function style(){
  // où se trouve le dossier scss
  return gulp.src('./assets/scss/**/*.scss')
  // initialisation mapping
  .pipe(sourcemaps.init())
  // on passe le dossier dans le precompileur
  .pipe(sass())
  .pipe(sourcemaps.write({includeContent: false}))
  .pipe(sourcemaps.init({loadMaps: true}))
  .pipe(sourcemaps.write('.'))
  // la destination
  .pipe(gulp.dest('./css'))
  // je ne suis pas encore sur de l'utilité... mais bon!
  .pipe(browserSync.stream());
}

 function watch(){
   browserSync.init({
    proxy: 'http://trail-chantenay.local'
   });
   gulp.watch('./assets/scss/**/*.scss',style);
 }


exports.style = style;
exports.watch = watch;