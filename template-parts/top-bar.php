<?php
/**
 * Template part for displaying top bar on events pages.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

$queried = get_queried_object();
$postparentId = ( isset($queried->post_parent) && $queried->post_parent ) ? $queried->post_parent : '';

$button_link = get_field("button_link");
$button_text = get_field("button_text");
$facebook_link = get_field("facebook_link", "option");
$instagram_link = get_field("instagram_link","option");
$twitter_link = get_field("twitter_link","option");
$email = get_field("email","option");
$partners = get_field("partners");
$partners_title = get_field("partners_title");
$faq = get_field("faq");
$faq_title = get_field("faq_title");
$hotels = get_field("hotels");
$hotel_title = get_field("hotel_title");
$prepay_copy = get_field("prepay_copy");
$prepay_title = get_field("prepay_title");
$page_color= get_field("page_color");
$details_title = get_field("details_title");
$buy_tickets_now_link= get_field("buy_tickets_now_link");
$subNavs = get_field("subnavs");
?>


<aside class="top-bar">
	<div class="wrapper cap">
		<div class="wrapper <?php if($page_color) echo $page_color;?>">

		<?php if(is_page(231) || is_page(683) ) : 

			$post = get_post(7); 
			setup_postdata( $post );
			 	
				$partners = get_field("partners");
				$partners_title = get_field("partners_title");
				$faq = get_field("faq");
				$faq_title = get_field("faq_title");
				$hotels = get_field("hotels");
				$hotel_title = get_field("hotel_title");
				$prepay_copy = get_field("prepay_copy");
				$prepay_title = get_field("prepay_title");
				$page_color= get_field("page_color");
				$details_title = get_field("details_title");
				$buy_tickets_now_link= get_field("buy_tickets_now_link");
			 
			wp_reset_postdata(); ?>

				<?php if($partners&&$partners_title):?>
				<a class="left" href="<?php echo get_bloginfo('url'); ?>/st-pats/#<?php echo preg_replace("/[^0-9A-Za-z\-]/","",sanitize_title_with_dashes($partners_title));?>"><?php echo $partners_title;?></a>
				<?php endif;
				if($prepay_copy&&$prepay_title):?>
					<a class="left" href="<?php echo get_bloginfo('url'); ?>/st-pats/#<?php echo preg_replace("/[^0-9A-Za-z\-]/","",sanitize_title_with_dashes($prepay_title));?>"><?php echo $prepay_title;?></a>
				<?php endif;
				if($hotels&&$hotel_title):?>
					<a class="left" href="<?php echo get_bloginfo('url'); ?>/st-pats/#<?php echo preg_replace("/[^0-9A-Za-z\-]/","",sanitize_title_with_dashes($hotel_title));?>"><?php echo $hotel_title;?></a>
				<?php endif;
				if($faq&&$faq_title):?>
					<a class="left" href="<?php echo get_bloginfo('url'); ?>/st-pats/#<?php echo preg_replace("/[^0-9A-Za-z\-]/","",sanitize_title_with_dashes($faq_title));?>"><?php echo $faq_title;?></a>
				<?php endif;
				if($button_text&&$button_link):?>
					<a class="right button" href="<?php echo $button_link;?>">
						<?php echo $button_text;?>
					</a>
				<?php endif;?>


			<?php else: ?>

				<?php 
				$subNavLink = '#';
				if ( $postparentId ) { 
					$partners = get_field("partners",$postparentId);
					$partners_title = get_field("partners_title",$postparentId);
					$faq = get_field("faq",$postparentId);
					$faq_title = get_field("faq_title",$postparentId);
					$hotels = get_field("hotels",$postparentId);
					$hotel_title = get_field("hotel_title",$postparentId);
					$prepay_copy = get_field("prepay_copy",$postparentId);
					$prepay_title = get_field("prepay_title",$postparentId);
					$page_color= get_field("page_color",$postparentId);
					$details_title = get_field("details_title",$postparentId);
					$buy_tickets_now_link= get_field("buy_tickets_now_link",$postparentId); 
					$subNavs = get_field("subnavs",$postparentId);
					$parentObj = get_post($postparentId);
					$postName = ( isset($parentObj->post_name) && $parentObj->post_name ) ? $parentObj->post_name : '';
					if($postName) {
						$subNavLink = get_site_url() . '/' . $postName . '#';
					}
				} ?>

				
				<?php if($partners&&$partners_title):?>
					<a class="left" href="<?php echo $subNavLink ?><?php echo preg_replace("/[^0-9A-Za-z\-]/","",sanitize_title_with_dashes($partners_title));?>"><?php echo $partners_title;?></a>
				<?php endif;
				if($prepay_copy&&$prepay_title):?>
					<a class="left" href="<?php echo $subNavLink ?><?php echo preg_replace("/[^0-9A-Za-z\-]/","",sanitize_title_with_dashes($prepay_title));?>"><?php echo $prepay_title;?></a>
				<?php endif;
				if($hotels&&$hotel_title):?>
					<a class="left" href="<?php echo $subNavLink ?><?php echo preg_replace("/[^0-9A-Za-z\-]/","",sanitize_title_with_dashes($hotel_title));?>"><?php echo $hotel_title;?></a>
				<?php endif;
				if($faq&&$faq_title):?>
					<a class="left" href="<?php echo $subNavLink ?><?php echo preg_replace("/[^0-9A-Za-z\-]/","",sanitize_title_with_dashes($faq_title));?>"><?php echo $faq_title;?></a>
				<?php endif;
				if($button_text&&$button_link):?>
					<a class="right button" href="<?php echo $button_link;?>">
						<?php echo $button_text;?>
					</a>
				<?php endif;?>

				<?php if ($subNavs) { ?>
					<?php foreach ($subNavs as $sn) { 
						$nav_custom_title = $sn['title'];
						$navObj = $sn['link'];
						$navLink = ( isset($navObj->ID) && $navObj->ID ) ? get_permalink($navObj->ID) : '';
						$navTitle = ( isset($navObj->post_title) && $navObj->post_title ) ? $navObj->post_title : '';
						if($nav_custom_title) {
							$navTitle = $nav_custom_title;
						}
						?>
						<a class="left" href="<?php echo $navLink ?>"><?php echo $navTitle;?></a>
					<?php } ?>
				<?php } ?>

			<?php endif; ?>
		</div><!--.wrapper-->
	</div><!--.wrapper.cap-->
	<div class="icon-wrapper <?php if($page_color) echo $page_color;?>">
		<?php $icon = get_field("icon");
		if($icon):?>
			<div class="icon">
				<img class="wow flipInX" data-wow-delay=".5s" src="<?php echo $icon['url'];?>" alt="<?php echo $icon['alt'];?>">
			</div><!--.icon-->
			<?php if($buy_tickets_now_link) { ?>
				<div class="buy-tix ">
					<a class="green" href="<?php echo $buy_tickets_now_link; ?>">BUY TICKETS</a>
				</div>
			<?php } ?>
		<?php endif;?>
	</div><!--.icon-wrapper-->
</aside>