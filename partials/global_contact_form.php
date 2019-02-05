<div class="contact">
	<div class="row">
		<div class="wrapper">
			<?php 
			$contact_intro = get_field('listing_agent_introduction');
			$form = get_field('listing_agent_contact_form'); ?>
			<div class="columns-6 greeting">
				<div class="content">
					<h2>
						Email us if you have any inquiries or give us a call at 304.744.2759 to schedule a private showing!
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