(function($)
{

// ==========================================================
// ==========================================================

	wp.customize( 'blogname', function( value )
	{
		value.bind( function( to )
		{
			$( 'header.header h1' ).html( to );
		});
	});
	
	
	wp.customize( 'blogdescription', function( value )
	{
		value.bind( function( to )
		{
			$( 'header.header p' ).html( to );
		});
	});

// ==========================================================
// ==========================================================

	wp.customize( 'setting_primary_color', function( value )
	{
		value.bind( function( to )
		{
			var styleCss = '<style type="text/css">' + 
								
								'.navigation a:hover, .pagination a:hover, .entry-meta a:hover, .single-page-layout .vs-nav li i:hover, .media-box .mask:before, .button.primary:hover, a.more-link:hover, .flex-control-paging li a.flex-active, .mejs-controls .mejs-time-rail .mejs-time-current, .mejs-controls .mejs-horizontal-volume-slider .mejs-horizontal-volume-current { background: ' + to + ' }' +
								
								'.entry-title a:hover, .portfolio-nav a.button:hover, .related-posts li a:hover, .nav-single a:hover, .comment-meta a:hover, .comment-meta .fn + a:hover, .comment-reply-link:hover { color: ' + to + ' }' +
								
								'.portfolio-nav a.button:hover, .format-link .link-content > a:first-child:hover, .flex-control-paging li a:hover, .bypostauthor > article { border-color: ' + to + ' }' +
								
							'</style>';
			
			$( 'body' ).append( styleCss );
		});
	});
	
	
	wp.customize( 'setting_secondary_color', function( value )
	{
		value.bind( function( to )
		{
			var styleCss = '<style type="text/css">' + 
								
								'.skill-unit .bar .progress, .event .date, .letter-info p i, .media-cell-desc .date, #nprogress .bar, #fancybox-close, .portfolio-nav a.button.back { background: ' + to + ' }' +
								
								'#nprogress .spinner-icon { border-top-color: ' + to + ' }' +
								
								'#nprogress .spinner-icon { border-left-color: ' + to + ' }' +
								
							'</style>';
			
			$( 'body' ).append( styleCss );
		});
	});
	
	
	wp.customize( 'setting_link_color', function( value )
	{
		value.bind( function( to )
		{
			$( 'a' ).css( 'color', to );
		});
	});
	
	
	wp.customize( 'setting_link_hover_color', function( value )
	{
		value.bind( function( to )
		{
			$( 'a:hover' ).css( 'color', to );
		});
	});

// ==========================================================
// ==========================================================

 	wp.customize( 'setting_text_logo_font', function( value )
	{
		value.bind( function( to )
		{
			$( 'body' ).append( '<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=' + to + '">' );
			
			$( 'header.header h1' ).css( 'font-family', '"' + to + '"' );
		});
	});
	
	
 	wp.customize( 'setting_heading_font', function( value )
	{
		value.bind( function( to )
		{
			$( 'body' ).append( '<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=' + to + '">' );
			
			$( 'h1, h2, h3, h4, h5, h6' ).css( 'font-family', '"' + to + '"' );
		});
	});
	
	
 	wp.customize( 'setting_menu_font', function( value )
	{
		value.bind( function( to )
		{
			$( 'body' ).append( '<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=' + to + '">' );
			
			$( '.vs-nav li a' ).css( 'font-family', '"' + to + '"' );
		});
	});
	
	
 	wp.customize( 'setting_content_font', function( value )
	{
		value.bind( function( to )
		{
			$( 'body' ).append( '<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=' + to + '">' );
			
			$( 'body, input, textarea, select, button' ).css( 'font-family', '"' + to + '"' );
		});
	});

// ==========================================================
// ==========================================================

 	wp.customize( 'setting_base_style', function( value )
	{
		value.bind( function( to )
		{
			$( '.theme-base-style' ).remove();
			$( 'head' ).append( '<link class="theme-base-style" rel="stylesheet" type="text/css" href="' + to + '">' );
		});
	});

// ==========================================================
// ==========================================================

})(jQuery);