<?php
	get_header();
?>

	<div class="wrapper">
		<div class="readable-content">
			<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<header class="entry-header">
									<h1 class="entry-title"><?php the_title(); ?></h1>
								</header>
								
								<div class="entry-content clearfix">
									<img style="display: block; margin-left: auto; margin-right: auto;" alt="<?php the_title(); ?>" src="<?php echo wp_get_attachment_url(); ?>">
									
									<?php
										the_content();
									?>
									
									<?php
										wp_link_pages( array( 'before' => '<div class="page-links clearfix">' . __( 'Pages:', 'read' ), 'after' => '</div>' ) );
									?>
								</div>
							</article>
							
							<nav class="row nav-single">
								<div class="col-sm-6 nav-previous">
									<?php
										previous_image_link( false, '<span class="meta-nav">←</span>' . __( 'PREVIOUS', 'read' ) );
									?>
								</div>
								
								<div class="col-sm-6 nav-next">
									<?php
										next_image_link( false, __( 'NEXT', 'read' ) . '<span class="meta-nav">→</span>' );
									?>
								</div>
							</nav>
							
							<?php
								comments_template( "", true );
							?>
						<?php
					endwhile;
				endif;
				wp_reset_query();
			?>
		</div>
	</div>
</div>

<?php
	get_footer();
?>