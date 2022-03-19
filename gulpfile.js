require("dotenv").config();
// GULP MODULES
const { src, dest, parallel, watch } = require("gulp");
const gulp = require("gulp");
const sass = require("gulp-sass");
const notify = require("gulp-notify");
const rename = require("gulp-rename");
const concat = require("gulp-concat");
const sourcemaps = require("gulp-sourcemaps");
const autoprefixer = require("gulp-autoprefixer");
var flatten = require("gulp-flatten");
const svgstore = require("gulp-svgstore");
const svgmin = require("gulp-svgmin");
const babel = require("gulp-babel");
const cheerio = require("gulp-cheerio");
const path = require("path");
const ftp = require("vinyl-ftp");

// https://babeljs.io/docs/en/babel-polyfill
// https://pxpx.co.uk/blog/article/compiling-es6-with-gulp-babel
// require("@babel/polyfill")
const BABEL_POLYFILL =
  "./node_modules/gulp-babel/node_modules/babel-core/browser-polyfill.js";
const CLIENT_BABEL_OPTS = { presets: ["env"] };
const JS_FILES = "./js/es6/*.js";

/*
 * JS COMPILATION
 * -------------------------------------------------------------------------- */
// function watch_all_js() {
  // JS PRINCIPAL DU THEME
  // watchJS("./assets/js/*.js", "./dist/js", "scripts.js");

  // JS LIBRAIRIES
  // watchJS("./libs/*/*.js", "./dist/js", "libs.js");

  // JS MODULES
  // watchJS("./modules/*/assets/*.js", "./dist/js", "modules.js");

  // JS ADMIN
  // Gérer par wp-scripts avec "npm run start"
  // watchJS("./assets/js/admin/admin.js", "./dist/js", "admin.js");

  // JS ADMIN TINYMCE
  // watchJS("./assets/js/admin/admin-tinymce.js", "./dist/js", "admin-tinymce.js");

  // JS ADMIN IMPORTS
  // watchJS("./assets/js/admin/admin-import.js", "./dist/js", "admin-import.js");

  // JS BLOCKS FOR ADMIN
  // watchJS("./gutenberg/acf-blocks/*/*.js", "./dist/js/blocks");
// }

// Fonction de compilation initiale de tous les JS
// async function init_all_js() {
//   // JS PRINCIPAL DU THEME
//   compileJS("./assets/js/*.js", "./dist/js", "scripts.js");

//   // JS LIBRAIRIES
//   compileJS("./libs/*/*.js", "./dist/js", "libs.js");

//   // JS MODULES
//   // compileJS("./modules/*/assets/*.js", "./dist/js", "modules.js");

//   // JS ADMIN
//   // Gérer par wp-scripts avec "npm run start"
//   // compileJS("./assets/js/admin/admin.js", "./dist/js", "admin.js");

//   // JS ADMIN TINYMCE
//   // watchJS("./assets/js/admin/admin-tinymce.js", "./dist/js", "admin-tinymce.js");

//   // JS ADMIN IMPORTS
//   // watchJS("./assets/js/admin/admin-import.js", "./dist/js", "admin-import.js");

//   // JS BLOCKS FOR ADMIN
//   compileJS("./gutenberg/acf-blocks/*/*.js", "./dist/js/blocks");
// }

// // Fonction de watch sur tous les JS
// function watchJS(pattern, outDest, outFile) {
//   const watcher = watch(pattern);

//   watcher.on("change", function(path) {
//     console.log("Modification de " + path);
//     compileJS(pattern, outDest, outFile);
//   });

//   watcher.on("add", function(path) {
//     console.log("Ajout de " + path);
//     compileJS(pattern, outDest, outFile);
//   });

//   watcher.on("unlink", function(path) {
//     console.log("Suppression de " + path);
//     compileJS(pattern, outDest, outFile);
//   });
// }

// Fonction de compilation de JS
// function compileJS(path, outDest, outFile = null) {
//   if (outFile) {
//     src(path)
//       .pipe(sourcemaps.init())
//       .pipe(babel({ presets: ["@babel/env"] }))
//       .pipe(concat(outFile))
//       .pipe(flatten())
//       .pipe(
//         notify({ title: "Compile JS", message: "Compilation de " + outFile })
//       )
//       .pipe(dest(outDest));
//   } else {
//     src(path)
//       .pipe(sourcemaps.init())
//       .pipe(babel({ presets: ["@babel/env"] }))
//       .pipe(flatten())
//       .pipe(notify({ title: "Compile JS", message: "Compilation de " + path }))
//       .pipe(dest(outDest));
//   }
// }

