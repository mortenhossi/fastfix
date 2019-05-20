<?php

/*
Widget Name: Products showcase widget
Description: Products showcase widget
*/

class ProductsShowcase extends SiteOrigin_Widget {

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
            'products-showcase-widget',
    
            // The name of the widget for display purposes.
            __('Products showcase widget', 'Products showcase widget'),
    
            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('Products showcase widget.', 'Products showcase widget'),
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
                'model_repeater' => array(
                    'type' => 'repeater',
                    'label' => 'Model repeater',
                    'item_name'  => 'Repeater item',
                    'item_label' => array(
                        'selector'     => "[id*='title']",
                        'update_event' => 'change',
                        'value_method' => 'val'
                    ),
                    'fields' => array(
                        'title' => array(
                            'type' => 'text',
                            'label' => 'Title',
                        ),
                        'link_text' => array(
                            'type' => 'text',
                            'label' => 'Link text',
                        ),
                        'link' => array(
                            'type' => 'link',
                            'label' => 'link',
                        ),
                        'image' => array(
                            'type' => 'media',
                            'label' => 'Choose a media thing',
                            'choose' => 'Choose image',
                            'update' => 'Set image',
                            'library' => 'image',
                        ),
                    ),
                ),
            ),
    
            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }
}

siteorigin_widget_register('products-showcase-widget', __FILE__, 'ProductsShowcase');