/**
 * @license Copyright (c) 2003-2021, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.removePlugins = 'exportpdf,image';

	// mathjax:
	config.extraPlugins = 'mathjax';
	config.mathJaxClass = 'katex';
	config.mathJaxLib = 'http:\/\/localhost\/CMS-Blog-Laravel-8\/public\/vendor\/MathJax-2.7.9\/MathJax.js?config=TeX-AMS_HTML';

	config.extraPlugins = 'lineutils';
	config.extraPlugins = 'clipboard';
	config.extraPlugins = 'dialog';
	config.extraPlugins = 'dialogui';
	config.extraPlugins = 'notification';	
	config.extraPlugins = 'widget';
	config.extraPlugins = 'image2';

	config.language = 'es-mx';
	config.uiColor = '#9E9E9E';
	config.height = "60rem";
	config.toolbarCanCollapse = true;

	config.toolbarGroups = [
		{ name: 'document', groups: [ 'mode', 'document', 'doctools' ] },
		{ name: 'clipboard', groups: [ 'clipboard', 'undo' ] },
		{ name: 'editing', groups: [ 'find', 'selection', 'spellchecker', 'editing' ] },
		{ name: 'forms', groups: [ 'forms' ] },
		{ name: 'about', groups: [ 'about' ] },
		{ name: 'tools', groups: [ 'tools' ] },
		{ name: 'others', groups: [ 'others' ] },
		'/',
		{ name: 'styles', groups: [ 'styles' ] },
		{ name: 'colors', groups: [ 'colors' ] },
		{ name: 'basicstyles', groups: [ 'basicstyles', 'cleanup' ] },
		{ name: 'paragraph', groups: [ 'list', 'indent', 'blocks', 'align', 'bidi', 'paragraph' ] },
		{ name: 'links', groups: [ 'links' ] },
		{ name: 'insert', groups: [ 'insert' ] },

	];

	config.removeButtons = 'ExportPdf,NewPage,Paste,PasteText,PasteFromWord,Form,Checkbox,Radio,TextField,Textarea,Select,Button,ImageButton,HiddenField,Subscript,Superscript,Blockquote,CreateDiv,TextColor,BGColor,Styles,Font,FontSize,Smiley,Iframe,PageBreak,Table,Flash,Anchor,Templates';

};
