<?php
/**
 * The header for theme.
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
<?php $ga = get_field("google_analytics","option");
if($ga) echo $ga;?>
<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '341560059519954');
  fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
  src="https://www.facebook.com/tr?id=341560059519954&ev=PageView&noscript=1"
/></noscript>
<!-- End Facebook Pixel Code -->

<?php 
if( is_front_page() ) { ?>
	<script>
  		fbq('track', 'ViewContentHomepage');
	</script>

<?php } if( is_page('st-pats') ) { ?>
	<script>
  		fbq('track', 'ViewContentStPatsPage');
  		fbq('track', 'ViewContentDetails');
  		fbq('track', 'ViewContentPrepayEvents');
  		fbq('track', 'ViewContentHotelInfo');
  		fbq('track', 'ViewContentPartners');
  		fbq('track', 'ViewContentFAQ');
  		fbq('track', 'ViewContentStPatsTickets');
  		fbq('track', 'LeadBuyTickets');
  	</script>
<?php } ?>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">
	<a class="skip-link screen-reader-text" href="#content"><?php esc_html_e( 'Skip to content', 'acstarter' ); ?></a>

	<header id="masthead" class="site-header" role="banner">
		<div class="wrapper cap clear-bottom">
			<div class="logo col-1">
				<a href="<?php bloginfo('url'); ?>"><img src="<?php echo get_template_directory_uri()."/images/logo.png";?>" alt="<?php bloginfo('name'); ?>"></a>
			</div>
			<div class="button-wrapper">
				<div class="button">Menu</div><!--.button-->
			</div><!--.button-wrapper-->
			<div class="col-2">
				<?php $current_date = date('Ymd');
				$events = array(7,40,9,38,11);
				$dates = array();
				foreach($events as $event):
					$dates[intval(get_field("event_date",$event))?intval(get_field("event_date",$event)):22222222] = $event;
				endforeach;
				krsort($dates);
				$correct_ordered_dates = array();
				$index = 0;
				foreach($dates as $date=>$id):
					if($current_date<= $date):
						array_unshift($correct_ordered_dates,$id);
					else: 
						$correct_ordered_dates = array_merge($correct_ordered_dates,array_reverse(array_slice($dates,$index)));
						break;
					endif;
					$index++;
				endforeach;
				$args = array(
					'post_type'=>'page',
					'post__in'=>$correct_ordered_dates,
					'orderby'=>'post__in'
				);
				$query = new WP_Query($args);
				if($query->have_posts()):
					$i = 0;?>
					<?php while($query->have_posts()):$query->the_post();
						$id = get_the_ID();
						$image = null;
						$name = null;
						switch($id):
							case 7:
								$name = "st-pats";
								$image = "/images/icon-white-st-pats.svg";
								break;
							case 40:
								$name = "halloween";
								$image = "/images/icon-white-halloween.svg";
								break;
							case 9:
								$name = "americrawl";
								$image = "/images/icon-white-americrawl.svg";
								break;
							case 38:
								$name = "nye";
								$image = "/images/icon-white-nye.svg";
								break;
							case 11:
								$name = "tubing";
								$image = "/images/icon-white-tubing.svg";
								break;
						endswitch;?>
						<div class="box <?php echo $name;?> <?php if($i == 0) echo "first";?>">
							<a href="<?php echo get_permalink($id);?>">
								<?php include get_template_directory().$image;?>
							</a>
						</div><!--.box--> 
						<?php $i++;
					endwhile;?>
				<?php $post = get_post(5);
				setup_postdata($post);
				endif;?>
				<div class="box dots last">
						<?php include get_template_directory()."/images/more-dots.svg";?>
				</div><!--.box--> 
				<nav class="menu">
					<?php wp_nav_menu( array( 'theme_location' => 'primary' ) ); ?>
					<img class="dots" src="<?php echo get_template_directory_uri()."/images/more-dots.svg";?>" alt="dots">
				</nav>
			</div><!--.col-2-->
		</div><!-- wrapper -->
	</header><!-- #masthead -->

	<div id="content" class="site-content wrapper">
