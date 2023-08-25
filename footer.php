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
		<?php if( is_front_page() ) : ?>
			<img class="blocks" src="<?php echo get_template_directory_uri()."/images/blocks.png";?>" alt="blocks">
		<?php endif; ?>
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
					<!-- Begin MailChimp Signup Form -->
					<link href="//cdn-images.mailchimp.com/embedcode/horizontal-slim-10_7.css" rel="stylesheet" type="text/css">
					<div id="mc_embed_signup">
						<form action="https://RockHouseEvents.us13.list-manage.com/subscribe/post?u=d58496ad6349ac74378a7a2ff&amp;id=8ffb330879&amp;f_id=00d4c2e1f0" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<div id="mc_embed_signup_scroll">
							<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
							<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d58496ad6349ac74378a7a2ff_d2ed768e7e" tabindex="-1" value=""></div>
							<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
							</div>
						</form>
						
						<!-- <form action="https://RockHouseEvents.us13.list-manage.com/subscribe/post?u=d58496ad6349ac74378a7a2ff&amp;id=d2ed768e7e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
							<div id="mc_embed_signup_scroll">
							<input type="email" value="" name="EMAIL" class="email" id="mce-EMAIL" placeholder="email address" required>
							<div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_d58496ad6349ac74378a7a2ff_d2ed768e7e" tabindex="-1" value=""></div>
							<div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
							</div>
						</form> -->
					</div>
					<!--End mc_embed_signup-->
				</div><!--.row-2-->
			<?php endif;?>
			<nav class="row-3">
				<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>	
			</nav>
		</div><!--.wrapper-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
