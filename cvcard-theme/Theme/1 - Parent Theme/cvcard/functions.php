<?php

	function theme_enqueue_login()
	{
		wp_enqueue_script( 'jquery' );
	}
	
	add_action( 'login_enqueue_scripts', 'theme_enqueue_login' );


/* ============================================================================================================================================= */


	function theme_enqueue_admin()
	{
		wp_enqueue_style( 'adminstyle', get_template_directory_uri() . '/admin/adminstyle.css' );
		wp_enqueue_style( 'colorpicker', get_template_directory_uri() . '/admin/colorpicker/colorpicker.css' );
		wp_enqueue_style( 'thickbox' );
		
		wp_enqueue_script( 'thickbox' );
		wp_enqueue_script( 'media-upload' );
	}
	
	add_action( 'admin_enqueue_scripts', 'theme_enqueue_admin' );


/* ============================================================================================================================================= */


	function theme_enqueue()
	{
		$extra_char_set = false;
		global $subset;
		$subset = '&subset=';
		
		
		if ( get_option( 'char_set_latin', false ) ) { $subset .= 'latin,'; $extra_char_set = true; }
		
		if ( get_option( 'char_set_latin_ext', false ) ) { $subset .= 'latin-ext,'; $extra_char_set = true; }
		
		if ( get_option( 'char_set_cyrillic', false ) ) { $subset .= 'cyrillic,'; $extra_char_set = true; }
		
		if ( get_option( 'char_set_cyrillic_ext', false ) ) { $subset .= 'cyrillic-ext,'; $extra_char_set = true; }
		
		if ( get_option( 'char_set_greek', false ) ) { $subset .= 'greek,'; $extra_char_set = true; }
		
		if ( get_option( 'char_set_greek_ext', false ) ) { $subset .= 'greek-ext,'; $extra_char_set = true; }
		
		if ( get_option( 'char_set_vietnamese', false ) ) { $subset .= 'vietnamese,'; $extra_char_set = true; }
		
		if ( $extra_char_set == false ) { $subset = ""; } else { $subset = substr( $subset, 0, -1 ); }
		
		
		wp_enqueue_style( 'lato', '//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,100italic,300italic,400italic,700italic,900italic' . $subset, null, null );
		wp_enqueue_style( 'tangerine', '//fonts.googleapis.com/css?family=Tangerine:400,700' . $subset, null, null );
		wp_enqueue_style( 'oswald', '//fonts.googleapis.com/css?family=Oswald' . $subset, null, null );
		wp_enqueue_style( 'print', get_template_directory_uri() . '/css/print.css', null, null, 'print' );
		wp_enqueue_style( 'normalize', get_template_directory_uri() . '/css/normalize.css', null, null );
		wp_enqueue_style( 'bootstrap', get_template_directory_uri() . '/css/bootstrap.min.css', null, null );
		wp_enqueue_style( 'nprogress', get_template_directory_uri() . '/js/nprogress/nprogress.css', null, null );
		wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css', null, null );
		wp_enqueue_style( 'font-awesome', get_template_directory_uri() . '/css/fonts/font-awesome/css/font-awesome.min.css', null, null );
		wp_enqueue_style( 'fontello', get_template_directory_uri() . '/css/fonts/fontello/css/fontello.css', null, null );
		wp_enqueue_style( 'fancybox', get_template_directory_uri() . '/css/jquery.fancybox-1.3.4.css', null, null );
		wp_enqueue_style( 'prettify', get_template_directory_uri() . '/js/google-code-prettify/prettify.css', null, null );
		wp_enqueue_style( 'uniform', get_template_directory_uri() . '/css/uniform.default.css', null, null );
		wp_enqueue_style( 'flexslider', get_template_directory_uri() . '/css/flexslider.css', null, null );
		wp_enqueue_style( 'mediaelementplayer', get_template_directory_uri() . '/js/mediaelement/mediaelementplayer.css', null, null );
		wp_enqueue_style( 'tooltipster', get_template_directory_uri() . '/css/tooltipster.css', null, null );
		wp_enqueue_style( 'main', get_template_directory_uri() . '/css/main.css', null, null );
		wp_enqueue_style( 'wp-fix', get_template_directory_uri() . '/css/wp-fix.css', null, null );
		
		
		wp_enqueue_script( 'modernizr', get_template_directory_uri() . '/js/modernizr.custom.js', null, null );
		wp_enqueue_script( 'jquery' );
		wp_enqueue_script( 'jquery-migrate', get_template_directory_uri() . '/js/jquery-migrate-1.2.1.min.js', null, null, true );
		wp_enqueue_script( 'address', get_template_directory_uri() . '/js/jquery.address-1.5.min.js', null, null, true );
		wp_enqueue_script( 'triple-layout', get_template_directory_uri() . '/js/triple.layout.js', null, null, true );
		wp_enqueue_script( 'smoothscroll', get_template_directory_uri() . '/js/smoothscroll.js', null, null, true );
		wp_enqueue_script( 'nprogress', get_template_directory_uri() . '/js/nprogress/nprogress.js', null, null, true );
		wp_enqueue_script( 'fastclick', get_template_directory_uri() . '/js/fastclick.js', null, null, true );
		wp_enqueue_script( 'imagesloaded', get_template_directory_uri() . '/js/jquery.imagesloaded.min.js', null, null, true );
		wp_enqueue_script( 'isotope', get_template_directory_uri() . '/js/jquery.isotope.min.js', null, null, true );
		wp_enqueue_script( 'flexslider', get_template_directory_uri() . '/js/jquery.flexslider-min.js', null, null, true );
		wp_enqueue_script( 'fitvids', get_template_directory_uri() . '/js/jquery.fitvids.js', null, null, true );
		wp_enqueue_script( 'validate', get_template_directory_uri() . '/js/jquery.validate.min.js', null, null, true );
		wp_enqueue_script( 'uniform', get_template_directory_uri() . '/js/jquery.uniform.min.js', null, null, true );
		wp_enqueue_script( 'fancybox', get_template_directory_uri() . '/js/jquery.fancybox-1.3.4.pack.js', null, null, true );
		wp_enqueue_script( 'tooltipster', get_template_directory_uri() . '/js/jquery.tooltipster.min.js', null, null, true );
		wp_enqueue_script( 'prettify', get_template_directory_uri() . '/js/google-code-prettify/prettify.js', null, null, true );
		wp_enqueue_script( 'twitter-fetcher', get_template_directory_uri() . '/js/twitterFetcher_v10_min.js', null, null, true );
		wp_enqueue_script( 'mediaelement-and-player', get_template_directory_uri() . '/js/mediaelement/mediaelement-and-player.min.js', null, null, true );
		wp_enqueue_script( 'send-mail', get_template_directory_uri() . '/js/send-mail.js', null, null, true );
		wp_enqueue_script( 'classie', get_template_directory_uri() . '/js/classie.js', null, null, true );
		
		$google_map_api_key = get_option('google_map_api_key', "");
		
		if ($google_map_api_key != "")
		{
			wp_enqueue_script('cvcard-google-map', '//maps.googleapis.com/maps/api/js?key=' . esc_attr($google_map_api_key), null, null, true);
		}
		else
		{
			wp_enqueue_script('cvcard-google-map', '//maps.googleapis.com/maps/api/js', null, null, true);
		}
		
		wp_enqueue_script( 'main', get_template_directory_uri() . '/js/main.js', null, null, true );
		wp_enqueue_script( 'wp-fix', get_template_directory_uri() . '/js/wp-fix.js', null, null, true );
	}


/* ============================================================================================================================================= */


	function theme_setup()
	{
		add_action( 'wp_enqueue_scripts', 'theme_enqueue' );
		
		$lang_dir = get_template_directory() . '/languages';
		
		load_theme_textdomain( 'read', $lang_dir ); 
		
		$locale = get_locale();
		$locale_file = get_template_directory() . "/languages/$locale.php";
		
		if ( is_readable( $locale_file ) )
		{
			require_once( $locale_file );
		}
	}
	
	add_action( 'after_setup_theme', 'theme_setup' );


/* ============================================================================================================================================= */


	function theme_style_css()
	{
		?>

<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'stylesheet_url' ); ?>">

		<?php
	}
	
	add_action( 'wp_head', 'theme_style_css' );


/* ============================================================================================================================================= */

	function theme_favicons()
	{
		$favicon = get_option( 'favicon', "" );
		
		if ( $favicon != "" )
		{
			?>

<link rel="shortcut icon" href="<?php echo $favicon; ?>">

			<?php
		}
		// end if
		
		
		$apple_touch_icon = get_option( 'apple_touch_icon', "" );
		
		if ( $apple_touch_icon != "" )
		{
			?>

<link rel="apple-touch-icon-precomposed" href="<?php echo $apple_touch_icon; ?>">

			<?php
		}
		// end if
	}
	// end theme_favicons
	
	add_action( 'wp_head', 'theme_favicons' );

/* ============================================================================================================================================= */

	function theme_favicons_admin()
	{
		$favicon = get_option( 'favicon', "" );
		
		if ( $favicon != "" )
		{
			echo '<link rel="shortcut icon" href="' . $favicon . '">' . "\n";
		}
		// end if
		
		
		$apple_touch_icon = get_option( 'apple_touch_icon', "" );
		
		if ( $apple_touch_icon != "" )
		{
			echo '<link rel="apple-touch-icon-precomposed" href="' . $apple_touch_icon . '">' . "\n";
		}
		// end if
	}
	// end theme_favicons_admin
	
	add_action( 'admin_head', 'theme_favicons_admin' );

/* ============================================================================================================================================= */

	function theme_favicons_login()
	{
		$favicon = get_option( 'favicon', "" );
		
		if ( $favicon != "" )
		{
			echo '<link rel="shortcut icon" href="' . $favicon . '">' . "\n";
		}
		// end if
		
		
		$apple_touch_icon = get_option( 'apple_touch_icon', "" );
		
		if ( $apple_touch_icon != "" )
		{
			echo '<link rel="apple-touch-icon-precomposed" href="' . $apple_touch_icon . '">' . "\n";
		}
		// end if
	}
	// end theme_favicons_login
	
	add_action( 'login_head', 'theme_favicons_login' );

/* ============================================================================================================================================= */


	function theme_login_logo()
	{
		$logo_login_hide = get_option( 'logo_login_hide', false );
		$logo_login = get_option( 'logo_login', "" );
		
		if ( $logo_login_hide )
		{
			echo '<style type="text/css"> h1 { display: none; } </style>';
		}
		else
		{
			if ( $logo_login != "" )
			{
				echo '<style type="text/css"> h1 a { cursor: default; background-image: url("' . $logo_login . '") !important; } </style>';
				
				echo '<script>
						jQuery(document).ready( function($)
						{
							$( "h1 a" ).removeAttr( "title" );
							$( "h1 a" ).removeAttr( "href" );
						});
					</script>';
			}
		}
	}
	
	add_action( 'login_head', 'theme_login_logo' );


/* ============================================================================================================================================= */

	function theme_wp_title( $title, $sep )
	{
		global $paged, $page;

		if ( is_feed() )
		{
			return $title;
		}

		$title .= get_bloginfo( 'name' );
		
		$site_description = get_bloginfo( 'description', 'display' );
		
		if ( $site_description && ( is_home() || is_front_page() ) )
		{
			$title = "$title $sep $site_description";
		}
		
		if ( $paged >= 2 || $page >= 2 )
		{
			$title = "$title $sep " . sprintf( __( 'Page %s', 'read' ), max( $paged, $page ) );
		}
		
		return $title;
	}
	// end theme_wp_title
	
	add_filter( 'wp_title', 'theme_wp_title', 10, 2 );

/* ============================================================================================================================================= */

	if ( function_exists( 'add_theme_support' ) )
	{
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
		
		add_theme_support( 'post-thumbnails', array( 'post', 'portfolio' ) );
		
		add_theme_support( 'automatic-feed-links' );
	}

/* ============================================================================================================================================= */

	if ( function_exists( 'add_editor_style' ) )
	{
		add_editor_style( 'custom-editor-style.css' );
	}

/* ============================================================================================================================================= */

	function theme_excerpt_more( $more )
	{
		return '... <a class="more-link" href="'. get_permalink( get_the_ID() ) . '">' . __( 'Continue reading <span class="meta-nav">→</span>', 'read' ) . '</a>';
	}
	
	add_filter( 'excerpt_more', 'theme_excerpt_more' );


/* ============================================================================================================================================= */


	if ( ! isset( $content_width ) )
	{
		$content_width = 650;
	}


/* ============================================================================================================================================= */


	if ( function_exists( 'add_image_size' ) )
	{
		add_image_size( 'blog_feat_img', 1300 );
		add_image_size( 'latest_posts_widget_feat_img', 720 );
		add_image_size( 'portfolio_widget_feat_img_1x', 600 );
		add_image_size( 'portfolio_widget_feat_img_2x', 900 );
	}


/* ============================================================================================================================================= */


	function theme_add_new_post_column( $columns )
	{
		return array_merge( $columns, array( 'post_feat_img' => __( 'Featured Image', 'read' ) ) );
	}
	
	add_filter( 'manage_posts_columns' , 'theme_add_new_post_column' );
	
	
	function theme_display_new_post_column( $column, $post_id )
	{
		if ( $column == 'post_feat_img' )
		{
			if ( has_post_thumbnail() )
			{
				the_post_thumbnail( 'thumbnail' );
			}
		}
	}
	
	add_action( 'manage_posts_custom_column' , 'theme_display_new_post_column', 10, 2 );


/* ============================================================================================================================================= */


	if ( function_exists( 'register_nav_menus' ) )
	{
		register_nav_menus( array(  'theme_menu_location_1' => __( 'Classic Navigation Menu', 'read' ) ) );
	}
	
	
	function wp_page_menu2( $args = array() )
	{
		$defaults = array(  'sort_column' => 'menu_order, post_title',
							'menu_class' => 'menu',
							'echo' => true,
							'link_before' => "",
							'link_after' => "" );
							
		$args = wp_parse_args( $args, $defaults );
		$args = apply_filters( 'wp_page_menu_args', $args );
		
		$menu = "";
		
		$list_args = $args;
		
		// Show Home in the menu
		if ( ! empty( $args['show_home'] ) )
		{
			if ( true === $args['show_home'] || '1' === $args['show_home'] || 1 === $args['show_home'] )
			{
				$text = __( 'Home', 'read' );
			}
			else
			{
				$text = $args['show_home'];
			}
			// end if
			
			$class = "";
			
			if ( is_front_page() && !is_paged() )
			{
				$class = 'class="current_page_item"';
			}
			
			$menu .= '<li ' . $class . '><a href="' . home_url( '/' ) . '" title="' . esc_attr( $text ) . '">' . $args['link_before'] . $text . $args['link_after'] . '</a></li>';
			
			// If the front page is a page, add it to the exclude list
			if ( get_option( 'show_on_front' ) == 'page' )
			{
				if ( ! empty( $list_args['exclude'] ) )
				{
					$list_args['exclude'] .= ',';
				}
				else
				{
					$list_args['exclude'] = '';
				}
				// end if
				
				$list_args['exclude'] .= get_option('page_on_front');
			}
			// end if
		}
		// end if
		
		$list_args['echo'] = false;
		$list_args['title_li'] = "";
		$menu .= str_replace( array( "\r", "\n", "\t" ), "", wp_list_pages( $list_args ) );
		
		if ( $menu )
		{
			$menu = '<ul class="menu-default vs-nav">' . $menu . '</ul>';
		}
		
		$menu = $menu . "\n";
		$menu = apply_filters( 'wp_page_menu', $menu, $args );
		
		if ( $args['echo'] )
		{
			echo $menu;
		}
		else
		{
			return $menu;
		}
		// end if
	}
	//end wp_page_menu2

/* ============================================================================================================================================= */

	if ( ! function_exists( 'theme_comments' ) ) :
	
		/*
			Template for comments and pingbacks.
			
			To override this walker in a child theme without modifying the comments template
			simply create your own theme_comments(), and that function will be used instead.
			
			Used as a callback by wp_list_comments() for displaying the comments.
		*/
		
		function theme_comments( $comment, $args, $depth )
		{
			$GLOBALS['comment'] = $comment;
			
			switch ( $comment->comment_type ) :
			
				case 'pingback' :
				
				case 'trackback' :
				
					// Display trackbacks differently than normal comments.
					?>
						<li id="comment-<?php comment_ID(); ?>" <?php comment_class(); ?>>
							<p>
								<?php
									_e( 'Pingback:', 'read' ); ?> <?php comment_author_link(); ?> <?php edit_comment_link( __( '(Edit)', 'read' ), '<span class="edit-link">', '</span>' );
								?>
							</p>
					<?php
				break;
				
				default :
				
					// Proceed with normal comments.
					global $post;
					
					?>
					
					<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
						<article id="comment-<?php comment_ID(); ?>" class="comment">
							<header class="comment-meta comment-author vcard">
								<?php
									echo get_avatar( $comment, 75 );
									
									printf( '<cite class="fn">%1$s %2$s</cite>',
											get_comment_author_link(),
											// If current post author is also comment author, make it known visually.
											( $comment->user_id === $post->post_author ) ? '<span></span>' : "" );
									
									printf( '<a href="%1$s"><time datetime="%2$s">%3$s</time></a>',
											esc_url( get_comment_link( $comment->comment_ID ) ),
											get_comment_time( 'c' ),
											/* translators: 1: date, 2: time */
											sprintf( __( '%1$s at %2$s', 'read' ), get_comment_date(), get_comment_time() ) );
								?>
							</header>
							<!-- end .comment-meta -->
							
							<?php
								if ( '0' == $comment->comment_approved ) :
									?>
										<p class="comment-awaiting-moderation"><?php _e( 'Your comment is awaiting moderation.', 'read' ); ?></p>
									<?php
								endif;
							?>
							
							<section class="comment-content comment">
								<?php
									comment_text();
								?>
								
								<?php
									edit_comment_link( __( 'Edit', 'read' ), '<p class="edit-link">', '</p>' );
								?>
							</section>
							<!-- end .comment-content -->
							
							<div class="reply">
								<?php
									comment_reply_link( array_merge( $args, array( 'reply_text' => __( 'Reply', 'read' ), 'after' => ' <span>&darr;</span>', 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) );
								?>
							</div>
							<!-- end .reply -->
						</article>
						<!-- end #comment-## -->
					<?php
				break;
				
			endswitch;
		}
		// end theme_comments
		
	endif;

/* ============================================================================================================================================= */

	if ( function_exists( 'register_sidebar' ) )
	{
		register_sidebar( array('name'          => __( 'cvCard Template Pages', 'read' ),
								'id'            => 'cvcard_template_pages',
								'description'   => __( 'Use only cvCard widgets in here.', 'read' ),
								'before_widget' => "",
								'after_widget'  => "",
								'before_title'  => '<span style="display: none;">',
								'after_title'   => '</span>' ) );
	}

/* ============================================================================================================================================= */

	function og_description_max_charlength( $charlength )
	{
		global $post, $post_ID;
		
		$excerpt = get_post_field( 'post_content', $post_ID );
		$charlength++;

		if ( mb_strlen( $excerpt ) > $charlength )
		{
			$subex = mb_substr( $excerpt, 0, $charlength - 5 );
			$exwords = explode( ' ', $subex );
			$excut = - ( mb_strlen( $exwords[ count( $exwords ) - 1 ] ) );
			
			if ( $excut < 0 )
			{
				return mb_substr( $subex, 0, $excut );
			}
			else
			{
				return $subex;
			}
			
			return '[...]';
		}
		else
		{
			return $excerpt;
		}
		// end if
	}
	// end og_description_max_charlength
	
	
	function theme_open_graph_protocol()
	{
		global $post, $post_ID;
		
		if ( is_singular() )
		{
			$og_title = get_the_title();
			
			$og_description = og_description_max_charlength( 140 );
			
			if ( has_post_thumbnail() )
			{
				$og_image_source = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'thumbnail' );
				$og_image = $og_image_source[0];
			}
			else
			{
				$og_image = "";
			}
			// end if
			
			
			if ( $og_title != "" )
			{
				echo "\n" . '<meta property="og:title" content="' . $og_title . '">' . "\n";
			}
			// end if
			
			
			if ( $og_image )
			{
				echo '<meta property="og:image" content="' . $og_image . '">' . "\n";
			}
			// end if
			
			
			if ( $og_description != "" )
			{
				echo '<meta property="og:description" content="' . $og_title . '">' . "\n\n";
			}
			// end if
		}
		// end if
	}
	
	
	$theme_og_protocol = get_option( 'theme_og_protocol', 'No' );
	
	if ( $theme_og_protocol == 'Yes' )
	{
		add_action( 'wp_head', 'theme_open_graph_protocol' );
	}


