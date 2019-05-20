<?php

/*
Widget Name: Cover widget
Description: Cover widget
*/

class CoverWidget extends SiteOrigin_Widget {

    function get_template_name($instance) {
        return 'template';
    }

    function get_style_name($instance) {
        return '';
    }

    function __construct() {
        //Here you can do any preparation required before calling the parent constructor, such as including additional files or initializing variables.
    
        //Call the parent constructor with the required arguments.
        parent::__construct(
            // The unique id for your widget.
            'cover-widget',
    
            // The name of the widget for display purposes.
            __('Cover widget', 'Cover widget'),
    
            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('Cover widget.', 'Cover widget'),
                'help'        => 'http://example.com/hello-world-widget-docs',
            ),
    
            //The $control_options array, which is passed through to WP_Widget
            array(
            ),
    
            //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
                'text' => array(
                    'type' => 'text',
                    'label' => 'Headline'
                ),
                'subline' => array(
                    'type' => 'text',
                    'label' => 'Subline'
                ),
                'image' => array(
                    'type' => 'media',
                    'label' => 'Background image',
                    'choose' => 'Choose image',
                    'update' => 'Set image',
                    'library' => 'image',
                ),
            ),
    
            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }
}

siteorigin_widget_register('cover-widget', __FILE__, 'CoverWidget');