<?php


/* ============================================================================================================================================ */


	function create_tabs( $current = 'general' )
	{
		$tabs = array(  'general' => 'General',
						'style' => 'Style',
						'animation' => 'Animation',
						'blog' => 'Blog',
						'seo' => 'SEO' );
		?>
			<h2 class="nav-tab-wrapper">
				<div id="icon-themes" class="icon32"></div>
				
				<div>
					<h2>Theme Options</h2>
				</div>
				
				<?php
					foreach ( $tabs as $tab => $name )
					{
						$class = ( $tab == $current ) ? ' nav-tab-active' : "";
						
						echo "<a class='nav-tab$class' href='?page=theme-options&tab=$tab'>$name</a>";
					}
				?>
			</h2>
		<?php
	}


/* ============================================================================================================================================ */


	function theme_options_page()
	{
		global $pagenow;
		
		?>
			<div class="wrap wrap2">
				<script src="<?php echo get_template_directory_uri(); ?>/admin/colorpicker/colorpicker.js"></script>
				
				<div class="status">
					<img height="16" width="16" alt="..." src="<?php echo get_template_directory_uri(); ?>/admin/ajax-loader.gif">
					
					<strong></strong>
				</div>
				<!-- end .status -->
				
				<script>
					jQuery(document).ready( function( $ )
					{
					// -------------------------------------------------------------------------
					
						var uploadID = '',
							uploadImg = '';

						jQuery( '.upload-button' ).click(function()
						{
							uploadID = jQuery(this).prev( 'input' );
							uploadImg = jQuery(this).next( 'img' );
							formfield = jQuery( '.upload' ).attr( 'name' );
							tb_show( "", 'media-upload.php?post_id=0&amp;type=image&amp;TB_iframe=true' );
							return false;
						});
						
						window.send_to_editor = function( html )
						{
							imgurl = jQuery( 'img', html ).attr( 'src' );
							uploadID.val( imgurl );
							uploadImg.attr('src', imgurl);
							tb_remove();
						}
					
					// -------------------------------------------------------------------------
					
						$( ".alert-success p" ).click(function()
						{
							$(this).fadeOut( "slow", function()
							{
								$( ".alert-success" ).slideUp( "slow" );
							});
						});
					
					// -------------------------------------------------------------------------
						
						$( '.color-selector' ).each( function()
						{
							var cp = $( this );
							
							cp.ColorPicker(
							{
								color: '#ffffff',
								
								onBeforeShow: function ()
								{
									var myColor = $( this ).next( 'input' ).val();
									
									if ( myColor != "" )
									{
										$(this).ColorPickerSetColor( myColor );
										// cp.find( 'div' ).css( 'backgroundColor', '#' + myColor );
									}
								},
								onChange: function ( hsb, hex, rgb )
								{
									cp.find( 'div' ).css( 'backgroundColor', '#' + hex );
									cp.next( 'input' ).val( hex );
								},
								onSubmit: function( hsb, hex, rgb, el )
								{
									$( el ).val( hex );
									$( el ).ColorPickerHide();
								}
							});
						});
						
						
						$( '.color' ).change( function()
						{
							var myColor = $( this ).val();
							
							$( this ).prev( 'div' ).find( 'div' ).css( 'backgroundColor', '#' + myColor );
						});
						
						
						$( '.color' ).keypress( function()
						{
							var myColor = $( this ).val();
							
							$( this ).prev( 'div' ).find( 'div' ).css( 'backgroundColor', '#' + myColor );
						});
					
					// -------------------------------------------------------------------------
					
						$( 'form.ajax-form' ).submit(function()
						{
							$.ajax(
							{
								data : $(this).serialize(),
								type: "POST",
								beforeSend: function()
								{
									$('.status img').show();
									$('.status strong').html('Saving...');
									$('.status').fadeIn();
								},
								success: function(data)
								{
									$('.status img').hide();
									$('.status strong').html('Done.');
									$('.status').delay(1000).fadeOut();
								}
							});
							
							return false;
						});
					
					// -------------------------------------------------------------------------

						
					
					// -------------------------------------------------------------------------
					
						/*
						
						var calcHeight = function()
						{
							$( "#preview-frame" ).height($(window).height() - 100);
						}

						$(document).ready(function()
						{
							calcHeight();
						});

						$(window).resize(function()
						{
							calcHeight();
							
						}).load(function()
						{
							calcHeight();
						});
						
						*/
					
					// -------------------------------------------------------------------------
					
					});
				</script>
				
				<?php
					
					if ( isset( $_GET['tab'] ) )
					{
						create_tabs( $_GET['tab'] );
					}	
					else
					{
						create_tabs( 'general' );
					}
					
				?>

				<div id="poststuff">
					<?php
					
						// theme options page
						if ( $pagenow == 'themes.php' && $_GET['page'] == 'theme-options' )
						{
							// tab from url
							if ( isset( $_GET['tab'] ) )
							{
								$tab = $_GET['tab'];
							}
							else
							{
								$tab = 'general'; 
							}
							
							
							switch ( $tab )
							{
								case 'general' :
									
									if ( esc_attr( @$_GET['saved'] ) == 'true' )
									{
										echo '<div class="alert-success" title="Click to close"><p><strong>Saved.</strong></p></div>';
									}
									
									?>
										<div class="postbox">
											<div class="inside">
												<form method="post" class="ajax-form" action="<?php admin_url( 'themes.php?page=theme-options' ); ?>">
													<?php
														wp_nonce_field( "settings-page" );
													?>
													
													<table>
														<tr>
															<td class="option-left">
																<h4>Image Logo</h4>
																
																<?php
																	$logo_image = get_option( 'logo_image' );
																?>
																<input type="text" id="logo_image" name="logo_image" class="upload code2" style="width: 100%;" value="<?php echo $logo_image; ?>">
																
																<input type="button" class="button upload-button" style="margin-top: 10px;" value="Browse">
																
																<img style="margin-top: 10px; max-height: 50px;" align="right" alt="" src="<?php echo $logo_image; ?>">
															</td>
															
															<td class="option-right">
																Upload a logo or specify an image address of your online logo.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<h4>Header Background Image</h4>
																
																<?php
																	$header_background_image = get_option( 'header_background_image' );
																?>
																<input type="text" id="header_background_image" name="header_background_image" class="upload code2" style="width: 100%;" value="<?php echo $header_background_image; ?>">
																
																<input type="button" class="button upload-button" style="margin-top: 10px;" value="Browse">
																
																<img style="margin-top: 10px; max-height: 50px;" align="right" alt="" src="<?php echo $header_background_image; ?>">
															</td>
															
															<td class="option-right">
																Upload a photo or specify an image address of your online photo.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<h4>Text Logo</h4>
																
																<?php
																	$select_text_logo = get_option( 'select_text_logo', 'WordPress Site Title' );
																?>
																<select id="select_text_logo" name="select_text_logo" style="width: 100%;">
																	<option <?php if ( $select_text_logo == 'WordPress Site Title' ) { echo 'selected="selected"'; } ?>>WordPress Site Title</option>
																	
																	<option <?php if ( $select_text_logo == 'Theme Site Title' ) { echo 'selected="selected"'; } ?>>Theme Site Title</option>
																</select>
																
																<h4>Theme Site Title</h4>
																
																<?php
																	$theme_site_title = stripcslashes( get_option( 'theme_site_title', "" ) );
																?>
																<textarea id="theme_site_title" name="theme_site_title" rows="1" cols="50"><?php echo $theme_site_title; ?></textarea>
															</td>
															
															<td class="option-right">
																Site title.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<h4>Tagline</h4>
																
																<?php
																	$select_tagline = get_option( 'select_tagline', 'WordPress Tagline' );
																?>
																<select id="select_tagline" name="select_tagline" style="width: 100%;">
																	<option <?php if ( $select_tagline == 'WordPress Tagline' ) { echo 'selected="selected"'; } ?>>WordPress Tagline</option>
																	
																	<option <?php if ( $select_tagline == 'Theme Tagline' ) { echo 'selected="selected"'; } ?>>Theme Tagline</option>
																</select>
																
																<h4>Theme Tagline</h4>
																
																<?php
																	$theme_tagline = stripcslashes( get_option( 'theme_tagline', "" ) );
																?>
																<textarea id="theme_tagline" name="theme_tagline" rows="2" cols="50"><?php echo $theme_tagline; ?></textarea>
															</td>
															
															<td class="option-right">
																In a few words, explain what this site is about.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<h4>Login Logo</h4>
																
																<?php
																	$logo_login = get_option( 'logo_login' );
																?>
																<input type="text" id="logo_login" name="logo_login" class="upload code2" style="width: 100%;" value="<?php echo $logo_login; ?>">
																
																<input type="button" class="button upload-button" style="margin-top: 10px;" value="Browse">
																
																<img style="margin-top: 10px; max-height: 50px;" align="right" alt="" src="<?php echo $logo_login; ?>">
																
																<br>
																
																<?php
																	$logo_login_hide = get_option( 'logo_login_hide', false );
																?>
																<label><input type="checkbox" id="logo_login_hide" name="logo_login_hide" <?php if ( $logo_login_hide ) { echo 'checked="checked"'; } ?>> Hide Login Logo Module</label>
															</td>
															
															<td class="option-right">
																A PNG image.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<h4>Favicon</h4>
																
																<?php
																	$favicon = get_option( 'favicon', "" );
																?>
																<input type="text" id="favicon" name="favicon" class="upload code2" style="width: 100%;" value="<?php echo $favicon; ?>">
																
																<input type="button" class="button upload-button" style="margin-top: 10px;" value="Browse">
																
																<img style="margin-top: 10px; max-height: 16px;" align="right" alt="" src="<?php echo $favicon; ?>">
															</td>
															
															<td class="option-right">
																(16x16)px ICO, PNG or GIF format.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<h4>Apple Touch Icon</h4>
																
																<?php
																	$apple_touch_icon = get_option( 'apple_touch_icon', "" );
																?>
																<input type="text" id="apple_touch_icon" name="apple_touch_icon" class="upload code2" style="width: 100%;" value="<?php echo $apple_touch_icon; ?>">
																
																<input type="button" class="button upload-button" style="margin-top: 10px;" value="Browse">
																
																<img style="margin-top: 10px; max-height: 50px;" align="right" alt="" src="<?php echo $apple_touch_icon; ?>">
															</td>
															
															<td class="option-right">
																A PNG image that will represent your website's favicon for Apple devices such as the iPod Touch, iPhone and iPad, as well as some Android devices.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<h4>Google Map Api Key</h4>
																<?php
																	$google_map_api_key = get_option('google_map_api_key', "");
																?>
																<input type="text" name="google_map_api_key" style="width: 100%;" value="<?php echo esc_attr($google_map_api_key); ?>">
															</td>
															<td class="option-right">
																Get an API key <a target="_blank" href="https://developers.google.com/maps/documentation/javascript/get-api-key#get-an-api-key">here</a>.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<input type="submit" name="submit" class="button button-primary button-large" value="Save Changes">
																
																<input type="hidden" name="settings-submit" value="Y">
															</td>
															
															<td class="option-right">
																
															</td>
														</tr>
													</table>
												</form>
											</div>
											<!-- end .inside -->
										</div>
										<!-- end .postbox -->
									<?php
								break;
									
								case 'style' :
									
									if ( esc_attr( @$_GET['saved'] ) == 'true' )
									{
										echo '<div class="alert-success" title="Click to close"><p><strong>Saved.</strong></p></div>';
									}
									
									?>
										<div class="postbox">
											<div class="inside">
												<form class="ajax-form" method="post" action="<?php admin_url( 'themes.php?page=theme-options' ); ?>">
													<?php
														wp_nonce_field( "settings-page" );
													?>
													
													<table>
														<tr>
															<td class="option-left">
																<h4>Fonts and Colors</h4>
																
																<?php
																	echo '<a href="' . admin_url( 'customize.php' ) . '">Customize</a>';
																?>
															</td>
															
															<td class="option-right">
																Select from theme customizer.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<h4>Character Sets</h4>
																
																<label><input type="checkbox" id="char_set_latin" name="char_set_latin" <?php if ( get_option( 'char_set_latin', true ) ) { echo 'checked="checked"'; } ?>> Latin</label>
																
																<br>
																
																<label><input type="checkbox" id="char_set_latin_ext" name="char_set_latin_ext" <?php if ( get_option( 'char_set_latin_ext' ) ) { echo 'checked="checked"'; } ?>> Latin Extended</label>
																
																<br>
																
																<label><input type="checkbox" id="char_set_cyrillic" name="char_set_cyrillic" <?php if ( get_option( 'char_set_cyrillic' ) ) { echo 'checked="checked"'; } ?>> Cyrillic</label>
																
																<br>
																
																<label><input type="checkbox" id="char_set_cyrillic_ext" name="char_set_cyrillic_ext" <?php if ( get_option( 'char_set_cyrillic_ext' ) ) { echo 'checked="checked"'; } ?>> Cyrillic Extended</label>
																
																<br>
																
																<label><input type="checkbox" id="char_set_greek" name="char_set_greek" <?php if ( get_option( 'char_set_greek' ) ) { echo 'checked="checked"'; } ?>> Greek</label>
																
																<br>
																
																<label><input type="checkbox" id="char_set_greek_ext" name="char_set_greek_ext" <?php if ( get_option( 'char_set_greek_ext' ) ) { echo 'checked="checked"'; } ?>> Greek Extended</label>
																
																<br>
																
																<label><input type="checkbox" id="char_set_vietnamese" name="char_set_vietnamese" <?php if ( get_option( 'char_set_vietnamese' ) ) { echo 'checked="checked"'; } ?>> Vietnamese</label>
															</td>
															
															<td class="option-right">
																Select any of them to include to the Google Fonts if the selected fonts have ones of them in their family.
																<br>
																<br>
																To see the supported character sets visit Google Fonts online.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<h4>Font Styles</h4>
																
																<?php
																	$extra_font_styles = get_option( 'extra_font_styles', 'No' );
																?>
																<select id="extra_font_styles" name="extra_font_styles" style="width: 100%;">
																	<option <?php if ( $extra_font_styles == 'Yes' ) { echo 'selected="selected"'; } ?>>Yes</option>
																	
																	<option <?php if ( $extra_font_styles == 'No' ) { echo 'selected="selected"'; } ?>>No</option>
																</select>
															</td>
															
															<td class="option-right">
																Bold and italic styles.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<h4>Classic Navigation Menu</h4>
																
																<?php
																	$classic_navigation_menu = get_option( 'classic_navigation_menu', 'No' );
																?>
																<select id="classic_navigation_menu" name="classic_navigation_menu" style="width: 100%;">
																	<option <?php if ( $classic_navigation_menu == 'Yes' ) { echo 'selected="selected"'; } ?>>Yes</option>
																	
																	<option <?php if ( $classic_navigation_menu == 'No' ) { echo 'selected="selected"'; } ?>>No</option>
																</select>
															</td>
															
															<td class="option-right">
																Enable/disable.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<h4>Mobile Zoom</h4>
																
																<?php
																	$mobile_zoom = get_option( 'mobile_zoom', 'No' );
																?>
																<select id="mobile_zoom" name="mobile_zoom" style="width: 100%;">
																	<option <?php if ( $mobile_zoom == 'Yes' ) { echo 'selected="selected"'; } ?>>Yes</option>
																	
																	<option <?php if ( $mobile_zoom == 'No' ) { echo 'selected="selected"'; } ?>>No</option>
																</select>
															</td>
															
															<td class="option-right">
																Enable/disable.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<h4>Custom CSS</h4>
																
																<?php
																	$custom_css = stripcslashes( get_option( 'custom_css', "" ) );
																?>
																<textarea id="custom_css" name="custom_css" class="code2" rows="8" cols="50"><?php echo $custom_css; ?></textarea>
															</td>
															
															<td class="option-right">
																Quickly add custom css.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<h4>External CSS</h4>
																
																<?php
																	$external_css = stripcslashes( get_option( 'external_css', "" ) );
																?>
																<textarea id="external_css" name="external_css" class="code2" rows="8" cols="50"><?php echo $external_css; ?></textarea>
															</td>
															
															<td class="option-right">
																Add your custom external (.css) file.
																<br>
																<br>
																Sample (.css):
																<br>
																<br>
																<span class="code2">&lt;link rel="stylesheet" type="text/css" href="yourstyle.css"&gt;</span>
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<h4>External JS</h4>
																
																<?php
																	$external_js = stripcslashes( get_option( 'external_js', "" ) );
																?>
																<textarea id="external_js" name="external_js" class="code2" rows="8" cols="50"><?php echo $external_js; ?></textarea>
															</td>
															
															<td class="option-right">
																Add your custom external (.js) file.
																<br>
																<br>
																Sample (.js):
																<br>
																<br>
																<span class="code2">&lt;script src="yourscript.js"&gt;&lt;/script&gt;</span>
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<input type="submit" name="submit" class="button button-primary button-large" value="Save Changes">
																
																<input type="hidden" name="settings-submit" value="Y">
															</td>
															
															<td class="option-right">
																
															</td>
														</tr>
													</table>
												</form>
											</div>
											<!-- end .inside -->
										</div>
										<!-- end .postbox -->
									<?php
								
								break;
								
								case 'animation' :
								
									if ( esc_attr( @$_GET['saved'] ) == 'true' )
									{
										echo '<div class="alert-success" title="Click to close"><p><strong>Saved.</strong></p></div>';
									}
									
									?>
										<div class="postbox">
											<div class="inside">
												<form method="post" action="<?php admin_url( 'themes.php?page=theme-options' ); ?>" class="ajax-form">
													<?php
														wp_nonce_field( "settings-page" );
													?>
													
													<table>
														<tr>
															<td class="option-left">
																<h4>Classic Layout</h4>
																
																<?php
																	$classic_layout = get_option( 'classic_layout', 'false' );
																?>
																<select id="classic_layout" name="classic_layout" style="width: 100%;">
																	<option <?php if ( $classic_layout == 'true' ) { echo 'selected="selected"'; } ?> value="true">Yes</option>
																	
																	<option <?php if ( $classic_layout == 'false' ) { echo 'selected="selected"'; } ?> value="false">No</option>
																</select>
															</td>
															
															<td class="option-right">
																Enable classic layout always.
															</td>
														</tr>
														
														
														<tr>
															<td class="option-left">
																<h4>Mobile-Only Classic Layout</h4>
																
																<?php
																	$mobile_only_classic_layout = get_option( 'mobile_only_classic_layout', 'true' );
																?>
																<select id="mobile_only_classic_layout" name="mobile_only_classic_layout" style="width: 100%;">
																	<option <?php if ( $mobile_only_classic_layout == 'true' ) { echo 'selected="selected"'; } ?> value="true">Yes</option>
																	
																	<option <?php if ( $mobile_only_classic_layout == 'false' ) { echo 'selected="selected"'; } ?> value="false">No</option>
																</select>
															</td>
															
															<td class="option-right">
																Enable classic layout for mobile devices.
															</td>
														</tr>
														
														
														<tr>
															<td class="option-left">
																<h4>Portfolio Details Page In-Animation</h4>
																
																<?php
																	$pf_details_page_in_animation = get_option( 'pf_details_page_in_animation', 'fadeInUp' );
																?>
																<select id="pf_details_page_in_animation" name="pf_details_page_in_animation" style="width: 100%;">
																	<option <?php if ( $pf_details_page_in_animation == "" ) { echo 'selected="selected"'; } ?>></option>
																	<option <?php if ( $pf_details_page_in_animation == 'flash' ) { echo 'selected="selected"'; } ?>>flash</option>
																	<option <?php if ( $pf_details_page_in_animation == 'bounce' ) { echo 'selected="selected"'; } ?>>bounce</option>
																	<option <?php if ( $pf_details_page_in_animation == 'shake' ) { echo 'selected="selected"'; } ?>>shake</option>
																	<option <?php if ( $pf_details_page_in_animation == 'tada' ) { echo 'selected="selected"'; } ?>>tada</option>
																	<option <?php if ( $pf_details_page_in_animation == 'swing' ) { echo 'selected="selected"'; } ?>>swing</option>
																	<option <?php if ( $pf_details_page_in_animation == 'wobble' ) { echo 'selected="selected"'; } ?>>wobble</option>
																	<option <?php if ( $pf_details_page_in_animation == 'wiggle' ) { echo 'selected="selected"'; } ?>>wiggle</option>
																	<option <?php if ( $pf_details_page_in_animation == 'pulse' ) { echo 'selected="selected"'; } ?>>pulse</option>
																	<option <?php if ( $pf_details_page_in_animation == 'flip' ) { echo 'selected="selected"'; } ?>>flip</option>
																	<option <?php if ( $pf_details_page_in_animation == 'flipInX' ) { echo 'selected="selected"'; } ?>>flipInX</option>
																	<option <?php if ( $pf_details_page_in_animation == 'flipInY' ) { echo 'selected="selected"'; } ?>>flipInY</option>
																	<option <?php if ( $pf_details_page_in_animation == 'fadeIn' ) { echo 'selected="selected"'; } ?>>fadeIn</option>
																	<option <?php if ( $pf_details_page_in_animation == 'fadeInUp' ) { echo 'selected="selected"'; } ?>>fadeInUp</option>
																	<option <?php if ( $pf_details_page_in_animation == 'fadeInDown' ) { echo 'selected="selected"'; } ?>>fadeInDown</option>
																	<option <?php if ( $pf_details_page_in_animation == 'fadeInLeft' ) { echo 'selected="selected"'; } ?>>fadeInLeft</option>
																	<option <?php if ( $pf_details_page_in_animation == 'fadeInRight' ) { echo 'selected="selected"'; } ?>>fadeInRight</option>
																	<option <?php if ( $pf_details_page_in_animation == 'fadeInUpBig' ) { echo 'selected="selected"'; } ?>>fadeInUpBig</option>
																	<option <?php if ( $pf_details_page_in_animation == 'fadeInDownBig' ) { echo 'selected="selected"'; } ?>>fadeInDownBig</option>
																	<option <?php if ( $pf_details_page_in_animation == 'fadeInLeftBig' ) { echo 'selected="selected"'; } ?>>fadeInLeftBig</option>
																	<option <?php if ( $pf_details_page_in_animation == 'fadeInRightBig' ) { echo 'selected="selected"'; } ?>>fadeInRightBig</option>
																	<option <?php if ( $pf_details_page_in_animation == 'bounceIn' ) { echo 'selected="selected"'; } ?>>bounceIn</option>
																	<option <?php if ( $pf_details_page_in_animation == 'bounceInDown' ) { echo 'selected="selected"'; } ?>>bounceInDown</option>
																	<option <?php if ( $pf_details_page_in_animation == 'bounceInUp' ) { echo 'selected="selected"'; } ?>>bounceInUp</option>
																	<option <?php if ( $pf_details_page_in_animation == 'bounceInLeft' ) { echo 'selected="selected"'; } ?>>bounceInLeft</option>
																	<option <?php if ( $pf_details_page_in_animation == 'bounceInRight' ) { echo 'selected="selected"'; } ?>>bounceInRight</option>
																	<option <?php if ( $pf_details_page_in_animation == 'rotateIn' ) { echo 'selected="selected"'; } ?>>rotateIn</option>
																	<option <?php if ( $pf_details_page_in_animation == 'rotateInDownLeft' ) { echo 'selected="selected"'; } ?>>rotateInDownLeft</option>
																	<option <?php if ( $pf_details_page_in_animation == 'rotateInDownRight' ) { echo 'selected="selected"'; } ?>>rotateInDownRight</option>
																	<option <?php if ( $pf_details_page_in_animation == 'rotateInUpLeft' ) { echo 'selected="selected"'; } ?>>rotateInUpLeft</option>
																	<option <?php if ( $pf_details_page_in_animation == 'rotateInUpRight' ) { echo 'selected="selected"'; } ?>>rotateInUpRight</option>
																	<option <?php if ( $pf_details_page_in_animation == 'lightSpeedIn' ) { echo 'selected="selected"'; } ?>>lightSpeedIn</option>
																	<option <?php if ( $pf_details_page_in_animation == 'rollIn' ) { echo 'selected="selected"'; } ?>>rollIn</option>
																</select>
															</td>
															
															<td class="option-right">
																Determines the animation type for ajax portfolio details page in-animation.
															</td>
														</tr>
														
														
														<tr>
															<td class="option-left">
																<h4>Portfolio Details Page Out-Animation</h4>
																
																<?php
																	$pf_details_page_out_animation = get_option( 'pf_details_page_out_animation', 'fadeOutDownBig' );
																?>
																<select id="pf_details_page_out_animation" name="pf_details_page_out_animation" style="width: 100%;">
																	<option <?php if ( $pf_details_page_out_animation == "" ) { echo 'selected="selected"'; } ?>></option>
																	<option <?php if ( $pf_details_page_out_animation == 'flipOutX' ) { echo 'selected="selected"'; } ?>>flipOutX</option>
																	<option <?php if ( $pf_details_page_out_animation == 'flipOutY' ) { echo 'selected="selected"'; } ?>>flipOutY</option>
																	<option <?php if ( $pf_details_page_out_animation == 'fadeOut' ) { echo 'selected="selected"'; } ?>>fadeOut</option>
																	<option <?php if ( $pf_details_page_out_animation == 'fadeOutUp' ) { echo 'selected="selected"'; } ?>>fadeOutUp</option>
																	<option <?php if ( $pf_details_page_out_animation == 'fadeOutDown' ) { echo 'selected="selected"'; } ?>>fadeOutDown</option>
																	<option <?php if ( $pf_details_page_out_animation == 'fadeOutLeft' ) { echo 'selected="selected"'; } ?>>fadeOutLeft</option>
																	<option <?php if ( $pf_details_page_out_animation == 'fadeOutRight' ) { echo 'selected="selected"'; } ?>>fadeOutRight</option>
																	<option <?php if ( $pf_details_page_out_animation == 'fadeOutUpBig' ) { echo 'selected="selected"'; } ?>>fadeOutUpBig</option>
																	<option <?php if ( $pf_details_page_out_animation == 'fadeOutDownBig' ) { echo 'selected="selected"'; } ?>>fadeOutDownBig</option>
																	<option <?php if ( $pf_details_page_out_animation == 'fadeOutLeftBig' ) { echo 'selected="selected"'; } ?>>fadeOutLeftBig</option>
																	<option <?php if ( $pf_details_page_out_animation == 'fadeOutRightBig' ) { echo 'selected="selected"'; } ?>>fadeOutRightBig</option>
																	<option <?php if ( $pf_details_page_out_animation == 'bounceOut' ) { echo 'selected="selected"'; } ?>>bounceOut</option>
																	<option <?php if ( $pf_details_page_out_animation == 'bounceOutDown' ) { echo 'selected="selected"'; } ?>>bounceOutDown</option>
																	<option <?php if ( $pf_details_page_out_animation == 'bounceOutUp' ) { echo 'selected="selected"'; } ?>>bounceOutUp</option>
																	<option <?php if ( $pf_details_page_out_animation == 'bounceOutLeft' ) { echo 'selected="selected"'; } ?>>bounceOutLeft</option>
																	<option <?php if ( $pf_details_page_out_animation == 'bounceOutRight' ) { echo 'selected="selected"'; } ?>>bounceOutRight</option>
																	<option <?php if ( $pf_details_page_out_animation == 'rotateOut' ) { echo 'selected="selected"'; } ?>>rotateOut</option>
																	<option <?php if ( $pf_details_page_out_animation == 'rotateOutDownLeft' ) { echo 'selected="selected"'; } ?>>rotateOutDownLeft</option>
																	<option <?php if ( $pf_details_page_out_animation == 'rotateOutDownRight' ) { echo 'selected="selected"'; } ?>>rotateOutDownRight</option>
																	<option <?php if ( $pf_details_page_out_animation == 'rotateOutUpLeft' ) { echo 'selected="selected"'; } ?>>rotateOutUpLeft</option>
																	<option <?php if ( $pf_details_page_out_animation == 'rotateOutUpRight' ) { echo 'selected="selected"'; } ?>>rotateOutUpRight</option>
																	<option <?php if ( $pf_details_page_out_animation == 'lightSpeedOut' ) { echo 'selected="selected"'; } ?>>lightSpeedOut</option>
																	<option <?php if ( $pf_details_page_out_animation == 'hinge' ) { echo 'selected="selected"'; } ?>>hinge</option>
																	<option <?php if ( $pf_details_page_out_animation == 'rollOut' ) { echo 'selected="selected"'; } ?>>rollOut</option>
																</select>
															</td>
															
															<td class="option-right">
																Determines the animation type for ajax portfolio details page out-animation.
															</td>
														</tr>
														
														
														<tr>
															<td class="option-left">
																<h4>Ajax</h4>
																
																<?php
																	$pixelwars__ajax = get_option( 'pixelwars__ajax', 'Yes' );
																?>
																
																<select id="pixelwars__ajax" name="pixelwars__ajax" style="width: 100%;">
																	<option>Yes</option>
																	<option <?php if ( $pixelwars__ajax == 'No' ) { echo 'selected="selected"'; } ?>>No</option>
																</select>
															</td>
															
															<td class="option-right">
																Ajax functionality for portfolio items.
															</td>
														</tr>
														
														
														<tr>
															<td class="option-left">
																<input type="submit" name="submit" class="button button-primary button-large" value="Save Changes">
																
																<input type="hidden" name="settings-submit" value="Y">
															</td>
															
															<td class="option-right">
																
															</td>
														</tr>
													</table>
												</form>
											</div>
											<!-- end .inside -->
										</div>
										<!-- end .postbox -->
									<?php
								break;
								
								
								case 'blog' :
									
									if ( esc_attr( @$_GET['saved'] ) == 'true' )
									{
										echo '<div class="alert-success" title="Click to close"><p><strong>Saved.</strong></p></div>';
									}
									
									?>
										<div class="postbox">
											<div class="inside">
												<form class="ajax-form" method="post" action="<?php admin_url( 'themes.php?page=theme-options' ); ?>">
													<?php
														wp_nonce_field( 'settings-page' );
													?>
													
													<table>
														<tr>
															<td class="option-left">
																<h4>Excerpt</h4>
																
																<?php
																	$theme_excerpt = get_option( 'theme_excerpt', 'No' );
																?>
																<select id="theme_excerpt" name="theme_excerpt" style="width: 100%;">
																	<option <?php if ( $theme_excerpt == 'Yes' ) { echo 'selected="selected"'; } ?>>Yes</option>
																	
																	<option <?php if ( $theme_excerpt == 'No' ) { echo 'selected="selected"'; } ?>>No</option>
																	
																	<option <?php if ( $theme_excerpt == 'standard' ) { echo 'selected="selected"'; } ?> value="standard">Only for standard format</option>
																</select>
															</td>
															
															<td class="option-right">
																Enable/disable.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<h4>Numbered Pagination</h4>
																
																<?php
																	$pagination = get_option( 'pagination', 'No' );
																?>
																<select id="pagination" name="pagination" style="width: 100%;">
																	<option <?php if ( $pagination == 'Yes' ) { echo 'selected="selected"'; } ?>>Yes</option>
																	
																	<option <?php if ( $pagination == 'No' ) { echo 'selected="selected"'; } ?>>No</option>
																</select>
															</td>
															
															<td class="option-right">
																Use numbered pagination instead of Older-Newer links.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<h4>About The Author Module</h4>
																
																<?php
																	$about_the_author_module = get_option( 'about_the_author_module', 'Yes' );
																?>
																<select id="about_the_author_module" name="about_the_author_module" style="width: 100%;">
																	<option <?php if ( $about_the_author_module == 'Yes' ) { echo 'selected="selected"'; } ?>>Yes</option>
																	
																	<option <?php if ( $about_the_author_module == 'No' ) { echo 'selected="selected"'; } ?>>No</option>
																</select>
															</td>
															
															<td class="option-right">
																Enable/disable.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<input type="submit" name="submit" class="button button-primary button-large" value="Save Changes">
																
																<input type="hidden" name="settings-submit" value="Y">
															</td>
															
															<td class="option-right">
																
															</td>
														</tr>
													</table>
												</form>
											</div>
											<!-- end .inside -->
										</div>
										<!-- end .postbox -->
									<?php
								break;
								
								case 'seo' :
									
									if ( esc_attr( @$_GET['saved'] ) == 'true' )
									{
										echo '<div class="alert-success" title="Click to close"><p><strong>Saved.</strong></p></div>';
									}
									
									?>
										<div class="postbox">
											<div class="inside">
												<form class="ajax-form" method="post" action="<?php admin_url( 'themes.php?page=theme-options' ); ?>">
													<?php
														wp_nonce_field( "settings-page" );
													?>
													
													<table>
														<tr>
															<td class="option-left">
																<h4>Open Graph Protocol</h4>
																
																<?php
																	$theme_og_protocol = stripcslashes( get_option( 'theme_og_protocol', 'No' ) );
																?>
																<select id="theme_og_protocol" name="theme_og_protocol" style="width: 100%;">
																	<option <?php if ( $theme_og_protocol == 'Yes' ) { echo 'selected="selected"'; } ?>>Yes</option>
																	
																	<option <?php if ( $theme_og_protocol == 'No' ) { echo 'selected="selected"'; } ?>>No</option>
																</select>
															</td>
															
															<td class="option-right">
																Enable built-in open graph functionality.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<h4>Theme SEO Fields</h4>
																
																<?php
																	$theme_seo_fields = stripcslashes( get_option( 'theme_seo_fields', 'No' ) );
																?>
																<select id="theme_seo_fields" name="theme_seo_fields" style="width: 100%;">
																	<option <?php if ( $theme_seo_fields == 'Yes' ) { echo 'selected="selected"'; } ?>>Yes</option>
																	
																	<option <?php if ( $theme_seo_fields == 'No' ) { echo 'selected="selected"'; } ?>>No</option>
																</select>
															</td>
															
															<td class="option-right">
																Enable built-in seo fields.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<h4>Description</h4>
																
																<?php
																	$site_description = stripcslashes( get_option( 'site_description', "" ) );
																?>
																<textarea id="site_description" name="site_description" style="outline: none; width: 100%;" rows="3" cols="50"><?php echo $site_description; ?></textarea>
															</td>
															
															<td class="option-right">
																Used in front page.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<h4>Keywords</h4>
																
																<?php
																	$site_keywords = stripcslashes( get_option( 'site_keywords', "" ) );
																?>
																<textarea id="site_keywords" name="site_keywords" style="outline: none; width: 100%;" rows="3" cols="50"><?php echo $site_keywords; ?></textarea>
															</td>
															
															<td class="option-right">
																Separate keywords with commas.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<h4>Tracking Code (/head)</h4>
																<?php
																	$tracking_code_head = stripcslashes( get_option( 'tracking_code_head' ) );
																?>
																<textarea id="tracking_code_head" name="tracking_code_head" class="code2" rows="8" cols="50"><?php echo $tracking_code_head; ?></textarea>
															</td>
															<td class="option-right">
																Paste your Google Analytics (or other) tracking code here. It will be inserted before the closing head tag.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<h4>Tracking Code (/body)</h4>
																<?php
																	$tracking_code_body = stripcslashes( get_option( 'tracking_code_body' ) );
																?>
																<textarea id="tracking_code_body" name="tracking_code_body" class="code2" rows="8" cols="50"><?php echo $tracking_code_body; ?></textarea>
															</td>
															<td class="option-right">
																Paste your Google Analytics (or other) tracking code here. It will be inserted before the closing body tag.
															</td>
														</tr>
														
														<tr>
															<td class="option-left">
																<input type="submit" name="submit" class="button button-primary button-large" value="Save Changes">
																<input type="hidden" name="settings-submit" value="Y">
															</td>
															<td class="option-right">
																
															</td>
														</tr>
													</table>
												</form>
											</div>
											<!-- end .inside -->
										</div>
										<!-- end .postbox -->
									<?php
								break;
							}
							// end tab content
						}
						// end settings page
					?>
				</div>
				<!-- end #poststuff -->
			</div>
			<!-- end .wrap2 -->
		<?php
	}
	// end theme_options_page
	
