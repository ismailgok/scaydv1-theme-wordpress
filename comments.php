?<div class="yorumlar">
<?php
// Do not delete these lines
if (!empty($_SERVER['SCRIPT_FILENAME']) && 'comments.php' == basename($_SERVER['SCRIPT_FILENAME']))
	die ('Please do not load this page directly. Thanks!');

if ( have_comments() ) :
?>
	<h3>Yorumlar</h3>
	<ol class="commentlist"> <?php wp_list_comments( array( 'avatar_size' => '45' ) ); ?></ol>
<?php
	if (get_option('page_comments')) :
		$comment_pages = paginate_comments_links('echo=0');
		if($comment_pages):
			echo '<div class="commentnavi"><span class="commentpages">'.$comment_pages.'</span></div>';
		endif;
	endif;
else : // if($comments)====this is displayed if there are no comments so far
	if ('open' == $post-> comment_status) :
		//If comments are open, but there are no comments.
	else : //got comments but now comments are closed
?>
		<p class="nocomments">Yoruma Kapalý.</p>
<?php 
	endif;
endif;

if ('open' == $post-> comment_status) : 
?>
		<div id="comments"></div>
	<span class="cancel-comment-reply"><small><?php cancel_comment_reply_link(); ?></small></span>
<?php
	if ( get_option('comment_registration') && !$user_ID ) : 
		echo '<p>You must be <a href="'.wp_login_url(get_permalink()).'"> logged in</a> to post a comment.</p>';
	else : 
?><div id="respond">
		<form action="<?php echo get_option('siteurl'); ?>/wp-comments-post.php" method="post" id="commentform">
<?php 
		if ( $user_ID ) :
			echo '<p>&nbsp;&nbsp;Siz <a href="'.get_option('siteurl').'/wp-admin/profile.php">'.$user_identity.'</a> olarak giriþ yapmýþsýnýz. <a href="'.wp_logout_url(get_permalink()).'" title="Çýkýþ yap!">Çýkýþ? &raquo;</a></p>';
		else : 
?>			
			<div class="yorum">
				<h4>Yanýtlayýn</h4>
			<div class="col-xs-2">
			<p><input type="text" name="author" class="form-control" placeholder="Ýsim" id="author" value="<?php echo $comment_author; ?>" size="22" tabindex="1" />
			<p><input type="text" name="email" id="email" class="form-control" placeholder="Email(Gerekli)" value="<?php echo $comment_author_email; ?>" size="22" tabindex="2" />
			<p><input type="text" name="url" class="form-control" placeholder="Website" id="url" value="<?php echo $comment_author_url; ?>" size="22" tabindex="3" />
			</div>
		</div>
<?php 
		endif; 
?>
			<div class="yorum">
			<div class="col-xs-2">
			<textarea name="comment" id="comment" class="form-control" rows="3" placeholder="Yorumlayýn..." tabindex="5"></textarea>
			<p><input name="submit" type="submit" id="submit" tabindex="5" class="btn btn-primary"  value="Gönder"/></p></div> </div>
			<div style="clear:both;"></div>
			<?php comment_id_fields(); ?>
			<?php do_action('comment_form', $post->ID); ?>
		</form>
			
			</div>
<?php 
	endif;
endif;
?>
</div>