<?php
/*
Template Name: Archives-list
*/
?>
<?php get_header(); ?>
<?php 

    $scroll = "no"; 
?>
<div class="content">
    <div class="scroll-wrapper">

<div class="post-wrapper">
            
        <ul>
			<?php $args = array(
				"type" => "monthly",
				"format" => "html",
				"show_post_count" => true
				); ?>
            <?php wp_get_archives($args); ?>
        </ul>
</div>

     

    <div class="navigation">
        <?php next_posts_link(' &laquo; &Auml;ldre Inl&auml;gg ') ?>
    </div>

    </div> <!-- End Scroll wrapper -->
</div> <!-- End content wrapper -->
<?php get_footer(); ?>


