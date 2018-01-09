<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-top-level"); ?>>
    <section class="row-1">
        <div class="red-box">
        </div><!--.red-box-->
        <?php $row_1_image = get_field("row_1_image");?>
        <div class="image" <?php if($row_1_image) echo 'style="background-image: url('.$row_1_image['url'].');"';?>>
            <div class="overlay">
            </div><!--.overlay-->
        </div><!--.image-->
        <div class="wrapper cap">
            <div class="wrapper">
                <?php $row_1_button_link = get_field("row_1_button_link");
                $row_1_button_text = get_field("row_1_button_text");
                $row_1_button_text_red = get_field("row_1_button_text_red");
                $row_1_copy = get_field("row_1_copy");?>
                <header><h1><?php the_title();?></h1></header>
                <?php if($row_1_copy):?>
                    <div class="copy">
                        <?php echo $row_1_copy;?>
                    </div><!--.copy-->
                <?php endif;
                if($row_1_button_link&&$row_1_button_text):?>
                    <button>
                        <a href="<?php echo $row_1_button_link;?>">
                            <?php echo $row_1_button_text;?>
                            <?php if($row_1_button_text_red):
                                echo '&nbsp;<span class="red">'.$row_1_button_text_red.'</span>';
                            endif;?>
                        </a>
                    </button>
                <?php endif;?>
            </div><!--.wrapper-->
        </div><!--.wrapper.cap-->
    </section><!--.row-1-->
    <section class="row-2">
        <div class="wrapper cap">
            <div class="col-1">
                <?php $row_2_tile = get_field("row_2_title");
                $row_2_copy = get_field("row_2_copy");?>
                <?php if($row_2_tile):?>
                    <header><h2><?php echo $row_2_tile;?></h2></header>
                <?php endif;
                if($row_2_copy):?>
                    <div class="copy">
                        <?php echo $row_2_copy;?>
                    </div><!--.copy-->
                <?php endif;?>
            </div><!--.col-1-->
            <div class="col-2">
            </div><!--.col-2-->
        </div><!--.wrapper.cap-->
    </section><!--.row-2-->
    <section class="row-3">
        <div class="wrapper cap">
            <?php $today = date('Ymd');
            $tax = get_field("tax");
            $news_title = get_field("news_title");
            $events_title = get_field("events_title");
            $news_button_text = get_field("news_button_text");
            $news_button_link = get_field("news_button_link");
            $events_button_text = get_field("events_button_text");
            $events_button_link = get_field("events_button_link");
            $news_events_read_more_text = get_field("news_events_read_more_text","option");?>
            <div class="col">
                <?php if($news_title):?>
                    <header>
                        <h2><?php echo $news_title;?></h2>
                    </header>
                <?php endif;
                if($tax):
                    $args = array(
                        'post_type'=>'post',
                        'posts_per_page'=>-1,
                        'meta_type' => 'NUMERIC',
                        'meta_query' => array(
                            'relation' => 'OR',
                            array(
                                'key' => 'date',
                                'value' => NULL,
                                'compare' => '='
                            ),
                            array(
                                'key' => 'date',
                                'compare' => 'NOT EXISTS'
                            ),
                            array(
                                'key' => 'date',
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
                        <?php wp_reset_postdata();
                    endif;
                endif;?>
                <?php if($news_button_link&&$news_button_text):?>
                    <button>
                        <a href="<?php echo $news_button_link;?>">
                            <?php echo $news_button_text;?>
                        </a>
                    </button>
                <?php endif;?>
            </div><!--.col-->
            <div class="col">
                <?php if($events_title):?>
                    <header>
                        <h2><?php echo $events_title;?></h2>
                    </header>
                <?php endif;
                if($tax):
                    $args = array(
                        'post_type'=>'event',
                        'posts_per_page'=>-1,
                        'meta_type' => 'NUMERIC',
                        'meta_query' => array(
                            'relation' => 'OR',
                            array(
                                'key' => 'date',
                                'value' => NULL,
                                'compare' => '='
                            ),
                            array(
                                'key' => 'date',
                                'compare' => 'NOT EXISTS'
                            ),
                            array(
                                'key' => 'date',
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
                        <?php wp_reset_postdata();
                    endif;
                endif;?>
                <?php if($events_button_link&&$events_button_text):?>
                    <button>
                        <a href="<?php echo $events_button_link;?>">
                            <?php echo $events_button_text;?>
                        </a>
                    </button>
                <?php endif;?>
            </div><!--.col-->
        </div><!--.wrapper.cap-->
    </section><!--.row-3-->
    <section class="row-4">
        <div class="red-box">
        </div><!--.red-box-->
        <?php $row_4_image = get_field("row_4_image");?>
        <div class="image" <?php if($row_4_image) echo 'style="background-image: url('.$row_4_image['url'].');"';?>>
            <div class="overlay">
            </div><!--.overlay-->
        </div><!--.image-->
        <div class="wrapper cap">
            <div class="wrapper">
                <?php $row_4_title = get_field("row_4_title");
                $row_4_button_link = get_field("row_4_button_link");
                $row_4_button_text = get_field("row_4_button_text");
                $row_4_button_text_red = get_field("row_4_button_text_red");
                $row_4_copy = get_field("row_4_copy");?>
                <?php if($row_4_title):?>
                    <header><h2><?php echo $row_4_title;?></h2></header>
                <?php endif; 
                if($row_4_copy):?>
                    <div class="copy">
                        <?php echo $row_4_copy;?>
                    </div><!--.copy-->
                <?php endif;
                if($row_4_button_link&&$row_4_button_text):?>
                    <button>
                        <a href="<?php echo $row_4_button_link;?>">
                            <?php echo $row_4_button_text;?>
                            <?php if($row_4_button_text_red):
                                echo '&nbsp;<span class="red">'.$row_4_button_text_red.'</span>';
                            endif;?>
                        </a>
                    </button>
                <?php endif;?>
            </div><!--.wrapper-->
        </div><!--.wrapper.cap-->
    </section><!--.row-4-->
    <section class="row-5">
        <div class="wrapper cap">
            <?php $row_5_title = get_field("row_5_title");
            $row_5_button_link = get_field("row_5_button_link");
            $row_5_button_text = get_field("row_5_button_text");
            $row_5_copy = get_field("row_5_copy");?>
            <?php if($row_5_title):?>
                <header><h2><?php echo $row_5_title;?></h2></header>
            <?php endif; 
            if($row_5_copy):?>
                <div class="copy">
                    <?php echo $row_5_copy;?>
                </div><!--.copy-->
            <?php endif;
            if($row_5_button_link&&$row_5_button_text):?>
                <button>
                    <a href="<?php echo $row_5_button_link;?>">
                        <?php echo $row_5_button_text;?>
                    </a>
                </button>
            <?php endif;?>
        </div><!--.wrapper.cap-->
    </section><!--.row-5-->
    <section class="row-6">
        <div class="wrapper cap">
            <?php for($i=1;$i<4;$i++):?>
                <div class="col">
                    <?php $image = get_field("row_6_col_{$i}_image");
                    $button_link = get_field("row_6_col_{$i}_button_link");
                    $button_text = get_field("row_6_col_{$i}_button_text");
                    $copy = get_field("row_6_col_{$i}_copy");?>
                    <?php if($image):?>
                        <img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
                    <?php endif;?>
                    <?php if($copy):?>
                        <div class="copy">
                            <?php echo $copy;?>
                        </div><!--.copy-->
                    <?php endif;
                    if($button_link&&$button_text):?>
                        <button>
                            <a href="<?php echo $button_link;?>">
                                <?php echo $button_text;?>
                            </a>
                        </button>
                    <?php endif;?>
                </div><!--.col-->
            <?php endfor;?>
        </div><!--.wrapper.cap-->
    </section><!--.row-6-->
</article><!-- #post-## -->
