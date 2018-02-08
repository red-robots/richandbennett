<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

$page_color= get_field("page_color");
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-event"); ?>>
    <?php get_template_part("template-parts/top","bar");?>
    <div class="row-1">
        <div class="wrapper cap">
            <div class="wrapper">
                <?php $full_title = get_field("full_title");
                $location = get_field("location");
                $date = get_field("date");
                $button_link = get_field("button_link");
                $button_text = get_field("button_text");?>
                <header>
                    <div class="name">Rich &amp; Bennett's</div><!--.name-->
                    <?php if($full_title):?>
                        <h1><?php echo $full_title;?></h1>
                        <?php if($location) { ?><h2 class="location"><?php echo $location; ?></h2><?php } ?>
                    <?php else:?>
                        <h1><?php the_title();?></h1>
                        <?php if($location) { ?><h2 class="location"><?php echo $location; ?></h2><?php } ?>
                    <?php endif;
                    if($date):?>
                        <div class="date <?php if($page_color) echo $page_color;?>"><?php echo $date;?></div><!--.date-->
                    <?php endif;?>
                </header>
                <a name="details"></a>
                <div class="copy">
                    <?php the_content();?>
                </div><!--.copy-->
                <?php if($button_text&&$button_link):?>
                    <a class="button <?php if($page_color) echo $page_color;?>" href="<?php echo $button_link;?>">
                        <?php echo $button_text;?>
                    </a>
                <?php endif;?>
                <?php $facebook_link = get_field("facebook_link", "option");
                $instagram_link = get_field("instagram_link","option");
                $twitter_link = get_field("twitter_link","option");
                $email = get_field("email","option");
                if($facebook_link||$instagram_link||$twitter_link||$email):?>
                    <a name="details"></a>
                    <div class="social">
                        <?php if($facebook_link):?>
                            <a href="<?php echo $facebook_link;?>"><i class="fa fa-facebook"></i></a>
                        <?php endif;
                        if($twitter_link):?>
                            <a href="<?php echo $twitter_link;?>"><i class="fa fa-twitter"></i></a>
                        <?php endif;
                        if($instagram_link):?>
                            <a href="<?php echo $instagram_link;?>"><i class="fa fa-instagram"></i></a>
                        <?php endif;
                        if($email):?>
                            <a href="<?php echo $email;?>"><i class="fa fa-envelope"></i></a>
                        <?php endif;?>
                    </div><!--.social-->
                <?php endif;?>
            </div><!--.wrapper-->
        </div><!--.wrapper-->
    </div><!--.row-1-->
    <?php $partners_title = get_field("partners_title");
    $partners = get_field("partners");
    if($partners):?>
        <div class="row-2">
            <div class="wrapper cap">
                <div class="wrapper">
                    <a name="partners"></a>
                    <?php if($partners_title):?>
                        <header>
                            <h2><?php echo $partners_title;?></h2>
                        </header>
                    <?php endif;?>
                    <div class="blocks clear-bottom">
                        <?php $i = 0;
                        foreach($partners as $partner):?>
                            <?php if($partner['image']):?>
                                <div class="block js-blocks <?php if($i%4==0) echo "first";?> <?php if(($i-3)%4==0) echo "last";?>">
                                    <?php if($partner['link']):?>
                                        <a href="<?php echo $partner['link'];?>" target="_blank">
                                    <?php endif;?>
                                        <img src="<?php echo $partner['image']['sizes']['large'];?>" alt="<?php echo $partner['image']['alt'];?>">
                                    <?php if($partner['link']):?>
                                        </a>
                                    <?php endif;
                                    $i++;?>
                                </div><!--.block-->
                            <?php endif;?>
                            <?php endforeach;?>
                    </div><!--.blocks-->
                </div><!--.wrapper-->
            </div><!--.wrapper-->
        </div><!--.row-2-->
    <?php endif;
    $faq_title = get_field("faq_title");
    $faq = get_field("faq");
    if($faq):?>
        <div class="row-3">
            <div class="wrapper cap">
                <div class="wrapper">
                    <a name="faqs"></a>
                    <?php if($faq_title):?>
                        <header>
                            <h2><?php echo $faq_title;?></h2>
                        </header>
                    <?php endif;?>
                    <div class="faq">
                        <?php foreach($faq as $row):?>
                            <?php if($row['question']&&$row['answer']):?>
                                <div class="row clear-bottom">
                                    <i class="fa fa-caret-right"></i><i class="close fa fa-caret-down"></i>
                                    <div class="wrapper">
                                        <div class="question">
                                            <?php echo $row['question'];?>
                                        </div><!--.question-->
                                        <div class="answer copy">
                                            <?php echo $row['answer'];?>
                                        </div><!--.answer-->
                                    </div><!--.wrapper-->
                                </div><!--.row-->
                            <?php endif;?>
                        <?php endforeach;?>
                    </div><!--.faq-->
                </div><!--.wrapper-->
            </div><!--.wrapper-->
        </div><!--.row-3-->
    <?php endif;
    $hotel_title = get_field("hotel_title");
    $hotels = get_field("hotels");
    if($hotels):?>
        <div class="row-4">
            <div class="wrapper cap">
                <div class="wrapper">
                    <a name="hotel-info"></a>
                    <?php if($hotel_title):?>
                        <header>
                            <h2><?php echo $hotel_title;?></h2>
                        </header>
                    <?php endif;?>
                    <div class="blocks clear-bottom">
                        <?php $i=0;
                        foreach($hotels as $hotel):?>
                            <?php if($hotel['image']):?>
                                <div class="block js-blocks <?php if($i%4==0) echo "first";?> <?php if(($i-3)%4==0) echo "last";?>">
                                    <div class="hotel-wrap">
                                        <img src="<?php echo $hotel['image']['sizes']['large'];?>" alt="<?php echo $hotel['image']['alt'];?>">
                                    </div>
                                    <div class="details">
                                        <?php if($hotel['address']):?>
                                            <div class="address">
                                                <?php echo $hotel['address'];?>
                                            </div><!--.address-->
                                        <?php endif;
                                        if($hotel['info']):?>
                                            <div class="info">
                                                <?php echo $hotel['info'];?>
                                            </div><!--.info-->
                                        <?php endif;?>
                                        <?php if($hotel['button_link']&&$hotel['button_text']):?>
                                            <a class="button" href="<?php echo $hotel['button_link'];?>" target="_blank">
                                                <?php echo $hotel['button_text'];?>
                                            </a>
                                        <?php endif;
                                        $i++;?>
                                    </div>
                                    <!-- details -->
                                </div><!--.block-->
                            <?php endif;?>
                        <?php endforeach;?>
                    </div><!--.blocks-->
                </div><!--.wrapper-->
            </div><!--.wrapper-->
        </div><!--.row-4-->
    <?php endif;?>
</article><!-- #post-## -->
