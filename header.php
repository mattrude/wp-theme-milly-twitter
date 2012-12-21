<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes(); ?>>

<head>
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
  <meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
  <?php if ( $paged != '0' ) {
    ?><title><?php wp_title(' - ', true, 'right'); ?><?php bloginfo('name'); echo " - Page $paged" ?></title><?php
  } else {
    ?><title><?php wp_title(' - ', true, 'right'); ?><?php bloginfo('name'); ?></title><?php
  } ?>
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>
</head>

<body>
  <div id="wrapper" >
    <div id="header-title">
      <div id="site-title">
        <a class="standard" href="<?php bloginfo('url'); ?>"><b><?php bloginfo('description'); ?></b></a>
      </div>
    </div>
    <div id="header">
      <img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="" />
    </div>
  <div id="container">
