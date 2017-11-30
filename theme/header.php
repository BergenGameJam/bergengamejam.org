<head>
  <title><?php bloginfo('title'); ?></title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
  <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto" rel="stylesheet">
  <?php wp_head(); ?>
</head>
<body>
<div class="header">
  <img src="<?php header_image(); ?>" />
</div>
  <?php get_navbar(); ?>
</body>
