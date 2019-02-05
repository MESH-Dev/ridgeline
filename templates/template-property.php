<?php 
/* Template Name: Property Template */
get_header(); ?>

<main id="content" class="property-single">

	<div class="container">
		<div class="">
			<div class=""><!-- columns-9 -->
				<h1 class="page-title"><?php echo the_title(); ?></h1>

				<div class="banner">
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
					
				</div>
				
				<?php 
					$description = get_field('s_property_description');
					//Property fields
					$space = get_field('available_space');
					$parking = get_field('parking');
					$amenities = get_field('amenities');
					$lease_agreement = get_field('lease_agreement');
					$brochure = get_field('brochure_link');

					//Map Fields
					$latitude = get_field('property_latitiude');
					$longitude = get_field('property_longitude');
					$detail = get_field('detailed_property_description');

					//Faq
					$faqs = get_field('faqs');

				?>
				<div class="row">
					<div class="columns-6">
						<div class="description single">
							<?php echo $description; ?>
						</div>
					</div>

					<div class="columns-6">
						<div class="property-info">
							<?php if ($space != ''){ ?>
							<h3>Available space </br>
								<span class="info">
									<?php echo $space; ?>
								</span>
							</h3>
							<?php } ?>
							<?php if ($parking != ''){ ?>
							<h3>Parking </br>
								<span class="info">
									<?php echo $parking; ?>
								</span>
							</h3>
							<?php } ?>
							<?php if ($amenities != ''){ ?>
							<h3>Available Amenities</br>
								<span class="info">
									<?php echo $amenities; ?>
								</span>
							</h3>
							<?php } ?>
							
							<?php if ($brochure != ''){ ?>
							<div>
								<a href="<?php echo $brochure ?>" target="_blank">Download the brochure</a>
							</div>
							<?php } ?>
							
							
							<?php if ($lease_agreement != ''){ ?>
							<div>
							<a href="<?php echo $lease_agreement ?>" target="_blank">Download the lease agreement</a>
							</div>
							<?php } ?>
							
						</div>
					</div>
				</div>
				
				<section class="map-section section open">
				<div class="section-title-wrapper">
					<h2 class="section-title">View A detailed map.</h2>
					<div class="trigger">
						<?php echo file_get_contents(get_template_directory_uri("/").'/img/Ridgeline_Arrow.svg'); ?>
					</div>
				</div>
				
				
					<div class="row">
						<div class="section-content">
							<div class="columns-6 single-map">
								<div id="map" style="width:100%; height:500px;">
								</div>
							</div>

							<div class="columns-6">
								<div class="map-description">
									<?php echo $detail; ?>
								</div>
							</div>
						</div>
					</div>
				</section>
				
				<?php if($faqs != "") { ?>
				<section class="faq-section section hidden closed">
				<div class="section-title-wrapper">
					<h2 class="section-title">FAQ</h2>
					<div class="trigger">
						<?php echo file_get_contents(get_template_directory_uri("/").'/img/Ridgeline_Arrow.svg'); ?>
					</div>
					<!-- <img class="trigger" src='<?php echo get_template_directory_uri("/"); ?>/img/rl-arrow_up_green.png'> -->
				</div>
				
				
					<div class="row">
						<div class="section-content">
							<div class="columns-6">
								<div class="faq">
									<?php echo $faqs; ?>
								</div>
							</div>
						</div>
					</div>
				</section>
				<?php } ?>

				<div class="row sp-carousel">
					<?php echo get_template_part('partials/tenants_carousel'); ?>
				</div>
				

			</div>

			
		</div>
	</div><!-- end container -->
	<div class="contact agent-contact">
		<div class="row">
			<div class="wrapper">
				<?php 
				$contact_intro = get_field('listing_agent_introduction');
				$form = get_field('listing_agent_contact_form'); ?>
				<div class="columns-6 greeting">
					<div class="content">
					<h2><?php echo $contact_intro; ?></h2>
					</div>
				</div>
				<div class="columns-6">
					<div class="content">
					<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>
					<?php echo do_shortcode($form); ?>
					<?php endwhile; ?>
					</div>
				</div>
			</div>
		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
