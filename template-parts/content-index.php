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
    <div class="wrapper cap clear-bottom">
        <div class="box st-pats first square">
            <a href="<?php echo get_permalink(7);?>">
                <img src="<?php echo get_template_directory_uri()."/images/clover.png";?>" alt="clover">
                <header><h2><?php echo get_the_title(7);?></h2></header>
            </a>
        </div><!--.box-->
        <div class="box americrawl square">
            <a href="<?php echo get_permalink(9);?>">
                <img src="<?php echo get_template_directory_uri()."/images/star.png";?>" alt="star">
                <header><h2><?php echo get_the_title(9);?></h2></header>
            </a>
        </div><!--.box-->
        <div class="box nye square">
            <a href="<?php echo get_permalink(38);?>">
                <img src="<?php echo get_template_directory_uri()."/images/glass.png";?>" alt="glass">
                <header><h2><?php echo get_the_title(38);?></h2></header>
            </a>
        </div><!--.box-->
        <div class="box halloween square">
            <a href="<?php echo get_permalink(40);?>">
                <img src="<?php echo get_template_directory_uri()."/images/pumpkin.png";?>" alt="pumpkin">
                <header><h2><?php echo get_the_title(40);?></h2></header>
            </a>
        </div><!--.box-->
        <div class="box tubing last square">
            <a href="<?php echo get_permalink(11);?>">
                <img src="<?php echo get_template_directory_uri()."/images/tubing.png";?>" alt="tubing">
                <header><h2><?php echo get_the_title(11);?></h2></header>
            </a>
        </div><!--.box-->        
    </div><!--.wrapper-->
</article><!-- #post-## -->