/* ============================================================================================================================================= */


	$theme_seo_fields = get_option( 'theme_seo_fields', 'No' );
	
	
	function show_theme_custom_box_seo( $post )
	{
		?>
			<div class="admin-inside-box">
				<?php
					wp_nonce_field( 'show_theme_custom_box_seo', 'nonce_show_theme_custom_box_seo' );
				?>
				
				
				<p>
					<label for="my_seo_description"><?php echo __( 'Description:', 'read' ); ?></label>
					
					<?php
						$my_seo_description = stripcslashes( get_option( $post->ID . 'my_seo_description' ) );
					?>
					<textarea id="my_seo_description" name="my_seo_description" rows="4" cols="46" class="widefat"><?php echo $my_seo_description; ?></textarea>
				</p>
				
				
				<p>
					<label for="my_seo_keywords"><?php echo __( 'Keywords:', 'read' ); ?></label>
					
					<?php
						$my_seo_keywords = stripcslashes( get_option( $post->ID . 'my_seo_keywords' ) );
					?>
					<textarea id="my_seo_keywords" name="my_seo_keywords" rows="4" cols="46" class="widefat"><?php echo $my_seo_keywords; ?></textarea>
				</p>
				
				<p class="howto"><?php echo __( 'Separate keywords with commas', 'read' ); ?></p>
			</div>
		<?php
	}
	
	
	function add_theme_custom_box_seo()
	{
		add_meta_box( 'theme_custom_box_seo_post', __( 'SEO', 'read' ), 'show_theme_custom_box_seo', 'post', 'side', 'low' );
		
		add_meta_box( 'theme_custom_box_seo_page', __( 'SEO', 'read' ), 'show_theme_custom_box_seo', 'page', 'side', 'low' );
		
		
		$args = array( '_builtin' => false );
		$post_types = get_post_types( $args ); 
		
		foreach ( $post_types as $post_type )
		{
			add_meta_box( 'theme_custom_box_seo_' . $post_type, __( 'SEO', 'read' ), 'show_theme_custom_box_seo', $post_type, 'side', 'low' );
		}
	}
	
	
	if ( $theme_seo_fields == 'Yes' )
	{
		add_action( 'add_meta_boxes', 'add_theme_custom_box_seo' );
	}
	
	
	function save_theme_custom_box_seo( $post_id )
	{
		if ( ! isset( $_POST['nonce_show_theme_custom_box_seo'] ) )
		{
			return $post_id;
		}
		
		
		$nonce = $_POST['nonce_show_theme_custom_box_seo'];
		
		if ( ! wp_verify_nonce( $nonce, 'show_theme_custom_box_seo' ) )
        {
			return $post_id;
		}
		
		
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
        {
			return $post_id;
		}
		
		
		if ( 'page' == $_POST['post_type'] )
		{
			if ( ! current_user_can( 'edit_page', $post_id ) )
			{
				return $post_id;
			}
		}
		else
		{
			if ( ! current_user_can( 'edit_post', $post_id ) )
			{
				return $post_id;
			}
		}
		
		
		update_option( $post_id . 'my_seo_description', $_POST['my_seo_description'] );
		update_option( $post_id . 'my_seo_keywords', $_POST['my_seo_keywords'] );
	}
	
	
	if ( $theme_seo_fields == 'Yes' )
	{
		add_action( 'save_post', 'save_theme_custom_box_seo' );
	}
	
	
	function my_seo_wp_head()
	{
		global $post, $post_ID;
		
		
		if ( is_singular() )
		{
			$my_seo_description = stripcslashes( get_option( $post->ID . 'my_seo_description', "" ) );
			$my_seo_keywords = stripcslashes( get_option( $post->ID . 'my_seo_keywords', "" ) );
			
			
			if ( $my_seo_description != "" )
			{
				echo "\n" . '<meta name="description" content="' . $my_seo_description . '">' . "\n";
			}
			
			
			if ( $my_seo_keywords != "" )
			{
				echo '<meta name="keywords" content="' . $my_seo_keywords . '">' . "\n";
			}
		}
		else
		{
			$site_description = stripcslashes( get_option( 'site_description', "" ) );
			$site_keywords = stripcslashes( get_option( 'site_keywords', "" ) );
			
			
			if ( $site_description != "" )
			{
				echo "\n" . '<meta name="description" content="' . $site_description . '">' . "\n";
			}
			
			
			if ( $site_keywords != "" )
			{
				echo '<meta name="keywords" content="' . $site_keywords . '">' . "\n";
			}
		}
	}
	
	
	if ( $theme_seo_fields == 'Yes' )
	{
		add_action( 'wp_head', 'my_seo_wp_head' );
	}


/* ============================================================================================================================================= */


	function show_theme_custom_box_hide_post_title( $post )
	{
		?>
			<div class="admin-inside-box">
				<?php
					wp_nonce_field( 'show_theme_custom_box_hide_post_title', 'nonce_show_theme_custom_box_hide_post_title' );
				?>
				
				<p>
					<?php
						$hide_post_title = get_option( $post->ID . 'hide_post_title', false );
						
						if ( $hide_post_title )
						{
							$hide_post_title_out = 'checked="checked"';
						}
						else
						{
							$hide_post_title_out = "";
						}
					?>
					<label for="hide_post_title"><input type="checkbox" id="hide_post_title" name="hide_post_title" <?php echo $hide_post_title_out; ?>> Hide title</label>
				</p>
			</div>
		<?php
	}
	
	
	function add_theme_custom_box_hide_post_title()
	{
		add_meta_box( 'theme_custom_box_hide_post_title', __( 'Title Visibility', 'read' ), 'show_theme_custom_box_hide_post_title', 'post', 'side', 'high' );
	}
	
	add_action( 'add_meta_boxes', 'add_theme_custom_box_hide_post_title' );
	
	
	function save_theme_custom_box_hide_post_title( $post_id )
	{
		if ( ! isset( $_POST['nonce_show_theme_custom_box_hide_post_title'] ) )
		{
			return $post_id;
		}
		
		
		$nonce = $_POST['nonce_show_theme_custom_box_hide_post_title'];
		
		if ( ! wp_verify_nonce( $nonce, 'show_theme_custom_box_hide_post_title' ) )
        {
			return $post_id;
		}
		
		
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
        {
			return $post_id;
		}
		
		
		if ( 'page' == $_POST['post_type'] )
		{
			if ( ! current_user_can( 'edit_page', $post_id ) )
			{
				return $post_id;
			}
		}
		else
		{
			if ( ! current_user_can( 'edit_post', $post_id ) )
			{
				return $post_id;
			}
		}
		
		
		update_option( $post_id . 'hide_post_title', $_POST['hide_post_title'] );
	}
	
	add_action( 'save_post', 'save_theme_custom_box_hide_post_title' );


/* ============================================================================================================================================= */


	class Custom_Page_Widget extends WP_Widget
	{
		public function __construct()
		{
			parent::__construct('custom_page_widget',
								__( '- cvCard &#151; Custom Page', 'read' ),
								array( 'description' => __( 'About me, resume, contact etc.', 'read' ) ) );
		}
		
		
		public function form( $instance )
		{
			if ( isset( $instance[ 'title' ] ) ) { $title = $instance[ 'title' ]; } else { $title = ""; }
			
			if ( isset( $instance[ 'custom_page_slug' ] ) ) { $custom_page_slug = $instance[ 'custom_page_slug' ]; } else { $custom_page_slug = ""; }
			
			
			?>
				<p>
					<label for="<?php echo $this->get_field_id( 'title' ); ?>"><strong><?php echo __( 'Title', 'read' ); ?></strong></label>
					
					<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>">
				</p>
				
				
				<p>
					<label for="<?php echo $this->get_field_id( 'custom_page_slug' ); ?>"><strong><?php echo __( 'Select A Page', 'read' ); ?></strong></label>
					
					<select class="widefat" id="<?php echo $this->get_field_id( 'custom_page_slug' ); ?>" name="<?php echo $this->get_field_name( 'custom_page_slug' ); ?>">
					
						<option></option>
						
						<?php
							$pages = get_pages();
							
							foreach ( $pages as $page )
							{
								if ( $custom_page_slug == $page->post_name )
								{
									$option = '<option selected="selected" value="' . $page->post_name . '">' . $page->post_title . '</option>';
									
									echo $option;
								}
								else
								{
									$option = '<option value="' . $page->post_name . '">' . $page->post_title . '</option>';
									
									echo $option;
								}
							}
						?>
					</select>
				</p>
			<?php
		}
		
		
		public function update( $new_instance, $old_instance )
		{
			$instance = array();
			
			
			$instance['title'] = strip_tags( $new_instance['title'] );
			
			$instance['custom_page_slug'] = strip_tags( $new_instance['custom_page_slug'] );
			
			
			return $instance;
		}
		
		
		public function widget( $args, $instance )
		{
			extract( $args );
			
			
			$title = apply_filters( 'widget_title', $instance['title'] );
			
			$custom_page_slug = apply_filters( 'widget_custom_page_slug', $instance['custom_page_slug'] );
			
			
			echo $before_widget;
			
			
			if ( ! empty( $title ) )
			{
				// echo $before_title . $title . $after_title;
			}
			
			?>
				<section id="<?php echo $custom_page_slug; ?>" data-page-title="<?php echo $title; ?>" class="page">
					<div class="content">
						<?php
							$args_custom_page = 'pagename=' . $custom_page_slug;
							$loop_custom_page = new WP_Query( $args_custom_page );
							
							if ( $loop_custom_page->have_posts() ) :
								while ( $loop_custom_page->have_posts() ) : $loop_custom_page->the_post();
								
									the_content();
								
								endwhile;
							endif;
							wp_reset_query();
						?>
					</div>
				</section>
			<?php
			
			echo $after_widget;
		}
	}
	
	add_action('widgets_init', function() { register_widget('Custom_Page_Widget'); });


/* ============================================================================================================================================= */


	class Blog_Widget extends WP_Widget
	{
		public function __construct()
		{
			parent::__construct('blog_widget',
								__( '- cvCard &#151; Blog Page', 'read' ),
								array( 'description' => __( 'Blog posts.', 'read' ) ) );
		}
		// end __construct
		
		
		public function form( $instance )
		{
			if ( isset( $instance[ 'title' ] ) ) { $title = $instance[ 'title' ]; } else { $title = ""; }
			
			if ( isset( $instance[ 'blog_page_slug' ] ) ) { $blog_page_slug = $instance[ 'blog_page_slug' ]; } else { $blog_page_slug = ""; }
			
			if ( isset( $instance[ 'blog_number_of_posts' ] ) ) { $blog_number_of_posts = $instance[ 'blog_number_of_posts' ]; } else { $blog_number_of_posts = '8'; }
			
			if ( isset( $instance[ 'blog_editor_content' ] ) ) { $blog_editor_content = $instance[ 'blog_editor_content' ]; } else { $blog_editor_content = false; }
			
			if ( isset( $instance[ 'blog_top_content' ] ) ) { $blog_top_content = $instance[ 'blog_top_content' ]; } else { $blog_top_content = false; }
			
			if ( isset( $instance[ 'layout' ] ) ) { $layout = $instance[ 'layout' ]; } else { $layout = 'masonry'; }
			
			if ( isset( $instance[ 'show_posts_with_feat_img' ] ) ) { $show_posts_with_feat_img = $instance[ 'show_posts_with_feat_img' ]; } else { $show_posts_with_feat_img = false; }
			
			?>
				<p>
					<label for="<?php echo $this->get_field_id( 'title' ); ?>"><strong><?php echo __( 'Title', 'read' ); ?></strong></label>
					
					<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>">
				</p>
				
				
				<p>
					<label for="<?php echo $this->get_field_id( 'blog_page_slug' ); ?>"><strong><?php echo __( 'Select A Page', 'read' ); ?></strong></label>
					
					<select id="<?php echo $this->get_field_id( 'blog_page_slug' ); ?>" name="<?php echo $this->get_field_name( 'blog_page_slug' ); ?>" class="widefat">
					
						<option></option>
						
						<?php
							$pages = get_pages();
							
							foreach ( $pages as $page )
							{
								if ( $blog_page_slug == $page->post_name )
								{
									$option = '<option selected="selected" value="' . $page->post_name . '">' . $page->post_title . '</option>';
									
									echo $option;
								}
								else
								{
									$option = '<option value="' . $page->post_name . '">' . $page->post_title . '</option>';
									
									echo $option;
								}
							}
						?>
					</select>
				</p>
				
				
				<p>
					<label for="<?php echo $this->get_field_id( 'blog_number_of_posts' ); ?>"><?php echo __( 'Number of posts to show:', 'read' ); ?></label>
					
					<input type="text" id="<?php echo $this->get_field_id( 'blog_number_of_posts' ); ?>" name="<?php echo $this->get_field_name( 'blog_number_of_posts' ); ?>" size="3" value="<?php echo esc_attr( $blog_number_of_posts ); ?>">
				</p>
				
				
				<h4><?php echo __( 'Content Editor', 'read' ); ?></h4>
				
				<p>
					<label><input type="checkbox" id="<?php echo $this->get_field_id( 'blog_editor_content' ); ?>" name="<?php echo $this->get_field_name( 'blog_editor_content' ); ?>" <?php if ( $blog_editor_content ) { echo 'checked="checked"'; } ?>> <?php echo __( 'Enable content editor', 'read' ); ?></label>
				</p>
				
				
				<p>
					<label><input type="checkbox" id="<?php echo $this->get_field_id( 'blog_top_content' ); ?>" name="<?php echo $this->get_field_name( 'blog_top_content' ); ?>" <?php if ( $blog_top_content ) { echo 'checked="checked"'; } ?>> <?php echo __( 'Show content editor on the top', 'read' ); ?></label>
				</p>
				
				
				<h4><?php echo __( 'Layout', 'read' ); ?></h4>
				
				<p>
					<select id="<?php echo $this->get_field_id( 'layout' ); ?>" name="<?php echo $this->get_field_name( 'layout' ); ?>" class="widefat">
						<option <?php if ( $layout == 'masonry' ) { echo 'selected="selected"'; } ?>>masonry</option>
						
						<option <?php if ( $layout == 'fitRows' ) { echo 'selected="selected"'; } ?>>fitRows</option>
					</select>
				</p>
				
				
				<p>
					<label><input type="checkbox" id="<?php echo $this->get_field_id( 'show_posts_with_feat_img' ); ?>" name="<?php echo $this->get_field_name( 'show_posts_with_feat_img' ); ?>" <?php if ( $show_posts_with_feat_img ) { echo 'checked="checked"'; } ?>> <?php echo __( 'Show only posts with featured image', 'read' ); ?></label>
				</p>
			<?php
		}
		// end form (widget admin side)
		
		
		public function update( $new_instance, $old_instance )
		{
			$instance = array();
			
			$instance['title'] = strip_tags( $new_instance['title'] );
			
			$instance['blog_page_slug'] = strip_tags( $new_instance['blog_page_slug'] );
			
			$instance['blog_number_of_posts'] = strip_tags( $new_instance['blog_number_of_posts'] );
			
			$instance['blog_editor_content'] = strip_tags( $new_instance['blog_editor_content'] );
			
			$instance['blog_top_content'] = strip_tags( $new_instance['blog_top_content'] );
			
			$instance['layout'] = strip_tags( $new_instance['layout'] );
			
			$instance['show_posts_with_feat_img'] = strip_tags( $new_instance['show_posts_with_feat_img'] );
			
			return $instance;
		}
		// end update
		
		
		public function widget( $args, $instance )
		{
			extract( $args );
			
			$title = apply_filters( 'widget_title', $instance['title'] );
			
			$blog_page_slug = apply_filters( 'widget_blog_page_slug', $instance['blog_page_slug'] );
			
			$blog_number_of_posts = apply_filters( 'widget_blog_number_of_posts', $instance['blog_number_of_posts'] );
			
			$blog_editor_content = apply_filters( 'widget_blog_editor_content', $instance['blog_editor_content'] );
			
			$blog_top_content = apply_filters( 'widget_blog_top_content', $instance['blog_top_content'] );
			
			$layout = apply_filters( 'widget_layout', $instance['layout'] );
			
			$show_posts_with_feat_img = apply_filters( 'widget_layout', $instance['show_posts_with_feat_img'] );
			
			echo $before_widget;
			
			if ( ! empty( $title ) )
			{
				// echo $before_title . $title . $after_title;
			}
			
				?>
					<section id="<?php echo $blog_page_slug; ?>" data-page-title="<?php echo $title; ?>" class="page">
						<div class="content">
							<h2 class="section-title center">
								<span><i class="icon-book-open"></i><?php echo __( 'LATEST FROM THE BLOG', 'read' ); ?></span>
							</h2>
							<!-- end .section-title -->
							
							
							<?php
								if ( $blog_editor_content )
								{
									if ( $blog_top_content )
									{
										?>
											<div class="blog-page-content">
												<?php
													$args_pf_content = 'pagename=' . $blog_page_slug;
													$loop_pf_content = new WP_Query( $args_pf_content );
													
													if ( $loop_pf_content->have_posts() ) :
														while ( $loop_pf_content->have_posts() ) : $loop_pf_content->the_post();
														
															the_content();
														
														endwhile;
													endif;
													wp_reset_query();
												?>
											</div>
											<!-- end .blog-page-content -->
										<?php
									}
									// end if
								}
								// end if
							?>
							
							
							<div class="latest-posts media-grid" data-layout="<?php echo $layout; ?>">
								<?php
									$args_post = array( 'post_type' => 'post', 'posts_per_page' => -1 );
									$loop_post = new WP_Query( $args_post );
									
									if ( $loop_post->have_posts() ) :
										
										$i = 1;
										
										while ( ( $loop_post->have_posts() ) && ( $i <= $blog_number_of_posts ) ) : $loop_post->the_post();
											
											if ( $show_posts_with_feat_img )
											{
												if ( has_post_thumbnail() )
												{
													$i++;
													
													?>
														<article id="post-<?php the_ID(); ?>" class="hentry media-cell">
															<div class="media-box">
																<?php
																	the_post_thumbnail( 'latest_posts_widget_feat_img', array( 'alt' => get_the_title(), 'title' => "" ) );
																?>
																
																<div class="mask"></div>
																
																<a href="<?php the_permalink(); ?>"></a>
															</div>
															<!-- end .media-box -->
															
															<header class="media-cell-desc">
																<span title="<?php echo get_the_date( 'Y' ); ?>" class="date">
																	<span class="day"><?php echo get_the_date( 'd' ); ?></span>
																	
																	<?php echo get_the_date( 'M' ); ?>
																</span>
																<!-- end .date -->
																
																<h3>
																	<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
																</h3>
															</header>
															<!-- end .media-cell-desc -->
														</article>
														<!-- end .media-cell -->
													<?php
												}
											}
											else
											{
												$i++;
												
												?>
													<article id="post-<?php the_ID(); ?>" class="hentry media-cell">
														<?php
															if ( has_post_thumbnail() )
															{
																?>
																	<div class="media-box">
																		<?php
																			the_post_thumbnail( 'latest_posts_widget_feat_img', array( 'alt' => get_the_title(), 'title' => "" ) );
																		?>
																		
																		<div class="mask"></div>
																		
																		<a href="<?php the_permalink(); ?>"></a>
																	</div>
																	<!-- end .media-box -->
																<?php
															}
															// end if
														?>										
														
														<header class="media-cell-desc">
															<span title="<?php echo get_the_date( 'Y' ); ?>" class="date">
																<span class="day"><?php echo get_the_date( 'd' ); ?></span>
																
																<?php echo get_the_date( 'M' ); ?>
															</span>
															<!-- end .date -->
															
															<h3>
																<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
															</h3>
														</header>
														<!-- end .media-cell-desc -->
													</article>
													<!-- end .media-cell -->
												<?php
											}
											
										endwhile;
									endif;
									wp_reset_query();
								?>
							</div>
							<!-- end .latest-posts -->
							
							
							<?php
								if ( $blog_editor_content )
								{
									if ( ! $blog_top_content )
									{
										?>
											<div class="blog-page-content">
												<?php
													$args_pf_content = 'pagename=' . $blog_page_slug;
													$loop_pf_content = new WP_Query( $args_pf_content );
													
													if ( $loop_pf_content->have_posts() ) :
														while ( $loop_pf_content->have_posts() ) : $loop_pf_content->the_post();
														
															the_content();
														
														endwhile;
													endif;
													wp_reset_query();
												?>
											</div>
											<!-- end .blog-page-content -->
										<?php
									}
									// end if
								}
								// end if
							?>
							
							
							<p class="launch">
								<?php
									if ( get_option( 'show_on_front' ) == 'posts' )
									{
										?>
											<a class="button primary" href="<?php echo home_url(); ?>"><?php echo __( 'SEE ALL POSTS', 'read' ); ?></a>
										<?php
									}
									else
									{
										$blog_page_url = get_page_link( get_option( 'page_for_posts' ) );
										
										?>
											<a class="button primary" href="<?php echo $blog_page_url; ?>"><?php echo __( 'SEE ALL POSTS', 'read' ); ?></a>
										<?php
									}
									// end if
								?>
							</p>
							<!-- end .launch -->
						</div>
						<!-- end .content -->
					</section>
					<!-- end #blog -->
				<?php
			
			echo $after_widget;
		}
		// end widget (front-end side)
	}
	// end Blog_Widget
	
	add_action('widgets_init', function() { register_widget('Blog_Widget'); });


