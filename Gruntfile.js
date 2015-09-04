module.exports = function(grunt) {

  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),
    uglify: {
      options: {
        mangle: {
          except: ['jQuery', 'Drupal', 'Western']
        }
      },
      production: {
        files: [{
          expand: true,
          cwd: 'src/js',
          src: '**/*.js',
          dest: 'js',
          ext: '.min.js'
        }]
      },
      development: {
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
      production: {
        options: {
          config: 'config.rb',
          bundleExec: true,
          environment: 'production'
        }
      },
      development: {
        options: {
          config: 'config.rb',
          bundleExec: true,
          environment: 'development'
        }
      }
    }
  });

  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-compass');

  grunt.registerTask('default', ['uglify:development', 'compass:development']);
  grunt.registerTask('build', ['uglify:production', 'compass:production']);

};
