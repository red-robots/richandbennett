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
            <?php $current_date = date('Ymd');
            $events = array(7,40,9,38);
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
            $next_id = array_shift($correct_ordered_dates);
            // echo '<pre>';
            // print_r($next_id);
            // echo '</pre>';
            $next_event_copy = get_field("next_event_copy","option");
            $args = array(
                'post_type'=>'page',
                'post__in'=>array(7,9,40,38),
                'orderby'=>'post__in'
            );
            $query = new WP_Query($args);
            if($query->have_posts()):
                $i = 0;?>
                <?php while($query->have_posts()):$query->the_post();
                    $id = get_the_ID();
                    $alt = null;
                    $image = null;
                    $name = null;
                    switch($id):
                        case 7:
                            $name = "st-pats";
                            $image = "/images/icon-st-pats.svg";
                            $alt = "clover";
                            break;
                        case 40:
                            $name = "halloween";
                            $image = "/images/icon-halloween.svg";
                            $alt = "pumpkin";
                            break;
                        case 9:
                            $name = "americrawl";
                            $image = "/images/icon-americrawl.svg";
                            $alt = "star";
                            break;
                        case 38:
                            $name = "nye";
                            $alt = "glass";
                            $image = "/images/icon-nye.svg";
                            break;
                        case 11:
                            $name = "tubing";
                            $image = "/images/icon-tubing.svg";
                            $alt = "tubing";
                            break;
                    endswitch;

                    // echo '<pre>';
                    // echo $next_id . ' && '. $id . ' && '. $next_event_copy;
                    // echo '</pre>';

                    ?>
                    <div class="box js-blocks <?php echo $name;?> <?php if($i == 0) echo "first"; if($i==4) echo "last";?>">
                        <a href="<?php echo get_permalink($id);?>">
                            <?php if($next_event_copy && $id === $next_id):?>
                                <div class="button"><?php echo $next_event_copy;?></div>
                            <?php endif;?>
                            <img src="<?php echo get_template_directory_uri().$image;?>" alt="<?php echo $alt;?>">
                        </a>
                    </div><!--.box-->   
                    <?php $i++;
                endwhile;?>
            <?php $post = get_post(5);
            setup_postdata($post);
            endif;?>
        </div><!--.wrapper-->
    </div><!--.row-3-->     
</article><!-- #post-## -->
