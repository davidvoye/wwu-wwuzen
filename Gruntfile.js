module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
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
          outputStyle: 'expanded'
        }
      }
    },
    imagemin: {
      options: {
        optimizationLevel: 3,
        svgoPlugins: [{ removeViewBox: false }],
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

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-compass');
  grunt.loadNpmTasks('grunt-contrib-imagemin');

  grunt.registerTask('default', ['uglify:development', 'compass:development', 'imagemin']);
  grunt.registerTask('build', ['uglify:production', 'compass:production', 'imagemin']);

};
