<?php

/*
Widget Name: Features widget
Description: Features widget
*/

class FeaturesWidget extends SiteOrigin_Widget {

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
            'features-widget',
    
            // The name of the widget for display purposes.
            __('Features widget', 'Features widget'),
    
            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('Features widget.', 'Features widget'),
                'help'        => 'http://example.com/hello-world-widget-docs',
            ),
    
            //The $control_options array, which is passed through to WP_Widget
            array(
            ),
    
            //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
               'title' => array(
                   'type' => 'text',
                   'label' => 'Title'
               ),
               'margin_top' => array(
                    'type' => 'checkbox',
                    'label' => 'Margin?',
                    'default' => false,
                ),
               'feature_repeater' => array(
                   'type' => 'repeater',
                   'label' => 'Features Repeater',
                   'item_name' => 'Repeater item',
                   'item_label' => array(
                        'selector'     => "[id*='feature_title']",
                        'update_event' => 'change',
                        'value_method' => 'val'
                    ),
                    'fields' => array(
                        'feature_title' => array(
                            'type' => 'text',
                            'label' => 'Title',
                        ),
                        'feature_icon' => array(
                            'type' => 'media',
                            'label' => 'Choose icon',
                            'choose' => 'Choose icon',
                            'update' => 'Update icon',
                            'libary' => 'image',
                        ),
                        'feature_text' => array(
                            'type' => 'textarea',
                            'label' => 'Text',
                            'rows' => 5,
                        ),
                    ),
               ),
            ),
    
            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }
}

siteorigin_widget_register('features-widget', __FILE__, 'FeaturesWidget');