/* ============================================================================================================================================= */


	class Portfolio_Widget extends WP_Widget
	{
		public function __construct()
		{
			parent::__construct('portfolio_widget',
								__( '- cvCard &#151; Portfolio Page', 'read' ),
								array( 'description' => __( 'Portfolio items.', 'read' ) ) );
		}
		// end __construct
		
		
		public function form( $instance )
		{
			if ( isset( $instance[ 'title' ] ) ) { $title = $instance[ 'title' ]; } else { $title = ""; }
			
			if ( isset( $instance[ 'portfolio_page_slug' ] ) ) { $portfolio_page_slug = $instance[ 'portfolio_page_slug' ]; } else { $portfolio_page_slug = ""; }
			
			if ( isset( $instance[ 'portfolio_editor_content' ] ) ) { $portfolio_editor_content = $instance[ 'portfolio_editor_content' ]; } else { $portfolio_editor_content = false; }
			
			if ( isset( $instance[ 'portfolio_top_content' ] ) ) { $portfolio_top_content = $instance[ 'portfolio_top_content' ]; } else { $portfolio_top_content = false; }
			
			if ( isset( $instance[ 'layout' ] ) ) { $layout = $instance[ 'layout' ]; } else { $layout = 'masonry'; }
			
			?>
				<!-- title -->
				<p>
					<label for="<?php echo $this->get_field_id( 'title' ); ?>"><strong><?php echo __( 'Title', 'read' ); ?></strong></label>
					
					<input type="text" class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" value="<?php echo esc_attr( $title ); ?>">
				</p>
				<!-- end title -->
				
				
				<!-- portfolio_page_slug -->
				<p>
					<label for="<?php echo $this->get_field_id( 'portfolio_page_slug' ); ?>"><strong><?php echo __( 'Select A Page', 'read' ); ?></strong></label>
					
					<select id="<?php echo $this->get_field_id( 'portfolio_page_slug' ); ?>" name="<?php echo $this->get_field_name( 'portfolio_page_slug' ); ?>" class="widefat">
					
						<option></option>
						
						<?php
							$pages = get_pages();
							
							foreach ( $pages as $page )
							{
								if ( $portfolio_page_slug == $page->post_name )
								{
									$option = '<option selected="selected" value="' . $page->post_name . '">' . $page->post_title . '</option>';
									
									echo $option;
								}
								else
								{
									$option = '<option value="' . $page->post_name . '">' . $page->post_title . '</option>';
									
									echo $option;
								}
								// end if
							}
							// end for
						?>
					</select>
				</p>
				<!-- end portfolio_page_slug -->
				
				<h4><?php echo __( 'Content Editor', 'read' ); ?></h4>
				
				
				<!-- Activate content editor -->
				<p>
					<label><input type="checkbox" id="<?php echo $this->get_field_id( 'portfolio_editor_content' ); ?>" name="<?php echo $this->get_field_name( 'portfolio_editor_content' ); ?>" <?php if ( $portfolio_editor_content ) { echo 'checked="checked"'; } ?> value="portfolio_editor_content"> <?php echo __( 'Enable content editor', 'read' ); ?></label>
				</p>
				<!-- end Activate content editor -->
				
				
				<!-- Show content on the top -->
				<p>
					<label><input type="checkbox" id="<?php echo $this->get_field_id( 'portfolio_top_content' ); ?>" name="<?php echo $this->get_field_name( 'portfolio_top_content' ); ?>" <?php if ( $portfolio_top_content ) { echo 'checked="checked"'; } ?>> <?php echo __( 'Show content editor on the top', 'read' ); ?></label>
				</p>
				<!-- end Show content on the top -->
				
				<h4><?php echo __( 'Layout', 'read' ); ?></h4>
				
				<!-- Layout -->
				<p>
					<select id="<?php echo $this->get_field_id( 'layout' ); ?>" name="<?php echo $this->get_field_name( 'layout' ); ?>" class="widefat">
						<option <?php if ( $layout == 'masonry' ) { echo 'selected="selected"'; } ?>>masonry</option>
						
						<option <?php if ( $layout == 'fitRows' ) { echo 'selected="selected"'; } ?>>fitRows</option>
					</select>
				</p>
				<!-- end Layout -->
			<?php
		}
		// end form (widget admin side)
		
		
		public function update( $new_instance, $old_instance )
		{
			$instance = array();
			
			$instance['title'] = strip_tags( $new_instance['title'] );
			
			$instance['portfolio_page_slug'] = strip_tags( $new_instance['portfolio_page_slug'] );
			
			update_option( 'portfolio_page_slug', strip_tags( $new_instance['portfolio_page_slug'] ) );
			
			$instance['portfolio_editor_content'] = strip_tags( $new_instance['portfolio_editor_content'] );
			
			$instance['portfolio_top_content'] = strip_tags( $new_instance['portfolio_top_content'] );
			
			$instance['layout'] = strip_tags( $new_instance['layout'] );
			
			return $instance;
		}
		// end update
		
		
		public function widget( $args, $instance )
		{
			extract( $args );
			
			$title = apply_filters( 'widget_title', $instance['title'] );
			
			$portfolio_page_slug = apply_filters( 'widget_portfolio_page_slug', $instance['portfolio_page_slug'] );
			
			$portfolio_editor_content = apply_filters( 'widget_portfolio_editor_content', $instance['portfolio_editor_content'] );
			
			$portfolio_top_content = apply_filters( 'widget_portfolio_top_content', $instance['portfolio_top_content'] );
			
			$layout = apply_filters( 'widget_layout', $instance['layout'] );
			
			echo $before_widget;
			
			if ( ! empty( $title ) )
			{
				// echo $before_title . $title . $after_title;
			}
			
				?>
					<section id="<?php echo $portfolio_page_slug; ?>" data-page-title="<?php echo $title; ?>" class="portfolio page">
						<div class="content">
							<h2 class="section-title center">
								<span><i class="icon-leaf"></i><?php echo __( 'MY WORKS', 'read' ); ?></span>
							</h2>
							<!-- end .section-title -->
							
							
							<?php
								if ( $portfolio_editor_content )
								{
									if ( $portfolio_top_content )
									{
										?>
											<div class="portfolio-page-content">
												<?php
													$args_pf_content = 'pagename=' . $portfolio_page_slug;
													$loop_pf_content = new WP_Query( $args_pf_content );
													
													if ( $loop_pf_content->have_posts() ) :
														while ( $loop_pf_content->have_posts() ) : $loop_pf_content->the_post();
														
															the_content();
														
														endwhile;
													endif;
													wp_reset_query();
												?>
											</div>
											<!-- end .portfolio-page-content -->
										<?php
									}
									// end if
								}
								// end if
							?>
							
							
							<ul id="filters" class="filters">
								<?php
									$pf_terms = get_categories( 'type=portfolio&taxonomy=department' );
									
									if ( count( $pf_terms ) >= 2 )
									{
										?>
											<li class="current pf-all-items">
												<a href="#" data-filter="*"><?php echo __( 'ALL', 'read' ); ?></a>
											</li>
										<?php
									}
									// end if
									
									
									foreach ( $pf_terms as $pf_term ) :
										?>
											<li>
												<a href="#" data-filter=".<?php echo $pf_term->slug; ?>"><?php echo $pf_term->name; ?></a>
											</li>
										<?php
									endforeach;
								?>
							</ul>
							
							
							<!-- PORTFOLIO -->
							<div class="portfolio-items media-grid" data-layout="<?php echo $layout; ?>">
								<?php
									$args_portfolio = array( 'post_type' => 'portfolio', 'posts_per_page' => -1 );
									$loop_portfolio = new WP_Query( $args_portfolio );
									
									if ( $loop_portfolio->have_posts() ) :
										while ( $loop_portfolio->have_posts() ) : $loop_portfolio->the_post();
											
											$pf_type = get_option( get_the_ID() . 'pf_type', 'Standard' );
											$pf_type_out = "";
											
											if ( $pf_type == 'Standard' ) { $pf_type_out = ""; }
											elseif ( $pf_type == 'Lightbox Featured Image' ) { $pf_type_out = 'image'; }
											elseif ( $pf_type == 'Lightbox Gallery' ) { $pf_type_out = 'image'; }
											elseif ( $pf_type == 'Lightbox Video' ) { $pf_type_out = 'video'; }
											elseif ( $pf_type == 'Lightbox Audio' ) { $pf_type_out = 'audio'; }
											elseif ( $pf_type == 'Direct URL' ) { $pf_type_out = 'url'; }
											
											
											$terms = get_the_terms( get_the_ID(), 'department' );
											$on_draught = "";
											
											if ( $terms && ! is_wp_error( $terms ) ) :
												
												$draught_links = array();
												
												foreach ( $terms as $term )
												{
													$draught_links[] = $term->slug;
												}
												
												$on_draught = join( " ", $draught_links );
												
											endif;
											
											
											$pf_thumb_size = get_option( get_the_ID() . 'pf_thumb_size' );
											
											?>
												<!-- portfolio-item -->  
												<div id="post-<?php the_ID(); ?>" class="media-cell hentry <?php echo $pf_thumb_size; ?> <?php echo $on_draught; ?> <?php echo $pf_type_out; ?>">
													<?php
														if ( has_post_thumbnail() )
														{
															?>
																<div class="media-box">
																	<?php
																		if ( $pf_thumb_size == 'x2' )
																		{
																			the_post_thumbnail( 'portfolio_widget_feat_img_2x', array( 'alt' => get_the_title(), 'title' => "" ) );
																		}
																		else
																		{
																			the_post_thumbnail( 'portfolio_widget_feat_img_1x', array( 'alt' => get_the_title(), 'title' => "" ) );
																		}
																		// end if
																	?>
																	
																	<div class="mask"></div>
																	
																	<?php
																		if ( $pf_type == 'Standard' )
																		{
																			$pixelwars__ajax = get_option( 'pixelwars__ajax', 'Yes' );
																			
																			if ( $pixelwars__ajax != 'No' )
																			{
																				?>
																					<a class="ajax" href="<?php the_permalink(); ?>"></a>
																				<?php
																			}
																			else
																			{
																				?>
																					<a href="<?php the_permalink(); ?>"></a>
																				<?php
																			}
																		}
																		elseif ( $pf_type == 'Lightbox Featured Image' )
																		{
																			$pf_featured_image = wp_get_attachment_image_src( get_post_thumbnail_id( get_the_ID() ), 'single-post-thumbnail' );
																			
																			$pf_featured_image_url = $pf_featured_image[0];
																			
																			?>
																				<a class="lightbox" data-lightbox-gallery="fancybox-item-<?php echo get_the_ID(); ?>" title="<?php echo get_the_title(); ?>" href="<?php echo $pf_featured_image_url; ?>"></a>
																			<?php
																		}
																		elseif ( $pf_type == 'Lightbox Gallery' )
																		{
																			the_content();
																		}
																		elseif ( $pf_type == 'Lightbox Video' )
																		{
																			the_content();
																		}
																		elseif ( $pf_type == 'Lightbox Audio' )
																		{
																			the_content();
																		}
																		elseif ( $pf_type == 'Direct URL' )
																		{
																			$pf_direct_url = stripcslashes( get_option( get_the_ID() . 'pf_direct_url' ) );
																			$pf_link_new_tab = get_option( get_the_ID() . 'pf_link_new_tab', true );
																			
																			?>
																				<a <?php if ( $pf_link_new_tab ) { echo 'target="_blank"'; } ?> href="<?php echo $pf_direct_url; ?>"></a>
																			<?php
																		}
																		// end if
																	?>
																</div>
																<!-- end .media-box -->
																
																<div class="media-cell-desc">
																	<h3><?php the_title(); ?></h3>
																	
																	<?php
																		$pf_short_description = stripcslashes( get_option( get_the_ID() . 'pf_short_description', "" ) );
																	?>
																	<p class="category"><?php echo $pf_short_description; ?></p>
																</div>
															<?php
														}
														else
														{
															?>
																<div class="media-cell-desc">
																	<h3>
																		<a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
																	</h3>
																	
																	<?php
																		$pf_short_description = stripcslashes( get_option( get_the_ID() . 'pf_short_description', "" ) );
																	?>
																	<p class="category"><?php echo $pf_short_description; ?></p>
																</div>
																<!-- end .media-cell-desc -->
															<?php
														}
														// end if
													?>
												</div>
												<!-- end portfolio-item -->
											<?php
											
										endwhile;
									endif;
									wp_reset_query();
								?>
							</div>
							<!-- end PORTFOLIO -->
							
							
							<?php
								if ( $portfolio_editor_content )
								{
									if ( ! $portfolio_top_content )
									{
										?>
											<div class="portfolio-page-content">
												<?php
													$args_pf_content = 'pagename=' . $portfolio_page_slug;
													$loop_pf_content = new WP_Query( $args_pf_content );
													
													if ( $loop_pf_content->have_posts() ) :
														while ( $loop_pf_content->have_posts() ) : $loop_pf_content->the_post();
														
															the_content();
														
														endwhile;
													endif;
													wp_reset_query();
												?>
											</div>
											<!-- end .portfolio-page-content -->
										<?php
									}
									// end if
								}
								// end if
							?>
						</div>
						<!-- end .content -->
					</section>
					<!-- end .portfolio -->
				<?php
			
			echo $after_widget;
		}
		// end widget (front-end side)
	}
	// end Portfolio_Widget
	
	add_action('widgets_init', function() { register_widget('Portfolio_Widget'); });

