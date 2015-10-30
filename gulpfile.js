var gulp         = require('gulp'),
    autoprefixer = require('gulp-autoprefixer'),
    concatJs     = require('gulp-concat'),
    concatCss    = require('gulp-concat-css'),
    CleanCSS     = require('clean-css'),
    map          = require('vinyl-map'),
    sass         = require('gulp-sass'),
    uglify       = require('gulp-uglify'),
    gutil        = require('gulp-util');

var paths = {
  sass: {
    entry: './sources/stylesheets/components.sass',
    dest: '../assets/css/'
  },
  js: {
    entry: './sources/js/*.js',
    dest: '../assets/js/min/'
  },
  watch: {
    css: './sources/stylesheets/*.css',
    sass: './sources/stylesheets/**/*.sass',
    js: './sources/js/*.js'
  }
}

var err = new gutil.PluginError('test', {
message: 'something broke'
});

gulp.task('default', ['run:developing'])

gulp.task('sass:compile', function () {
  var minify = map(function (buff, filename) {
    return new CleanCSS({
    }).minify(buff.toString()).styles;
  });

  return gulp.src(paths.sass.entry)
    .pipe(sass({optionStyle: "compressed"}).on('error', sass.logError))
    .pipe(concatCss('styles.css'))
    .pipe(autoprefixer({
      cascade: true
    }))
    .pipe(minify)
    .pipe(gulp.dest(paths.sass.dest));
});

gulp.task('minify:js', function(){
  return gulp.src(paths.js.entry)
    .pipe(uglify())
    .pipe(concatJs('app.js'))
    .pipe(gulp.dest(paths.js.dest));
});

gulp.task('run:developing', function () {
  gulp.watch(paths.watch.sass, ['sass:compile']);
  gulp.watch(paths.watch.css, ['sass:compile']);
  gulp.watch(paths.watch.js, ['minify:js']);

  gutil.log(
    ' \n\n ',
    gutil.colors.yellow('\n Listen all sass files in '+ paths.watch.sass),
    gutil.colors.yellow('\n Listen all css files in '+ paths.watch.css),
    gutil.colors.yellow('\n Listen all js files in '+ paths.watch.js),
    gutil.colors.green('\n all is ready, have fun !'),
    '\n\n',
    gutil.colors.blue('\n destino : ' + paths.sass.dest),
    gutil.colors.blue('\n destino : ' + paths.js.dest),
    ' \n\n '
  );

});
