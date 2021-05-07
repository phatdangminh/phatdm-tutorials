<aside class="about-author">
	<h3><?php echo __( 'WRITTEN BY', 'read' ); ?></h3>
	
	<div class="author-bio">
		<div class="author-img">
			<a href="<?php echo get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>">
				<?php
					echo get_avatar( get_the_author_meta( 'user_email' ), 192, "", get_the_author_meta( 'display_name' ) );
				?>
			</a>
		</div>
		
		<div class="author-info">
			<h4 class="author-name"><?php the_author(); ?></h4>
			
			<p>
				<?php	
					echo get_the_author_meta( 'description' );
				?>
			</p>
		</div>
	</div>
</aside>