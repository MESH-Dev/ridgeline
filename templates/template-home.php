<?php 
/* Template Name: Homepage Template */
get_header(); ?>

<main id="content" class="home">

	<div class="container">
		<div class="row slider">
			<div class="content">
			<?php $c_title = get_field('carousel_title'); ?>
			
			<h1 class="title"><?php echo $c_title; ?></h1>
			<div class="carousel-wrapper">
				<div class="curtain" aria-hidden="true"></div>
			<?php if (have_rows('carousel_panels')) : ?>
			<div class="carousel home"><!-- columns-9 -->
				<!-- <div class="curtain" aria-hidden="true"></div> -->
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
		</div>
		
		<section class="page-section">
			<div class="row">
				<?php echo get_template_part('partials/tenants_carousel'); ?>
			</div>
		</section>
		
		<section class="page-section">
			<h2 class="section-title">See where we're located.</h2>
			<div id="map" style="width:100%; height:600px;"></div>
		</section>	
		
		
		<?php echo get_template_part('partials/stay_nearby'); ?>
		
		<!-- </div> -->
	</div><!-- end container -->
	<?php echo get_template_part('partials/global_contact_form'); ?>
</main><!-- End of Content -->

<?php get_footer(); ?>
