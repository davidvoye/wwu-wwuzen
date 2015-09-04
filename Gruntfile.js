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
    }
  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-compass');

  grunt.registerTask('default', ['uglify:development', 'compass:development']);
  grunt.registerTask('build', ['uglify:production', 'compass:production']);

};
