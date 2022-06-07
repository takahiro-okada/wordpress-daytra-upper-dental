const gulp = require("gulp")
const sass = require("gulp-sass")(require("sass"))
const postcss = require("gulp-postcss")
const autoprefixer = require("autoprefixer")
const cssSorter = require("css-declaration-sorter")
const mmq = require("gulp-merge-media-queries")

const browserSync = require("browser-sync")
const htmlBeautify = require("gulp-html-beautify")
const jsConcat = require("gulp-concat")

const compileSass = () => {
  return gulp.src("./src/scss/*.scss")
  .pipe(sass())
  .pipe(postcss([autoprefixer(),cssSorter({
    order: "alphabetical"
  })]))
  .pipe(mmq())
  .pipe(gulp.dest("../dist/css"))
}

const compileJs = () => {
  return gulp.src("./src/js/**/*.js")
  .pipe(jsConcat("main.js"))
  .pipe(gulp.dest("../dist/js"))
}

const watch = () => {
  gulp.watch("./src/scss/**/*.scss",gulp.series(compileSass,browserReload))
  gulp.watch("./src/js/**/*.js",gulp.series(compileJs,browserReload))
  gulp.watch("./src/img/**/*",gulp.series(copyImage,browserReload))
  gulp.watch("../**/*.php",browserReload)
}

const buildServer = (done) => {
  browserSync.init({
    proxy: "http://localhost:10018/"
  })
  done();
}

const browserReload = (done) =>{
  browserSync.reload();
  done();
}

const copyImage = () => {
  return gulp.src("./src/img/**/*")
  .pipe(gulp.dest("../dist/img/"))
}

const copyFont = () => {
  return gulp.src("./src/font/**/*")
  .pipe(gulp.dest("../dist/font/"))
}


exports.compileSass = compileSass;
exports.watch = watch;
exports.dev = gulp.parallel(buildServer,watch)
exports.build = gulp.parallel(compileSass,compileJs,copyImage,copyFont)
