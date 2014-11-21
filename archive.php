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
    <?php $i = 1; ?>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>

        <?php if ($i % 5 == 1) {
            $postclass = "color1";
        } elseif ($i % 5 == 2) {
            $postclass = "color2";
        } elseif ($i % 5 == 3) {
            $postclass = "color3";
        } elseif ($i % 5 == 4) {
            $postclass = "color4";
        } elseif ($i % 5 == 0) {
            $postclass = "color5";
        } ?>

        <div class="post-wrapper <?php echo $postclass; ?>">
            
            <div <?php post_class() ?> id="post-<?php the_ID(); ?>">
                
                <?php $date = explode(" ",(get_the_date("d M"))); ?>

                <div class="date">
                    <div class="day"><?php echo $date[0]; ?></div>
                    <div class="month"><?php echo $date[1]; ?></div>
                </div>

                <h2><?php the_title(); ?></h2>

                <?php the_content(); ?>

                <?php 
                    $withcomments = 1;
                    comments_template(); 
                ?>

            </div> <!-- End post -->

        </div> <!-- End post-wrapper -->
     

    <?php $i++; ?>
    <?php endwhile; ?>

    <?php else : ?>
        
        <h2>Not Found</h2>

    <?php endif; ?>

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

