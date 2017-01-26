<?php
    if ( !defined( 'QA_VERSION' ) ) { // don't allow this page to be requested directly from browser
        header( 'Location: ../../' );
        exit;
    }

    if ( !class_exists( 'Donut_Option_Keys' ) ) {

        /**
         * Class contains the defaults options key-value pairs
         */
        class Donut_Option_Keys
        {
            const THEME_VERSION = 'donut_theme_ver';
            const INSTALLED_THEME_VERSION = 'donut_theme_ver_instaled';
            const CDN_ENABLED = 'donut_cdn_active';
            const BS_CSS_CDN = '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css';
            const BS_THEME_CSS_CDN = '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css';
            const FA_CDN = '//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css';
            const BS_JS_CDN = '//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js';
        }
    }
