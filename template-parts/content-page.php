<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>
<article id="post-<?php the_ID(); ?>" <?php post_class("template-page"); ?>>
    <div class="wrapper cap">
        <div class="wrapper">
            <header>
                <h1><?php the_title();?></h1>
            </header>
            <div class="copy">
                <?php the_content();?>
            </div><!--.copy-->
        </div><!--.wrapper-->
    </div><!--.wrapper-->
</article><!-- #post-## -->
