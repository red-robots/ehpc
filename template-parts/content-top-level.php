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
    <section class="row-1 flexslider">
        <?php $flexslider = get_field("flexslider");
        if($flexslider):?>
            <ul class="slides">
                <?php foreach($flexslider as $row):
                    $row_1_image = $row["row_1_image"];
                    $row_1_button_link = $row["row_1_button_link"];
                    $row_1_button_text = $row["row_1_button_text"];
                    $row_1_button_text_red = $row["row_1_button_text_red"];
                    $row_1_copy = $row["row_1_copy"];?>
                    <li class="slide">
                        <div class="red-box">
                        </div><!--.red-box-->
                        <div class="image" <?php if($row_1_image) echo 'style="background-image: url('.$row_1_image['url'].');"';?>>
                            <div class="overlay">
                            </div><!--.overlay-->
                        </div><!--.image-->
                        <div class="wrapper cap">
                            <div class="wrapper">
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
                    </li>
                <?php endforeach;?>
            </ul>
        <?php endif;?>
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
                <!-- Begin MailChimp Signup Form -->
                <link href="//cdn-images.mailchimp.com/embedcode/classic-10_7.css" rel="stylesheet" type="text/css">
                <style type="text/css">
                    #mc_embed_signup{background:#fff; clear:left; font:14px Helvetica,Arial,sans-serif; }
                    /* Add your own MailChimp form style overrides in your site stylesheet or in this style block.
                    We recommend moving this block and the preceding CSS link to the HEAD of your HTML file. */
                </style>
                <div id="mc_embed_signup">
                <form action="https://facebook.us16.list-manage.com/subscribe/post?u=702f9f3e57a10aa5822fa106e&amp;id=d336230991" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
                    <div id="mc_embed_signup_scroll">
                    <h2>Subscribe to our mailing list</h2>
                <div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
                <div class="mc-field-group">
                    <label for="mce-FNAME">First Name </label>
                    <input type="text" value="" name="FNAME" class="" id="mce-FNAME">
                </div>
                <div class="mc-field-group">
                    <label for="mce-LNAME">Last Name </label>
                    <input type="text" value="" name="LNAME" class="" id="mce-LNAME">
                </div>
                <div class="mc-field-group">
                    <label for="mce-EMAIL">Email Address  <span class="asterisk">*</span>
                </label>
                    <input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
                </div>
                <div class="mc-field-group size1of2">
                    <label for="mce-MMERGE5">Office Phone Number </label>
                    <input type="text" name="MMERGE5" class="" value="" id="mce-MMERGE5">
                </div>
                <div class="mc-field-group size1of2">
                    <label for="mce-MMERGE3">Mobile Phone Number </label>
                    <input type="text" name="MMERGE3" class="" value="" id="mce-MMERGE3">
                </div>
                <div class="mc-field-group">
                    <label for="mce-MMERGE4">Position Title </label>
                    <input type="text" value="" name="MMERGE4" class="" id="mce-MMERGE4">
                </div>
                <div class="mc-field-group">
                    <label for="mce-MMERGE6">County </label>
                    <input type="text" value="" name="MMERGE6" class="" id="mce-MMERGE6">
                </div>
                <div class="mc-field-group input-group">
                    <strong>Representation </strong>
                    <ul><li><input type="checkbox" value="1" name="group[2467][1]" id="mce-group[2467]-2467-0"><label for="mce-group[2467]-2467-0">Hospital Emergency Management</label></li>
                <li><input type="checkbox" value="2" name="group[2467][2]" id="mce-group[2467]-2467-1"><label for="mce-group[2467]-2467-1">Emergency Management</label></li>
                <li><input type="checkbox" value="4" name="group[2467][4]" id="mce-group[2467]-2467-2"><label for="mce-group[2467]-2467-2">Emergency Medical Services Representative</label></li>
                <li><input type="checkbox" value="8" name="group[2467][8]" id="mce-group[2467]-2467-3"><label for="mce-group[2467]-2467-3">SMAT II Member</label></li>
                <li><input type="checkbox" value="16" name="group[2467][16]" id="mce-group[2467]-2467-4"><label for="mce-group[2467]-2467-4">SMAT III Team Leader</label></li>
                <li><input type="checkbox" value="32" name="group[2467][32]" id="mce-group[2467]-2467-5"><label for="mce-group[2467]-2467-5">Ambulance Strike Team Leader</label></li>
                <li><input type="checkbox" value="64" name="group[2467][64]" id="mce-group[2467]-2467-6"><label for="mce-group[2467]-2467-6">Public Health Preparedness Coordinator</label></li>
                <li><input type="checkbox" value="128" name="group[2467][128]" id="mce-group[2467]-2467-7"><label for="mce-group[2467]-2467-7">Public Health Eastern Regional Office</label></li>
                <li><input type="checkbox" value="256" name="group[2467][256]" id="mce-group[2467]-2467-8"><label for="mce-group[2467]-2467-8">NC OEMS Eastern Regional Office</label></li>
                <li><input type="checkbox" value="512" name="group[2467][512]" id="mce-group[2467]-2467-9"><label for="mce-group[2467]-2467-9">USAR Leader</label></li>
                <li><input type="checkbox" value="1024" name="group[2467][1024]" id="mce-group[2467]-2467-10"><label for="mce-group[2467]-2467-10">Medical Ambulance Bus</label></li>
                <li><input type="checkbox" value="2048" name="group[2467][2048]" id="mce-group[2467]-2467-11"><label for="mce-group[2467]-2467-11">Department of Defense</label></li>
                <li><input type="checkbox" value="4096" name="group[2467][4096]" id="mce-group[2467]-2467-12"><label for="mce-group[2467]-2467-12">Hospice (Preparedness Planner)</label></li>
                <li><input type="checkbox" value="8192" name="group[2467][8192]" id="mce-group[2467]-2467-13"><label for="mce-group[2467]-2467-13">Home Health Agency (Preparedness Planner)</label></li>
                <li><input type="checkbox" value="16384" name="group[2467][16384]" id="mce-group[2467]-2467-14"><label for="mce-group[2467]-2467-14">Rural Health Clinic &amp; Federally Qualified Health Centers (Preparedness Planner)</label></li>
                <li><input type="checkbox" value="32768" name="group[2467][32768]" id="mce-group[2467]-2467-15"><label for="mce-group[2467]-2467-15">Long Term Care (Preparedness Planner)</label></li>
                <li><input type="checkbox" value="65536" name="group[2467][65536]" id="mce-group[2467]-2467-16"><label for="mce-group[2467]-2467-16">Intermediate Care Facilities for Individuals with Intellectual Disabilities (Preparedness Planner)</label></li>
                <li><input type="checkbox" value="131072" name="group[2467][131072]" id="mce-group[2467]-2467-17"><label for="mce-group[2467]-2467-17">County EMS Director</label></li>
                <li><input type="checkbox" value="262144" name="group[2467][262144]" id="mce-group[2467]-2467-18"><label for="mce-group[2467]-2467-18">County Medical Director</label></li>
                <li><input type="checkbox" value="1048576" name="group[2467][1048576]" id="mce-group[2467]-2467-19"><label for="mce-group[2467]-2467-19">Other Healthcare Coalition</label></li>
                <li><input type="checkbox" value="2097152" name="group[2467][2097152]" id="mce-group[2467]-2467-20"><label for="mce-group[2467]-2467-20">Other</label></li>
                </ul>
                </div>
                    <div id="mce-responses" class="clear">
                        <div class="response" id="mce-error-response" style="display:none"></div>
                        <div class="response" id="mce-success-response" style="display:none"></div>
                    </div>    <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
                    <div style="position: absolute; left: -5000px;" aria-hidden="true"><input type="text" name="b_702f9f3e57a10aa5822fa106e_d336230991" tabindex="-1" value=""></div>
                    <div class="clear"><input type="submit" value="Subscribe" name="subscribe" id="mc-embedded-subscribe" class="button"></div>
                    </div>
                </form>
                </div>
                <script type='text/javascript' src='//s3.amazonaws.com/downloads.mailchimp.com/js/mc-validate.js'></script><script type='text/javascript'>(function($) {window.fnames = new Array(); window.ftypes = new Array();fnames[1]='FNAME';ftypes[1]='text';fnames[2]='LNAME';ftypes[2]='text';fnames[0]='EMAIL';ftypes[0]='email';fnames[5]='MMERGE5';ftypes[5]='phone';fnames[3]='MMERGE3';ftypes[3]='phone';fnames[4]='MMERGE4';ftypes[4]='text';fnames[6]='MMERGE6';ftypes[6]='text';}(jQuery));var $mcj = jQuery.noConflict(true);</script>
                <!--End mc_embed_signup-->
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
            $news_events_read_more_text = get_field("news_events_read_more_text","option");
            $page_id = get_the_ID();?>
            <div class="col">
                <?php if($news_title):?>
                    <header>
                        <h2><?php echo $news_title;?></h2>
                    </header>
                <?php endif;
                if($tax):
                    $args = array(
                        'post_type'=>'post',
                        'posts_per_page'=>3,
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
                                                <a href="<?php echo esc_url(add_query_arg( 'from', $page_id, get_the_permalink()));?>">
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
                        'posts_per_page'=>3,
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
                                                <a href="<?php echo esc_url(add_query_arg( 'from', $page_id, get_the_permalink()));?>">
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
