<div class="contact">
	<div class="row">
		<div class="wrapper">
			<?php 
			$contact_intro = get_field('listing_agent_introduction');
			$form = get_field('listing_agent_contact_form'); ?>
			<div class="columns-6 greeting">
				<div class="content">
					<h2>
						Leave your email for any private showings or inquiries and we’ll get back to you! <br />
						304.744.2759
					</h2>
				</div>
			</div>
			<div class="columns-6 center">
				<div class="content">
					<a class="boxlink" href="<?php echo get_field('global_contact_form', 'options'); ?>">Email us</a>
				</div>
			</div>
		</div>
	</div>
</div>