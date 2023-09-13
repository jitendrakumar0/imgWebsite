/**
 * @license Copyright (c) 2003-2019, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
	config.font_names = 'Hindi/Kruti;' + config.font_names;
};

    CKEDITOR.addCss( "@font-face {" +
  "font-family: 'Hindi/Kruti';" +
  "font-style: normal;" +
  "font-weight: 400;" +
  "src: local('Lobster'), url(http://fonts.gstatic.com/s/lobster/v9/NIaFDq6p6eLpSvtV2DTNDQLUuEpTyoUstqEm5AMlJo4.woff) format('woff');" +
"}" );

CKEDITOR.replace( 'editor', {
    toolbarGroups: [
        { name: 'mode' },
        { name: 'basicstyles' },
        { name: 'styles' }
    ],
    on: {
        configLoaded: function() {
            this.config.font_names += ';Lobster';
        }
    }
} );