<?php
	if (isset($_SERVER['HTTP_USER_AGENT']) && (strpos( $_SERVER['HTTP_USER_AGENT'], 'MSIE' ) !== false))
	{
		header('X-UA-Compatible: IE=edge,chrome=1');
	}
	
	$page_layout = 'single-page-layout';
	
	if (is_page_template('template-cvcard.php'))
	{
		$page_layout = 'one-page-layout';
	}
	
	$classic_layout = get_option('classic_layout', 'false');
	$mobile_only_classic_layout = get_option('mobile_only_classic_layout', 'true');
	$pf_details_page_in_animation = get_option('pf_details_page_in_animation', 'fadeInUp');
	$pf_details_page_out_animation = get_option('pf_details_page_out_animation', 'fadeOutDownBig');
?>
<!doctype html>

<html <?php language_attributes(); ?> class="no-js <?php echo $page_layout; ?>" data-classic-layout="<?php echo $classic_layout; ?>" data-mobile-only-classic-layout="<?php echo $mobile_only_classic_layout; ?>" data-inAnimation="<?php echo $pf_details_page_in_animation; ?>" data-outAnimation="<?php echo $pf_details_page_out_animation; ?>">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	
	<?php
		$mobile_zoom = get_option('mobile_zoom', 'No');
		
		if ($mobile_zoom == 'Yes')
		{
			?>

<meta name="viewport" content="width=device-width, initial-scale=1">

			<?php
		}
		else
		{
			?>

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

			<?php
		}
	?>
	
	<title><?php wp_title('|', true, 'right'); ?></title>
	
	<!--[if lte IE 9]>
		<script src="<?php echo get_template_directory_uri(); ?>/js/html5shiv.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/respond.min.js"></script>
		<script src="<?php echo get_template_directory_uri(); ?>/js/selectivizr-min.js"></script>
	<![endif]-->
	
	<?php
		if (is_singular() && get_option('thread_comments'))
		{
			wp_enqueue_script('comment-reply');
		}
	?>
	
	<?php
		wp_head();
	?>
</head>

