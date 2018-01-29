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
?>

<aside class="top-bar">
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
		<a class="center" href="#social"><i class="fa fa-social"></i></a>
	<?php endif;
	if($button_text&&$button_link):?>
		<a class="right button" href="<?php echo $button_link;?>">
			<?php echo $button_text;?>
		</a>
	<?php endif;?>
</aside>