/* ============================================================================================================================================= */

	function create_post_type_portfolio()
	{
		$labels = array('name' => __( 'Portfolio', 'read' ),
						'singular_name' => __( 'Portfolio Item', 'read' ),
						'add_new' => __( 'Add New', 'read' ),
						'add_new_item' => __( 'Add New', 'read' ),
						'edit_item' => __( 'Edit', 'read' ),
						'new_item' => __( 'New', 'read' ),
						'all_items' => __( 'All', 'read' ),
						'view_item' => __( 'View', 'read' ),
						'search_items' => __( 'Search', 'read' ),
						'not_found' =>  __( 'No Items found', 'read' ),
						'not_found_in_trash' => __( 'No Items found in Trash', 'read' ),
						'parent_item_colon' => '',
						'menu_name' => 'Portfolio' );
		
		$args = array(  'labels' => $labels,
						'public' => true,
						'exclude_from_search' => false,
						'publicly_queryable' => true,
						'show_ui' => true,
						'query_var' => true,
						'show_in_nav_menus' => true,
						'capability_type' => 'post',
						'hierarchical' => false,
						'menu_position' => 5,
						'supports' => array( 'title', 'editor', 'thumbnail', 'comments', 'revisions' ),
						'rewrite' => array( 'slug' => 'portfolio', 'with_front' => false ));
					
		register_post_type( 'portfolio' , $args );
	}
	// end create_post_type_portfolio
	
	add_action( 'init', 'create_post_type_portfolio' );
	
	
	function portfolio_updated_messages( $messages )
	{
		global $post, $post_ID;
		
		$messages['portfolio'] = array( 0 => "", // Unused. Messages start at index 1.
										1 => sprintf( __( '<strong>Updated.</strong> <a target="_blank" href="%s">View</a>', 'read' ), esc_url( get_permalink( $post_ID) ) ),
										2 => __( 'Custom field updated.', 'read' ),
										3 => __( 'Custom field deleted.', 'read' ),
										4 => __( 'Updated.', 'read' ),
										// translators: %s: date and time of the revision
										5 => isset( $_GET['revision'] ) ? sprintf( __( 'Restored to revision from %s', 'read' ), wp_post_revision_title( ( int ) $_GET['revision'], false ) ) : false,
										6 => sprintf( __( '<strong>Published.</strong> <a target="_blank" href="%s">View</a>', 'read' ), esc_url( get_permalink( $post_ID) ) ),
										7 => __( 'Saved.', 'read' ),
										8 => sprintf( __( 'Submitted. <a target="_blank" href="%s">Preview</a>', 'read' ), esc_url( add_query_arg( 'preview', 'true', get_permalink($post_ID) ) ) ),
										9 => sprintf( __( 'Scheduled for: <strong>%1$s</strong>. <a target="_blank" href="%2$s">Preview</a>', 'read' ),
										// translators: Publish box date format, see http://php.net/date
										date_i18n( __( 'M j, Y @ G:i', 'read' ), strtotime( $post->post_date ) ), esc_url( get_permalink( $post_ID) ) ),
										10 => sprintf( __( '<strong>Item draft updated.</strong> <a target="_blank" href="%s">Preview</a>', 'read' ), esc_url( add_query_arg( 'preview', 'true', get_permalink( $post_ID) ) ) ) );
	
		return $messages;
	}
	// end portfolio_updated_messages
	
	add_filter( 'post_updated_messages', 'portfolio_updated_messages' );
	
	
	function portfolio_columns( $pf_columns )
	{
		$pf_columns = array('cb' => '<input type="checkbox">',
							'title' => __( 'Title', 'read' ),
							'pf_featured_image' => __( 'Featured Image', 'read' ),
							'portfolio_type' => __( 'Type', 'read' ),
							'departments' => __( 'Departments', 'read' ),
							'pf_short_description' => __( 'Short Description', 'read' ),
							'comments' => '<span class="vers"><div title="Comments" class="comment-grey-bubble"></div></span>',
							'date' => __( 'Date', 'read' ) );
		
		return $pf_columns;
	}
	// end portfolio_columns
	
	add_filter( 'manage_edit-portfolio_columns', 'portfolio_columns' );
	
	
	function portfolio_custom_columns( $pf_column )
	{
		global $post, $post_ID;
		
		switch ( $pf_column )
		{
			case 'pf_featured_image':
			
				if ( has_post_thumbnail() )
				{
					the_post_thumbnail( 'thumbnail' );
				}
				
			break;
			
			case 'portfolio_type':
			
				$pf_type = get_option( $post->ID . 'pf_type', 'Standard' );
				
				echo $pf_type;
				
			break;
			
			case 'departments':
			
				$taxon = 'department';
				$terms_list = get_the_terms( $post_ID, $taxon );
				
				if ( ! empty( $terms_list ) )
				{
					$out = array();
					
					foreach ( $terms_list as $term_list )
					{
						$out[] = '<a href="edit.php?post_type=portfolio&department=' .$term_list->slug .'">' .$term_list->name .' </a>';
					}
					
					echo join( ', ', $out );
				}
				// end if
				
			break;
			
			case 'pf_short_description':
			
				$pf_short_description = stripcslashes( get_option( $post->ID . 'pf_short_description', "" ) );
				
				echo $pf_short_description;
				
			break;
		}
		// end switch
	}
	// end portfolio_custom_columns
	
	add_action( 'manage_posts_custom_column',  'portfolio_custom_columns' );
	
	
	function portfolio_taxonomy()
	{
		$labels_dep = array('name' => __( 'Departments', 'read' ),
							'singular_name' => __( 'Department', 'read' ),
							'search_items' =>  __( 'Search', 'read' ),
							'all_items' => __( 'All', 'read' ),
							'parent_item' => __( 'Parent Department', 'read' ),
							'parent_item_colon' => __( 'Parent Department:', 'read' ),
							'edit_item' => __( 'Edit', 'read' ),
							'update_item' => __( 'Update', 'read' ),
							'add_new_item' => __( 'Add New', 'read' ),
							'new_item_name' => __( 'New Department Name', 'read' ),
							'menu_name' => __( 'Departments', 'read' ) );

		register_taxonomy(  'department',
							array( 'portfolio' ),
							array( 'hierarchical' => true,
							'labels' => $labels_dep,
							'show_ui' => true,
							'public' => true,
							'query_var' => true,
							'rewrite' => array( 'slug' => 'department' ) ) );
							
							
		$labels_tag = array('name' => __( 'Portfolio Tags', 'read' ),
							'singular_name' => __( 'Portfolio Tag', 'read' ),
							'search_items' =>  __( 'Search', 'read' ),
							'all_items' => __( 'All', 'read' ),
							'parent_item' => __( 'Parent Portfolio Tag', 'read' ),
							'parent_item_colon' => __( 'Parent Portfolio Tag:', 'read' ),
							'edit_item' => __( 'Edit', 'read' ),
							'update_item' => __( 'Update', 'read' ),
							'add_new_item' => __( 'Add New', 'read' ),
							'new_item_name' => __( 'New Portfolio Tag Name', 'read' ),
							'menu_name' => __( 'Portfolio Tags', 'read' ) );

		register_taxonomy(  'portfolio_tags',
							array( 'portfolio' ),
							array( 'hierarchical' => false,
							'labels' => $labels_tag,
							'show_ui' => true,
							'public' => true,
							'query_var' => true,
							'rewrite' => array( 'slug' => 'portfolio_tags' ) ) );
	}
	// end portfolio_taxonomy
	
	add_action( 'init', 'portfolio_taxonomy' );
	
	
	function only_show_departments()
	{
		global $typenow;
		
		if ( $typenow == 'portfolio' )
		{
			$filters = array( 'department' );
			
			foreach ( $filters as $tax_slug )
			{
				$tax_obj = get_taxonomy( $tax_slug );
				$tax_name = $tax_obj->labels->name;
				$terms = get_terms( $tax_slug );
			
				echo '<select name="' .$tax_slug .'" id="' .$tax_slug .'" class="postform">';
				echo '<option value="">' . __( 'Show All', 'read' ) . ' ' .$tax_name .'</option>';
				
				foreach ( $terms as $term )
				{
					echo '<option value='. $term->slug, @$_GET[$tax_slug] == $term->slug ? ' selected="selected"' : '','>' . $term->name .' (' . $term->count .')</option>';
				}
				
				echo '</select>';
			}
			// end foreach
		}
		// end if
	}
	// end only_show_departments

	add_action( 'restrict_manage_posts', 'only_show_departments' );
	
	
	function show_theme_custom_box_portfolio( $post )
	{
		?>
			<?php
				wp_nonce_field( 'show_theme_custom_box_portfolio', 'nonce_show_theme_custom_box_portfolio' );
			?>
			
			<h4><?php echo __( 'Type', 'read' ); ?></h4>
			
			<p class="pf-type-wrap">
				<?php
					$pf_type = get_option( $post->ID . 'pf_type', 'Standard' );
				?>
				<label style="display: inline-block; margin-bottom: 5px;">
					<input type="radio" name="pf_type" <?php if ( $pf_type == 'Standard' ) { echo 'checked="checked"'; } ?> value="Standard"> <?php echo __( 'Standard', 'read' ); ?>
				</label>
				
				<br>
				
				<label style="display: inline-block; margin-bottom: 5px;">
					<input type="radio" name="pf_type" <?php if ( $pf_type == 'Lightbox Featured Image' ) { echo 'checked="checked"'; } ?> value="Lightbox Featured Image"> <?php echo __( 'Lightbox Featured Image', 'read' ); ?>
				</label>
				
				<br>
				
				<label style="display: inline-block; margin-bottom: 5px;">
					<input type="radio" name="pf_type" <?php if ( $pf_type == 'Lightbox Gallery' ) { echo 'checked="checked"'; } ?> value="Lightbox Gallery"> <?php echo __( 'Lightbox Gallery', 'read' ); ?>
				</label>
				
				<br>
				
				<label style="display: inline-block; margin-bottom: 5px;">
					<input type="radio" name="pf_type" <?php if ( $pf_type == 'Lightbox Video' ) { echo 'checked="checked"'; } ?> value="Lightbox Video"> <?php echo __( 'Lightbox Video', 'read' ); ?>
				</label>
				
				<br>
				
				<label style="display: inline-block; margin-bottom: 5px;">
					<input type="radio" name="pf_type" <?php if ( $pf_type == 'Lightbox Audio' ) { echo 'checked="checked"'; } ?> value="Lightbox Audio"> <?php echo __( 'Lightbox Audio', 'read' ); ?>
				</label>
				
				<br>
				
				<label style="display: inline-block;">
					<input type="radio" name="pf_type" <?php if ( $pf_type == 'Direct URL' ) { echo 'checked="checked"'; } ?> value="Direct URL" class="pf-type-direct-url"> <?php echo __( 'Direct URL', 'read' ); ?>
				</label>
			</p>
			<!-- end .pf-type-wrap -->
			
			<p class="direct-url-wrap" style="<?php if ( $pf_type == 'Direct URL' ) { echo 'display: block;'; } else { echo 'display: none;'; } ?>">
				<?php
					$pf_direct_url = stripcslashes( get_option( $post->ID . 'pf_direct_url' ) );
					
					$pf_link_new_tab = get_option( $post->ID . 'pf_link_new_tab', true );
				?>
				<label for="pf_direct_url"><?php echo __( 'Direct URL:', 'read' ); ?></label>
				
				<input type="text" id="pf_direct_url" name="pf_direct_url" class="widefat code2" placeholder="Link Url" value="<?php echo $pf_direct_url; ?>">
				
				<label style="display: inline-block; margin-top: 5px;"><input type="checkbox" id="pf_link_new_tab" name="pf_link_new_tab" <?php if ( $pf_link_new_tab ) { echo 'checked="checked"'; } ?>> <?php echo __( 'Open link in new tab', 'read' ); ?></label>
			</p>
			<!-- end .direct-url-wrap -->
			
			<script>
				jQuery(document).ready(function($)
				{
					$( '.pf-type-wrap label' ).click(function()
					{
						if ( $( this ).find( 'input' ).hasClass( 'pf-type-direct-url' ) )
						{
							$( '.direct-url-wrap' ).show();
						}
						else
						{
							$( '.direct-url-wrap' ).hide();
						}
					});
				});
			</script>
			
			<hr>
			
			<h4><?php echo __( 'Thumbnail Size', 'read' ); ?></h4>
			
			<p>
				<?php
					$pf_thumb_size = get_option( $post->ID . 'pf_thumb_size', 'x1' );
				?>
				<label style="display: inline-block; margin-bottom: 5px;"><input type="radio" name="pf_thumb_size" <?php if ( $pf_thumb_size == 'x1' ) { echo 'checked="checked"'; } ?> value="x1"> <?php echo __( '1x', 'read' ); ?></label>
				
				<br>
				
				<label style="display: inline-block; margin-bottom: 5px;"><input type="radio" name="pf_thumb_size" <?php if ( $pf_thumb_size == 'x2' ) { echo 'checked="checked"'; } ?> value="x2"> <?php echo __( '2x', 'read' ); ?></label>
			</p>
			
			<hr>
			
			<h4><?php echo __( 'Short Description', 'read' ); ?></h4>
			
			<p>
				<?php
					$pf_short_description = stripcslashes( get_option( $post->ID . 'pf_short_description' ) );
				?>
				<textarea id="pf_short_description" name="pf_short_description" rows="4" cols="46" class="widefat"><?php echo $pf_short_description; ?></textarea>
			</p>
		<?php
	}
	// end show_theme_custom_box_portfolio
	
	
	function add_theme_custom_box_portfolio()
	{
		add_meta_box( 'theme_custom_box_portfolio', __( 'Details', 'read' ), 'show_theme_custom_box_portfolio', 'portfolio', 'side', 'low' );
	}
	
	add_action( 'add_meta_boxes', 'add_theme_custom_box_portfolio' );
	
	
	function save_theme_custom_box_portfolio( $post_id )
	{
		if ( ! isset( $_POST['nonce_show_theme_custom_box_portfolio'] ) )
		{
			return $post_id;
		}
		// end if
		
		
		$nonce = $_POST['nonce_show_theme_custom_box_portfolio'];
		
		if ( ! wp_verify_nonce( $nonce, 'show_theme_custom_box_portfolio' ) )
        {
			return $post_id;
		}
		// end if
		
		
		if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
        {
			return $post_id;
		}
		// end if
		
		
		if ( 'page' == $_POST['post_type'] )
		{
			if ( ! current_user_can( 'edit_page', $post_id ) )
			{
				return $post_id;
			}
		}
		else
		{
			if ( ! current_user_can( 'edit_post', $post_id ) )
			{
				return $post_id;
			}
		}
		// end if
		
		
		update_option( $post_id . 'pf_type', $_POST['pf_type'] );
		update_option( $post_id . 'pf_direct_url', $_POST['pf_direct_url'] );
		update_option( $post_id . 'pf_link_new_tab', $_POST['pf_link_new_tab'] );
		update_option( $post_id . 'pf_thumb_size', $_POST['pf_thumb_size'] );
		update_option( $post_id . 'pf_short_description', $_POST['pf_short_description'] );
	}
	// end save_theme_custom_box_portfolio
	
	add_action( 'save_post', 'save_theme_custom_box_portfolio' );

