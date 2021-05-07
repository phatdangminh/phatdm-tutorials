<?php
/*
Template Name: cvCard
*/

get_header();
?>

	<div class="wrapper">
		<?php
			if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( 'cvcard_template_pages' ) ) :
			endif;
		?>
	</div>
</div>


<!-- PORTFOLIO SINGLE AJAX CONTENT CONTAINER -->
<div class="p-overlay"></div>
<div class="p-overlay"></div>


<!-- ALERT: used for contact form mail delivery alert -->
<div class="site-alert animated"></div>


<?php
	get_footer();
?>