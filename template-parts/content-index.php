<?php
/**
 * Template part for displaying page content in page.php.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ACStarter
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class("template-index"); ?> 
style="background-image: url(<?php echo get_template_directory_uri()."/images/bg-grad.png";?>">
    <div class="wrapper cap">
        <?php include get_template_directory()."/images/landingpage-logo.svg";?>
    </div><!--.wrapper.cap-->
</article><!-- #post-## -->
