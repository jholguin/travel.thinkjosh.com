module.exports = {
    gruntfile: {
        files: ['Gruntfile.js']
    },
    sass: {
    	files: [ '<%= paths.src %>/scss/**/*.scss' ],
        tasks: ['build-css']
    }
}