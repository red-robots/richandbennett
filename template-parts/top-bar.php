<?php
/**
 * Template part for displaying top bar on events pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */


$button_link = get_field("button_link");
$button_text = get_field("button_text");
$facebook_link = get_field("facebook_link", "option");
$instagram_link = get_field("instagram_link","option");
$twitter_link = get_field("twitter_link","option");
$email = get_field("email","option");
$partners = get_field("partners");
$faq = get_field("faq");
$hotels = get_field("hotels");
$page_color= get_field("page_color");
?>

<aside class="top-bar">
	<div class="wrapper cap">
		<div class="wrapper <?php if($page_color) echo $page_color;?>">
			<a class="left" href="#details">Details</a>
			<?php if($partners):?>
				<a class="left" href="#partners">Partners</a>
			<?php endif;
			if($hotels):?>
				<a class="left" href="#hotel-info">Hotel Info</a>
			<?php endif;
			if($faq):?>
				<a class="left" href="#faqs">Faq's</a>
			<?php endif;
			if($facebook_link||$instagram_link||$twitter_link||$email):?>
				<a class="center" href="#social"><?php include get_template_directory()."/images/share.svg";?></a>
			<?php endif;
			if($button_text&&$button_link):?>
				<a class="right button" href="<?php echo $button_link;?>">
					<?php echo $button_text;?>
				</a>
			<?php endif;?>
		</div><!--.wrapper-->
	</div><!--.wrapper.cap-->
	<div class="icon-wrapper <?php if($page_color) echo $page_color;?>">
		<?php $icon = get_field("icon");
		if($icon):?>
			<div class="icon">
				<img class="wow flipInX" data-wow-delay=".5s" src="<?php echo $icon['url'];?>" alt="<?php echo $icon['alt'];?>">
			</div><!--.icon-->
		<?php endif;?>
	</div><!--.icon-wrapper-->
</aside>