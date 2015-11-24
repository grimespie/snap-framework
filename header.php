<!DOCTYPE html>
<!--[if IE 7]>
<html class="ie ie7" <?php language_attributes(); ?>>
<![endif]-->
<!--[if IE 8]>
<html class="ie ie8" <?php language_attributes(); ?>>
<![endif]-->
<!--[if !(IE 7) | !(IE 8) ]><!-->
<html <?php language_attributes(); ?>>
<!--<![endif]-->
    <head>
        <title><?php wp_title(""); ?></title>
        <meta charset="<?php bloginfo("charset"); ?>">
        <link rel="icon" type="image/png" href="<?php print(get_template_directory_uri()); ?>/images/logo.png" />
        <link rel="profile" href="http://gmpg.org/xfn/11">
        <link rel="pingback" href="<?php bloginfo("pingback_url"); ?>">
        <link rel="stylesheet" type="text/css" href="<?php bloginfo("stylesheet_url"); ?>" media="screen" />
        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <header>
        </header>