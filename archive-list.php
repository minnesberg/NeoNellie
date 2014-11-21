<?php
/*
Template Name: Archives-list
*/
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title><?php wp_title(); ?></title>
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
    <div class="scroll-wrapper">


            
        <ul>
			<?php $args = array(
				"type" => "monthly",
				"format" => "html",
				"show_post_count" => true
				); ?>
            <?php wp_get_archives($args); ?>
        </ul>

     

    <div class="navigation">
        <?php next_posts_link(' &laquo; &Auml;ldre Inl&auml;gg ') ?>
    </div>

    </div> <!-- End Scroll wrapper -->



    <?php wp_footer(); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.infinitescroll.min.js"></script>
    <script>
        $( document ).ready(function() {
            imagepath = "<?php echo bloginfo('template_url') . '/img/spinner.gif'; ?>"
        });
    </script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    </body>
</html>


