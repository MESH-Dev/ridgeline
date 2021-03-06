<?php 
/* Template Name: Landing Template */
get_header(); ?>

<main id="content" class="landing">

	<div class="container">
		<div class="row">
			<div class=""><!-- columns-9 -->
				
				<?php //$banner_img = the_post_thumbnail_url('short-banner'); var_dump($banner_img);?>
				<div class="landing-banner" style="text-align:center; height:550px; width:100%; background-image:url('<?php echo the_post_thumbnail_url('short-banner'); ?>');">
					<div class="curtain" aria-hidden="true"></div>
					<h1 class="landing-title"><?php echo the_title(); ?></h1>
				</div>

				<?php if (have_rows('property_listings')):
				$cnt = 0;
				 while (have_rows('property_listings')):the_row(); 
				 $cnt++;
				 $bg_img = get_sub_field('property_image');
				 $bg_img_url = $bg_img['sizes']['short-banner'];
				 $p_title = get_sub_field('property_title');
				 $p_desc = get_sub_field('property_description');
				 $p_link = get_sub_field('property_link');
				 if($cnt%2 == 0){
				 ?>
				<div class="row listing-row <?php if($cnt > 1){ echo 'hide'; } ?>">
					<div class="listing-wrapper"> 
						<div class="listing right">
							<div class="columns-8 panel no-padding img-wrapper" style="background-image:url('<?php //echo $bg_img_url; ?>');">
								<div class="img" style="background-image:url('<?php echo $bg_img_url; ?>');" >

								</div>
							</div>
							<div class="columns-4 panel no-padding desc">
								<div class="content">
									<h3 class="p-title"><?php echo $p_title; ?></h3>
									<p><?php echo $p_desc; ?></p>
									<a class="p-view pulser" href="<?php echo $p_link; ?>">View the property</a>
								</div>
							</div>
							<!-- <div class="columns-9 panel no-padding img-wrapper img" style="background-image:url('<?php echo $bg_img_url; ?>');"> -->
								<!-- <div class="img" style="background-image:url('<?php echo $bg_img_url; ?>');" >

								</div> -->
							<!-- </div> -->
							<!-- <div class="columns-3 no-padding desc-mobile">
								<div class="content">
									<h3 class="p-title"><?php echo $p_title; ?></h3>
									<p><?php echo $p_desc; ?></p>
									<a class="p-view" href="<?php echo $p_link; ?>">View the property</a>
								</div>
							</div> -->
						</div>
					</div>
				</div>
				<?php }else{ ?>
				<div class="row listing-row <?php if($cnt > 1){ echo 'hide'; } ?>">
					<div class="listing-wrapper">
						<div class="listing left">
							<div class="columns-8 no-padding img-wrapper" style="background-image:url('<?php //echo $bg_img_url; ?>');">
								<div class="img" style="background-image:url('<?php echo $bg_img_url; ?>');" >

								</div>
							</div>
							<div class="columns-4 no-padding desc">
								<div class="content">
									<h3 class="p-title"><?php echo $p_title; ?></h3>
									<p><?php echo $p_desc; ?></p>
									<a class="p-view" href="<?php echo $p_link; ?>">View the property</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			 	<?php } endwhile; endif; ?>
			</div>

			
		</div>
	</div><!-- end container -->
	<?php echo get_template_part('partials/global_contact_form'); ?>
</main><!-- End of Content -->

<?php get_footer(); ?>
