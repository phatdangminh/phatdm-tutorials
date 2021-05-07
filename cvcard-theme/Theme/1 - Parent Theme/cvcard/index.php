<?php
	get_header();
?>

	<div class="wrapper">
		<div class="blog-posts readable-content">
			<?php
				if ( have_posts() ) :
					while ( have_posts() ) : the_post();
						?>
							<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
								<footer class="entry-meta">
									<span class="post-format"></span>
									
									<span class="entry-date" title="<?php echo get_the_date( 'Y' ); ?>"><span class="day"><?php echo get_the_date( 'j' ); ?></span><?php echo get_the_date( 'M' ); ?></span>
									
									<!-- <span class="entry-comment"><span class="count">3</span>comments</span> -->
								</footer>
								<!-- end .entry-meta -->  
								
								<header class="entry-header">
									<h1 class="entry-title">
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
										<a <?php echo $hide_post_title_out; ?> rel="bookmark" href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
									</h1>
								</header>
								<!-- end .entry-header -->
								
								<?php
									if ( has_post_thumbnail() )
									{
										?>
											<div class="featured-image">
												<?php
													the_post_thumbnail( 'blog_feat_img', array( 'alt' => get_the_title(), 'title' => "" ) );
												?>
											</div>
											<!-- end .featured-image -->
										<?php
									}
									// end if
								?>
								
								<div class="entry-content clearfix">
									<?php
										if ( has_excerpt() )
										{
											the_excerpt();
											
											echo '<a class="more-link" href="'. get_permalink( get_the_ID() ) . '">' . __( 'Continue reading <span class="meta-nav">→</span>', 'read' ) . '</a>';
										}
										else
										{
											$theme_excerpt = get_option( 'theme_excerpt', 'No' );
											
											if ( $theme_excerpt == 'Yes' )
											{
												the_excerpt();
											}
											elseif ( $theme_excerpt == 'standard' )
											{
												$format = get_post_format();
												
												if ( $format == false )
												{
													the_excerpt();
												}
												else
												{
													the_content( __( 'Continue reading <span class="meta-nav">→</span>', 'read' ) );
												}
												// end if
											}
											else
											{
												the_content( __( 'Continue reading <span class="meta-nav">→</span>', 'read' ) );
											}
											// end if
										}
										// end if
									?>
									
									<?php
										wp_link_pages( array( 'before' => '<div class="page-links clearfix">' . __( 'Pages:', 'read' ), 'after' => '</div>' ) );
									?>
								</div>
								<!-- end .entry-content -->
							</article>
							<!-- end .post -->
						<?php
					endwhile;
				endif;
				wp_reset_query();
			?>
			
			<?php
				get_template_part( 'part', 'pagination' );
			?>
		</div>
		<!-- end .blog-posts -->
	</div>
	<!-- end .wrapper -->
</div>
<!-- end #container -->

<?php
	get_footer();
?>