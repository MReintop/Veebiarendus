<?php
/**
 *
 * The template for displaying 404 pages (not found).
 *
 * @package parallax-one
 */

	get_header();
?>

	</div>
	<!-- /END COLOR OVER IMAGE -->
	<?php parallax_hook_header_bottom(); ?>
</header>
<!-- /END HOME / HEADER  -->
<?php parallax_hook_header_after(); ?>
<div class="content-wrap">
	<div class="container">
				<h2><?php _e( 'This is somewhat embarrassing, isn’t it?', 'twentythirteen' ); ?></h2>
				<p><?php _e( 'It looks like nothing was found at this location.', 'twentythirteen' ); ?></p>
		
		<img src='https://user-images.githubusercontent.com/22025373/33419555-a2103a46-d5b3-11e7-86f3-662739a4d43a.png'>
	
	</div>
</div><!-- .content-wrap -->

<?php get_footer(); ?>
