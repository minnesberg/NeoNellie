<?php

	if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
		die ('Please do not load this page directly. Thanks!');

	if ( post_password_required() ) { ?>
		Detta inl&auml;gg &auml;r l&ouml;senordskyddat. Ange l&ouml;senord f&ouml;r att l&auml;sa kommentarer.
	<?php
		return;
	}
?>

<?php if ( have_comments() ) : ?>
	
	<h3 class="postheader"><?php comments_number('Inga Kommentarer', 'En Kommentar', '% Kommentarer' );?></h3>

	<div class="comments">
		<ol>
    <?php 

        $com_arg = array(
            "post_id" => (get_the_ID()),
            );

        $comments = get_comments($com_arg);
        asort($comments);
        foreach ($comments as $comment) :
        	echo "<li>";
            echo "<div class='comment-head'>Den: " . date("d M Y", strtotime(($comment->comment_date))) . " säger " . $comment->comment_author . "</div>";
            echo "<div class='comment-content'>" . $comment->comment_content . "<br></div>";
        	echo "</li>";
        endforeach; ?>
		</ol>
    </div>

 <?php else : // this is displayed if there are no comments so far ?>

	<?php if ( comments_open() ) : ?>
		<!-- If comments are open, but there are no comments. -->

	 <?php else : // comments are closed ?>
		<p>Kommenteringen &auml;r avst&auml;ngd.</p>

	<?php endif; ?>
	
<?php endif; ?>

<?php if ( comments_open() ) : ?>

<div class="respond">

	<h3 class="commentheader"><?php comment_form_title( 'Kommentera Inl&auml;gget', 'L&auml;mna en kommentar till %s' ); ?></h3>

	<?php if ( get_option('comment_registration') && !is_user_logged_in() ) : ?>
		<p>Du m&aring;ste vara <a href="<?php echo wp_login_url( get_permalink() ); ?>">inloggad</a> f&ouml;r att kommentera.</p>
	<?php else : ?>

	<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" class="comment-form hide">

		<?php if ( is_user_logged_in() ) : ?>

			<p>Inloggad som <a href="<?php echo get_option('siteurl'); ?>/wp-admin/profile.php"><?php echo $user_identity; ?></a>. <a href="<?php echo wp_logout_url(get_permalink()); ?>" title="Log out of this account">Logga ut &raquo;</a></p>

            <?php else : ?>
    
                <div>
                    <label for="author">Namn <?php if ($req) echo "(Kr&auml;vs)"; ?></label>
                    <input type="text" name="author" id="author" value="<?php echo esc_attr($comment_author); ?>" size="22" tabindex="1"  <?php if ($req) echo "required"; ?> />
                </div>
    
                <div>
                    <label for="email">E-post <?php if ($req) echo "(Kr&auml;vs)"; ?></label>
                    <input type="text" name="email" id="email" value="<?php echo esc_attr($comment_author_email); ?>" size="22" tabindex="2" <?php if ($req) echo "required"; ?> />
                </div>
    
            <?php endif; ?>

		<!--<p>You can use these tags: <code><?php echo allowed_tags(); ?></code></p>-->

		<div>
			<textarea name="comment" id="comment" cols="58" rows="5" tabindex="4" required></textarea>
		</div>

		<div>
			<input name="submit" type="submit" id="submit" tabindex="5" value="Posta Kommentar" />
			<?php comment_id_fields(); ?>
		</div>
		
		<?php do_action('comment_form', $post->ID); ?>

	</form>

	<?php endif; // If registration required and not logged in ?>
	
</div>

<?php endif; ?>
