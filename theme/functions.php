<?php

// Adds menu and widgets
add_theme_support('menus');


function bgj_imgpath() {
    return get_template_directory_uri() . '/assets/img/';
}

function header_image() {
    return bgj_imgpath() . 'header2.png';
}
?>