/**
 * GULP Config
 * @author Alex Carrega <contact@alexcarrega.com>
 * @license http://www.apache.org/licenses/LICENSE-2.0 Apache License, Version 2.0
 */

var axc_gulp = require('axc-gulp');
var __join = axc_gulp.plugin.path.join;

axc_gulp.config.set({
	title:				'AxC.DataManagement',
	path:					__join(__dirname, 'assets'),
	icon_notify:	__join(__dirname, 'assets/images/gulp/icon/notify.png')
});

axc_gulp.task
	// clean
	.clean({ src: ['dist/**', 'css/**', 'fonts/**'] })

	// axc-datamanagement
	.less2dist()
	.js2dist()
	.run({ taskName: 'axc-datamanagement', dependences: ['less2dist', 'js2dist'] })

	// default: all together
	.default(['axc-datamanagement']);