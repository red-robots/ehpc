<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ACStarter
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="wrapper cap">
			<div class="row-1">
				<?php $follow_us_title = get_field("follow_us_title","option");
				$follow_us_text = get_field("follow_us_text","option");
				$facebook_link = get_field("facebook_link","option");
				$instagram_link = get_field("instagram_link","option");
				$twitter_link = get_field("twitter_link","option");
				$contact_text = get_field("contact_text","option");?>
				<div class="col-1">
					<?php if($follow_us_title):?>
						<header><h2><?php echo $follow_us_title;?></h2></header>
					<?php endif;
					if($follow_us_text):?>
						<div class="copy">
							<?php echo $follow_us_text;?>
						</div><!--.copy-->
					<?php endif;?>
					<div class="social">
						<?php if($facebook_link):?>
							<a href="<?php echo $facebook_link;?>"><i class="fa fa-facebook"></i></a>
						<?php endif;
						if($twitter_link):?>
							<a href="<?php echo $twitter_link;?>"><i class="fa fa-twitter"></i></a>
						<?php endif;
						if($instagram_link):?>
							<a href="<?php echo $instagram_link;?>"><i class="fa fa-instagram"></i></a>
						<?php endif;?>
					</div><!--.social-->
				</div><!--.col-1-->
				<div class="col-2 copy">
					<?php if($contact_text):?>
						<?php echo $contact_text;?>
					<?php endif;?>
				</div><!--.col-2-->
			</div><!--.row-1-->
			<div class="row-2">
				<?php $smat_attn = get_field("smat_attn","option");
				$hospital_preparedness_attn = get_field("hospital_preparedness_attn","option");
				$public_health_attn = get_field("public_health_attn","option");
				$emergency_management_attn = get_field("emergency_management_attn","option");?>
				<div class="col-1">
					<header><h3><?php echo get_the_title(6);?></h3></header>
					<?php if($smat_attn):?>
						<div class="copy">
							<?php echo $smat_attn;?>
						</div><!--.copy-->
					<?php endif;?>
				</div><!--.col-1-->
				<div class="col-2">
					<header><h3><?php echo get_the_title(8);?></h3></header>
					<?php if($hospital_preparedness_attn):?>
						<div class="copy">
							<?php echo $hospital_preparedness_attn;?>
						</div><!--.copy-->
					<?php endif;?>
				</div><!--.col-2-->
				<div class="col-3">
					<header><h3><?php echo get_the_title(10);?></h3></header>
					<?php if($public_health_attn):?>
						<div class="copy">
							<?php echo $public_health_attn;?>
						</div><!--.copy-->
					<?php endif;?>
				</div><!--.col-3-->
				<div class="col-4">
					<header><h3><?php echo get_the_title(12);?></h3></header>
					<?php if($emergency_management_attn):?>
						<div class="copy">
							<?php echo $emergency_management_attn;?>
						</div><!--.copy-->
					<?php endif;?>
				</div><!--.col-4-->
			</div><!--.row-2-->
			<div class="row-3">
				<?php $copyright = get_field("copyright","option");
				if($copyright):
					echo $copyright;
				endif;?>
			</div><!--.row-3-->
		</div><!--.cap-->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
