<?php 

// When you need to use this:
// $plugin_dir = ABSPATH . 'wp-content/plugins/extend-widgets-bundle';
// require_once($plugin_dir . '/global-functions.php');

function getUrl($field) {
    if (substr($field, 0, 4) === 'post') {
        return get_permalink(substr($field, 6));
    } else {
        return $field;
    }
}

?>