const themeDir = './';
const proxyUrl = 'http://localhost:8080';

module.exports = {
  cssnano: {
    "preset": [
      "cssnano-preset-advanced",
      {
        discardUnused: false, // Prevent removal of seemingly unused font-family
        reduceInitial: false, // Retain initial value optimizations
        "discardComments": {
          "removeAll": true
        }
      }
    ],
  },
  size: {
    gzip: true,
    uncompressed: true,
    pretty: true,
    showFiles: true,
    showTotal: false,
  },
  browsersync: {
    // Important! If src is wrong, styles will not inject to the browser
    src: [
      themeDir + '**/*.php',
      themeDir + 'css/**/*',
      themeDir + 'js/dev/**/*'
    ],
    opts: {
      logLevel: 'debug',
      injectChanges: true,
      proxy: proxyUrl,
      browser: 'Google Chrome',
      open: false,
      notify: true,
      https: {
        key: "/var/www/certs/localhost+3-key.pem",
        cert: "/var/www/certs/localhost+3.pem",
      }
    },
  },
  stylelint: {
    src: themeDir + 'sass/**/*.scss',
    opts: {
      fix: false,
      reporters: [{
        formatter: 'string',
        console: true,
        failAfterError: false,
        debug: false
      }]
    },
  },
  sass: {
    src: themeDir + 'sass/*.scss',
    dest: {
      development: themeDir + 'css/dev/',
      production: themeDir + 'css/prod/',
    },
    watch: {
      development: themeDir + 'sass/**/*.scss',
      production: themeDir + 'css/dev/*.css',
    },
    development: {
      charset: true,
      verbose: true,
      bundleExec: false,
      outputStyle: 'expanded',
      debugInfo: true,
      errLogToConsole: true,
      includePaths: [themeDir + 'node_modules/'],
      quietDeps: true,
    },
    production: {
      charset: true,
      verbose: false,
      bundleExec: false,
      outputStyle: 'compressed',
      debugInfo: false,
      errLogToConsole: false,
      includePaths: [themeDir + 'node_modules/'],
      quietDeps: true,
    }
  },
  js: {
    src: themeDir + 'js/src/*.js',
    watch: themeDir + 'js/src/**/*',
    production: themeDir + 'js/prod/',
    development: themeDir + 'js/dev/',
  },
  php: {
    watch: [
      themeDir + '*.php',
      themeDir + '*/**.php',
      themeDir + 'inc/**/*.php',
      themeDir + 'template-parts/**/*.php'
    ]
  },
  phpcs: {
    src: [themeDir + '**/*.php', '!' + themeDir + 'node_modules/**/*', '!' + themeDir + 'vendor/**/*'],
    opts: {
      bin: '/usr/local/bin/phpcs',
      standard: themeDir + 'phpcs.xml',
      warningSeverity: 0
    }
  }
};
