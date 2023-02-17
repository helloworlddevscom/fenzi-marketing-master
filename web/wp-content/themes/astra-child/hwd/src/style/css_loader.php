<?php
$theme = wp_get_theme();
$version = $theme != null ? $theme->Version : '1.0';
wp_enqueue_style( 'hwd-common', get_template_directory_uri() . '/hwd/dist/css/hwd_common.css',false,$version,'all');
wp_enqueue_style( 'hwd-navbar', get_template_directory_uri() . '/hwd/dist/css/hwd_navbar.css',false,$version,'all');
wp_enqueue_style( 'hwd-widgets', get_template_directory_uri() . '/hwd/dist/css/hwd_widgets.css',false,$version,'all');
wp_enqueue_style( 'hwd-footer', get_template_directory_uri() . '/hwd/dist/css/hwd_footer.css',false,$version,'all');
wp_enqueue_style( 'hwd-template', get_template_directory_uri() . '/hwd/dist/css/hwd_templates.css',false,$version,'all');


?>
