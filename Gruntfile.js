module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    watch: {
        options: {
          livereload: true,
        },
        scss: {
          files: ['css/syle.scss', 'css/**/*.scss'],
          tasks: ['sass:dev']
        },
        configFiles: {
          files: [ 'Gruntfile.js'],
          options: {
            reload: true
          }
        }
      },

    sass: {
      dev: {                             
          options: {
            style: 'expanded',                       
            sourcemap: true
          },
          files: {                         // Dictionary of files
            'style.css': 'styles.scss'       // 'destination': 'source'
          }
      },
      prod: {                             // Task
          options: {                       // Target options
            style: 'compressed'
          },
          files: {                         // Dictionary of files
            'style.css': 'styles.scss'       // 'destination': 'source'
          }
      }    
    },
      
  });

  // Load Grunt plugins and tasksdifferent tasks. Each task has its own row.
  //grunt.loadNpmTasks('');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass');  


  //Custom tasks will be run with grunt 'TaksName' on the commandline

  // Default task(s).
  //grunt.registerTask('default');

  grunt.registerTask('test', ['sass:dev', 'watch']);

  grunt.registerTask('deploy', ['sass:prod']);
};