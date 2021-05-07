<?php
/*
Template Name: Full-width Page
*/

get_header();
?>

	<div class="wrapper">
		<div class="full-width-content">
			<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<header class="entry-header">
									<h1 class="entry-title"><?php the_title(); ?></h1>
								</header>
								<!-- end .entry-header -->
								
								<div class="entry-content clearfix">
									<?php
										the_content();
									?>
									
									<?php
										wp_link_pages( array( 'before' => '<div class="page-links clearfix">' . __( 'Pages:', 'read' ), 'after' => '</div>' ) );
									?>
								</div>
								<!-- end .entry-content -->
							</article>
							<!-- end .page -->
							
							<?php
								comments_template( "", true );
							?>
						<?php
					endwhile;
				endif;
				wp_reset_query();
			?>
		</div>
		<!-- end .full-width-content --> 
	</div>
	<!-- end .wrapper -->
</div>
<!-- end #container -->

<?php
	get_footer();
?>