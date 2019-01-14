<?php get_header(); ?>

<main id="content" class="text one">

	<div class="container">
		<div class="">
			<div class=""><!-- columns-9 -->
				<h1 class="page-title"><?php the_title(); ?></h1>
				<?php if (have_rows('content_row')): ?>
					
						<?php while(have_rows('content_row')):the_row(); 
							$count = count(get_sub_field('content_column'));
							$column = "";
							if(have_rows('content_column')):?>
							<div class="row">
							<?php
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
						<?php endwhile; ?>
					</div>
				<?php endif; ?>
							<?php endwhile; endif; ?>
						
			</div>
			
		</div>
	</div><!-- end container -->
	<?php echo get_template_part('partials/global_contact_form'); ?>
</main><!-- End of Content -->

<?php get_footer(); ?>
