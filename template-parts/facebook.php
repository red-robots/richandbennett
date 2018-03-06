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
<?php } ?>

<?php 
if( is_page('st-pats') ) { ?>
	<script>
  		fbq('track', 'ViewContentStPatsPage');
  		fbq('track', 'ViewContentDetails');
  		fbq('track', 'ViewContentPrepayEvents');
  		fbq('track', 'ViewContentHotelInfo');
  		fbq('track', 'ViewContentPartners');
  		fbq('track', 'ViewContentFAQ');
  		fbq('track', 'ViewContentStPatsTickets');
  		fbq('track', 'LeadBuyTickets');
<?php } ?>