/* ============================================================================================================================================= */
/* ============================================================================================================================================= */

	// https://github.com/franz-josef-kaiser/Easy-Pagination-Deamon
	// https://github.com/marke123/Easy-Pagination-Deamon
	
	if ( ! class_exists('WP') ) 
	{
		header( 'Status: 403 Forbidden' );
		header( 'HTTP/1.1 403 Forbidden' );
		exit;
	}
	
	/**
	 * TEMPLATE TAG
	 * 
	 * A wrapper/template tag for the pagination builder inside the class.
	 * Write a call for this function with a "range" 
	 * inside your template to display the pagination.
	 * 
	 * @param integer $range
	 */
	
	function oxo_pagination( $args ) 
	{
		return new oxoPagination( $args );
	}
	
	
	if ( ! class_exists( 'oxoPagination' ) ) 
	{
		class oxoPagination 
		{
			/**
			 * Plugin root path
			 * @var unknown_type
			 */
			protected $path;
			
			/**
			 * Plugin version
			 * @var integer
			 */
			protected $version;
			
			/**
			 * Default arguments
			 * @var array
			 */
			protected $defaults = array( 'classes'			=> ""
										,'range'			=> 5
										,'wrapper'			=> 'li' // element in which we wrap the link 
										,'highlight'		=> 'current' // class for the current page
										,'before'			=> ""
										,'after'			=> ""
										,'link_before'		=> ""
										,'link_after'		=> ""
										,'next_or_number'	=> 'number'
										,'nextpagelink'		=> 'Next'
										,'previouspagelink'	=> 'Prev'
										,'pagelink'			=> '%'
										# only for attachment img pagination/navigation
										,'attachment_size'	=> 'thumbnail'
										,'show_attachment'	=> true );

			/**
			 * Input arguments
			 * @var array
			 */
			protected $args;
			
			/**
			 * Constant for the texdomain (i18n)
			 */
			const LANG = 'read';
			
			
			public function __construct( $args ) 
			{
				// Set root path variable
				$this->path = $this->get_root_path();

				// Set version
				# $this->version = get_plugin_data();

				# >>>> defaults & arguments

					// apply the "wp_list_pages_args" wordpress native filter also to the custom "page_links" function.
					$this->defaults = apply_filters( 'wp_link_pages_args', $this->defaults );

					// merge defaults with input arguments
					$this->args = wp_parse_args( $args, $this->defaults );

				# <<<< defaults & arguments

				// Help placing the template tag at the right position (inside/outside loop).
				$this->help();

				// Css
				$this->register_styles();
				// Load stylesheet into the 'wp_head()' hook of your theme.
				add_action( 'wp_head', array( &$this, 'print_styles' ) );

				// RENDER
				$this->render( $this->args );
			}


			/**
			 * Plugin root
			 */
			function get_root_path() 
			{
				$path = trailingslashit( WP_PLUGIN_URL.'/'.str_replace( basename( __FILE__ ), "", plugin_basename( __FILE__ ) ) );
				$path = apply_filters( 'config_pagination_url', $path );

				return $this->path = $path;
			}


			/**
			 * Return plugin comment data
			 * 
			 * @since 0.1.3.3
			 * 
			 * @param $value string | default = 'Version' (Other input values: Name, PluginURI, Version, Description, Author, AuthorURI, TextDomain, DomainPath, Network, Title)
			 * 
			 * @return string
			 */
			private function get_plugin_data( $value = 'Version' )
			{	
				$plugin_data = get_plugin_data( __FILE__ );

				return $plugin_data[ $value ];
			}

			/**
			 * Register styles
			 */
			function register_styles() 
			{
				if ( ! is_admin() )
				{
					// Search for a stylesheet
					$name = '/pagination.css';

					if ( file_exists( get_stylesheet_directory() . $name ) )
					{
						$file = get_stylesheet_directory() . $name;
					}
					elseif ( file_exists( get_template_directory() . $name ) )
					{
						$file = get_template_directory() . $name;
					}
					elseif ( file_exists( $this->path.$name ) )
					{
						$file = $this->path.$name;
					}
					else 
					{
						return;
					}

					// try to avoid caching stylesheets if they changed
					$version = filemtime( $file );
					
					// If no change was found, use the plugins version number
					if ( ! $version )
						$version = $this->version;

					wp_register_style( 'pagination', $file, false, $version, 'screen' );
				}
			}

			/**
			 * Print styles
			 */
			function print_styles() 
			{
				if ( ! is_admin() )
				{
					wp_enqueue_style( 'pagination' );
				}
			}

			/**
			 * Help with placing the template tag right
			 */
			function help() 
			{
				/*
				if ( is_single() && ! in_the_loop() )
				{
					$output = sprintf( __( 'You should place the %1$s template tag inside the loop on singular templates.', self::LANG ), __CLASS__ );
				}
				else

				_doing_it_wrong( 'Class: '.__CLASS__.' function: '.__FUNCTION__, 'error message' );
				*/
				if ( ! is_single() && in_the_loop() )
				{
					$output = sprintf( __( 'You shall not place the %1$s template tag inside the loop on list/archives/search/etc templates.', self::LANG ), __CLASS__ );
				}

				if ( ! isset( $output ) )
					return;

				// error
				$message = new WP_Error( 
					 __CLASS__
					,$output 
				);

				// render
				if ( is_wp_error( $message ) ) 
				{ 
				?>
					<div id="oxo-error-<?php echo $message->get_error_code(); ?>" class="error oxo-error prepend-top clear">
						<strong>
							<?php echo $message->get_error_message(); ?>
						</strong>
					</div>
				<?php 
				}
			}


			/**
			 * Replacement for the native wp_link_page() function
			 * 
			 * @author original version: Thomas Scholz (toscho.de)
			 * @link http://wordpress.stackexchange.com/questions/14406/how-to-style-current-page-number-wp-link-pages/14460#14460
			 * 
			 * @param (mixed) array $args
			 */
			public function page_links( $args )
			{
				global $page, $numpages, $multipage, $more, $pagenow;

				$args = wp_parse_args( $args, $this->defaults );
				extract( $args, EXTR_SKIP );

				if ( ! $multipage )
					return;

				# ============================================== #

				# >>>> css classes wrapper
				$start_classes = isset( $classes ) ? ' class="' : '';
				$end_classes = isset( $classes ) ? '"' : '';
				# <<<< css classes wrapper

				$output  = $before;
				
				switch ( $next_or_number ) 
				{
					case 'next' :
					
						if ( $more ) 
						{
							# >>>> [prev]
							$i = $page - 1;
							if ( $i && $more ) 
							{
								# >>>> <li class="custom-class">
								$output .= '<'.$wrapper.$start_classes.$classes.$end_classes.'>';
									$output .= _wp_link_page( $i ).$link_before.$previouspagelink.$link_after.'</a>';
								$output .= '</'.$wrapper.'>';
								# <<<< </li>
							}
							# <<<< [prev]

							# >>>> [next]
							$i = $page + 1;
							if ( $i <= $numpages && $more ) 
							{
								# >>>> <li class="custom-class">
								$output .= '<'.$wrapper.$start_classes.$classes.$end_classes.'>';
									$output .= _wp_link_page( $i ).$link_before.$nextpagelink.$link_after.'</a>';
								$output .= '</'.$wrapper.'>';
								# <<<< </li>
							}
							# <<<< [next]
						}
						
						break;

					case 'number' :
					
						for ( $i = 1; $i < ( $numpages + 1 ); $i++ )
						{
							$classes = isset( $this->args['classes'] ) ? $this->args['classes'] : '';
							
							if ( $page === $i && isset( $this->args['highlight'] ) )
								 $classes .= ' '.$this->args['highlight'];

							# >>>> <li class="current custom-class">
							$output .= '<'.$wrapper.$start_classes.$classes.$end_classes.'>';

								# >>>> [1] [2] [3] [4]
								$j = str_replace( '%', $i, $pagelink );

								if ( $page !== $i || ( ! $more && $page == true ) )
								{
									$output .= _wp_link_page( $i ).$link_before.$j.$link_after.'</a>';
								}

								// the current page must not have a link to itself
								else
								{
									$output .= $link_before.'<span>'.$j.'</span>'.$link_after;
								}
								# <<<< [next]/[prev] | [1] [2] [3] [4]

							$output .= '</'.$wrapper.'>';
							# <<<< </li>
						}
						
						break;

					default :
					
						// in case you can imagine some funky way to paginate
						do_action( 'hook_pagination_next_or_number', $page_links, $classes );
						break;
				}
				
				$output .= $after;

				return $output;
			}


			/**
			 * Navigation for image attachments
			 * 
			 * @param unknown_type $args
			 */
			public function attachment_links( $args )
			{
				global $post, $page;

				$args = wp_parse_args( $args, $this->defaults );
				extract( $args, EXTR_SKIP );

				# ============================================== #

				$attachments = array_values( get_children( array( 
					 'post_parent'		=> $post->post_parent
					,'post_status'		=> 'inherit'
					,'post_type'		=> 'attachment'
					,'post_mime_type'	=> 'image'
					,'order'			=> 'ASC'
					,'orderby'			=> 'menu_order ID' 
				) ) );

				// setup the keys for our links
				foreach ( $attachments as $key => $attachment ) {
					if ( $attachment->ID == $post->ID )
						break;
				}

				# ============================================== #
				# @todo implement rel="next/prev" for links

				# >>>> css classes wrapper
				$start_classes = isset( $classes ) ? ' class="' : '';
					$classes = isset( $classes ) ? ' '.$classes : '';
				$end_classes = isset( $classes ) ? '"' : '';
				# <<<< css classes wrapper

				$output  = $before;
					# >>>> [prev]
					if ( isset( $attachments[ $key - 1 ] ) )
					{
						$prev_href = get_attachment_link( $attachments[ $key - 1 ]->ID );

						$prev_title = str_replace( "_", " ", $attachments[ $key - 1 ]->post_title );
						$prev_title = str_replace( "-", " ", $prev_title );

						if ( $show_attachment === true )
						{
							if ( ( is_int( $attachment_size ) && $attachment_size != 0 ) || ( is_string( $attachment_size ) && $attachment_size != 'none' ) || $attachment_size != false )
								$prev_img = wp_get_attachment_image( $attachments[ $key - 1 ]->ID, $attachment_size, false );
						}

						# >>>> <li class="custom-class">
						$output .= '<'.$wrapper. $start_classes.$classes.$end_classes .'>';
							$output .= $link_before.'<a href="'.$prev_href.'" title="'.esc_attr( $prev_title ).'" rel="attachment prev">'.$prev_img.$previouspagelink.'</a>'.$link_after;
						$output .= '</'.$wrapper.'>';
						# <<<< </li>
					}
					# <<<< [prev]

					# >>>> [next]
					if ( isset( $attachments[ $key + 1 ] ) )
					{
						$next_href = get_attachment_link( $attachments[ $key + 1 ]->ID );

						$next_title = str_replace( "_", " ", $attachments[ $key + 1 ]->post_title );
						$next_title = str_replace( "-", " ", $next_title );

						if ( $show_attachment === true )
						{
							if ( ( is_int( $attachment_size ) && $attachment_size != 0 ) || ( is_string( $attachment_size ) && $attachment_size != 'none' ) || $attachment_size != false )
								$next_img = wp_get_attachment_image( $attachments[ $key + 1 ]->ID, $attachment_size, false );
						}

						# >>>> <li class="custom-class">
						$output .= '<'.$wrapper. $start_classes.$classes.$end_classes .'>';
							$output .= $link_before.'<a href="'.$next_href.'" title="'.esc_attr( $next_title ).'" rel="attachment prev">'.$next_img.$nextpagelink.'</a>'.$link_after;
						$output .= '</'.$wrapper.'>';
						# <<<< </li>
					}
					# <<<< [next]
				$output .= $after;

				#echo '<pre>';print_r($k);echo '</pre>';
				return $output;
			}


			/**
			 * Wordpress pagination for archives/search/etc.
			 * 
			 * Semantically correct pagination inside an unordered list
			 * 
			 * Displays: [First] [<<] [1] [2] [3] [4] [>>] [Last]
			 *	+ First/Last only appears if not on first/last page
			 *	+ Shows next/previous links [<<]/[>>]
			 * 
			 * Accepts a range attribute (default = 5) to adjust the number
			 * of direct page links that link to the pages above/below the current one.
			 * 
			 * @param (integer) $range
			 */
			function render( $args = array( 'classes', 'range' ) ) 
			{
				// $paged - number of the current page
				global $wp_query, $paged, $numpages;

				extract( $args, EXTR_SKIP );

				# ============================================== #

				// How much pages do we have?
				$max_page = (int) $wp_query->max_num_pages;

				// We need the pagination only if there is more than 1 page
				if ( $max_page > (int) 1 )
					$paged = ! $wp_query->query_vars['paged'] ? (int) 1 : $wp_query->query_vars['paged'];

				$classes = isset( $classes ) ? ' '.$classes : '';
				?>

				<ul class="pagination">

					<?php 
					// *******************************************************
					// To the first / previous page
					// On the first page, don't put the first / prev page link
					// *******************************************************
					if ( $paged !== (int) 1 && $paged !== (int) 0 && ! is_page() ) 
					{
						?>
						<li class="pagination-first <?php echo $classes; ?>">
							<?php
							$first_post_link = get_pagenum_link( 1 ); 
							?>
							<a href=<?php echo $first_post_link; ?> rel="first">
								<?php _e( 'First', 'read' ); ?>
							</a>
						</li>

						<li class="pagination-prev <?php echo $classes; ?>">
							<?php 
								# let's use the native fn instead of the previous_/next_posts_link() alias
								# get_adjacent_post( $in_same_cat = false, $excluded_categories = '', $previous = true )

								// Get the previous post object
								$in_same_cat	= is_category() || is_tag() || is_tax() ? true : false;
								$prev_post_obj	= get_adjacent_post( $in_same_cat );
								// Get the previous posts ID
								$prev_post_ID	= isset( $prev_post_obj->ID ) ? $prev_post_obj->ID : '';

								// Set title & link for the previous post
								if ( is_single() )
								{
									if ( isset( $prev_post_obj ) )
									{
										$prev_post_link		= get_permalink( $prev_post_ID );
										$prev_post_title	= '&laquo;';
										// $prev_post_title	= __( 'Prev', self::LANG ) . ': ' . mb_substr( $prev_post_obj->post_title, 0, 6 );
									}
								}
								else
								{
									$prev_post_link		= home_url().'/?s='.get_search_query().'&paged='.( $paged-1 );
									$prev_post_title	= '&laquo;';
								}
								?>
							<!-- Render Link to the previous post -->
							<a href="<?php echo $prev_post_link; ?>" rel="prev">
								<?php echo $prev_post_title; ?>
							</a>
							<?php # previous_posts_link(' &laquo; '); // ?>
						</li>
						<?php 
					}

					// Render, as long as there are more posts found, than we display per page
					if ( ! $wp_query->query_vars['posts_per_page'] < $wp_query->found_posts )
					{

						// *******************************************************
						// We need the sliding effect only if there are more pages than is the sliding range
						// *******************************************************
						if ( $max_page > $range ) 
						{
							// When closer to the beginning
							if ( $paged < $range ) 
							{
								for ( $i = 1; $i <= ( $range+1 ); $i++ ) 
								{ 
									$current = '';
									// Apply the css class "current" if it's the current post
									if ( $paged === (int) $i )
									{
										$current = ' current';
										# echo _wp_link_page( $i ).'</a>';
									}
									?>
									<li class="pagination-num<?php echo $classes.$current; ?>">
										<!-- Render page number Link -->
										<a href="<?php echo get_pagenum_link( $i ); ?>">
											<?php echo $i; ?>
										</a>
									</li>
									<?php 
								}
							}
							// When closer to the end
							elseif ( $paged >= ( $max_page - ceil ( $range/2 ) ) ) 
							{
								for ( $i = $max_page - $range; $i <= $max_page; $i++ )
								{ 
									$current = '';
									// Apply the css class "current" if it's the current post
									$current = ( $paged === (int) $i ) ? ' current' : '';

									?>
									<li class="pagination-num<?php echo $classes.$current; ?>">
										<!-- Render page number Link -->
										<a href="<?php echo get_pagenum_link( $i ); ?>">
											<?php echo $i; ?>
										</a>
									</li>
									<?php 
								}
							}
							// Somewhere in the middle
							elseif ( $paged >= $range && $paged < ( $max_page - ceil( $range/2 ) ) ) 
							{
								for ( $i = ( $paged - ceil( $range/2 ) ); $i <= ( $paged + ceil( $range/2 ) ); $i++ ) 
								{
									$current = '';
									// Apply the css class "current" if it's the current post
									$current = ( $paged === (int) $i ) ? ' current' : '';

									?>
									<li class="pagination-num<?php echo $classes.$current; ?>">
										<!-- Render page number Link -->
										<a href="<?php echo get_pagenum_link( $i ); ?>">
											<?php echo $i; ?>
										</a>
									</li>
									<?php 
								}
							}
						}
						// Less pages than the range, no sliding effect needed
						else 
						{
							for ( $i = 1; $i <= $max_page; $i++ ) 
							{
								$current = '';
								// Apply the css class "current" if it's the current post
								$current = ( $paged === (int) $i ) ? ' current' : '';

								?>
								<li class="pagination-num<?php echo $classes.$current; ?>">
									<!-- Render page number Link -->
									<a href="<?php echo get_pagenum_link( $i ); ?>">
										<?php echo $i; ?>
									</a>
								</li>
								<?php 
							}
						} // endif;
					} // endif; there are more posts found, than we display per page 


					// *******************************************************
					// to the last / next page of a paged post
					// This only get's used on posts/pages that use the <!--nextpage--> quicktag
					// *******************************************************
					if ( is_singular() )
					{
						$echo = false;

						if ( wp_attachment_is_image() === true )
						{ 
							echo $this->attachment_links( $this->args );
						}
						elseif ( $numpages > 1 )
						{
							echo $this->page_links( $this->args );
						}
					}


					// *******************************************************
					// to the last / next page
					// On the last page: don't show the link to the last/next page
					// *******************************************************
					if ( $paged !== (int) 0 && $paged !== (int) $max_page && $max_page !== (int) 0 && ! is_page() )
					{
						?>
						<li class="pagination-next<?php echo $classes; ?>">
							<?php 
							# let's use the native fn instead of the previous_/next_posts_link() alias
							# get_adjacent_post( $in_same_cat = false, $excluded_categories = '', $previous = true )

							// Get the next post object
							$in_same_cat	= is_category() || is_tag() || is_tax() ? true : false;
							$next_post_obj	= get_adjacent_post( $in_same_cat, '', false );
							// Get the next posts ID
							$next_post_ID	= isset( $next_post_obj->ID ) ? $next_post_obj->ID : '';

							// Set title & link for the next post
							if ( is_single() )
							{
								if ( isset( $next_post_obj ) )
								{
									# $next_post_link = get_next_posts_link();
									# $next_post_paged_link = get_next_posts_page_link();
									$next_post_link		= get_permalink( $next_post_ID );
									$next_post_title	= '&raquo;';
									// $next_post_title	= __( 'Next', self::LANG ) . mb_substr( $next_post_obj->post_title, 0, 6 );
								}
							}
							else 
							{
								$next_post_link		= home_url().'/?s='.get_search_query().'&paged='.( $paged+1 );
								$next_post_title	= '&raquo;';
							}

							if ( isset ( $next_post_obj ) )
							{
								?>
								<!-- Render Link to the next post -->
								<a href="<?php echo $next_post_link; ?>" rel="next">
									<?php echo $next_post_title; ?>
								</a>
								<?php
							} 
							else 
							{
								next_posts_link(' &raquo; ');
							}
							?>
						</li>

						<li class="pagination-last<?php echo $classes; ?>">
							<?php
							$last_post_link = get_pagenum_link( $max_page ); 
							?>
							<!-- Render Link to the last post -->
							<a href="<?php echo $last_post_link; ?>" rel="last">
								<?php _e( 'Last', 'read' ); ?>
							</a>
						</li>
						<?php 
					}
					// endif;
				?>
				</ul>
				<?php
			}
		}
		// END Class oxoPagination
	}
	// end if