/*
 * CSS COMPILATION
 * -------------------------------------------------------------------------- */
// Chemins SCSS
var 
  // scssBlocksPattern = "./gutenberg/acf-blocks/**/*.scss",
  // scssLibsPattern = "./libs/**/*.scss",
  // scssModulesPattern = "./modules/**/assets/*.scss",
  scssBasePattern = "./assets/scss/",
  scssPattern = scssBasePattern + "*/*";

// Fonction de watch de tous les scss
function watch_all_scss() {
  // Watch du CSS principal
  watchSCSS(
    [
      scssBasePattern + "*/*", // Watch tous les scss des sous-dossiers de scss/
      scssBasePattern + "*/*/*", // Watch tous les scss des sous-sous-dossiers de scss/
      // scssBlocksPattern // Watch le dossier des blocks
    ],
    scssBasePattern + "styles.scss", // Fichier éxécuté
    "styles.min" // Fichier de destination
  );

  // Watch du CSS des librairies
  // watchSCSS(
  //   // [scssLibsPattern], // Watch tous les scss du dossier libs/
  //   // scssBasePattern + "libs.scss", // Fichier éxécuté
  //   // "libs.min" // Fichier de destination
  // );

  // Watch du CSS des modules
  // watchSCSS(
  //   [
      // scssModulesPattern, // Watch tous les scss du dossier modules/
      scssBasePattern + "mixins/*" // Watch sur les mixins
  //   ],
  //   scssBasePattern + "modules.scss", // Fichier éxécuté
  //   "modules.min" // Fichier de destination
  // );

  // Watch des différents CSS ADMIN
  // Admin global
  watchSCSS(
    [
      scssBasePattern + "variables/*", // Watch sur les variables
      scssBasePattern + "mixins/*" // Watch sur les mixins
    ],
    scssBasePattern + "admin.scss", // Fichier éxécuté
    "admin.min" // Fichier de destination
  );

  // Admin Editor : Blocks
  watchSCSS(
    [
      // scssBlocksPattern, // Watch sur les SCSS des sous-dossiers de gutenberg/acf-blocks/
      scssBasePattern + "variables/*", // Watch sur les variables
      scssBasePattern + "mixins/*", // Watch sur les mixins
      scssBasePattern + "layouts/basics.scss" // Watch spécifiquement le style des balises
    ],
    scssBasePattern + "admin-blocks.scss", // Fichier éxécuté
    "admin-blocks.min" // Fichier de destination
  );

  // Admin TinyMCE
  watchSCSS(
    [
      scssBasePattern + "variables/*", // Watch sur les variables
      scssBasePattern + "mixins/*", // Watch sur les mixins
      scssBasePattern + "layouts/basics.scss" // Watch spécifiquement le style des balises
    ],
    scssBasePattern + "admin-tinymce.scss", // Fichier éxécuté
    "admin-tinymce.min" // Fichier de destination
  );

  // Admin Imports
  watchSCSS(
    [],
    scssBasePattern + "admin-import.scss", // Fichier éxécuté
    "admin-import.min" // Fichier de destination
  );

  // Admin Login
  watchSCSS(
    [
      scssBasePattern + "variables/*", // Watch sur les variables
      scssBasePattern + "mixins/*" // Watch sur les mixins]
    ],
    scssBasePattern + "login.scss", // Fichier éxécuté
    "login.min" // Fichier de destination
  );
}

// Compile tous les fichiers CSS à l'initialisation
async function init_all_scss() {
  // Compilation du CSS principal
  compileSCSS(scssBasePattern + "styles.scss", "styles.min");

  // Compilation du CSS des librairies
  // compileSCSS(scssBasePattern + "libs.scss", "libs.min");

  // Compilation du CSS des modules
  // compileSCSS(scssBasePattern + "modules.scss", "modules.min");

  // Compilation des différents CSS ADMIN
  // Admin global
  compileSCSS(scssBasePattern + "admin.scss", "admin.min");

  // Admin Editor : Blocks
  compileSCSS(scssBasePattern + "admin-blocks.scss", "admin-blocks.min");

  // Admin TinyMCE
  compileSCSS(scssBasePattern + "admin-tinymce.scss", "admin-tinymce.min");

  // Admin Login
  compileSCSS(scssBasePattern + "login.scss", "login.min");
}

// Fonction de Watch conditionné
function watchSCSS(patterns, listenFile, outFile) {
  patterns.push(listenFile); // Inclut le fichier éxécuté dans le watcher
  const watcher = watch(patterns);

  watcher.on("change", function(path) {
    console.log("Modification de " + path);
    compileSCSS(listenFile, outFile);
  });

  watcher.on("add", function(path) {
    console.log("Ajout de " + path);
    compileSCSS(listenFile, outFile);
  });

  watcher.on("unlink", function(path) {
    console.log("Suppression de " + path);
    compileSCSS(listenFile, outFile);
  });
}

