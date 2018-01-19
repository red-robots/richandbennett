<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<img class="blocks" src="<?php echo get_template_directory_uri()."/images/blocks.png";?>" alt="blocks">
		<div class="wrapper cap">
			<?php $mailing_line_1 = get_field("mailing_line_1","option");
			$mailing_line_2 = get_field("mailing_line_2","option");
			$facebook_link = get_field("facebook_link","option");
			$twitter_link = get_field("twitter_link","option");
			$instagram_link = get_field("instagram_link","option");?>
			<?php if($facebook_link||$instagram_link||$twitter_link):?>
				<div class="row-1 social">
					<?php if($facebook_link):?>
						<a href="<?php echo $facebook_link;?>"><i class="fa fa-facebook"></i></a>
					<?php endif;
					if($twitter_link):?>
						<a href="<?php echo $twitter_link;?>"><i class="fa fa-twitter"></i></a>
					<?php endif;
					if($instagram_link):?>
						<a href="<?php echo $instagram_link;?>"><i class="fa fa-instagram"></i></a>
					<?php endif;?>
				</div><!--.row-1-->
			<?php endif;
			if($mailing_line_1||$mailing_line_2):?>
				<div class="row-2">
					<?php if($mailing_line_1):?>
						<div class="row-1">
							<?php echo $mailing_line_1;?>
						</div><!--.row-1-->
					<?php endif;
					if($mailing_line_2):?>
						<div class="row-2">
							<?php echo $mailing_line_2;?>
						</div><!--.row-2-->
					<?php endif;?>
				</div><!--.row-2-->
			<?php endif;?>
			<nav class="row-3">
				<?php wp_nav_menu( array( 'theme_location' => 'primary', 'menu_id' => 'primary-menu' ) ); ?>	
			</nav>
		</div><!--.wrapper-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
