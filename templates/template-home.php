<?php 
/* Template Name: Homepage Template */
get_header(); ?>

<main id="content" class="home">

	<div class="container">
		<div class="row slider">
			<div class="content">
			<?php $c_title = get_field('carousel_title'); ?>
			
			<h1 class="title"><?php echo $c_title; ?></h1>

			<?php if (have_rows('carousel_panels')) : ?>
			<div class="carousel home"><!-- columns-9 -->
			<?php 
					while(have_rows('carousel_panels')):the_row();

					$img = get_sub_field('panel');
					$img_url = $img['sizes']['short-banner'];
			?>
			<div class="panel" style="background-image:url(<?php echo $img_url; ?> );"></div>

			<?php endwhile; ?>
			</div>
			<?php endif; ?>
			
			</div>
		</div>
		<div class="row">
			<?php echo get_template_part('partials/tenants_carousel'); ?>
		</div>

			<h2 class="section-title">See where we're located</h2>
			<div id="map" style="width:100%; height:600px;"></div>

			<h2 class="section-title">Looking to stay nearby?</h2>
			<div class="m-partners">
				<div class="row">
					<div class="columns-5 m-partner">
						<img src='<?php echo get_template_directory_uri("/"); ?>/img/Monarch_Horizontal_Grayscale_CMYK_familyofhotels@2x.png'>
					</div>
					<div class="columns-2 offset-by-1 m-partner">
						<img src='<?php echo get_template_directory_uri("/"); ?>/img/hamptoninn_gray.png'>
					</div>
					<div class="columns-2 m-partner">
						<img src='<?php echo get_template_directory_uri("/"); ?>/img/holidayinnsuites_withcharlestonwest.png'>
					</div>
					<div class="columns-2 m-partner">
						<img src='<?php echo get_template_directory_uri("/"); ?>/img/wingate_gray_lighter.png'>
					</div>
				</div>
			</div>

		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
