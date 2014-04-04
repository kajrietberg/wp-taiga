module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    watch: {
        options: {
          livereload: true,
        },
        livereload: {
          files: [ '*.html', '*.php' ],
        },
        scss: {
          files: ['styles.scss', 'css/**/*.scss'],
          tasks: ['sass:dev', 'notify:sass']
        },
        images: {
          files: ['images/*.{png,jpg,gif}'],
          tasks: ['imageoptim']
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

    concat: {
      dist: {
        src: [
        'scripts/one.js', // js file
        'scripts/two.js', // js file nr 2
        ],
        dest: 'scripts/interface.js',
      }
    },

    uglify: {
          build: {
            src: 'scripts/interface.js',
            dest: 'scripts/script.min.js'
          }
        },

    makepot: {
        target: {
            options: {
                cwd: '',
                domainPath: 'languages',
                type: 'wp-theme'
            }
        }
    },
    
    notify: {
      makepot: {
        options: {
          title: 'POT Complete',  // optional
          message: 'POT is made', //required
        }
      }, 
      sass: {
        options: {
          title: 'Sass Task',  // optional
          message: 'Sass live compiled!!!', //required
        }
      },
      done: {
        options: {
          title: 'Deploy Complete', // optional
          message: 'Everything deployed', //required
        }
      } 
    },

    imageoptim: {
      myPngs: {
        options: {
          jpegMini: false,
          imageAlpha: true,
          quitAfter: true
        },
        src: ['images/**/*.png']
      },
      myJpgs: {
        options: {
          jpegMini: true,
          imageAlpha: false,
          quitAfter: true
        },
        src: ['images/**/*.jpg']
      }
    },

  });

  // Load Grunt plugins and tasksdifferent tasks. Each task has its own row.
  //grunt.loadNpmTasks('');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-sass'); 
  grunt.loadNpmTasks('grunt-wp-i18n');
  grunt.loadNpmTasks('grunt-notify');
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-imageoptim');

  //Custom tasks will be run with grunt 'TaksName' on the commandline

  // Default task(s).
  //grunt.registerTask('default');
  grunt.registerTask('pot', ['makepot', 'notify:makepot']);
  
  grunt.registerTask('test', ['sass:dev', 'watch', 'notify:watch']);

  grunt.registerTask('deploy', ['sass:prod', 'imageoptim', 'concat', 'uglify', 'notify:done']);
};