<?php
/*
Template Name: Template-Sök
*/
?>
<?php get_header(); ?>

<div class="content">
    <div class="scroll-wrapper">
        <div class="post-wrapper <?php echo $postclass; ?>">
         
        <h1><?php //the_title(); ?></h1>
		<?php get_search_form(); ?>

		</div>
    </div> <!-- End Scroll wrapper -->
</div>

<?php get_footer(); ?>