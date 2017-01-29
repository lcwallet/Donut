<?php
    
    if ( !defined( 'QA_VERSION' ) ) { // don't allow this page to be requested directly from browser
        header( 'Location: ../../' );
        exit;
    }


    /**
     * 
     * @param  [type] $prefix     [description]
     * @param  [type] $identifier [description]
     * @param  [type] $subs       [description]
     * @return [type]             [description]
     */
    function donut_lang_util( $prefix, $identifier, $subs = null )
    {
        if ( !is_array( $subs ) )
            return empty( $subs ) ? qa_lang( $prefix . $identifier ) : qa_lang_sub( $prefix . $identifier, $subs );
        else
            return strtr( qa_lang( $prefix . $identifier ), $subs );
    }


    /**
     * Returns the language value as defined in lang/donut-lang-*.php
     *
     * @param      $identifier
     * @param null $subs
     *
     * @return string
     */
    function donut_lang( $identifier, $subs = null )
    {
        return donut_lang_util('donut/', $identifier, $subs);
    }

    /**
     * Returns the language value as defined in lang/donut-lang-*.php
     * 
     * @param      $identifier
     * @param null $subs
     *
     * @return string
     */
    function donut_lang_html( $identifier, $subs = null )
    {
        return qa_html( donut_lang( $identifier, $subs ) );
    }

    /**
     * Returns the language value as defined in lang/donut-options-lang-*.php
     *
     * @param      $identifier
     * @param null $subs
     *
     * @return mixed|string
     */
    function donut_options_lang( $identifier, $subs = null )
    {
        return donut_lang_util('donut_options/', $identifier, $subs);
    }

    /**
     * 
     * @param  [type] $identifier [description]
     * @param  [type] $subs       [description]
     * @return [type]             [description]
     */
    function donut_options_lang_html( $identifier, $subs = null )
    {
        return qa_html( donut_options_lang( $identifier, $subs ) );
    }

    /**
     * 
     * @param  boolean $absolute [description]
     * @return [type]            [description]
     */
    function donut_admin_plugin_folder( $absolute = false )
    {
        $path = basename( QA_PLUGIN_DIR ) . DIRECTORY_SEPARATOR . DONUT_ADMIN_PLUGIN_FOLDER;

        return $absolute ? ( QA_BASE_DIR . $path ) : $path;
    }

    /*
        Omit PHP closing tag to help avoid accidental output
    */