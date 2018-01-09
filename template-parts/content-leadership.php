<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-leadership"); ?>>
    <div class="wrapper cap">
        <section class="row-1">
            <header>
                <h1><?php the_title();?></h1>
            </header>
            <?php if(get_the_content()):?>
                <div class="copy">
                    <?php the_content();?>
                </div><!--.copy-->
            <?php endif;?>
        </section><!--.row-1-->
        <?php $tax = get_field("tax");
            $args = array(
            'post_type'=>'leader',
            'posts_per_page'=>-1,
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
            <section class="row-2">
                <?php while($query->have_posts()):$query->the_post();?>
                    <div class="leader clear-bottom">
                        <?php $image = get_field("image");
                        if($image):?>
                            <div class="col-1">
                                <img src="<?php echo $image['sizes']['large'];?>" alt="<?php echo $image['alt'];?>">
                            </div><!--.col-1-->
                        <?php endif;?>
                        <div class="col-2 copy">
                            <?php the_content();?>
                        </div><!--.col-2-->
                    </div><!--.leader-->
                <?php endwhile;?>
            </section><!--.row-2-->
            <?php wp_reset_postdata();
        endif;?>
    </div><!--.wrapper.cap-->
</article><!-- #post-## -->
