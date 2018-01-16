<?php
/**
 * Template part for displaying page content in page-news.php and page-events.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */
global $post_type;
?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-news-events clear-bottom"); ?>> 
    <?php if($post_type):?>
        <div class="wrapper cap">
            <header>
                <h1><?php the_title();?></h1>
            </header>
            <?php $today = date('Ymd');
            $tax = get_field('tax');
            $news_events_read_more_text = get_field("news_events_read_more_text","option");
            $args = array(
                'post_type'=>$post_type,
                'paged'=>$paged,
                'posts_per_page'=>10,
                'meta_key'=> 'date',
                'orderby'=> 'meta_value_num',
                'order'=>'ASC',
                'meta_type' => 'NUMERIC',
                'meta_query' => array(
                    'relation' => 'OR',
                    array(
                        'key' => 'rolloff_date',
                        'value' => NULL,
                        'compare' => '='
                    ),
                    array(
                        'key' => 'rolloff_date',
                        'compare' => 'NOT EXISTS'
                    ),
                    array(
                        'key' => 'rolloff_date',
                        'value' => $today,
                        'compare' => '>'
                    )
                ),
                'tax_query'=> array(
                    array(
                        'taxonomy'=>'category',
                        'field'=>'term_id',
                        'terms'=>$tax,
                    )
                )
            );
            $query = new WP_Query($args);
            if($query->have_posts()):?>
                <div class="wrapper">
                    <?php while($query->have_posts()):$query->the_post();?>
                        <div class="news-event clear-bottom">
                            <div class="col-1">
                                <?php $date = get_field("date");?>
                                <?php $splits = explode(',',$date);
                                echo str_replace(' ','</br>',$splits[0])?>
                            </div><!--.col-1-->
                            <div class="col-2">
                                <?php if(get_the_excerpt()):?>
                                    <div class="row-1 copy">
                                        <?php the_excerpt();?>
                                    </div><!--.row-1-->
                                <?php endif;
                                if($news_events_read_more_text):?>
                                    <div class="row-2">
                                        <a href="<?php echo get_the_permalink();?>">
                                            <?php echo $news_events_read_more_text.'&nbsp;&nbsp;&nbsp;<i class="fa fa-chevron-right"></i>';?>
                                        </a>
                                    </div><!--.row-2-->
                                <?php endif;?>
                            </div><!--.col-2-->
                        </div><!--.news-event-->
                    <?php endwhile;?>
                </div><!--.wrapper-->
                <nav class="pagination">
                    <?php pagi_posts_nav($query);?>
                </nav>
                <?php wp_reset_postdata();
            endif;?>
        </div><!--.wrapper.cap-->
    <?php endif;?>
</article><!-- #post-## -->
