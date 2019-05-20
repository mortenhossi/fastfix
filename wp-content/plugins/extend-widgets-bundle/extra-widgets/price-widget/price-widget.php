<?php

/*
Widget Name: Price widget
Description: Price widget
*/

class PriceWidget extends SiteOrigin_Widget {

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
            'price-widget',
    
            // The name of the widget for display purposes.
            __('Price widget', 'Price widget'),
    
            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('Price widget.', 'Price widget'),
            ),
    
            //The $control_options array, which is passed through to WP_Widget
            array(
            ),
    
            //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
                'title' => array(
                    'type' => 'text',
                    'label' => 'Headline'
                ),
                'subline' => array(
                    'type' => 'text',
                    'label' => 'Subline'
                ),
                'price_repeater' => array(
                    'type' => 'repeater',
                    'label' => 'Price repeater',
                    'item_name' => 'Repeater item',
                    'item_label' => array(
                        'selector'     => "[id*='reparation']",
                        'update_event' => 'change',
                        'value_method' => 'val'
                    ),
                    'fields' => array(
                        'reparation' => array(
                            'type' => 'text',
                            'label' => 'Reparation',
                        ),
                        'time' => array(
                            'type' => 'text',
                            'label' => 'Time',
                        ),
                        'price' => array(
                            'type' => 'text',
                            'label' => 'Price',
                        ),
                    ),
                ),
                
            ),
    
            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }
}

siteorigin_widget_register('price-widget', __FILE__, 'PriceWidget');