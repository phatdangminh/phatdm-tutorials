<?php
	get_header();
?>

	<div class="wrapper">
		<?php
			if ( have_posts() ) :
				while ( have_posts() ) : the_post();
					?>
						<div id="post-<?php the_ID(); ?>" <?php post_class( 'portfolio-single' ); ?>>
							<div class="row">
								<div class="col-md-8 portfolio-field portfolio-title">
									<h2><?php the_title(); ?></h2>
								</div>
								<!-- end .portfolio-title -->
								
								<div class="col-md-4 portfolio-field portfolio-nav">
									<?php
										next_post_link( '<span class="left-arrow">%link</span> ', "" );
									?>
									
									<?php
										previous_post_link( '<span class="right-arrow">%link</span>', "" );
									?>
									
									<?php
										$portfolio_page_slug = get_option( 'portfolio_page_slug', 'portfolio' );
									?>
									<a class="button back" href="<?php echo get_home_url() . '/#/' . $portfolio_page_slug; ?>"></a>
								</div>
								<!-- end .portfolio-nav -->
							</div>
							<!-- end .row -->
							
							
							<?php
								$pf_type = get_option( $post->ID . 'pf_type', 'Standard' );
								
								if ( $pf_type == 'Direct URL' )
								{
									$pf_direct_url = stripcslashes( get_option( $post->ID . 'pf_direct_url', "" ) );
									$pf_link_new_tab = get_option( $post->ID . 'pf_link_new_tab', true );
									
									?>
										<div class="row">
											<div class="col-md-12">
												<div class="portfolio-field" style="text-align: center;">
													<div class="launch" style="text-align: center;">
														<a class="button primary" <?php if ( $pf_link_new_tab == true ) { echo 'target="_blank"'; } ?> href="<?php echo $pf_direct_url; ?>"><?php the_title(); ?></a>
													</div>
													<!-- end .launch -->
													
													<?php
														$pf_short_description = stripcslashes( get_option( $post->ID . 'pf_short_description', "" ) );
													?>
													<p><?php echo $pf_short_description; ?></p>
													
													<?php
														if ( has_post_thumbnail() )
														{
															the_post_thumbnail( 'full', array( 'alt' => get_the_title(), 'title' => "" ) );
														}
													?>
												</div>
												<!-- end .portfolio-field -->
											</div>
											<!-- end .col-md-12 -->
										</div>
										<!-- end .row -->
									<?php
								}
								elseif ( $pf_type == 'Lightbox Featured Image' )
								{
									?>
										<div class="row">
											<div class="col-md-12">
												<div class="portfolio-field" style="text-align: center;">
													<?php
														$pf_short_description = stripcslashes( get_option( $post->ID . 'pf_short_description', "" ) );
													?>
													<p><?php echo $pf_short_description; ?></p>
													
													<?php
														if ( has_post_thumbnail() )
														{
															the_post_thumbnail( 'full', array( 'alt' => get_the_title(), 'title' => "" ) );
														}
													?>
												</div>
												<!-- end .portfolio-field -->
											</div>
											<!-- end .col-md-12 -->
										</div>
										<!-- end .row -->
									<?php
								}
								// end if
							?>
							
							
							<div class="row content-editor" style="clear: both;">
								<?php
									the_content();
								?>
								
								<?php
									wp_link_pages( array( 'before' => '<div class="page-links" style="clear: both;">' . __( 'Pages:', 'read' ), 'after' => '</div>' ) );
								?>
							</div>
							<!-- end .content-editor -->
							
							
							<div class="row">
								<div class="col-md-12 portfolio-field portfolio-nav bottom">
									<?php
										next_post_link( '<span class="left-arrow">%link</span> ', "" );
									?>
									
									<?php
										previous_post_link( '<span class="right-arrow">%link</span>', "" );
									?>
									
									<?php
										$portfolio_page_slug = get_option( 'portfolio_page_slug', 'portfolio' );
									?>
									<a class="button back" href="<?php echo get_home_url() . '/#/' . $portfolio_page_slug; ?>"></a>
								</div>
								<!-- end .portfolio-nav -->
							</div>
							<!-- end .row -->
						</div>
						<!-- end .portfolio-single --> 
					<?php
				endwhile;
			endif;
			wp_reset_query();
		?>
	</div>
	<!-- end .wrapper -->
</div>
<!-- end #container -->

<?php
	get_footer();
?>