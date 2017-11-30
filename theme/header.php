<!doctype html>
<html>
<head>
  <title><?php bloginfo('title'); ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
  <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>
<div class="header">
  <img src="<?php header_image(); ?>" />
</div>
  <?php wp_nav_menu(); ?>
</body>
