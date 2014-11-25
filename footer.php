    <?php wp_footer(); ?>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
    <!-- <script src="<? //php bloginfo('template_url'); ?>/js/jquery.infinitescroll.min.js"></script> -->
    <script src="<?php bloginfo('template_url'); ?>/js/jquery.jscroll.min.js"></script>
    <script>
        //$( document ).ready(function() {
            imagepath = "<img src='<?php echo bloginfo('template_url') . '/img/spinner.gif'; ?>' alt='Loading' />"
        //});
    </script>

    <?php 
        GLOBAL $scroll;
        if ($scroll !== "no") : 
    ?>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    <?php endif; ?>
    </body>
</html>
