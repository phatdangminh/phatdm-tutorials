<?php
	get_header();
?>

	<div class="wrapper">
		<div class="readable-content blog-single">
			<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<header class="entry-header">
									<?php
										$hide_post_title = get_option( $post->ID . 'hide_post_title', false );
										
										if ( $hide_post_title )
										{
											$hide_post_title_out = 'style="display: none;"';
										}
										else
										{
											$hide_post_title_out = "";
										}
									?>
									<h1 class="entry-title" <?php echo $hide_post_title_out; ?>><?php the_title(); ?></h1>
								</header>
								
								<div class="entry-meta">
									<span class="posted-in">
										<?php
											echo __( 'posted in', 'read' );
											
											echo ' ';
											
											the_category( ', ' );
										?>
									</span>
									<!-- end .posted-in -->
									
									<span class="posted-on">
										<?php echo __( 'on', 'read' ); ?>
										
										<a rel="bookmark" title="<?php the_time(); ?>" href="<?php the_permalink(); ?>"><time class="entry-date" datetime="2012-11-09T23:15:57+00:00"><?php echo get_the_date(); ?></time></a>
									</span>
									<!-- end .posted-on -->
									
									<span class="posted-by">
										<?php echo __( 'by', 'read' ); ?>
										
										<a class="url fn n" rel="author" title="<?php echo __( 'View all posts by ', 'read' ) . get_the_author(); ?>" href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"><?php the_author(); ?></a>
									</span>
									<!-- end .posted-by -->
									
									<?php
										edit_post_link( __( 'Edit', 'read' ), '<span class="edit-link">', '</span>' );
									?>
								</div>
								<!-- end .entry-meta -->
								
								<?php
									if ( has_post_thumbnail() )
									{
										?>
											<div class="featured-image">
												<?php
													the_post_thumbnail( 'full', array( 'alt' => get_the_title(), 'title' => "" ) );
												?>
											</div>
										<?php
									}
								?>
								
								<div class="entry-content clearfix">
									<?php
										the_content();
									?>
									
									<?php
										wp_link_pages( array( 'before' => '<div class="page-links clearfix">' . __( 'Pages:', 'read' ), 'after' => '</div>' ) );
									?>
								</div>
								
								<?php
									if ( get_the_tags() != "" )
									{
										?>
											<footer class="entry-meta post-tags">
												<h3><?php echo __( 'TAGS', 'read' ); ?></h3>
												
												<?php
													the_tags( "", ' ', "" );
												?>
											</footer>
										<?php
									}
								?>
							</article>
							
							<?php
								$about_the_author_module = get_option( 'about_the_author_module', 'Yes' );
								
								if ( $about_the_author_module == 'Yes' )
								{
									get_template_part( 'about', 'author' );
								}
							?>
							
							<nav class="row nav-single">
								<div class="col-sm-6 nav-previous">
									<?php
										previous_post_link( '<h4>' . __( 'PREVIOUS POST', 'read' ) . '</h4>%link', '<span class="meta-nav">←</span> %title' );
									?>
								</div>
								
								<div class="col-sm-6 nav-next">
									<?php
										next_post_link( '<h4>' . __( 'NEXT POST', 'read' ) . '</h4>%link', '%title <span class="meta-nav">→</span>' );
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