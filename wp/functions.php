<?php
    function bpdcc_theme_setup() {
        // Menu support
        register_nav_menus(array(
            'primary'   => __('Primary Menu')
        ));
    }

    add_action('after_setup_theme', 'bpdcc_theme_setup');
?>