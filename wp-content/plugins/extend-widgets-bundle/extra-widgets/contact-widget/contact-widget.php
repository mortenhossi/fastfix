<?php

/*
Widget Name: Contact widget
Description: Contact widget
*/

class ContactWidget extends SiteOrigin_Widget {

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
            'contact-widget',
    
            // The name of the widget for display purposes.
            __('Contact widget', 'Contact widget'),
    
            // The $widget_options array, which is passed through to WP_Widget.
            // It has a couple of extras like the optional help URL, which should link to your sites help or support page.
            array(
                'description' => __('Contact widget.', 'Contact widget'),
            ),
    
            //The $control_options array, which is passed through to WP_Widget
            array(
            ),
    
            //The $form_options array, which describes the form fields used to configure SiteOrigin widgets. We'll explain these in more detail later.
            array(
               'contact_form' => array(
                   'type' => 'text',
                   'label' => 'Contact Form',
               ),
               'newsletter' => array(
                   'type' => 'checkbox',
                   'label' => 'Nyhedsbrev?',
                   'default' => false,
               ),
            ),
    
            //The $base_folder path string.
            plugin_dir_path(__FILE__)
        );
    }
}

siteorigin_widget_register('contact-widget', __FILE__, 'ContactWidget');