/* ============================================================================================================================================= */
/* ============================================================================================================================================= */


	/*
	
		This function filters the post content when viewing a post with the "chat" post format.  It formats the 
		content with structured HTML markup to make it easy for theme developers to style chat posts. The 
		advantage of this solution is that it allows for more than two speakers (like most solutions). You can 
		have 100s of speakers in your chat post, each with their own, unique classes for styling.
		
		@author David Chandra
		@link http://www.turtlepod.org
		@author Justin Tadlock
		@link http://justintadlock.com
		@copyright Copyright (c) 2012
		@license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
		@link http://justintadlock.com/archives/2012/08/21/post-formats-chat
		
		@global array $_post_format_chat_ids An array of IDs for the chat rows based on the author.
		@param string $content The content of the post.
		@return string $chat_output The formatted content of the post.
	
	*/
	
	
	function my_format_chat_content( $content )
	{
		global $_post_format_chat_ids;
		
		
		/* If this is not a 'chat' post, return the content. */
		if ( !has_post_format( 'chat' ) )
			return $content;
		
		
		/* Set the global variable of speaker IDs to a new, empty array for this chat. */
		$_post_format_chat_ids = array();
		
		
		/* Allow the separator (separator for speaker/text) to be filtered. */
		$separator = apply_filters( 'my_post_format_chat_separator', ':' );
		
		
		/* Open the chat transcript div and give it a unique ID based on the post ID. */
		$chat_output = "\n\t\t\t" . '<div id="chat-transcript-' . esc_attr( get_the_ID() ) . '" class="chat-transcript">';
		
		
		/* Split the content to get individual chat rows. */
		$chat_rows = preg_split( "/(\r?\n)+|(<br\s*\/?>\s*)+/", $content );
		
		
		/* Loop through each row and format the output. */
		foreach ( $chat_rows as $chat_row )
		{
			/* If a speaker is found, create a new chat row with speaker and text. */
			if ( strpos( $chat_row, $separator ) )
			{
				/* Split the chat row into author/text. */
				$chat_row_split = explode( $separator, trim( $chat_row ), 2 );
				
				
				/* Get the chat author and strip tags. */
				$chat_author = strip_tags( trim( $chat_row_split[0] ) );
				
				
				/* Get the chat text. */
				$chat_text = trim( $chat_row_split[1] );
				
				
				/* Get the chat row ID (based on chat author) to give a specific class to each row for styling. */
				$speaker_id = my_format_chat_row_id( $chat_author );
				
				
				/* Open the chat row. */
				$chat_output .= "\n\t\t\t\t" . '<div class="chat-row ' . sanitize_html_class( "chat-speaker-{$speaker_id}" ) . '">';
				
				
				/* Add the chat row author. */
				$chat_output .= "\n\t\t\t\t\t" . '<div class="chat-author ' . sanitize_html_class( strtolower( "chat-author-{$chat_author}" ) ) . ' vcard"><cite class="fn">' . apply_filters( 'my_post_format_chat_author', $chat_author, $speaker_id ) . '</cite>' . $separator . '</div>';
				
				
				/* Add the chat row text. */
				$chat_output .= "\n\t\t\t\t\t" . '<div class="chat-text">' . str_replace( array( "\r", "\n", "\t" ), '', apply_filters( 'my_post_format_chat_text', $chat_text, $chat_author, $speaker_id ) ) . '</div>';
				
				
				/* Close the chat row. */
				$chat_output .= "\n\t\t\t\t" . '</div><!-- .chat-row -->';
			}
			/*
				If no author is found, assume this is a separate paragraph of text that belongs to the
				previous speaker and label it as such, but let's still create a new row.
			*/
			else
			{
				/* Make sure we have text. */
				if ( !empty( $chat_row ) )
				{
					/* Open the chat row. */
					$chat_output .= "\n\t\t\t\t" . '<div class="chat-row ' . sanitize_html_class( "chat-speaker-{$speaker_id}" ) . '">';
					
					
					/* Don't add a chat row author.  The label for the previous row should suffice. */
					
					
					/* Add the chat row text. */
					$chat_output .= "\n\t\t\t\t\t" . '<div class="chat-text">' . str_replace( array( "\r", "\n", "\t" ), '', apply_filters( 'my_post_format_chat_text', $chat_row, $chat_author, $speaker_id ) ) . '</div>';
					
					
					/* Close the chat row. */
					$chat_output .= "\n\t\t\t</div><!-- .chat-row -->";
				}
				// end if
			}
			// end if
		}
		// end for
		
		
		/* Close the chat transcript div. */
		$chat_output .= "\n\t\t\t</div><!-- .chat-transcript -->\n";
		
		
		/* Return the chat content and apply filters for developers. */
		return apply_filters( 'my_post_format_chat_content', $chat_output );
	}
	// end my_format_chat_content
	
	
	/*
	
		This function returns an ID based on the provided chat author name. It keeps these IDs in a global 
		array and makes sure we have a unique set of IDs.  The purpose of this function is to provide an "ID"
		that will be used in an HTML class for individual chat rows so they can be styled. So, speaker "John" 
		will always have the same class each time he speaks. And, speaker "Mary" will have a different class 
		from "John" but will have the same class each time she speaks.
		
		@author David Chandra
		@link http://www.turtlepod.org
		@author Justin Tadlock
		@link http://justintadlock.com
		@copyright Copyright (c) 2012
		@license http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
		@link http://justintadlock.com/archives/2012/08/21/post-formats-chat
		
		@global array $_post_format_chat_ids An array of IDs for the chat rows based on the author.
		@param string $chat_author Author of the current chat row.
		@return int The ID for the chat row based on the author.
	
	*/
	
	
	function my_format_chat_row_id( $chat_author )
	{
		global $_post_format_chat_ids;
		
		
		/* Let's sanitize the chat author to avoid craziness and differences like "John" and "john". */
		$chat_author = strtolower( strip_tags( $chat_author ) );
		
		
		/* Add the chat author to the array. */
		$_post_format_chat_ids[] = $chat_author;
		
		
		/* Make sure the array only holds unique values. */
		$_post_format_chat_ids = array_unique( $_post_format_chat_ids );
		
		
		/* Return the array key for the chat author and add "1" to avoid an ID of "0". */
		return absint( array_search( $chat_author, $_post_format_chat_ids ) ) + 1;
	}
	// end my_format_chat_row_id
	
	
	/* Filter the content of chat posts. */
	add_filter( 'the_content', 'my_format_chat_content' );
	
	
	/* Auto-add paragraphs to the chat text. */
	add_filter( 'my_post_format_chat_text', 'wpautop' );


/* ============================================================================================================================================= */


	add_filter( 'the_excerpt', 'do_shortcode' );
	
	add_filter( 'widget_text', 'do_shortcode' );


/* ============================================================================================================================================= */


	function divider( $atts, $content = "" )
	{	
		$divider = '<hr>';
		
		return $divider;
	}
	
	add_shortcode( 'divider', 'divider' );


/* ============================================================================================================================================= */


	function letter( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'title' => "",
										'email' => "",
										'telephone' => "",
										'address' => "",
										'image_url' => "" ), $atts ) );
		
		
		if ( $title != "" )
		{
			$title_out = '<h4 class="letter-title">' . $title . '</h4>';
		}
		else
		{
			$title_out = "";
		}
		// end if
		
		
		if ( $email != "" )
		{
			$email_out = '<p><i class="icon-at"></i>' . $email . '</p>';
		}
		else
		{
			$email_out = "";
		}
		// end if
		
		
		if ( $telephone != "" )
		{
			$telephone_out = '<p><i class="icon-phone"></i>' . $telephone . '</p>';
		}
		else
		{
			$telephone_out = "";
		}
		// end if
		
		
		if ( $address != "" )
		{
			$address_out = '<p><i class="icon-location"></i>' . $address . '</p>';
		}
		else
		{
			$address_out = "";
		}
		// end if
		
		
		if ( $image_url != "" )
		{
			$image_out = '<div class="stamp"><img alt="' . $title . '" src="' . $image_url . '"></div>';
		}
		else
		{
			$image_out = "";
		}
		// end if
		
		
		$letter = '<div class="letter">';
		$letter .= $title_out;
		$letter .= $image_out;
		$letter .= '<div class="letter-info">';
		$letter .= $email_out;
		$letter .= $telephone_out;
		$letter .= $address_out;
		$letter .= '</div>';
		$letter .= '</div>';
		
		
		return $letter;
	}
	// end letter
	
	add_shortcode( 'letter', 'letter' );

/* ============================================================================================================================================= */

	function alert( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'type' => "",
										'title' => "" ), $atts ) );
		
		
		$alert = '<div class="alert ' . $type . '">';
		$alert .= '<strong>' . $title . '</strong> ' . do_shortcode( $content );
		$alert .= '</div>';
		
		
		return $alert;
	}
	// end alert
	
	add_shortcode( 'alert', 'alert' );

/* ============================================================================================================================================= */

	function social_icon( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'first_icon' => "",
										'last_icon' => "",
										'type' => "",
										'url' => "" ), $atts ) );
		
		
		if ( $first_icon == 'yes' )
		{
			$first_icon = '<ul class="social">';
		}
		// end if
		
		
		if ( $last_icon == 'yes' )
		{
			$last_icon = '</ul>';
		}
		// end if
		
		
		$social_icon = $first_icon;
		$social_icon .= '<li>';
		$social_icon .= '<a target="_blank" class="' . $type . '" href="' . $url . '"></a>';
		$social_icon .= '</li>';
		$social_icon .= $last_icon;
		
		
		return $social_icon;
	}
	// end social_icon
	
	add_shortcode( 'social_icon', 'social_icon' );

/* ============================================================================================================================================= */

	function toggle( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'first_toggle' => "",
										'last_toggle' => "",
										'title' => "",
										'active' => "" ), $atts ) );
		
		
		if ( $first_toggle == 'yes' )
		{
			$first_toggle = '<div class="toggle-group">';
		}
		// end if
		
		
		if ( $last_toggle == 'yes' )
		{
			$last_toggle = '</div>';
		}
		// end if
		
		
		if ( $active == 'yes' )
		{
			$active = ' class="active"';
		}
		// end if
		
		
		$toggle = $first_toggle;
		$toggle .= '<div class="toggle">';
		$toggle .= '<h4' . $active . '>' . $title . '</h4>';
		$toggle .= '<div class="toggle-content">';
		$toggle .= do_shortcode( $content );
		$toggle .= '</div>';
		$toggle .= '</div>';
		$toggle .= $last_toggle;
		
		
		return $toggle;
	}
	// end toggle
	
	add_shortcode( 'toggle', 'toggle' );

/* ============================================================================================================================================= */

	function accordion( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'first_accordion' => "",
										'last_accordion' => "",
										'title' => "",
										'active' => "" ), $atts ) );
		
		
		if ( $first_accordion == 'yes' )
		{
			$first_accordion = '<div class="toggle-group accordion">';
		}
		// end if
		
		
		if ( $last_accordion == 'yes' )
		{
			$last_accordion = '</div>';
		}
		// end if
		
		
		if ( $active == 'yes' )
		{
			$active = ' class="active"';
		}
		// end if
		
		
		$accordion = $first_accordion;
		$accordion .= '<div class="toggle">';
		$accordion .= '<h4' . $active . '>' . $title . '</h4>';
		$accordion .= '<div class="toggle-content">';
		$accordion .= do_shortcode( $content );
		$accordion .= '</div>';
		$accordion .= '</div>';
		$accordion .= $last_accordion;
		
		
		return $accordion;
	}
	// end accordion
	
	add_shortcode( 'accordion', 'accordion' );


/* ============================================================================================================================================= */


	function tabs_wrap( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'titles' => "",
										'active' => "" ), $atts ) );
		
		
		$titles_with_commas = $titles;
		$titles_with_markup = "";
		
		if ( $titles_with_commas != "" )
		{
			$titles_array = preg_split("/[\s]*[,][\s]*/", $titles_with_commas);
			
			foreach ( $titles_array as $title_name )
			{
				if ( $active == $title_name )
				{
					$titles_with_markup .= '<li><a class="active">' . $title_name . '</a></li>';
				}
				else
				{
					$titles_with_markup .= '<li><a>' . $title_name . '</a></li>';
				}
			}
		}
		
		
		$tabs_wrap = '<div class="tabs">';
		$tabs_wrap .= '<ul class="tab-titles">';
		$tabs_wrap .= $titles_with_markup;
		$tabs_wrap .= '</ul>';
		$tabs_wrap .= '<div class="tab-content">';
		$tabs_wrap .= do_shortcode( $content );
		$tabs_wrap .= '</div>';
		$tabs_wrap .= '</div>';
		
		
		return $tabs_wrap;
	}
	
	add_shortcode( 'tabs_wrap', 'tabs_wrap' );


/* ============================================================================================================================================= */


	function tab_pane( $atts, $content = "" )
	{
		$tab_pane = '<div>';
		$tab_pane .= do_shortcode( $content );
		$tab_pane .= '</div>';
		
		
		return $tab_pane;
	}
	
	add_shortcode( 'tab_pane', 'tab_pane' );


/* ============================================================================================================================================= */

	function icon( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'name' => "",
										'size' => "" ), $atts ) );
		
		
		$icon = '<i class="fa ' . $name . ' ' . $size . '"></i>';
		
		
		return $icon;
	}
	// end icon
	
	add_shortcode( 'icon', 'icon' );

/* ============================================================================================================================================= */

	function button( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'text' => "",
										'new_tab' => "",
										'size' => "",
										'icon' => "",
										'color' => "",
										'colored' => "",
										'url' => "" ), $atts ) );
		
		
		if ( $new_tab == 'yes' )
		{
			$new_tab = ' target="_blank"';
		}
		// end if
		
		
		$button_icon = "";
		
		if ( $icon != "" )
		{
			$icon = '<i class="fa ' . $icon . '"></i>';
			
			$button_icon = 'button-icon';
		}
		// end if
		
		
		if ( $colored == 'yes' )
		{
			$colored = 'colored';
		}
		// end if
		
		
		$button = '<a' . $new_tab . ' class="button ' . $size . ' ' . $color . ' ' . $colored . ' ' . $button_icon . '" href="' . $url . '">' . $icon . $text . '</a>';
		
		
		return $button;
	}
	// end button
	
	add_shortcode( 'button', 'button' );


/* ============================================================================================================================================= */


	function row( $atts, $content = "" )
	{
		$row = '<div class="row">';
		$row .= do_shortcode( $content );
		$row .= '</div>';
		
		
		return $row;
	}
	
	add_shortcode( 'row', 'row' );


/* ============================================================================================================================================= */


	function column( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'width'    => "",
										'width_xs' => "",
										'width_md' => "",
										'width_lg' => "" ), $atts ) );
		
		
		if ( $width != "" )
		{
			$width = 'col-sm-' . $width;
		}
		
		
		if ( $width_xs != "" )
		{
			$width_xs = ' col-xs-' . $width_xs;
		}
		
		
		if ( $width_md != "" )
		{
			$width_md = ' col-md-' . $width_md;
		}
		
		
		if ( $width_lg != "" )
		{
			$width_lg = ' col-lg-' . $width_lg;
		}
		
		
		$column = '<div class="' . $width . $width_xs . $width_md . $width_lg . '">';
		$column .= do_shortcode( $content );
		$column .= '</div>';
		
		
		return $column;
	}
	
	add_shortcode( 'column', 'column' );


/* ============================================================================================================================================= */


	function media_wrap( $atts, $content = "" )
	{
		$media_wrap = '<div class="media-wrap">';
		$media_wrap .= do_shortcode( $content );
		$media_wrap .= '</div>';
		
		
		return $media_wrap;
	}
	// end media_wrap
	
	add_shortcode( 'media_wrap', 'media_wrap' );

/* ============================================================================================================================================= */

	function video( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'src' => "",
										'poster' => "" ), $atts ) );
		
		
		$video = '<video style="width: 100%; height: 100%;" preload="none" src="' . $src . '" poster="' . $poster . '"></video>';
		
		
		return $video;
	}
	// end video
	
	add_shortcode( 'video', 'video' );

/* ============================================================================================================================================= */

	function audio( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'src' => "" ), $atts ) );
		
		
		$audio = '<audio style="width: 100%;" preload="none" src="' . $src . '"></audio>';
		
		
		return $audio;
	}
	// end audio
	
	add_shortcode( 'audio', 'audio' );

/* ============================================================================================================================================= */

	function link_wrap( $atts, $content = "" )
	{
		$link_wrap = '<div class="link-content">';
		$link_wrap .= do_shortcode( $content );
		$link_wrap .= '</div>';
		
		
		return $link_wrap;
	}
	// end link_wrap
	
	add_shortcode( 'link_wrap', 'link_wrap' );

/* ============================================================================================================================================= */

	function aside( $atts, $content = "" )
	{
		$aside = '<div class="aside-content">';
		$aside .= do_shortcode( $content );
		$aside .= '</div>';
		
		
		return $aside;
	}
	// end aside
	
	add_shortcode( 'aside', 'aside' );

/* ============================================================================================================================================= */

	function quote( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'name' => "" ), $atts ) );
		
		
		$quote = '<blockquote>';
		$quote .= do_shortcode( $content );
		$quote .= '<cite>' . $name . '</cite>';
		$quote .= '</blockquote>';
		
		
		return $quote;
	}
	// end quote
	
	add_shortcode( 'quote', 'quote' );

/* ============================================================================================================================================= */

	function slide( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'first_slide' => "",
										'last_slide' => "",
										'autoplay' => 'true',
										'title' => "",
										'src' => "" ), $atts ) );
		
		
		if ( $first_slide == 'yes' )
		{
			$first_slide = '<div class="flexslider" data-autoplay="' . $autoplay . '" data-interval="3000" data-animation="slide" data-direction="horizontal" data-animationSpeed="600"  data-pauseOnHover="true"><ul class="slides">';
		}
		// end if
		
		
		if ( $last_slide == 'yes' )
		{
			$last_slide = '</ul></div>';
		}
		// end if
		
		
		if ( $title != "" )
		{
			$title_out = '<p class="flex-title">' . $title . '</p>';
		}
		else
		{
			$title_out = "";
		}
		// end if
		
		
		$slide = $first_slide;
		$slide .= '<li>';
		$slide .= '<img alt="' . $title . '" src="' . $src . '">';
		$slide .= $title_out;
		$slide .= '</li>';
		$slide .= $last_slide;
		
		
		return $slide;
	}
	// end slide
	
	add_shortcode( 'slide', 'slide' );