<body <?php body_class(); ?>>
	<div id="container" class="container">
		<header class="header">
			<?php
				$logo_image = get_option('logo_image', "");
				
				if ($logo_image != "")
				{
					if (is_page_template('template-cvcard.php'))
					{
						?>
							<img alt="<?php bloginfo('name'); ?>" src="<?php echo $logo_image; ?>">
						<?php
					}
					else
					{
						?>
							<a href="<?php echo esc_url(home_url('/')); ?>">
								<img alt="<?php bloginfo('name'); ?>" src="<?php echo $logo_image; ?>">
							</a>
						<?php
					}
				}
			?>
			
			<?php
				$select_text_logo = get_option('select_text_logo', 'WordPress Site Title');
				
				if ($select_text_logo == 'WordPress Site Title')
				{
					?>
						<h1><?php bloginfo('name'); ?></h1>
					<?php
				}
				else
				{
					$theme_site_title = stripcslashes(get_option('theme_site_title', ""));
					
					?>
						<h1><?php echo $theme_site_title; ?></h1>
					<?php
				}
			?>
			
			<?php
				$select_tagline = get_option('select_tagline', 'WordPress Tagline');
				
				if ($select_tagline == 'WordPress Tagline')
				{
					?>
						<p><?php bloginfo('description'); ?></p>
					<?php
				}
				else
				{
					$theme_tagline = stripcslashes(get_option('theme_tagline', ""));
					
					if ($theme_tagline != "")
					{
						?>
							<p><?php echo $theme_tagline; ?></p>
						<?php
					}
				}
			?>
			
			<?php
				if (is_page_template('template-cvcard.php'))
				{
					?>
						<ul id="nav" class="menu-auto menu-custom vs-nav">
							
						</ul>
						
						<script>
							jQuery(document).ready(function($)
							{
								var menu_html = "";
								
								$('.wrapper').find('section').each(function()
								{
									var slug = $(this).attr('id');
									var page_title = $(this).attr('data-page-title');
									var menu_item = '<li><a href="#/' + slug + '">' + page_title + '</a></li>';
									menu_html += menu_item;
									$('.menu-auto').html(menu_html);
								});
							});
						</script>
					<?php
				}
				elseif (is_home())
				{
					if (get_option('show_on_front') == 'posts')
					{
						$classic_navigation_menu = get_option('classic_navigation_menu', 'No');
						
						if ($classic_navigation_menu == 'Yes')
						{
							wp_nav_menu(array('theme_location' => 'theme_menu_location_1',
											  'menu'           => 'theme_menu_location_1',
											  'menu_id'        => 'nav',
											  'menu_class'     => 'menu-custom vs-nav',
											  'container'      => false,
											  'depth'          => 1,
											  'fallback_cb'    => 'wp_page_menu2'));
						}
						else
						{
							?>
								<ul class="vs-nav">
									<li>
										<a>
											<i title="<?php _e('search', 'read'); ?>" class="search-link fa fa-search tooltip" data-tooltip-pos="right"></i>
										</a>
									</li>
								</ul>
							<?php
						}
					}
					else
					{
						$classic_navigation_menu = get_option('classic_navigation_menu', 'No');
						
						if ($classic_navigation_menu == 'Yes')
						{
							wp_nav_menu(array('theme_location' => 'theme_menu_location_1',
											  'menu'           => 'theme_menu_location_1',
											  'menu_id'        => 'nav',
											  'menu_class'     => 'menu-custom vs-nav',
											  'container'      => false,
											  'depth'          => 1,
											  'fallback_cb'    => 'wp_page_menu2'));
						}
						else
						{
							?>
								<ul class="vs-nav">
									<li>
										<a href="<?php echo home_url('/'); ?>">
											<i title="<?php _e('go to home', 'read'); ?>" class="icon-home-1 tooltip" data-tooltip-pos="left"></i>
										</a>
									</li>
									<li>
										<a>
											<i title="<?php _e('search', 'read'); ?>" class="search-link fa fa-search tooltip" data-tooltip-pos="right"></i>
										</a>
									</li>
								</ul>
							<?php
						}
					}
				}
				elseif (is_front_page())
				{
					$classic_navigation_menu = get_option('classic_navigation_menu', 'No');
					
					if ($classic_navigation_menu == 'Yes')
					{
						wp_nav_menu(array('theme_location' => 'theme_menu_location_1',
										  'menu'           => 'theme_menu_location_1',
										  'menu_id'        => 'nav',
										  'menu_class'     => 'menu-custom vs-nav',
										  'container'      => false,
										  'depth'          => 1,
										  'fallback_cb'    => 'wp_page_menu2'));
					}
					else
					{
						?>
							<ul class="vs-nav">
								<li>
									<a>
										<i title="<?php _e('search', 'read'); ?>" class="search-link fa fa-search tooltip" data-tooltip-pos="right"></i>
									</a>
								</li>
							</ul>
						<?php
					}
				}
				elseif (is_singular('portfolio'))
				{
					$portfolio_page_slug = get_option('portfolio_page_slug', 'portfolio');
					
					?>
						<ul class="vs-nav">
							<li>
								<a href="<?php echo get_home_url() . '/#/' . $portfolio_page_slug; ?>">
									<i title="<?php _e('back to portfolio', 'read'); ?>" class="icon-left-open tooltip" data-tooltip-pos="left"></i>
								</a>
							</li>
							<li>
								<a href="<?php echo home_url('/'); ?>">
									<i title="<?php _e('go to home', 'read'); ?>" class="icon-home-1 tooltip" data-tooltip-pos="top"></i>
								</a>
							</li>
							<li>
								<a>
									<i title="<?php _e('search', 'read'); ?>" class="search-link fa fa-search tooltip" data-tooltip-pos="right"></i>
								</a>
							</li>
						</ul>
					<?php
				}
				elseif (is_singular('post'))
				{
					if (get_option('show_on_front') == 'posts')
					{
						?>
							<ul class="vs-nav">
								<li>
									<a href="<?php echo home_url('/'); ?>">
										<i title="<?php _e('go to home', 'read'); ?>" class="icon-home-1 tooltip" data-tooltip-pos="left"></i>
									</a>
								</li>
								<li>
									<a>
										<i title="<?php _e('search', 'read'); ?>" class="search-link fa fa-search tooltip" data-tooltip-pos="right"></i>
									</a>
								</li>
							</ul>
						<?php
					}
					else
					{
						$back_to_blog_url = get_page_link(get_option('page_for_posts'));
						
						?>
							<ul class="vs-nav">
								<li>
									<a href="<?php echo $back_to_blog_url; ?>">
										<i title="<?php _e('back to blog', 'read'); ?>" class="icon-left-open tooltip" data-tooltip-pos="left"></i>
									</a>
								</li>
								<li>
									<a href="<?php echo home_url('/'); ?>">
										<i title="<?php _e('go to home', 'read'); ?>" class="icon-home-1 tooltip" data-tooltip-pos="top"></i>
									</a>
								</li>
								<li>
									<a>
										<i title="<?php _e('search', 'read'); ?>" class="search-link fa fa-search tooltip" data-tooltip-pos="right"></i>
									</a>
								</li>
							</ul>
						<?php
					}
				}
				else
				{
					?>
						<ul class="vs-nav">
							<li>
								<a href="<?php echo home_url('/'); ?>">
									<i title="<?php _e('go to home', 'read'); ?>" class="icon-home-1 tooltip" data-tooltip-pos="left"></i>
								</a>
							</li>
							<li>
								<a>
									<i title="<?php _e('search', 'read'); ?>" class="search-link fa fa-search tooltip" data-tooltip-pos="right"></i>
								</a>
							</li>
						</ul>
					<?php
				}
			?>
			
			<div class="header-search">
				<form role="search" id="search-form" method="get" action="<?php echo home_url('/'); ?>">
					<input type="text" id="search" name="s" required="required" placeholder="<?php _e('ENTER KEYWORD', 'read'); ?>" value="<?php the_search_query(); ?>">
					<input type="submit" id="search-submit" title="<?php _e('Search', 'read'); ?>" value="&#8594;">
				</form>
			</div>
		</header>