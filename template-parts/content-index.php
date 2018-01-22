<?php
/**
 * Template part for displaying page content in index.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-index"); ?>>
    <?php $banner_line_1 = get_field("banner_line_1");
    $banner_line_2 = get_field("banner_line_2");
    if($banner_line_1):?>
        <div class="row-1">
            <div class="wrapper cap">
                <?php echo $banner_line_1;?>
            </div><!--.wrapper-->
        </div><!--.row-1-->
    <?php endif;
    if($banner_line_2):?>
        <div class="row-2">
            <div class="wrapper cap">
                <?php echo $banner_line_2;?>
            </div><!--.wrapper-->
        </div><!--.row-2-->
    <?php endif;?>
    <div class="row-3">
        <img src="<?php echo get_template_directory_uri()."/images/city.jpg";?>" alt="Charlotte Skyline">
        <div class="wrapper cap clear-bottom">
            <div class="box st-pats first">
                <a href="<?php echo get_permalink(7);?>">
                    <img src="<?php echo get_template_directory_uri()."/images/icon-st-pats.svg";?>" alt="clover">
                </a>
            </div><!--.box-->
            <div class="box americrawl">
                <a href="<?php echo get_permalink(9);?>">
                    <img src="<?php echo get_template_directory_uri()."/images/icon-americrawl.svg";?>" alt="star">
                </a>
            </div><!--.box-->
            <div class="box nye">
                <a href="<?php echo get_permalink(38);?>">
                    <img src="<?php echo get_template_directory_uri()."/images/icon-nye.svg";?>" alt="glass">
                </a>
            </div><!--.box-->
            <div class="box halloween">
                <a href="<?php echo get_permalink(40);?>">
                    <img src="<?php echo get_template_directory_uri()."/images/icon-halloween.svg";?>" alt="pumpkin">
                </a>
            </div><!--.box-->
            <div class="box tubing last">
                <a href="<?php echo get_permalink(11);?>">
                    <img src="<?php echo get_template_directory_uri()."/images/icon-tubing.svg";?>" alt="tubing">
                </a>
            </div><!--.box-->   
        </div><!--.wrapper-->
    </div><!--.row-3-->     
</article><!-- #post-## -->
