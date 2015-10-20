module.exports = function(grunt) {

  var mozjpeg = require('imagemin-mozjpeg');

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    clean: {
      js: 'js',
      css: 'css',
      images: 'images',
      sass_cache: '.sass-cache'
    },
    watch: {
      sass: {
        files: 'src/sass/**/*.scss',
        tasks: ['newer:imagemin', 'compass:development']
      },
      js: {
        files: 'src/js/**/*.js',
        tasks: ['newer:uglify:development', 'newer:jshint:development']
      },
      images: {
        files: 'src/images/**/*.{png,gif,jpg,jpeg}',
        tasks: ['newer:imagemin']
      }
    },
    uglify: {
      production: {
        options: {
          compress: true,
          mangle: {
            except: ['jQuery', 'Drupal', 'Western']
          }
        },
        files: [{
          expand: true,
          cwd: 'src/js',
          src: '**/*.js',
          dest: 'js',
          ext: '.min.js'
        }]
      },
      development: {
        options: {
          mangle: false,
          compress: false,
          beautify: {
            beautify: true,
            indent_level: 2
          },
          preserveComments: 'all'
        },
        files: [{
          expand: true,
          cwd: 'src/js',
          src: '**/*.js',
          dest: 'js',
          ext: '.min.js'
        }]
      }
    },
    compass: {
      options: {
        config: 'config.rb',
        bundleExec: true
      },
      production: {
        options: {
          environment: 'production',
          outputStyle: 'compressed',
          force: true
        }
      },
      development: {
        options: {
          environment: 'development',
          outputStyle: 'expanded',
          force: false
        }
      }
    },
    jshint: {
      options: {
        curly: true,
        freeze: true,
        undef: true,
        unused: true,
        browser: true,
        devel: true,
        jquery: true,
        node: true,
        globals: {
          jQuery: true,
          Drupal: true,
          Western: true
        },
      },
      development: {
        files: {
          src: ['Gruntfile.js', 'src/js/**/*.js']
        },
        options: {
          force: true
        }
      }
    },
    imagemin: {
      options: {
        optimizationLevel: 3,
        svgoPlugins: [{
          removeViewBox: false
        }],
        progressive: true,
        interlaced: true,
        use: [mozjpeg()]
      },
      static: {
        files: [
          {
            src: 'screenshot.png',
            dest: 'screenshot.png'
          },
          {
            src: 'logo.png',
            dest: 'logo.png'
          },
        ],
      },
      dynamic: {
        files: [{
          expand: true,
          cwd: 'src/images',
          src: ['**/*.{png,gif,jpg,jpeg}'],
          dest: 'images',
        }],
      },
    },
  });

  grunt.loadNpmTasks('grunt-contrib-clean');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-imagemin');
  grunt.loadNpmTasks('grunt-contrib-jshint');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-newer');

  grunt.registerTask('default', [
    'newer:jshint:development',
    'newer:uglify:development',
    'newer:imagemin',
    'compass:development'
  ]);

  grunt.registerTask('build', [
    'newer:uglify:production',
    'newer:imagemin',
    'compass:production'
  ]);

};
