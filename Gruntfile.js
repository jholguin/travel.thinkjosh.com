'use strict';

module.exports = function (grunt) {
	var base = 'app';

	// Load grunt tasks automagically.
	require('load-grunt-config')(grunt, {
		data: {
			paths: {
				src: 'assets',
				dist: base + '/assets'
			}
		}
	});
};