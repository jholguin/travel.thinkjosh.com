module.exports = {
	options: {
		browsers: ['last 2 versions', 'ie 8', 'ie 9']
	},
    dev: {
        expand: true,
        cwd: '<%= paths.dist %>/css',
        src: 'main.css',
        dest: '<%= paths.dist %>/css'
    }
};