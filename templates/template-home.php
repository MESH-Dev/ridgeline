<?php 
/* Template Name: Homepage Template */
get_header(); ?>

<main id="content" class="home">

	<div class="container">
		<div class="row">
			<div class=""><!-- columns-9 -->


				<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>

					<h1><?php the_title(); ?></h1>

					<?php the_content(); ?>

				<?php endwhile; ?>
			</div>
	
			<div id="map" style="width:100%; height:600px;"></div>

		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
