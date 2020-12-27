const gulp = require("gulp");
const sass = require("gulp-sass");
const concat = require("gulp-concat");
const debug = require("gulp-debug");
const rename = require("gulp-rename");
const del = require("del");
const sassUnicode = require("gulp-sass-unicode");
const sourcemaps = require("gulp-sourcemaps");
const gulpif = require("gulp-if");
const terser = require("gulp-terser");

var buildDir = "public/assets";
var assetsDir = "resources/assets";

// Arquivos sass
var scssFiles = assetsDir + "/sass/app.scss";
var scssAdminFiles = assetsDir + "/sass/admin.scss";
var scssVendorFiles = assetsDir + "/sass/vendor.scss";

var scssWatchFiles = [
	assetsDir + "/sass/**/*.scss"
];

// Arquivos JS do site
var jsFiles = [
	assetsDir + '/js/*.js',
	assetsDir + '/js/*/*.js'
];

// Arquivos JS do painel administrativo
var jsAdminFiles = [
];

//Arquivos externos js
var vendorJsFiles = [
	"node_modules/jquery/dist/jquery.js",
	"node_modules/popper.js/dist/umd/popper.min.js",
	"node_modules/bootstrap/dist/js/bootstrap.js",
	"node_modules/parsleyjs/dist/parsley.js",
	"node_modules/parsleyjs/dist/i18n/pt-br.js",
	"node_modules/bootbox/bootbox.min.js",
	"node_modules/jquery-mask-plugin/dist/jquery.mask.js",
	"node_modules/moment/moment.js",
	"node_modules/moment/locale/pt-br.js",
	"node_modules/autosize/dist/autosize.min.js",
	"node_modules/swiper/js/swiper.min.js",
	"node_modules/masonry-layout/dist/masonry.pkgd.min.js",
	"node_modules/@fancyapps/fancybox/dist/jquery.fancybox.min.js",
];

/**
 * Concatena os arquivos sass, converte e comprime em css
 * @param env
 * @returns
 */
function sass2Css(files, outputName, env = "dev") {

	var sassConfig = {
		outputStyle: env == "prod" ? "compressed" : "expanded"
	};

	return gulp.src(files)
	.pipe(debug({ title: "css-debug" }))
	.pipe(gulpif(env == "dev", sourcemaps.init()))
	.pipe(concat(outputName + ".scss"))
	.pipe(sass(sassConfig).on("error", sass.logError))
	.pipe(sassUnicode())
	.pipe(rename(outputName + ".min.css"))
	.pipe(gulpif(env == "dev", sourcemaps.write()))
	.pipe(gulp.dest(buildDir + "/css"));
}

/**
 * Gera os arquivos css em desenvolvimento
 * @returns
 */
function cssDev() {
	return sass2Css(scssFiles, "styles");
}

function cssDevAdmin() {
	return sass2Css(scssAdminFiles, "admin");
}

function cssDevVendor() {
	return sass2Css(scssVendorFiles, "vendor");
}

/**
 * Gera os arquivos css em produção
 * @returns
 */
function cssProd() {
	return sass2Css(scssFiles, "styles", "prod");
}

function cssProdAdmin() {
	return sass2Css(scssAdminFiles, "admin", "prod");
}

function cssProdVendor() {
	return sass2Css(scssVendorFiles, "vendor", "prod");
}

/**
 * Concatena os arquivos js e comprime em js
 * @param env
 * @returns
 */
function js2Mimify(files, outputName, env = "dev") {

	var obj = gulp.src(files)
	.pipe(debug({ title: "js-debug" }))
	.pipe(concat(outputName + ".js"));

	if (env == "prod") {
		obj.pipe(terser());
	}

	return obj.pipe(rename(outputName + ".min.js"))
	.pipe(gulp.dest(buildDir + "/js"));
}

/**
 * Gera os arquivos js em desenvolvimento
 * @returns
 */
function jsDev() {
	return js2Mimify(jsFiles, "scripts");
}

/**
 * Gera os arquivos js em produção
 * @returns
 */
function jsProd() {
	return js2Mimify(jsFiles, "scripts", "prod");
}

/**
 * Gera os arquivos js em desenvolvimento
 * @returns
 */
function jsDevAdmin() {
	return js2Mimify(jsAdminFiles, "admin");
}

/**
 * Gera os arquivos js em produção
 * @returns
 */
function jsProdAdmin() {
	return js2Mimify(jsAdminFiles, "admin", "prod");
}

/**
 * Gera os arquivos js vendor em desenvolvimento
 * @returns
 */
function vendorJsDev() {
	return js2Mimify(vendorJsFiles, "vendor");
}

/**
 * Gera os arquivos js vendor em produção
 * @returns
 */
function vendorJsProd() {
	return js2Mimify(vendorJsFiles, "vendor", "prod");
}

/**
 * Limpa o diretório de build
 * @returns
 */
function cleanBuild() {
	return del([buildDir]);
}

/**
 * Copia as imagens da aplicação
 * @returns
 */
function images() {
	return gulp.src("img/**/*", { cwd: assetsDir }).pipe(gulp.dest("public/assets/img"));
}

/**
 * Copia as fontes de aplicação
 * @returns
 */
function fonts() {

	return (
		gulp.src("fonts/**/*", { cwd: assetsDir }).pipe(gulp.dest("public/assets/fonts")) &&
		gulp.src("node_modules/@fortawesome/fontawesome-free/webfonts/*").pipe(gulp.dest("public/assets/webfonts"))
	);
}

/**
 * Monitora a alteração e realiza a publicação dos arquivos
 * @returns
 */
function watch() {
	gulp.watch(scssWatchFiles, cssDev);
	//gulp.watch(scssWatchFiles, cssDevAdmin);
	gulp.watch(jsFiles, jsDev);
	gulp.watch(jsAdminFiles, jsDevAdmin);
}

/**
 * Tasks
 */
gulp.task("clean", gulp.series(cleanBuild));
//gulp.task("build", gulp.series(cleanBuild, jsProd, cssProd, cssProdAdmin, cssProdVendor, jsProdAdmin, vendorJsProd, images, fonts));
gulp.task("build", gulp.series(cleanBuild, jsProd, cssProd, cssProdVendor, vendorJsProd, images, fonts));
//gulp.task("default", gulp.series(cleanBuild, jsDev, cssDev, cssDevAdmin, cssDevVendor, jsDevAdmin, vendorJsDev, images, fonts));
gulp.task("default", gulp.series(cleanBuild, jsDev, cssDev, cssDevVendor, vendorJsDev, images, fonts));
gulp.task("watch", gulp.series("default", watch));