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
									<div class="media-wrap">
										<video style="width: 100%; height: 100%;" preload="none" src="<?php echo wp_get_attachment_url(); ?>"></video>
									</div>
									
									<?php
										the_content();
									?>
									
									<?php
										wp_link_pages( array( 'before' => '<div class="page-links clearfix">' . __( 'Pages:', 'read' ), 'after' => '</div>' ) );
									?>
								</div>
							</article>
							
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