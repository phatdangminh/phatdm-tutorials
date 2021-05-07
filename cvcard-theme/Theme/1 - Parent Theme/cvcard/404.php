<?php
	get_header();
?>

	<div class="wrapper">
		<div class="full-width-content">
			<article class="post hentry">
				<div class="entry-content">
					<div class="row">
						<div class="col-md-12">
							<div class="http-alert">
								<h1><?php echo __( '404', 'read' ); ?></h1>
								
								<p><?php echo __( 'The page you are looking for was not found!', 'read' ); ?></p>
							</div>
							<!-- end .http-alert -->
						</div>
						<!-- end .col-md-12 -->
					</div>
					<!-- end .row -->
				</div>
				<!-- end .entry-content -->
			</article>
			<!-- end .post -->
		</div>
		<!-- end .full-width-content -->
	</div>
	<!-- end .wrapper -->
</div>
<!-- end #container -->

<?php
	get_footer();
?>