/* ============================================================================================================================================= */

	function project_action( $atts, $content = "" )
	{
		$project_action = '<div class="project-action">';
		$project_action .= do_shortcode( $content );
		$project_action .= '</div>';
		
		
		return $project_action;
	}
	// end project_action
	
	add_shortcode( 'project_action', 'project_action' );

/* ============================================================================================================================================= */

	function call_to_action( $atts, $content = "" )
	{
		$call_to_action = '<div class="cta">';
		$call_to_action .= do_shortcode( $content );
		$call_to_action .= '</div>';
		
		
		return $call_to_action;
	}
	// end call_to_action
	
	add_shortcode( 'call_to_action', 'call_to_action' );

/* ============================================================================================================================================= */

	function cta_button_wrap( $atts, $content = "" )
	{
		$cta_button_wrap = '<div class="cta-button">';
		$cta_button_wrap .= do_shortcode( $content );
		$cta_button_wrap .= '</div>';
		
		
		return $cta_button_wrap;
	}
	// end cta_button_wrap
	
	add_shortcode( 'cta_button_wrap', 'cta_button_wrap' );

/* ============================================================================================================================================= */

	function progress_bar( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'first_bar' => "",
										'last_bar' => "",
										'text' => "",
										'percent' => "" ), $atts ) );
		
		
		if ( $first_bar == 'yes' )
		{
			$first_bar = '<div class="skillset">';
		}
		// end if
		
		
		if ( $last_bar == 'yes' )
		{
			$last_bar = '</div>';
		}
		// end if
		
		
		$progress_bar = $first_bar;
		$progress_bar .= '<div class="skill-unit">';
		$progress_bar .= '<h4>' . $text . '</h4>';
		$progress_bar .= '<div class="bar" data-percent="' . $percent . '"><div class="progress"></div></div>';
		$progress_bar .= '</div>';
		$progress_bar .= $last_bar;
		
		
		return $progress_bar;
	}
	// end progress_bar
	
	add_shortcode( 'progress_bar', 'progress_bar' );

/* ============================================================================================================================================= */

	function testimonial( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'first' => "",
										'last' => "",
										'name' => "",
										'job' => "",
										'image' => "" ), $atts ) );
		
		
		if ( $first == 'yes' )
		{
			$first = '<div class="testo-group">';
		}
		// end if
		
		
		if ( $last == 'yes' )
		{
			$last = '</div>';
		}
		// end if
		
		
		$testimonial = $first;
		$testimonial .= '<div class="testo">';
		$testimonial .= '<img alt="' . $name . '" src="' . $image . '">';
		$testimonial .= '<h4>' . $name . ' <span>' . $job . '</span></h4>';
		$testimonial .= do_shortcode( $content );
		$testimonial .= '</div>';
		$testimonial .= $last;
		
		
		return $testimonial;
	}
	// end testimonial
	
	add_shortcode( 'testimonial', 'testimonial' );

/* ============================================================================================================================================= */

	function timeline( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'title' => "",
										'icon' => "" ), $atts ) );
		
		
		$timeline = '<div class="timeline">';
		$timeline .= '<h2><i class="fa ' . $icon . '"></i>' . $title . '</h2>';
		$timeline .= do_shortcode( $content );
		$timeline .= '</div>';
		
		
		return $timeline;
	}
	// end timeline
	
	add_shortcode( 'timeline', 'timeline' );

/* ============================================================================================================================================= */

	function event( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'date' => "",
										'current' => "" ), $atts ) );
		
		
		if ( $current == 'yes' )
		{
			$current = 'current';
		}
		// end if
		
		
		$event = '<div class="event ' . $current . '">';
		$event .= '<span class="date">' . $date . '</span>';
		$event .= do_shortcode( $content );
		$event .= '</div>';
		
		
		return $event;
	}
	// end event
	
	add_shortcode( 'event', 'event' );


/* ============================================================================================================================================= */


	function latest_tweets($atts, $content = "")
	{
		extract(shortcode_atts(array('username' => "",
									 'count' 	=> '1',
									 'retweets' => 'no'), $atts));
		
		if ($retweets == 'yes')
		{
			$retweets = 'true';
		}
		else
		{
			$retweets = 'false';
		}
		
		$output = '<div id="latest-tweets" class="widget-twitter" data-twitter-name="' . esc_attr($username) . '" data-tweet-count="' . esc_attr($count) . '" data-include-retweets="' . esc_attr($retweets) . '"></div>';
		
		return $output;
	}
	
	add_shortcode('latest_tweets', 'latest_tweets');


/* ============================================================================================================================================= */


	function service( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'color' => "",
										'icon' => "" ), $atts ) );
		
		
		$service = '<div class="service ' . $color . '">';
		$service .= '<i class="fa ' . $icon . '"></i>';
		$service .= do_shortcode( $content );
		$service .= '</div>';
		
		
		return $service;
	}
	// end service
	
	add_shortcode( 'service', 'service' );

/* ============================================================================================================================================= */

	function process( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'icon' => "",
										'text' => "" ), $atts ) );
		
		
		$process = '<div class="process">';
		$process .= '<div class="process-box">';
		$process .= '<i class="fa ' . $icon . '"></i>';
		$process .= '<h4>' . $text . '</h4>';
		$process .= '</div>';
		$process .= '</div>';
		
		
		return $process;
	}
	// end process
	
	add_shortcode( 'process', 'process' );

/* ============================================================================================================================================= */

	function fun_fact( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'icon' => "",
										'text' => "" ), $atts ) );
		
		
		$fun_fact = '<div class="fun-fact">';
		$fun_fact .= '<i class="fa ' . $icon . '"></i>';
		$fun_fact .= '<h4>' . $text . '</h4>';
		$fun_fact .= '</div>';
		
		
		return $fun_fact;
	}
	// end fun_fact
	
	add_shortcode( 'fun_fact', 'fun_fact' );


/* ============================================================================================================================================= */


	function client( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'image'  => "",
										'url'    => "",
										'target' => "" ), $atts ) );
		
		
		if ( $target != "" )
		{
			$target = 'target="_blank"';
		}
		
		
		$client = '<div class="client"><a ' . $target . ' href="' . $url . '" rel="nofollow"><img alt="" src="' . $image . '"></a></div>';
		
		
		return $client;
	}
	
	add_shortcode( 'client', 'client' );


/* ============================================================================================================================================= */


	function image( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'src' => "" ), $atts ) );
		
		
		$image = '<img alt="" src="' . $src . '">';
		
		
		return $image;
	}
	// end image
	
	add_shortcode( 'image', 'image' );

/* ============================================================================================================================================= */

	function section_title( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'text' => "",
										'icon' => "" ), $atts ) );
		
		
		if ( $icon != "" )
		{
			$icon_out = '<i class="fa ' . $icon . '"></i>';
		}
		else
		{
			$icon_out = "";
		}
		// end if
		
		
		$section_title = '<h2 class="section-title"><span>' . $icon_out . $text . '</span></h2>';
		
		
		return $section_title;
	}
	// end section_title
	
	add_shortcode( 'section_title', 'section_title' );

/* ============================================================================================================================================= */

	function drop_cap( $atts, $content = "" )
	{
		$drop_cap = '<p class="drop-cap">';
		$drop_cap .= do_shortcode( $content );
		$drop_cap .= '</p>';
		
		
		return $drop_cap;
	}
	// end drop_cap
	
	add_shortcode( 'drop_cap', 'drop_cap' );

/* ============================================================================================================================================= */

	function tagline( $atts, $content = "" )
	{
		$tagline = '<div class="tagline">';
		$tagline .= do_shortcode( $content );
		$tagline .= '</div>';
		
		
		return $tagline;
	}
	// end tagline
	
	add_shortcode( 'tagline', 'tagline' );

/* ============================================================================================================================================= */

	function code_line( $atts, $content = "" )
	{
		$code_line = '<code>';
		$code_line .= do_shortcode( $content );
		$code_line .= '</code>';
		
		
		return $code_line;
	}
	// end code_line
	
	add_shortcode( 'code_line', 'code_line' );

/* ============================================================================================================================================= */

	function code_block( $atts, $content = "" )
	{
		$code_block = '<pre>';
		$code_block .= do_shortcode( $content );
		$code_block .= '</pre>';
		
		
		return $code_block;
	}
	// end code_block
	
	add_shortcode( 'code_block', 'code_block' );

/* ============================================================================================================================================= */

	function code_block_prettify( $atts, $content = "" )
	{
		$code_block_prettify = '<pre class="prettyprint">';
		$code_block_prettify .= do_shortcode( $content );
		$code_block_prettify .= '</pre>';
		
		
		return $code_block_prettify;
	}
	// end code_block_prettify
	
	add_shortcode( 'code_block_prettify', 'code_block_prettify' );

/* ============================================================================================================================================= */

	function code_block_line_numbers( $atts, $content = "" )
	{
		$code_block_line_numbers = '<pre class="prettyprint linenums">';
		$code_block_line_numbers .= do_shortcode( $content );
		$code_block_line_numbers .= '</pre>';
		
		
		return $code_block_line_numbers;
	}
	// end code_block_line_numbers
	
	add_shortcode( 'code_block_line_numbers', 'code_block_line_numbers' );

/* ============================================================================================================================================= */

	function icon_list( $atts, $content = "" )
	{
		$icon_list = '<ul class="icon-list">';
		$icon_list .= do_shortcode( $content );
		$icon_list .= '</ul>';
		
		
		return $icon_list;
	}
	// end icon_list
	
	add_shortcode( 'icon_list', 'icon_list' );

/* ============================================================================================================================================= */

	function list_item( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'icon' => "",
										'text' => "" ), $atts ) );
		
		
		$list_item = '<li><i class="fa ' . $icon . '"></i>' . $text . '</li>';
		
		
		return $list_item;
	}
	// end list_item
	
	add_shortcode( 'list_item', 'list_item' );

/* ============================================================================================================================================= */

	function portfolio_field( $atts, $content = "" )
	{
		$portfolio_field = '<div class="portfolio-field">';
		$portfolio_field .= do_shortcode( $content );
		$portfolio_field .= '</div>';
		
		
		return $portfolio_field;
	}
	// end portfolio_field
	
	add_shortcode( 'portfolio_field', 'portfolio_field' );

/* ============================================================================================================================================= */

	function inline_lightbox_wrap( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'type' => "",
										'thumbnail' => "" ), $atts ) );
		
		
		$inline_lightbox_wrap = '<div class="media-box ' . $type . '">';
		$inline_lightbox_wrap .= '<img alt="" src="' . $thumbnail . '">';
		$inline_lightbox_wrap .= '<div class="mask">';
		$inline_lightbox_wrap .= do_shortcode( $content );
		$inline_lightbox_wrap .= '</div>';
		$inline_lightbox_wrap .= '</div>';
		
		
		return $inline_lightbox_wrap;
	}
	// end inline_lightbox_wrap
	
	add_shortcode( 'inline_lightbox_wrap', 'inline_lightbox_wrap' );

/* ============================================================================================================================================= */

	function inline_lightbox_image( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'first_item' => "",
										'gallery' => "",
										'title' => "",
										'url' => "" ), $atts ) );
		
		
		if ( $first_item == 'yes' )
		{
			$first_item = "";
		}
		else
		{
			$first_item = 'hidden';
		}
		// end if
		
		
		$inline_lightbox_image = '<a class="' . $first_item . ' lightbox" data-lightbox-gallery="fancybox-item-' . $gallery . '" title="' . $title . '" href="' . $url . '"></a>';
		
		
		return $inline_lightbox_image;
	}
	// end inline_lightbox_image
	
	add_shortcode( 'inline_lightbox_image', 'inline_lightbox_image' );

/* ============================================================================================================================================= */

	function inline_lightbox_iframe( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'first_item' => "",
										'gallery' => "",
										'title' => "",
										'src' => "" ), $atts ) );
		
		
		if ( $first_item == 'yes' )
		{
			$first_item = "";
		}
		else
		{
			$first_item = 'hidden';
		}
		// end if
		
		
		$inline_lightbox_iframe = '<a class="' . $first_item . ' lightbox iframe" data-lightbox-gallery="fancybox-item-' . $gallery . '" title="' . $title . '" href="' . $src . '"></a>';
		
		
		return $inline_lightbox_iframe;
	}
	// end inline_lightbox_iframe
	
	add_shortcode( 'inline_lightbox_iframe', 'inline_lightbox_iframe' );


/* ============================================================================================================================================= */


	function portfolio_lightbox_image( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'first_item' => "",
										'title' => "",
										'url' => "" ), $atts ) );
		
		
		if ( $first_item == 'yes' )
		{
			$first_item = "";
		}
		else
		{
			$first_item = 'hidden';
		}
		
		
		if ( is_single() )
		{
			$portfolio_lightbox_image = '<div class="col-md-12 portfolio-field"><img alt="' . $title . '" src="' . $url . '"></div>';
		}
		else
		{
			$portfolio_lightbox_image = '<a class="' . $first_item . ' lightbox" data-lightbox-gallery="fancybox-item-' . get_the_ID() . '" title="' . $title . '" href="' . $url . '"></a>';
		}
		
		
		return $portfolio_lightbox_image;
	}
	
	add_shortcode( 'portfolio_lightbox_image', 'portfolio_lightbox_image' );


/* ============================================================================================================================================= */


	function portfolio_lightbox_iframe( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'first_item' => "",
										'title' => "",
										'src' => "" ), $atts ) );
		
		
		if ( $first_item == 'yes' )
		{
			$first_item = "";
		}
		else
		{
			$first_item = 'hidden';
		}
		
		
		if ( is_single() )
		{
			$portfolio_lightbox_iframe = '<div class="col-md-12 portfolio-field"><iframe width="500" height="281" src="' . $src . '"></iframe></div>';
		}
		else
		{
			$portfolio_lightbox_iframe = '<a class="' . $first_item . ' lightbox iframe" data-lightbox-gallery="fancybox-item-' . get_the_ID() . '" title="' . $title . '" href="' . $src . '"></a>';
		}
		
		
		return $portfolio_lightbox_iframe;
	}
	
	add_shortcode( 'portfolio_lightbox_iframe', 'portfolio_lightbox_iframe' );


/* ============================================================================================================================================= */

	function map( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'latitude' => "",
										'longitude' => "",
										'zoom' => "" ), $atts ) );
		
		
		$map = '<div class="map">';
		$map .= '<div id="map-canvas" class="map-canvas" data-latitude="' . $latitude . '" data-longitude="' . $longitude . '" data-zoom="' . $zoom . '"></div>';
		$map .= '</div>';
		
		
		return $map;
	}
	
	add_shortcode( 'map', 'map' );


/* ============================================================================================================================================= */


	function contact_form($atts, $content = "")
	{
		extract(shortcode_atts(array('to'      => "",
									 'subject' => "",
									 'captcha' => "" ), $atts));
		
		if ($to != "")
		{
			update_option('contact_form_to', $to);
		}
		else
		{
			$admin_email = get_bloginfo('admin_email');
			update_option('contact_form_to', $admin_email);
		}
		
		$captcha_out = "";
		
		if ($captcha == 'yes')
		{
			$random1 = rand(1, 5);
			$random2 = rand(1, 5);
			$sum_random = $random1 + $random2;
			
			$captcha_out = '<p>';
			$captcha_out .= '<input type="hidden" id="captcha" name="captcha" value="yes">';
			$captcha_out .= '<label for="sum_user">' . $random1 . ' + ' . $random2 . ' = ?</label>';
			$captcha_out .= '<input type="text" id="sum_user" name="sum_user" class="required" placeholder="' . __('What is the sum?', 'read') . '">';
			$captcha_out .= '<input type="hidden" id="sum_random" name="sum_random" value="' . $sum_random . '">';
			$captcha_out .= '</p>';
		}
		else
		{
			$captcha_out = '<p style="padding: 0px; margin: 0px;"><input type="hidden" id="captcha" name="captcha" value="no"></p>';
		}
		
		// Get the site domain and get rid of www.
		$site_url = strtolower($_SERVER['SERVER_NAME']);
		
		if (substr($site_url, 0, 4) == 'www.')
		{
			$site_url = substr($site_url, 4);
		}
		
		$sender_domain = 'server@' . $site_url;
		
		$output = '<div class="contact-form">';
		$output .= '<form id="contact-form" method="post" action="' . get_template_directory_uri() . '/send-mail.php">';
		$output .= '<p><label for="name">' . __('NAME', 'read') . '</label><input type="text" id="name" name="name" class="required"></p>';
		$output .= '<p><label for="email">' . __('EMAIL', 'read') . '</label><input type="text" id="email" name="email" class="required email"></p>';
		$output .= '<p><label for="message">' . __('MESSAGE', 'read') . '</label><textarea id="message" name="message" class="required"></textarea></p>';
		$output .= $captcha_out;
		$output .= '<p style="padding: 0px; margin: 0px;"><input type="hidden" id="sender_domain" name="sender_domain" value="' . $sender_domain . '"></p>';
		$output .= '<p style="padding: 0px; margin: 0px;"><input type="hidden" id="subject" name="subject" value="' . $subject . '"></p>';
		$output .= '<p><input type="submit" class="submit button primary" value="' . __('SEND', 'read') . '"></p>';
		$output .= '</form>';
		$output .= '</div>';
		
		return $output;
	}
	
	add_shortcode('contact_form', 'contact_form');


/* ============================================================================================================================================= */


	function portfolio_tags( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'titles' => "" ), $atts ) );
		
		
		$titles_with_commas = $titles;
		$titles_with_markup = "";
		
		if ( $titles_with_commas != "" )
		{
			$titles_array = preg_split("/[\s]*[,][\s]*/", $titles_with_commas);
			
			foreach ( $titles_array as $title_name )
			{
				$titles_with_markup .= '<li><a>' . $title_name . '</a></li>';
			}
			// end foreach
		}
		// end if
		
		
		$portfolio_tags = '<ul class="tags">';
		$portfolio_tags .= $titles_with_markup;
		$portfolio_tags .= '</ul>';
		
		
		return $portfolio_tags;
	}
	// end portfolio_tags
	
	add_shortcode( 'portfolio_tags', 'portfolio_tags' );

	
/* ============================================================================================================================================= */


	function intro( $atts, $content = "" )
	{
		$intro = '<div class="intro">';
		$intro .= '<h2>';
		$intro .= do_shortcode( $content );
		$intro .= '</h2>';
		$intro .= '</div>';
		
		
		return $intro;
	}
	
	add_shortcode( 'intro', 'intro' );


