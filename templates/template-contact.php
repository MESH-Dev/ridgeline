<?php 
/* Template Name: Contact Page Template */
get_header(); ?>

<main id="content" class="contact-page text">

	<div class="container">
		<div class="">
			<div class=""><!-- columns-9 -->
				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php if (have_rows('content_row')): ?>
					<div class="row">
						<?php while(have_rows('content_row')):the_row(); 
							$count = count(get_sub_field('content_column'));
							$column = "";
							if(have_rows('content_column')):
								while(have_rows('content_column')):the_row();
								if($count == 3){
									$column = 'class="columns-4"';
								}else if($count == 2){
									$column= 'class="columns-6"';
								}
								$content= get_sub_field('content');
						?>
						<div <?php echo $column; ?>>
							<div class="the-content">
								<?php echo $content; ?>
							</div>
						</div>
							<?php endwhile; endif; ?>
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
			</div>
			<?php echo get_template_part('partials/stay_nearby'); ?>
		</div>
	</div>

</main><!-- End of Content -->

<?php get_footer(); ?>
