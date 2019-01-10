<?php $t_panel_title = get_field('tenant_carousel_title'); ?>

<?php if($t_panel_title != ''){ ?>
<h2 class="section-title"><?php echo $t_panel_title; ?></h2>
<?php } ?>
<?php if (have_rows('t_carousel_panels')) : ?>
<div class="carousel tenants">
	
	<?php 
		while(have_rows('t_carousel_panels')):the_row();

		$t_img = get_sub_field('t_panel');
		$t_img_url = $t_img['sizes']['medium'];
?>
<div class="tenant" style="height:200px; vertical-align:middle; display:inline-block;">
	<img src="<?php echo $t_img_url; ?>">
</div>

<?php endwhile; ?>
</div>
<?php endif;?>