/* ============================================================================================================================================= */


	function rotate_words( $atts, $content = "" )
	{
		extract( shortcode_atts( array( 'titles' => "" ), $atts ) );
		
		
		$titles_with_commas = $titles;
		$titles_with_markup = "";
		
		if ( $titles_with_commas != "" )
		{
			$titles_array = preg_split("/[\s]*[,][\s]*/", $titles_with_commas);
			
			foreach ( $titles_array as $title_name )
			{
				$titles_with_markup .= '<span>' . $title_name . '</span>';
			}
		}
		
		
		$rotate_words = '<span class="rotate-words">';
		$rotate_words .= $titles_with_markup;
		$rotate_words .= '</span>';
		
		
		return $rotate_words;
	}
	
	add_shortcode( 'rotate_words', 'rotate_words' );


/* ============================================================================================================================================= */

	function launch_button_wrap( $atts, $content = "" )
	{
		$launch_button_wrap = '<div class="launch">';
		$launch_button_wrap .= do_shortcode( $content );
		$launch_button_wrap .= '</div>';
		
		
		return $launch_button_wrap;
	}
	// end launch_button_wrap
	
	add_shortcode( 'launch_button_wrap', 'launch_button_wrap' );

/* ============================================================================================================================================= */


	// Actual processing of the shortcode happens here
	function theme_run_shortcode( $content )
	{
		global $shortcode_tags;
		
		// Backup current registered shortcodes and clear them all out
		$orig_shortcode_tags = $shortcode_tags;
		remove_all_shortcodes();
		
		
		add_shortcode( 'divider', 'divider' );
		add_shortcode( 'letter', 'letter' );
		add_shortcode( 'alert', 'alert' );
		add_shortcode( 'social_icon', 'social_icon' );
		add_shortcode( 'toggle', 'toggle' );
		add_shortcode( 'accordion', 'accordion' );
		add_shortcode( 'tabs_wrap', 'tabs_wrap' );
		add_shortcode( 'tab_pane', 'tab_pane' );
		add_shortcode( 'icon', 'icon' );
		add_shortcode( 'button', 'button' );
		add_shortcode( 'row', 'row' );
		add_shortcode( 'column', 'column' );
		add_shortcode( 'media_wrap', 'media_wrap' );
		add_shortcode( 'video', 'video' );
		add_shortcode( 'audio', 'audio' );
		add_shortcode( 'link_wrap', 'link_wrap' );
		add_shortcode( 'aside', 'aside' );
		add_shortcode( 'quote', 'quote' );
		add_shortcode( 'slide', 'slide' );
		add_shortcode( 'project_action', 'project_action' );
		add_shortcode( 'call_to_action', 'call_to_action' );
		add_shortcode( 'cta_button_wrap', 'cta_button_wrap' );
		add_shortcode( 'progress_bar', 'progress_bar' );
		add_shortcode( 'testimonial', 'testimonial' );
		add_shortcode( 'timeline', 'timeline' );
		add_shortcode( 'event', 'event' );
		add_shortcode( 'latest_tweets', 'latest_tweets' );
		add_shortcode( 'service', 'service' );
		add_shortcode( 'process', 'process' );
		add_shortcode( 'fun_fact', 'fun_fact' );
		add_shortcode( 'client', 'client' );
		add_shortcode( 'image', 'image' );
		add_shortcode( 'section_title', 'section_title' );
		add_shortcode( 'drop_cap', 'drop_cap' );
		add_shortcode( 'tagline', 'tagline' );
		add_shortcode( 'code_line', 'code_line' );
		add_shortcode( 'code_block', 'code_block' );
		add_shortcode( 'code_block_prettify', 'code_block_prettify' );
		add_shortcode( 'code_block_line_numbers', 'code_block_line_numbers' );
		add_shortcode( 'icon_list', 'icon_list' );
		add_shortcode( 'list_item', 'list_item' );
		add_shortcode( 'portfolio_field', 'portfolio_field' );
		add_shortcode( 'inline_lightbox_wrap', 'inline_lightbox_wrap' );
		add_shortcode( 'inline_lightbox_image', 'inline_lightbox_image' );
		add_shortcode( 'inline_lightbox_iframe', 'inline_lightbox_iframe' );
		add_shortcode( 'portfolio_lightbox_image', 'portfolio_lightbox_image' );
		add_shortcode( 'portfolio_lightbox_iframe', 'portfolio_lightbox_iframe' );
		add_shortcode( 'map', 'map' );
		add_shortcode( 'contact_form', 'contact_form' );
		add_shortcode( 'portfolio_tags', 'portfolio_tags' );
		add_shortcode( 'intro', 'intro' );
		add_shortcode( 'rotate_words', 'rotate_words' );
		add_shortcode( 'launch_button_wrap', 'launch_button_wrap' );
		
		
		// Do the shortcode ( only the one above is registered )
		$content = do_shortcode( $content );
		
		// Put the original shortcodes back
		$shortcode_tags = $orig_shortcode_tags;
		
		return $content;
	}
	
	add_filter( 'the_content', 'theme_run_shortcode', 7 );


/* ============================================================================================================================================= */


	if ( is_admin() )
	{
		include_once 'theme-options.php';
	}


/* ============================================================================================================================================= */


	include_once 'shortcode-generator.php';


/* ============================================================================================================================================= */
/* ============================================================================================================================================= */


	function theme_customize_register( $wp_customize )
	{
		/* ================================================== */
		
		$wp_customize->add_section( 'section_colors' , array(   'title'    => __( 'Colors', 'read' ),
																'priority' => 30 ) );
		
		
		$wp_customize->add_setting( 'setting_primary_color', array(	'default'   => '#009966',
																	'transport' => 'refresh' ) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'control_primary_color', array(  'label'    => __( 'Primary Color', 'read' ),
																													'section'  => 'section_colors',
																													'settings' => 'setting_primary_color' ) ) );
		
		
		$wp_customize->add_setting( 'setting_secondary_color', array(	'default'   => '#5bcf80',
																		'transport' => 'refresh' ) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'control_secondary_color', array(    'label'    => __( 'Secondary Color', 'read' ),
																														'section'  => 'section_colors',
																														'settings' => 'setting_secondary_color' ) ) );
		
		
		$wp_customize->add_setting( 'setting_link_color', array(    'default'   => '#009966',
																	'transport' => 'refresh' ) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'control_link_color', array( 'label'    => __( 'Link Color', 'read' ),
																												'section'  => 'section_colors',
																												'settings' => 'setting_link_color' ) ) );
		
		
		$wp_customize->add_setting( 'setting_link_hover_color', array(  'default'   => '#5bcf80',
																		'transport' => 'refresh' ) );
		
		$wp_customize->add_control( new WP_Customize_Color_Control( $wp_customize, 'control_link_hover_color', array(   'label'    => __( 'Link Hover Color', 'read' ),
																														'section'  => 'section_colors',
																														'settings' => 'setting_link_hover_color' ) ) );
		
		
		/* ================================================== */
		
		
		$wp_customize->add_section( 'section_fonts' , array(    'title'    => __( 'Fonts', 'read' ),
																'priority' => 31 ) );
		
		
		include_once 'fonts.php';
		
		
		$wp_customize->add_setting( 'setting_text_logo_font', array(    'default'   => 'Lato',
																		'transport' => 'refresh' ) );
		
		$wp_customize->add_control( 'control_text_logo_font', array(    'label'    => 'Text Logo Font',
																		'section'  => 'section_fonts',
																		'settings' => 'setting_text_logo_font',
																		'type'     => 'select',
																		'choices'  => $all_fonts ) );
		
		
		$wp_customize->add_setting( 'setting_heading_font', array(  'default'   => 'Lato',
																	'transport' => 'refresh' ) );
		
		$wp_customize->add_control( 'control_heading_font', array(	'label'    => 'Heading Font',
																	'section'  => 'section_fonts',
																	'settings' => 'setting_heading_font',
																	'type'     => 'select',
																	'choices'  => $all_fonts ) );
		
		
		$wp_customize->add_setting( 'setting_menu_font', array(	'default'   => "",
																'transport' => 'refresh' ) );
		
		$wp_customize->add_control( 'control_menu_font', array(	'label'    => 'Menu Font',
																'section'  => 'section_fonts',
																'settings' => 'setting_menu_font',
																'type'     => 'select',
																'choices'  => $all_fonts ) );
		
		
		$wp_customize->add_setting( 'setting_content_font', array(  'default'   => 'Lato',
																	'transport' => 'refresh' ) );
		
		$wp_customize->add_control( 'control_content_font', array(	'label'    => 'Content Font',
																	'section'  => 'section_fonts',
																	'settings' => 'setting_content_font',
																	'type'     => 'select',
																	'choices'  => $all_fonts ) );
		
		
		/* ================================================== */
		
		$wp_customize->add_section( 'section_base_style' , array(   'title'    => __( 'Base Style', 'read' ),
																	'priority' => 32 ) );
		
		
		$base_style = array('#'                                                          => 'Minimal',
							get_template_directory_uri() . '/css/skins/flat.css'         => 'Flat',
							get_template_directory_uri() . '/css/skins/overlay.css'      => 'Overlay',
							get_template_directory_uri() . '/css/skins/overlay-bold.css' => 'Overlay Bold' );
		
		
		$wp_customize->add_setting( 'setting_base_style', array(    'default'   => '#',
																	'transport' => 'refresh' ) );
		
		$wp_customize->add_control( 'control_base_style', array(    'label'    => 'Base Style',
																	'section'  => 'section_base_style',
																	'settings' => 'setting_base_style',
																	'type'     => 'radio',
																	'choices'  => $base_style ) );
		
		
		/* ================================================== */
		
		
		$wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
		$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';
		
		$wp_customize->get_setting( 'setting_primary_color' )->transport = 'postMessage';
		$wp_customize->get_setting( 'setting_secondary_color' )->transport = 'postMessage';
		$wp_customize->get_setting( 'setting_link_color' )->transport = 'postMessage';
		$wp_customize->get_setting( 'setting_link_hover_color' )->transport = 'postMessage';
		
		$wp_customize->get_setting( 'setting_text_logo_font' )->transport = 'postMessage';
		$wp_customize->get_setting( 'setting_heading_font' )->transport = 'postMessage';
		$wp_customize->get_setting( 'setting_menu_font' )->transport = 'postMessage';
		$wp_customize->get_setting( 'setting_content_font' )->transport = 'postMessage';
		
		$wp_customize->get_setting( 'setting_base_style' )->transport = 'postMessage';
	}
	
	add_action( 'customize_register', 'theme_customize_register' );
	
	
	function theme_customize_css()
	{
		global $subset;
		$font_styles = ':400,400italic,700,700italic';
		
		$extra_font_styles = get_option( 'extra_font_styles', 'No' );
		
		if ( $extra_font_styles == 'Yes' )
		{
			$font_styles = ':300,400,500,600,700,800,900,300italic,400italic,500italic,600italic,700italic,800italic,900italic';
		}
		
		?>

<?php
	$setting_text_logo_font = get_theme_mod( 'setting_text_logo_font', "" );
	
	if ( $setting_text_logo_font != "" )
	{
		echo '<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=' . $setting_text_logo_font . $font_styles . $subset . '">';
	}
?>

<?php
	$setting_heading_font = get_theme_mod( 'setting_heading_font', "" );
	
	if ( $setting_heading_font != "" )
	{
		echo '<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=' . $setting_heading_font . $font_styles . $subset . '">';
	}
?>

<?php
	$setting_menu_font = get_theme_mod( 'setting_menu_font', "" );
	
	if ( $setting_menu_font != "" )
	{
		echo '<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=' . $setting_menu_font . $font_styles . $subset . '">';
	}
?>

<?php
	$setting_content_font = get_theme_mod( 'setting_content_font', "" );
	
	if ( $setting_content_font != "" )
	{
		echo '<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=' . $setting_content_font . $font_styles . $subset . '">';
	}
?>

<style type="text/css">
<?php
	$setting_primary_color = get_theme_mod( 'setting_primary_color', "" );
	
	if ( $setting_primary_color != "" )
	{
		?>
	.navigation a:hover, .pagination a:hover, .entry-meta a:hover, .single-page-layout .vs-nav li i:hover,
	.media-box .mask:before, .button.primary:hover, a.more-link:hover, .flex-control-paging li a.flex-active,
	.mejs-controls .mejs-time-rail .mejs-time-current,
	.mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current { background: <?php echo $setting_primary_color; ?>; }

	.entry-title a:hover, .portfolio-nav a.button:hover, .related-posts li a:hover, .nav-single a:hover,
	.comment-meta a:hover, .comment-meta .fn + a:hover, .comment-reply-link:hover { color: <?php echo $setting_primary_color; ?>; }

	.portfolio-nav a.button:hover, .format-link .link-content > a:first-child:hover,
	.flex-control-paging li a:hover, .bypostauthor > article { border-color: <?php echo $setting_primary_color; ?>; }
		<?php
	}
	// end if
?>

<?php
	$setting_secondary_color = get_theme_mod( 'setting_secondary_color', "" );
	
	if ( $setting_secondary_color != "" )
	{
		?>
	.skill-unit .bar .progress, .event .date, .letter-info p i, .media-cell-desc .date,
	#nprogress .bar, #fancybox-close, .portfolio-nav a.button.back { background: <?php echo $setting_secondary_color; ?>; }

	#nprogress .spinner-icon { border-top-color: <?php echo $setting_secondary_color; ?>; }

	#nprogress .spinner-icon { border-left-color: <?php echo $setting_secondary_color; ?>; }
		<?php
	}
	// end if
?>

<?php
	$setting_link_color = get_theme_mod( 'setting_link_color', "" );
	
	if ( $setting_link_color != "" )
	{
		echo 'a { color: ' . $setting_link_color . '; }' . "\n";
	}
?>

<?php
	$setting_link_hover_color = get_theme_mod( 'setting_link_hover_color', "" );
	
	if ( $setting_link_hover_color != "" )
	{
		echo 'a:hover { color: ' . $setting_link_hover_color . '; }' . "\n";
	}
?>

<?php
	$setting_text_logo_font = get_theme_mod( 'setting_text_logo_font', "" );
	
	if ( $setting_text_logo_font != "" )
	{
		echo 'header.header h1 { font-family: "' . $setting_text_logo_font . '"; }' . "\n";
	}
?>

<?php
	$setting_heading_font = get_theme_mod( 'setting_heading_font', "" );
	
	if ( $setting_heading_font != "" )
	{
		echo 'h1, h2, h3, h4, h5, h6 { font-family: "' . $setting_heading_font . '"; }' . "\n";
	}
?>

<?php
	$setting_menu_font = get_theme_mod( 'setting_menu_font', "" );
	
	if ( $setting_menu_font != "" )
	{
		echo '.vs-nav li a { font-family: "' . $setting_menu_font . '"; }' . "\n";
	}
?>

<?php
	$setting_content_font = get_theme_mod( 'setting_content_font', "" );
	
	if ( $setting_content_font != "" )
	{
		echo 'body, input, textarea, select, button { font-family: "' . $setting_content_font . '"; }' . "\n";
	}
?>
</style>

<?php
	$setting_base_style = get_theme_mod( 'setting_base_style', '#' );
?>
<link rel="stylesheet" type="text/css" href="<?php echo $setting_base_style; ?>">
		<?php
	}
	// end theme_customize_css
	
	add_action( 'wp_head', 'theme_customize_css' );


	function theme_customize_preview_js()
	{
		wp_enqueue_script( 'my-customizer', get_template_directory_uri() . '/js/wp-theme-customizer.js', null, null, true );
	}
	
	add_action( 'customize_preview_init', 'theme_customize_preview_js' );

/* ============================================================================================================================================= */


	require_once get_template_directory() . '/class-tgm-plugin-activation.php';
	
	function theme_plugins()
	{
		$plugins = array( array('name'     => esc_html__('One Click Demo Import', 'read'),
								'slug'     => 'one-click-demo-import',
								'required' => false));
		
		$config = array('id'           => 'cvcard_tgmpa',
						'default_path' => "",
						'menu'         => 'cvcard-install-plugins',
						'parent_slug'  => 'themes.php',
						'capability'   => 'edit_theme_options',
						'has_notices'  => true,
						'dismissable'  => true,
						'dismiss_msg'  => 'Install Plugins',
						'is_automatic' => true,
						'message'      => "",
						'strings'      => array('nag_type' => 'updated'));
		
		tgmpa($plugins, $config);
	}
	
	add_action('tgmpa_register', 'theme_plugins');


/* ============================================================================================================================================= */


	function theme_ocdi_import_files()
	{
		return array(array( 'import_file_name'         => 'Demo Import 1',
							'local_import_file'        => trailingslashit(get_template_directory()) . 'demo/cvcardwp.wordpress.2016-10-19.xml',
							'local_import_widget_file' => trailingslashit(get_template_directory()) . 'demo/themes.pixelwars.org-cvcard-wp-widgets.wie'));
	}
	
	add_filter('pt-ocdi/import_files', 'theme_ocdi_import_files');


/* ============================================================================================================================================= */


	function options_wp_head()
	{
		$header_background_image = get_option('header_background_image', "");
		
		if ($header_background_image != "")
		{
			echo '<style type="text/css">' . "\n";
			
				echo '.header { background-image: url( "' . $header_background_image . '" ); }';
			
			echo "\n" . '</style>' . "\n";
		}
		
		$custom_css = stripcslashes(get_option('custom_css', ""));
		
		if ($custom_css != "")
		{
			echo '<style type="text/css">' . "\n";
			
				echo $custom_css;
			
			echo "\n" . '</style>' . "\n";
		}
		
		$external_css = stripcslashes(get_option( 'external_css', ""));
		echo $external_css;
		
		$tracking_code_head = stripcslashes(get_option('tracking_code_head', ""));
		echo $tracking_code_head;
	}
	
	add_action('wp_head', 'options_wp_head');


/* ============================================================================================================================================= */


	function options_wp_footer()
	{
		$external_js = stripcslashes(get_option('external_js', ""));
		echo $external_js;
		
		$tracking_code_body = stripcslashes(get_option('tracking_code_body', ""));
		echo $tracking_code_body;
	}
	
	add_action('wp_footer', 'options_wp_footer');

?>