<?php

/*
Widget Name: Text/image widget
Description: Text/image widget
*/

class TextImageWidget extends SiteOrigin_Widget {

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
            'text-image-widget',
    
            // The name of the widget for display purposes.
            __('Text/image widget', 'Text/image widget'),
    
            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('Text/image widget.', 'Text/image widget'),
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
                'label' => array(
                    'type' => 'text',
                    'label' => 'Label (wrap text in <span> if it should be green)',
                ),
                'content' => array(
                    'type' => 'tinymce',
                    'label' => 'Content',
                ),
                'image' => array(
                    'type' => 'media',
                    'label' => 'Image',
                    'choose' => 'Choose image',
                    'update' => 'Set image',
                    'library' => 'image',
                ),
                'text_or_image_first' => array(
                    'type' => 'select',
                    'label' => 'Text or image first',
                    'options' => array(
                        'text' => 'Text first',
                        'image' => 'Image first',
                    ),
                ),
                'background_color' => array(
                    'type' => 'checkbox',
                    'label' => 'Do you want a background color?'
                ),
                'button_text' => array(
                    'type' => 'text',
                    'label' => 'Button text',
                ),
                'button_link' => array(
                    'type' => 'link',
                    'label' => 'Button link',
                ),
            ),
    
            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }
}

siteorigin_widget_register('text-image-widget', __FILE__, 'TextImageWidget');