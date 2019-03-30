/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
    // config.uiColor = '#AADC6E';
    config.resize_enabled = false;
    config.toolbarGroups = [
  

    
     
     '/',
     { name: 'basicstyles', groups: ['basicstyles', 'cleanup'] },
     { name: 'paragraph', groups: ['list', 'indent', 'align', 'bidi'] },
     { name: 'styles' },
     { name: 'colors' },

    ];
};
