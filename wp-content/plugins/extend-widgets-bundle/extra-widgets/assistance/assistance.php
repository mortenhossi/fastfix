<?php

/*
Widget Name: Assistance widget
Description: Assistance widget
*/

class AssistanceWidget extends SiteOrigin_Widget {

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
            'assistance-widget',
    
            // The name of the widget for display purposes.
            __('Assistance widget', 'Assistance widget'),
    
            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('Assistance widget.', 'Assistance widget'),
                'help'        => 'http://example.com/hello-world-widget-docs',
            ),
    
            //The $control_options array, which is passed through to WP_Widget
            array(
            ),
    
            //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
                'title' => array(
                    'type' => 'text',
                    'label' => 'Title',
                ),
                'background_image_or_not' => array(
                    'type' => 'select',
                    'label' => 'Background image or not',
                    'options' => array(
                        'yes' => 'Yes',
                        'no' => 'No',
                    ),
                    'state_emitter' => array(
                        'callback' => 'select',
                        'args' => array( 'background_image_or_not' )
                    ),
                ),
                'background_image' => array(
                    'type' => 'media',
                    'label' => 'Background image',
                    'choose' => 'Choose image',
                    'update' => 'Set image',
                    'library' => 'image',
                    'state_handler' => array(
                        'background_image_or_not[yes]' => array('show'),
                        'background_image_or_not[no]' => array('hide'),
                    ),
                ),
                'first_repeater' => array(
                    'type' => 'repeater',
                    'label' => 'First repeater',
                    'item_name'  => 'Repeater item',
                    'item_label' => array(
                        'selector'     => "[id*='text']",
                        'update_event' => 'change',
                        'value_method' => 'val'
                    ),
                    'fields' => array(
                        'text' => array(
                            'type' => 'text',
                            'label' => 'Text',
                        ),
                    ),
                ),
                'second_repeater' => array(
                    'type' => 'repeater',
                    'label' => 'Second repeater',
                    'item_name'  => 'Repeater item',
                    'item_label' => array(
                        'selector'     => "[id*='text']",
                        'update_event' => 'change',
                        'value_method' => 'val'
                    ),
                    'fields' => array(
                        'text' => array(
                            'type' => 'text',
                            'label' => 'Text',
                        ),
                    ),
                ),
                'third_repeater' => array(
                    'type' => 'repeater',
                    'label' => 'Third repeater',
                    'item_name'  => 'Repeater item',
                    'item_label' => array(
                        'selector'     => "[id*='text']",
                        'update_event' => 'change',
                        'value_method' => 'val'
                    ),
                    'fields' => array(
                        'text' => array(
                            'type' => 'text',
                            'label' => 'Text',
                        ),
                    ),
                ),
            ),
    
            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }
}

siteorigin_widget_register('assistance-widget', __FILE__, 'AssistanceWidget');