<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>
               <?php
                  if (function_exists('is_tag') && is_tag()) {
                     single_tag_title("Tag Archive for &quot;"); echo '&quot; - '; }
                  elseif (is_archive()) {
                     wp_title(''); echo ' Archive - '; }
                  elseif (is_search()) {
                     echo 'Search for &quot;'.wp_specialchars($s).'&quot; - '; }
                  elseif (!(is_404()) && (is_single()) || (is_page())) {
                     wp_title(''); echo ' - '; }
                  elseif (is_404()) {
                     echo 'Not Found - '; }
                  if (is_home()) {
                     bloginfo('name'); echo ' - '; bloginfo('description'); }
                  else {
                      bloginfo('name'); }
                  if ($paged>1) {
                     echo ' - page '. $paged; }
               ?>
        </title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        <script src="<?php bloginfo('template_url'); ?>/js/modernizr-2.6.2.min.js"></script>
        <link href='http://fonts.googleapis.com/css?family=Amatic+SC:400,700' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Roboto+Condensed' rel='stylesheet' type='text/css'>
        <link href='http://fonts.googleapis.com/css?family=Maven+Pro' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">

        <?php wp_head(); ?>
    </head>
    <body <?php body_class(); ?>>
        <!--[if lt IE 7]>
            <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- Add your site or application content here -->

        <header>
            <h1><a href="<?php bloginfo('url'); ?>" title="<?php bloginfo('name'); ?>"><span class="neo">Neo</span><span class="and"> & </span><span class="nellie">Nellie</span></a></h1>
            <menu class="main-menu up">
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
            </menu>
            <div class="circle-wrap">
                <div class="menu-circle">
                    <div class="menu-circle menu-circle01"></div>
                    <div class="menu-circle menu-circle02"></div>
                    <div class="menu-circle menu-circle03"></div>
                </div>
                <div class="circle circle01"></div>
                <div class="circle circle02"></div>
                <div class="circle circle03"></div>
                <div class="circle circle04"></div>
                <div class="circle circle05"></div>
                <div class="circle circle06"></div>
                <div class="circle circle07"></div>
            </div>
        </header>