// Fonction de compilation d'un CSS
function compileSCSS(listenFile, outFile) {
  src(listenFile)
    .pipe(sourcemaps.init())
    .pipe(sass.sync({ outputStyle: "compressed" }).on("error", sass.logError))
    .pipe(rename(outFile + ".css"))
    .pipe(
      autoprefixer({ browsers: ["last 2 version", "> 1%"], cascade: false })
    )
    .pipe(
      notify({
        title: "Compile SCSS",
        message: "Compilation de " + outFile + ".css"
      })
    )
    .pipe(sourcemaps.write("."))
    .pipe(dest("dist/css/"));
}

/*
 * SVG COMPILATION
 * Crée le sprite de SVGs pour l'iconographie du thème
 * -------------------------------------------------------------------------- */
// var svgsAdminPattern = "./img/admin-icons/*.svg",
//   svgsPattern = "./img/icons/*.svg";

// Compile tous les fichiers SVGs à l'initialisation
// async function init_all_svgs() {
//   // Sprite SVG
//   svgStore(svgsPattern, "icons");

//   // Sprite SVG Admin
//   svgStore(svgsAdminPattern, "admin-icons");
// }

// function watch_all_svgs() {
//   // Sprite SVG
//   watchSVG(svgsPattern, "icons");

//   // Sprite SVG Admin
//   watchSVG(svgsAdminPattern, "admin-icons");
// }

// Fonction de watch sur tous les SVGs
// function watchSVG(pattern, outFile) {
//   const watcher = watch(pattern);

//   watcher.on("change", function(path) {
//     console.log("Modification de " + path);
//     svgStore(pattern, outFile);
//   });

//   watcher.on("add", function(path) {
//     console.log("Ajout de " + path);
//     svgStore(pattern, outFile);
//   });

//   watcher.on("unlink", function(path) {
//     console.log("Suppression de " + path);
//     svgStore(pattern, outFile);
//   });
// }

// function svgStore(pattern, outFile) {
//   src(pattern)
//     .pipe(
//       svgmin(function(file) {
//         var prefix = path.basename(file.relative, path.extname(file.relative));
//         return {
//           plugins: [
//             {
//               cleanupIDs: {
//                 prefix: prefix + "-",
//                 minify: true
//               }
//             }
//           ]
//         };
//       })
//     )
//     .pipe(svgstore({ inlineSvg: true }))
//     .pipe(
//       cheerio({
//         run: function($, file) {
//           $("svg").addClass("icons_hide");
//         },
//         parserOptions: { xmlMode: true }
//       })
//     )
//     .pipe(
//       notify({
//         title: "Compile SVG",
//         message: "Compilation de " + outFile + ".svg"
//       })
//     )
//     .pipe(rename(outFile + ".svg"))
//     .pipe(dest("img"));
// }

// -------------------------------------------------------------
// ---------------- AUTO SEND FILES TO FTP ---------------------
// -------------------------------------------------------------
async function watch_all_files_ftp() {
    watchAllFilesFtp("./**/*.*");
}

// Fonction de watch sur tous les fichiers pour le FTP
function watchAllFilesFtp(pattern) {
    const watcher = watch(pattern);

    watcher.on("change", function (path) {
        sendToFtp(path);
    });
}

function sendToFtp(file) {
    const remotePath = process.env.FTP_REMOTE_PATH;
    const connexion = ftp.create({
        host: process.env.FTP_HOST,
        user: process.env.FTP_LOGIN,
        password: process.env.FTP_PASSWORD,
        parallel: 10,
    });

    gulp.src(file, { base: ".", buffer: false })
        .pipe(connexion.newerOrDifferentSize(remotePath))
        .pipe(connexion.dest(remotePath))
        .pipe(
            notify({
                title: "Envoi de fichier",
                message: "Envoi FTP de " + file,
            })
        );
}

module.exports = {
  // default: parallel(watch_all_scss, watch_all_js, watch_all_svgs),
  default: parallel(watch_all_scss),
  init: parallel(
    init_all_scss,
    // init_all_js,
    // init_all_svgs,
    watch_all_scss,
    // watch_all_js,
    // watch_all_svgs
  ),
  autoftp: parallel(
    watch_all_scss,
    // watch_all_js,
    // watch_all_svgs,
    watch_all_files_ftp
    ),
};
