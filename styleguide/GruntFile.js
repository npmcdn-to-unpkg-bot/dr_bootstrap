module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // Sass
    sass: {                              // Task
      dist: {                            // Target
        options: {                       // Target options
          style: 'expanded'
        },
        files: {                         // Dictionary of files
          'docs.css': 'docs.scss',       // 'destination': 'source'
          '../bootstrap/assets/stylesheets/_bootstrap.css': '../bootstrap/assets/stylesheets/_bootstrap.scss'
        }
      }
    },
    prettify: {
      options: {
        config: '.prettifyrc'
      },
      files: {
        './index.php': ['./index.php']
      }
    },

    // Autocompiles and adds LiveReload Support
    watch: {
      options: {
        livereload: true
      },
      css: {
        files: '**/*.scss',
        tasks: ['scss', 'prettify']
      }
    }
  });

  // Grunt Tasks
  grunt.loadNpmTasks('grunt-contrib-sass');
  grunt.loadNpmTasks('grunt-prettify');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default',['watch']);
}