/* ============================================================================================================================================ */
	
	function theme_save_settings()
	{
		global $pagenow;
		
		if ( $pagenow == 'themes.php' && $_GET['page'] == 'theme-options' )
		{
			if ( isset ( $_GET['tab'] ) )
			{
				$tab = $_GET['tab'];
			}
			else
			{
				$tab = 'general';
			}
			
			
			switch ( $tab )
			{
				case 'general' :
				
					update_option( 'logo_image', $_POST['logo_image'] );
					update_option( 'header_background_image', $_POST['header_background_image'] );
					update_option( 'select_text_logo', $_POST['select_text_logo'] );
					update_option( 'theme_site_title', $_POST['theme_site_title'] );
					update_option( 'select_tagline', $_POST['select_tagline'] );
					update_option( 'theme_tagline', $_POST['theme_tagline'] );
					update_option( 'logo_login', $_POST['logo_login'] );
					update_option( 'logo_login_hide', $_POST['logo_login_hide'] );
					update_option( 'favicon', $_POST['favicon'] );
					update_option( 'apple_touch_icon', $_POST['apple_touch_icon'] );
					update_option( 'google_map_api_key', $_POST['google_map_api_key'] );
				
				break;
				
				case 'style' :
					
					update_option( 'char_set_latin', $_POST['char_set_latin'] );
					update_option( 'char_set_latin_ext', $_POST['char_set_latin_ext'] );
					update_option( 'char_set_cyrillic', $_POST['char_set_cyrillic'] );
					update_option( 'char_set_cyrillic_ext', $_POST['char_set_cyrillic_ext'] );
					update_option( 'char_set_greek', $_POST['char_set_greek'] );
					update_option( 'char_set_greek_ext', $_POST['char_set_greek_ext'] );
					update_option( 'char_set_vietnamese', $_POST['char_set_vietnamese'] );
					update_option( 'extra_font_styles', $_POST['extra_font_styles'] );
					update_option( 'classic_navigation_menu', $_POST['classic_navigation_menu'] );
					update_option( 'mobile_zoom', $_POST['mobile_zoom'] );
					update_option( 'custom_css', $_POST['custom_css'] );
					update_option( 'external_css', $_POST['external_css'] );
					update_option( 'external_js', $_POST['external_js'] );
					
				break;
				
				case 'animation' :
					
					update_option( 'classic_layout', $_POST['classic_layout'] );
					update_option( 'mobile_only_classic_layout', $_POST['mobile_only_classic_layout'] );
					update_option( 'pf_details_page_in_animation', $_POST['pf_details_page_in_animation'] );
					update_option( 'pf_details_page_out_animation', $_POST['pf_details_page_out_animation'] );
					update_option( 'pixelwars__ajax', $_POST['pixelwars__ajax'] );
					
				break;
				
				case 'blog' :
					
					update_option( 'theme_excerpt', $_POST['theme_excerpt'] );
					update_option( 'pagination', $_POST['pagination'] );
					update_option( 'about_the_author_module', $_POST['about_the_author_module'] );
					
				break;
				
				case 'seo' :
					
					update_option( 'theme_og_protocol', $_POST['theme_og_protocol'] );
					update_option( 'theme_seo_fields', $_POST['theme_seo_fields'] );
					update_option( 'site_description', $_POST['site_description'] );
					update_option( 'site_keywords', $_POST['site_keywords'] );
					update_option( 'tracking_code_head', $_POST['tracking_code_head'] );
					update_option( 'tracking_code_body', $_POST['tracking_code_body'] );
					
				break;
			}
		}
	}


/* ============================================================================================================================================ */


	function load_settings_page()
	{
		if ( isset( $_POST["settings-submit"] ) == 'Y' )
		{
			check_admin_referer( "settings-page" );
			
			theme_save_settings();
			
			$url_parameters = isset( $_GET['tab'] ) ? 'tab=' . $_GET['tab'] . '&saved=true' : 'saved=true';
			
			wp_redirect( admin_url( 'themes.php?page=theme-options&' . $url_parameters ) );
			
			exit;
		}
		// end if
	}
	// end load_settings_page

/* ============================================================================================================================================ */

	function my_theme_menu()
	{
		$settings_page = add_theme_page('Theme Options',
										'Theme Options',
										'edit_theme_options',
										'theme-options',
										'theme_options_page' );
		
		add_action( "load-{$settings_page}", 'load_settings_page' );
	}
	
	add_action( 'admin_menu', 'my_theme_menu' );

/* ============================================================================================================================================ */

?>