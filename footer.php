 
<?php if(is_page_template('templates/template-property.php') || is_page_template('templates/template-home.php')){?>

<?php 
//Notes on Google maps
// 1. Most examples add "initmap" as a callback in the api script call.  Unless you are calling your function "initmap",
//    or you want to update the end of the api string, don't call initmap as a callback
// 2. Do not use async or defer in any google calls, or your own script calls
// 3. While calling the map script from google at the end of the body is fine, make sure that any accompanying script files
//    are called after the map.google script has loaded
?>

<!-- <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyBJbYC9LC6mZ99BDsJx7vVlvYAaR3kJMAY"></script> -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/OverlappingMarkerSpiderfier/1.0.3/oms.min.js"></script>
<?php } ?>
<footer class="site-footer">

	<div class="container">
		<div class="row">
			<!-- <div class="columns-12"> -->
				<!-- <nav class="main-navigation">
					<?php //wp_nav_menu( array('menu_id' => 'footer-menu', 'theme_location' => 'footer-menu') ); ?>
				</nav> -->
				<div class="columns-6">
					Copyright &copy; <?php echo date('Y'); ?> Ridgline, Inc.
				</div>
				<div class="columns-6 signature">
					Site by <a href="http://meshfresh.com" target="_blank">MESH</a>
				</div>
			<!-- </div> --><!-- End of Footer -->
		</div>
	</div>

</footer>

<?php wp_footer(); ?>

</body>
</html>
