<?php

// Adds menu and widgets
add_theme_support('menus');
add_theme_support( 'custom-header' );


function bgj_imgpath() {
    return get_template_directory_uri() . '/assets/img/';
}
function bgj_csspath() {
    return get_template_directory_uri() . '/assets/css/';
}


?>