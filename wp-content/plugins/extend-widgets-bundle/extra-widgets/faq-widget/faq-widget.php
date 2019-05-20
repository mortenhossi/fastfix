<?php

/*
Widget Name: FAQ widget
Description: FAQ widget
*/

class FAQWidget extends SiteOrigin_Widget {

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
            'faq-widget',
    
            // The name of the widget for display purposes.
            __('FAQ widget', 'FAQ widget'),
    
            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('FAQ widget.', 'FAQ widget'),
            ),
    
            //The $control_options array, which is passed through to WP_Widget
            array(
            ),
    
            //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
               'faq_repeater' => array(
                   'type' => 'repeater',
                   'label' => 'FAQ repeater',
                   'item_name'  => 'Repeater item',
                    'item_label' => array(
                        'selector'     => "[id*='title']",
                        'update_event' => 'change',
                        'value_method' => 'val',
                    ),
                    'fields' => array(
                        'title' => array(
                            'type' => 'text',
                            'label' => 'Title',
                        ),
                        'content' => array(
                            'type' => 'textarea',
                            'label' => 'Content',
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

siteorigin_widget_register('faq-widget', __FILE__, 'FAQWidget');