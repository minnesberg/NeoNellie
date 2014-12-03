<?php get_header(); ?>
<div class="content">
<?php get_search_form(); ?>


    <?php $i = 1; ?>

	<?php if ($wp_query->found_posts == "0") { ?>

	<?php } else { ?>
		<h1 class="result">Sökningen "<?php echo get_search_query(); ?>" gav dig <?php echo $wp_query->found_posts; ?> träffar.</h1>
        <h2><?php echo '<p><a href="' . get_bloginfo('url') . '?s=' . get_search_query() . '&orderby=post_date&order=desc">Order results by date<a></p>'; ?></h2>
	<?php } ?>
	<div class="scroll-wrapper">
    <?php 
        global $query_string;
        query_posts($query_string . '&orderby=post_date&order=desc');
    ?>
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
            
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                
                <?php $date = explode(" ",(get_the_date("d M y"))); ?>

                <div class="date">
                    <div class="day"><?php echo $date[0]; ?></div>
                    <div class="month"><?php echo $date[1]; ?></div>
                    <div class="year">-<?php echo $date[2]; ?></div>
                </div>
                
                <h2><?php the_title(); ?></h2>

                <?php the_content(); ?>
                
                <?php 
                    $withcomments = 1;
                    comments_template(); 
                ?>

            </article> <!-- End post -->

        </div> <!-- End post-wrapper -->
     

    <?php $i++; ?>
    <?php endwhile; ?>

    <?php else : ?>
        
        <h1 class="result">Ledsen hittade inga resultat.</h1>

    <?php endif; ?>

        <div class="navigation">
            <?php next_posts_link(' &laquo; &Auml;ldre Inl&auml;gg ') ?>
        </div>

    </div> <!-- End Scroll wrapper -->
</div>
<?php get_footer(); ?>