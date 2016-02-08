module.exports = function(grunt) {
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    // Sass
    less: {
      production: {
        options: {
          paths: ["css"]
        },
        files: {
          "css/global.css": "css/less/global.less"
        }
      }
    },

    // Autocompiles and adds LiveReload Support
    watch: {
      options: {
        livereload: true
      },
      css: {
        files: '**/*.less',
        tasks: ['less']
      }
    }
  });

  // Grunt Tasks
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.registerTask('default',['watch']);
}