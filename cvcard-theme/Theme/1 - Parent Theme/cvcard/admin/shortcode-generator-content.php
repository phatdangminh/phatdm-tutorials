<form class="sh-wrap">

	<br>
	<label for="sh_list">Shortcodes:</label>
	<br>
	
	<select id="sh_list" name="sh_list" class="widefat sh-list" style="width: 50%;">
	
		<option></option>
		
		<option>row</option>
		<option>column</option>
		<option>portfolio_field</option>
		<option>inline_lightbox_wrap</option>
		<option>inline_lightbox_image</option>
		<option>inline_lightbox_iframe</option>
		<option>portfolio_lightbox_image</option>
		<option>portfolio_lightbox_iframe</option>
		<option>portfolio_tags</option>
		<option>launch_button_wrap</option>
		<option>section_title</option>
		<option>intro</option>
		<option>rotate_words</option>
		<option>latest_tweets</option>
		<option>timeline</option>
		<option>event</option>
		<option>progress_bar</option>
		<option>testimonial</option>
		<option>service</option>
		<option>process</option>
		<option>fun_fact</option>
		<option>client</option>
		<option>link_wrap</option>
		<option>aside</option>
		<option>quote</option>
		<option>tagline</option>
		<option>project_action</option>
		<option>call_to_action</option>
		<option>cta_button_wrap</option>
		<option>icon_list</option>
		<option>list_item</option>
		<option>slide</option>
		<option>contact_form</option>
		<option>letter</option>
		<option>map</option>
		<option>media_wrap</option>
		<option>video</option>
		<option>audio</option>
		<option>social_icon</option>
		<option value="my_button">button</option>
		<option>tabs_wrap</option>
		<option>tab_pane</option>
		<option>accordion</option>
		<option>toggle</option>
		<option>divider</option>
		<option>alert</option>
		<option>drop_cap</option>
		<option>icon</option>
		<option>image</option>
		<option>code_line</option>
		<option>code_block</option>
		<option>code_block_prettify</option>
		<option>code_block_line_numbers</option>
		
	</select>
	<!-- end shortcodes list -->
	
	<br>
	<br>
	
	
	<!-- shortcodes fields ====================================== -->
	
	
	<!-- image -->
	<div class="image" style="display: none;">
		<label for="image_src">SRC</label>
		<br>
		<input type="text" id="image_src" name="image_src" class="widefat" style="width: 50%;">
		<br>
		<br>
	</div>
	<!-- end image -->
	
	
	<!-- list_item -->
	<div class="list_item" style="display: none;">
		<label for="list_item_icon">Icon</label>
		<br>
		<input type="text" id="list_item_icon" name="list_item_icon" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="list_item_text">Text</label>
		<br>
		<input type="text" id="list_item_text" name="list_item_text" class="widefat" style="width: 50%;">
		<br>
		<br>
	</div>
	<!-- end list_item -->
	
	
	<!-- contact_form -->
	<div class="contact_form" style="display: none;">
		<label for="contact_form_to">To</label>
		<br>
		<input type="text" id="contact_form_to" name="contact_form_to" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="contact_form_subject">Subject</label>
		<br>
		<input type="text" id="contact_form_subject" name="contact_form_subject" class="widefat" style="width: 50%;">
		<br>
		<br>
		
		<label for="contact_form_captcha">Captcha</label>
		<br>
		<select id="contact_form_captcha" name="contact_form_captcha" class="widefat" style="width: 30%;">
			<option>yes</option>
			
			<option></option>
		</select>
		<br>
		<br>
	</div>
	<!-- end contact_form -->
	
	
	<!-- section_title -->
	<div class="section_title" style="display: none;">
		<label for="section_title_icon">Icon</label>
		<br>
		<input type="text" id="section_title_icon" name="section_title_icon" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="section_title_text">Text</label>
		<br>
		<input type="text" id="section_title_text" name="section_title_text" class="widefat" style="width: 50%;">
		<br>
		<br>
	</div>
	<!-- end section_title -->
	
	
	<!-- latest_tweets -->
	<div class="latest_tweets" style="display: none;">
		<label for="latest_tweets_count">Count</label>
		<br>
		<input type="text" id="latest_tweets_count" name="latest_tweets_count" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="latest_tweets_include_retweets">Include Retweets</label>
		<br>
		<select id="latest_tweets_include_retweets" name="latest_tweets_include_retweets" class="widefat" style="width: 30%;">
			<option>false</option>
			
			<option>true</option>
		</select>
		<br>
		<br>
		
		<label for="latest_tweets_id">ID</label>
		<br>
		<input type="text" id="latest_tweets_id" name="latest_tweets_id" class="widefat" style="width: 50%;">
		<br>
		<br>
	</div>
	<!-- end latest_tweets -->
	
	
	<!-- process -->
	<div class="process" style="display: none;">
		<label for="process_icon">Icon</label>
		<br>
		<input type="text" id="process_icon" name="process_icon" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="process_text">Text</label>
		<br>
		<input type="text" id="process_text" name="process_text" class="widefat" style="width: 50%;">
		<br>
		<br>
	</div>
	<!-- end process -->
	
	
	<!-- fun_fact -->
	<div class="fun_fact" style="display: none;">
		<label for="fun_fact_icon">Icon</label>
		<br>
		<input type="text" id="fun_fact_icon" name="fun_fact_icon" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="fun_fact_text">Text</label>
		<br>
		<input type="text" id="fun_fact_text" name="fun_fact_text" class="widefat" style="width: 50%;">
		<br>
		<br>
	</div>
	<!-- end fun_fact -->
	
	
	<!-- client -->
	<div class="client" style="display: none;">
		<label for="client_image">Image</label>
		<br>
		<input type="text" id="client_image" name="client_image" class="widefat" style="width: 50%;">
		<br>
		<br>
		
		<label for="client_url">URL</label>
		<br>
		<input type="text" id="client_url" name="client_url" class="widefat" style="width: 50%;">
		<br>
		<br>
	</div>
	<!-- end client -->
	
	
	<!-- map -->
	<div class="map" style="display: none;">
		<label for="map_latitude">Latitude</label>
		<br>
		<input type="text" id="map_latitude" name="map_latitude" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="map_longitude">Longitude</label>
		<br>
		<input type="text" id="map_longitude" name="map_longitude" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="map_zoom">Zoom</label>
		<br>
		<input type="text" id="map_zoom" name="map_zoom" class="widefat" style="width: 30%;">
		<br>
		<br>
	</div>
	<!-- end map -->
	
	
	<!-- letter -->
	<div class="letter" style="display: none;">
		<label for="letter_title">Title</label>
		<br>
		<input type="text" id="letter_title" name="letter_title" class="widefat" style="width: 50%;">
		<br>
		<br>
		
		<label for="letter_email">Email</label>
		<br>
		<input type="text" id="letter_email" name="letter_email" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="letter_telephone">Telephone</label>
		<br>
		<input type="text" id="letter_telephone" name="letter_telephone" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="letter_address">Address</label>
		<br>
		<input type="text" id="letter_address" name="letter_address" class="widefat" style="width: 50%;">
		<br>
		<br>
		
		<label for="letter_image_url">Image URL</label>
		<br>
		<input type="text" id="letter_image_url" name="letter_image_url" class="widefat" style="width: 50%;">
		<br>
		<br>
	</div>
	<!-- end letter -->
	
	
	<!-- icon -->
	<div class="icon" style="display: none;">
		<label for="icon_name">Name</label>
		<br>
		<input type="text" id="icon_name" name="icon_name" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="icon_size">Size</label>
		<br>
		<select id="icon_size" name="icon_size" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>fa-lg</option>
			<option>fa-2x</option>
			<option>fa-3x</option>
			<option>fa-4x</option>
			<option>fa-5x</option>
		</select>
		<br>
		<br>
	</div>
	<!-- end icon -->
	
	
	<!-- slide -->
	<div class="slide" style="display: none;">
		<label for="slide_first_slide">First Slide</label>
		<br>
		<select id="slide_first_slide" name="slide_first_slide" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>yes</option>
		</select>
		<br>
		<br>
		
		<label for="slide_last_slide">Last Slide</label>
		<br>
		<select id="slide_last_slide" name="slide_last_slide" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>yes</option>
		</select>
		<br>
		<br>
		
		<label for="slide_autoplay">Autoplay</label>
		<br>
		<select id="slide_autoplay" name="slide_autoplay" class="widefat" style="width: 30%;">
			<option>true</option>
			
			<option>false</option>
		</select>
		<br>
		<br>
		
		<label for="slide_title">Title</label>
		<br>
		<input type="text" id="slide_title" name="slide_title" class="widefat" style="width: 50%;">
		<br>
		<br>
		
		<label for="slide_src">SRC</label>
		<br>
		<input type="text" id="slide_src" name="slide_src" class="widefat" style="width: 50%;">
		<br>
		<br>
	</div>
	<!-- end slide -->
	
	
	<!-- progress_bar -->
	<div class="progress_bar" style="display: none;">
		<label for="progress_bar_first_bar">First Bar</label>
		<br>
		<select id="progress_bar_first_bar" name="progress_bar_first_bar" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>yes</option>
		</select>
		<br>
		<br>
		
		<label for="progress_bar_last_bar">Last Bar</label>
		<br>
		<select id="progress_bar_last_bar" name="progress_bar_last_bar" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>yes</option>
		</select>
		<br>
		<br>
		
		<label for="progress_bar_text">Text</label>
		<br>
		<input type="text" id="progress_bar_text" name="progress_bar_text" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="progress_bar_percent">Percent</label>
		<br>
		<input type="text" id="progress_bar_percent" name="progress_bar_percent" class="widefat" style="width: 30%;">
		<br>
		<br>
	</div>
	<!-- end progress_bar -->
	
	
	<!-- social_icon -->
	<div class="social_icon" style="display: none;">
		<label for="social_icon_first_icon">First Icon</label>
		<br>
		<select id="social_icon_first_icon" name="social_icon_first_icon" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>yes</option>
		</select>
		<br>
		<br>
		
		<label for="social_icon_last_icon">Last Icon</label>
		<br>
		<select id="social_icon_last_icon" name="social_icon_last_icon" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>yes</option>
		</select>
		<br>
		<br>
		
		<label for="social_icon_type">Type</label>
		<br>
		<select id="social_icon_type" name="social_icon_type" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>facebook</option>
			<option>twitter</option>
			<option>google-plus</option>
			<option>linkedin</option>
			<option>xing</option>
			<option>instagram</option>
			<option>picasa</option>
			<option>pinterest</option>
			<option>flickr</option>
			<option>fivehundredpx</option>
			<option>behance</option>
			<option>delicious</option>
			<option>digg</option>
			<option>friendfeed</option>
			<option>dribbble</option>
			<option>forrst</option>
			<option>youtube</option>
			<option>vimeo</option>
			<option>soundcloud</option>
			<option>lastfm</option>
			<option>tumblr</option>
			<option>blogger</option>
			<option>wordpress</option>
			<option>skype</option>
			<option>github</option>
			<option>stack-overflow</option>
			<option>foursquare</option>
			<option>weibo</option>
			<option>slideshare</option>
			<option>deviantart</option>
			<option>rss</option>
		</select>
		<br>
		<br>
		
		<label for="social_icon_url">URL</label>
		<br>
		<input type="text" id="social_icon_url" name="social_icon_url" class="widefat" style="width: 50%;">
		<br>
		<br>
	</div>
	<!-- end social_icon -->
	
	
	<!-- my_button -->
	<div class="my_button" style="display: none;">
		<label for="button_text">Text</label>
		<br>
		<input type="text" id="button_text" name="button_text" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="button_new_tab">New Tab</label>
		<br>
		<select id="button_new_tab" name="button_new_tab" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>yes</option>
		</select>
		<br>
		<br>
		
		<label for="button_size">Size</label>
		<br>
		<select id="button_size" name="button_size" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>small</option>
			<option>medium</option>
			<option>big</option>
		</select>
		<br>
		<br>
		
		<label for="button_icon">Icon</label>
		<br>
		<input type="text" id="button_icon" name="button_icon" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="button_color">Color</label>
		<br>
		<select id="button_color" name="button_color" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>primary</option>
			<option>green</option>
			<option>blue</option>
			<option>yellow</option>
			<option>red</option>
		</select>
		<br>
		<br>
		
		<label for="button_colored">Colored</label>
		<br>
		<select id="button_colored" name="button_colored" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>yes</option>
		</select>
		<br>
		<br>
		
		<label for="button_url">URL</label>
		<br>
		<input type="text" id="button_url" name="button_url" class="widefat" style="width: 50%;">
		<br>
		<br>
	</div>
	<!-- end my_button -->
	
	
	<!-- quote -->
	<div class="quote" style="display: none;">
		<label for="quote_name">Name</label>
		<br>
		<input type="text" id="quote_name" name="quote_name" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="quote_text">Text</label>
		<br>
		<input type="text" id="quote_text" name="quote_text" class="widefat" style="width: 50%;">
		<br>
		<br>
	</div>
	<!-- end quote -->
	
	
	<!-- service -->
	<div class="service" style="display: none;">
		<label for="service_color">Color</label>
		<br>
		<select id="service_color" name="service_color" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>color1</option>
			<option>color2</option>
			<option>color3</option>
			<option>color4</option>
		</select>
		<br>
		<br>
		
		<label for="service_icon">Icon</label>
		<br>
		<input type="text" id="service_icon" name="service_icon" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="service_content">Content</label>
		<br>
		<textarea id="service_content" name="service_content" rows="4" cols="50" class="widefat" style="width: 50%;"></textarea>
		<br>
		<br>
	</div>
	<!-- end service -->
	
	
	<!-- alert -->
	<div class="alert" style="display: none;">
		<label for="alert_type">Type</label>
		<br>
		<select id="alert_type" name="alert_type" class="widefat" style="width: 30%;">
			<option></option>
			
			<option value="">standard</option>
			<option>info</option>
			<option>success</option>
			<option>error</option>
		</select>
		<br>
		<br>
		
		<label for="alert_title">Title</label>
		<br>
		<input type="text" id="alert_title" name="alert_title" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="alert_content">Content</label>
		<br>
		<textarea id="alert_content" name="alert_content" rows="4" cols="50" class="widefat" style="width: 50%;"></textarea>
		<br>
		<br>
	</div>
	<!-- end alert -->
	
	
	<!-- tabs_wrap -->
	<div class="tabs_wrap" style="display: none;">
		<label for="tabs_wrap_titles">Titles</label>
		<br>
		<input type="text" id="tabs_wrap_titles" name="tabs_wrap_titles" class="widefat" style="width: 50%;">
		<br>
		<br>
		
		<label for="tabs_wrap_active">Active</label>
		<br>
		<input type="text" id="tabs_wrap_active" name="tabs_wrap_active" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="tabs_wrap_content">Content</label>
		<br>
		<textarea id="tabs_wrap_content" name="tabs_wrap_content" rows="4" cols="50" class="widefat" style="width: 50%;"></textarea>
		<br>
		<br>
	</div>
	<!-- end tabs_wrap -->
	
	
	<!-- tab_pane -->
	<div class="tab_pane" style="display: none;">
		<label for="tab_pane_content">Content</label>
		<br>
		<textarea id="tab_pane_content" name="tab_pane_content" rows="4" cols="50" class="widefat" style="width: 50%;"></textarea>
		<br>
		<br>
	</div>
	<!-- end tab_pane -->
	
	
	<!-- toggle -->
	<div class="toggle" style="display: none;">
		<label for="toggle_first_toggle">First Toggle</label>
		<br>
		<select id="toggle_first_toggle" name="toggle_first_toggle" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>yes</option>
		</select>
		<br>
		<br>
		
		<label for="toggle_last_toggle">Last Toggle</label>
		<br>
		<select id="toggle_last_toggle" name="toggle_last_toggle" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>yes</option>
		</select>
		<br>
		<br>
		
		<label for="toggle_active">Active</label>
		<br>
		<select id="toggle_active" name="toggle_active" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>yes</option>
		</select>
		<br>
		<br>
		
		<label for="toggle_title">Title</label>
		<br>
		<input type="text" id="toggle_title" name="toggle_title" class="widefat" style="width: 50%;">
		<br>
		<br>
		
		<label for="toggle_content">Content</label>
		<br>
		<textarea id="toggle_content" name="toggle_content" rows="4" cols="50" class="widefat" style="width: 50%;"></textarea>
		<br>
		<br>
	</div>
	<!-- end toggle -->
	
	
	<!-- accordion -->
	<div class="accordion" style="display: none;">
		<label for="accordion_first_accordion">First Accordion</label>
		<br>
		<select id="accordion_first_accordion" name="accordion_first_accordion" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>yes</option>
		</select>
		<br>
		<br>
		
		<label for="accordion_last_accordion">Last Accordion</label>
		<br>
		<select id="accordion_last_accordion" name="accordion_last_accordion" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>yes</option>
		</select>
		<br>
		<br>
		
		<label for="accordion_active">Active</label>
		<br>
		<select id="accordion_active" name="accordion_active" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>yes</option>
		</select>
		<br>
		<br>
		
		<label for="accordion_title">Title</label>
		<br>
		<input type="text" id="accordion_title" name="accordion_title" class="widefat" style="width: 50%;">
		<br>
		<br>
		
		<label for="accordion_content">Content</label>
		<br>
		<textarea id="accordion_content" name="accordion_content" rows="4" cols="50" class="widefat" style="width: 50%;"></textarea>
		<br>
		<br>
	</div>
	<!-- end accordion -->
	
	
	<!-- row -->
	<div class="row" style="display: none;">
		<label for="row_content">Content</label>
		<br>
		<textarea id="row_content" name="row_content" rows="4" cols="50" class="widefat" style="width: 50%;"></textarea>
		<br>
		<br>
	</div>
	<!-- end row -->
	
	
	<!-- column -->
	<div class="column" style="display: none;">
		<label for="column_width">Width</label>
		<br>
		<select id="column_width" name="column_width" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
		</select>
		<br>
		<br>
		
		<label for="column_width_xs">Width xs</label>
		<br>
		<select id="column_width_xs" name="column_width_xs" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
		</select>
		<br>
		<br>
		
		<label for="column_width_md">Width md</label>
		<br>
		<select id="column_width_md" name="column_width_md" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
		</select>
		<br>
		<br>
		
		<label for="column_width_lg">Width lg</label>
		<br>
		<select id="column_width_lg" name="column_width_lg" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>1</option>
			<option>2</option>
			<option>3</option>
			<option>4</option>
			<option>5</option>
			<option>6</option>
			<option>7</option>
			<option>8</option>
			<option>9</option>
			<option>10</option>
			<option>11</option>
			<option>12</option>
		</select>
		<br>
		<br>
		
		<label for="column_content">Content</label>
		<br>
		<textarea id="column_content" name="column_content" rows="4" cols="50" class="widefat" style="width: 50%;"></textarea>
		<br>
		<br>
	</div>
	<!-- end column -->
	
	
	<!-- media_wrap -->
	<div class="media_wrap" style="display: none;">
		<label for="media_wrap_content">Content</label>
		<br>
		<textarea id="media_wrap_content" name="media_wrap_content" rows="4" cols="50" class="widefat" style="width: 50%;"></textarea>
		<br>
		<br>
	</div>
	<!-- end media_wrap -->
	
	
	<!-- video -->
	<div class="video" style="display: none;">
		<label for="video_src">SRC</label>
		<br>
		<input type="text" id="video_src" name="video_src" class="widefat" style="width: 50%;">
		<br>
		<br>
		
		<label for="video_poster">Poster</label>
		<br>
		<input type="text" id="video_poster" name="video_poster" class="widefat" style="width: 50%;">
		<br>
		<br>
	</div>
	<!-- end video -->
	
	
	<!-- audio -->
	<div class="audio" style="display: none;">
		<label for="audio_src">SRC</label>
		<br>
		<input type="text" id="audio_src" name="audio_src" class="widefat" style="width: 50%;">
		<br>
		<br>
	</div>
	<!-- end audio -->
	
	
	<!-- testimonial -->
	<div class="testimonial" style="display: none;">
		<label for="testimonial_first">First</label>
		<br>
		<select id="testimonial_first" name="testimonial_first" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>yes</option>
		</select>
		<br>
		<br>
		
		<label for="testimonial_last">Last</label>
		<br>
		<select id="testimonial_last" name="testimonial_last" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>yes</option>
		</select>
		<br>
		<br>
		
		<label for="testimonial_name">Name</label>
		<br>
		<input type="text" id="testimonial_name" name="testimonial_name" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="testimonial_job">Job</label>
		<br>
		<input type="text" id="testimonial_job" name="testimonial_job" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="testimonial_image">Image</label>
		<br>
		<input type="text" id="testimonial_image" name="testimonial_image" class="widefat" style="width: 50%;">
		<br>
		<br>
		
		<label for="testimonial_content">Content</label>
		<br>
		<textarea id="testimonial_content" name="testimonial_content" rows="4" cols="50" class="widefat" style="width: 50%;"></textarea>
		<br>
		<br>
	</div>
	<!-- end testimonial -->
	
	
	<!-- timeline -->
	<div class="timeline" style="display: none;">
		<label for="timeline_title">Title</label>
		<br>
		<input type="text" id="timeline_title" name="timeline_title" class="widefat" style="width: 50%;">
		<br>
		<br>
		
		<label for="timeline_icon">Icon</label>
		<br>
		<input type="text" id="timeline_icon" name="timeline_icon" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="timeline_content">Content</label>
		<br>
		<textarea id="timeline_content" name="timeline_content" rows="4" cols="50" class="widefat" style="width: 50%;"></textarea>
		<br>
		<br>
	</div>
	<!-- end timeline -->
	
	
	<!-- event -->
	<div class="event" style="display: none;">
		<label for="event_date">Date</label>
		<br>
		<input type="text" id="event_date" name="event_date" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="event_current">Current</label>
		<br>
		<select id="event_current" name="event_current" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>yes</option>
		</select>
		<br>
		<br>
		
		<label for="event_content">Content</label>
		<br>
		<textarea id="event_content" name="event_content" rows="4" cols="50" class="widefat" style="width: 50%;"></textarea>
		<br>
		<br>
	</div>
	<!-- end event -->
	
	
	<!-- inline_lightbox_wrap -->
	<div class="inline_lightbox_wrap" style="display: none;">
		<label for="inline_lightbox_wrap_type">Type</label>
		<br>
		<select id="inline_lightbox_wrap_type" name="inline_lightbox_wrap_type" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>image</option>
			<option>video</option>
			<option>audio</option>
		</select>
		<br>
		<br>
		
		<label for="inline_lightbox_wrap_thumbnail">Thumbnail</label>
		<br>
		<input type="text" id="inline_lightbox_wrap_thumbnail" name="inline_lightbox_wrap_thumbnail" class="widefat" style="width: 50%;">
		<br>
		<br>
		
		<label for="inline_lightbox_wrap_content">Content</label>
		<br>
		<textarea id="inline_lightbox_wrap_content" name="inline_lightbox_wrap_content" rows="4" cols="50" class="widefat" style="width: 50%;"></textarea>
		<br>
		<br>
	</div>
	<!-- end inline_lightbox_wrap -->
	
	
	<!-- inline_lightbox_image -->
	<div class="inline_lightbox_image" style="display: none;">
		<label for="inline_lightbox_image_first_item">First Item</label>
		<br>
		<select id="inline_lightbox_image_first_item" name="inline_lightbox_image_first_item" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>yes</option>
		</select>
		<br>
		<br>
		
		<label for="inline_lightbox_image_gallery">Gallery</label>
		<br>
		<input type="text" id="inline_lightbox_image_gallery" name="inline_lightbox_image_gallery" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="inline_lightbox_image_title">Title</label>
		<br>
		<input type="text" id="inline_lightbox_image_title" name="inline_lightbox_image_title" class="widefat" style="width: 50%;">
		<br>
		<br>
		
		<label for="inline_lightbox_image_url">URL</label>
		<br>
		<input type="text" id="inline_lightbox_image_url" name="inline_lightbox_image_url" class="widefat" style="width: 50%;">
		<br>
		<br>
	</div>
	<!-- end inline_lightbox_image -->
	
	
	<!-- inline_lightbox_iframe -->
	<div class="inline_lightbox_iframe" style="display: none;">
		<label for="inline_lightbox_iframe_first_item">First Item</label>
		<br>
		<select id="inline_lightbox_iframe_first_item" name="inline_lightbox_iframe_first_item" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>yes</option>
		</select>
		<br>
		<br>
		
		<label for="inline_lightbox_iframe_gallery">Gallery</label>
		<br>
		<input type="text" id="inline_lightbox_iframe_gallery" name="inline_lightbox_iframe_gallery" class="widefat" style="width: 30%;">
		<br>
		<br>
		
		<label for="inline_lightbox_iframe_title">Title</label>
		<br>
		<input type="text" id="inline_lightbox_iframe_title" name="inline_lightbox_iframe_title" class="widefat" style="width: 50%;">
		<br>
		<br>
		
		<label for="inline_lightbox_iframe_src">SRC</label>
		<br>
		<input type="text" id="inline_lightbox_iframe_src" name="inline_lightbox_iframe_src" class="widefat" style="width: 50%;">
		<br>
		<br>
	</div>
	<!-- end inline_lightbox_iframe -->
	
	
	<!-- portfolio_lightbox_image -->
	<div class="portfolio_lightbox_image" style="display: none;">
		<label for="portfolio_lightbox_image_first_item">First Item</label>
		<br>
		<select id="portfolio_lightbox_image_first_item" name="portfolio_lightbox_image_first_item" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>yes</option>
		</select>
		<br>
		<br>
		
		<label for="portfolio_lightbox_image_title">Title</label>
		<br>
		<input type="text" id="portfolio_lightbox_image_title" name="portfolio_lightbox_image_title" class="widefat" style="width: 50%;">
		<br>
		<br>
		
		<label for="portfolio_lightbox_image_url">URL</label>
		<br>
		<input type="text" id="portfolio_lightbox_image_url" name="portfolio_lightbox_image_url" class="widefat" style="width: 50%;">
		<br>
		<br>
	</div>
	<!-- end portfolio_lightbox_image -->
	
	
	<!-- portfolio_lightbox_iframe -->
	<div class="portfolio_lightbox_iframe" style="display: none;">
		<label for="portfolio_lightbox_iframe_first_item">First Item</label>
		<br>
		<select id="portfolio_lightbox_iframe_first_item" name="portfolio_lightbox_iframe_first_item" class="widefat" style="width: 30%;">
			<option></option>
			
			<option>yes</option>
		</select>
		<br>
		<br>
		
		<label for="portfolio_lightbox_iframe_title">Title</label>
		<br>
		<input type="text" id="portfolio_lightbox_iframe_title" name="portfolio_lightbox_iframe_title" class="widefat" style="width: 50%;">
		<br>
		<br>
		
		<label for="portfolio_lightbox_iframe_src">SRC</label>
		<br>
		<input type="text" id="portfolio_lightbox_iframe_src" name="portfolio_lightbox_iframe_src" class="widefat" style="width: 50%;">
		<br>
		<br>
	</div>
	<!-- end portfolio_lightbox_iframe -->
	
	
	<!-- portfolio_tags -->
	<div class="portfolio_tags" style="display: none;">
		<label for="portfolio_tags_titles">Titles</label>
		<br>
		<input type="text" id="portfolio_tags_titles" name="portfolio_tags_titles" class="widefat" style="width: 50%;">
		<br>
		<br>
	</div>
	<!-- end portfolio_tags -->
	
	
	<!-- intro -->
	<div class="intro" style="display: none;">
		<label for="intro_content">Content</label>
		<br>
		<textarea id="intro_content" name="intro_content" rows="4" cols="50" class="widefat" style="width: 50%;"></textarea>
		<br>
		<br>
	</div>
	<!-- end intro -->
	
	
	<!-- rotate_words -->
	<div class="rotate_words" style="display: none;">
		<label for="rotate_words_titles">Titles</label>
		<br>
		<input type="text" id="rotate_words_titles" name="rotate_words_titles" class="widefat" style="width: 50%;">
		<br>
		<br>
	</div>
	<!-- end rotate_words -->
	
	
	<!-- launch_button_wrap -->
	<div class="launch_button_wrap" style="display: none;">
		<label for="launch_button_wrap_content">Content</label>
		<br>
		<textarea id="launch_button_wrap_content" name="launch_button_wrap_content" rows="4" cols="50" class="widefat" style="width: 50%;"></textarea>
		<br>
		<br>
	</div>
	<!-- end launch_button_wrap -->
	
	
	<!-- end shortcodes fields ====================================== -->
	
	
	<button type="button" class="button button-primary button-large btn-sh-insert">Insert Shortcode</button>
	
</form>
<!-- end .sh-wrap -->


<script>

	jQuery(document).ready(function($)
	{
		var sh_selected = 'row';
		
		$( '.sh-list' ).change( function()
		{
			$( '.sh-wrap div' ).hide();
			
			sh_selected = $( '.sh-list' ).val();
			
			$( '.' + sh_selected ).show();
		});
		
		
		// insert button
		$( '.btn-sh-insert' ).click( function()
		{
			// sh_out
			var sh_out = "";
			
			if ( sh_selected == 'divider' )
			{
				sh_out = '[divider]';
			}
			else if ( sh_selected == 'link_wrap' )
			{
				sh_out = '[link_wrap]Link here.[/link_wrap]';
			}
			else if ( sh_selected == 'aside' )
			{
				sh_out = '[aside]Text here.[/aside]';
			}
			else if ( sh_selected == 'portfolio_field' )
			{
				sh_out = '[portfolio_field]Stuff here.[/portfolio_field]';
			}
			else if ( sh_selected == 'code_line' )
			{
				sh_out = '[code_line]One code line here.[/code_line]';
			}
			else if ( sh_selected == 'code_block' )
			{
				sh_out = '[code_block]Code lines here.[/code_block]';
			}
			else if ( sh_selected == 'code_block_prettify' )
			{
				sh_out = '[code_block_prettify]Code lines here.[/code_block_prettify]';
			}
			else if ( sh_selected == 'code_block_line_numbers' )
			{
				sh_out = '[code_block_line_numbers]Code lines here.[/code_block_line_numbers]';
			}
			else if ( sh_selected == 'drop_cap' )
			{
				sh_out = '[drop_cap]Text here.[/drop_cap]';
			}
			else if ( sh_selected == 'tagline' )
			{
				sh_out = '[tagline](Heading 3)[/tagline]';
			}
			else if ( sh_selected == 'project_action' )
			{
				sh_out = '[project_action]Stuff here.[/project_action]';
			}
			else if ( sh_selected == 'call_to_action' )
			{
				sh_out = '[call_to_action]Stuff here.[/call_to_action]';
			}
			else if ( sh_selected == 'cta_button_wrap' )
			{
				sh_out = '[cta_button_wrap]Stuff here.[/cta_button_wrap]';
			}
			else if ( sh_selected == 'image' )
			{
				var image_src = $( '#image_src' ).val();
				
				sh_out = '[image src="' + image_src + '"]';
			}
			else if ( sh_selected == 'icon_list' )
			{
				sh_out = '[icon_list]Stuff here.[/icon_list]';
			}
			else if ( sh_selected == 'list_item' )
			{
				var list_item_icon = $( '#list_item_icon' ).val();
				var list_item_text = $( '#list_item_text' ).val();
				
				sh_out = '[list_item icon="' + list_item_icon + '" text="' + list_item_text + '"]';
			}
			else if ( sh_selected == 'contact_form' )
			{
				var contact_form_to = $( '#contact_form_to' ).val();
				var contact_form_subject = $( '#contact_form_subject' ).val();
				var contact_form_captcha = $( '#contact_form_captcha' ).val();
				
				sh_out = '[contact_form captcha="' + contact_form_captcha + '" to="' + contact_form_to + '" subject="' + contact_form_subject + '"]';
			}
			else if ( sh_selected == 'section_title' )
			{
				var section_title_icon = $( '#section_title_icon' ).val();
				var section_title_text = $( '#section_title_text' ).val();
				
				sh_out = '[section_title icon="' + section_title_icon + '" text="' + section_title_text + '"]';
			}
			else if ( sh_selected == 'latest_tweets' )
			{
				var latest_tweets_count = $( '#latest_tweets_count' ).val();
				var latest_tweets_include_retweets = $( '#latest_tweets_include_retweets' ).val();
				var latest_tweets_id = $( '#latest_tweets_id' ).val();
				
				sh_out = '[latest_tweets count="' + latest_tweets_count + '" id="' + latest_tweets_id + '" include_retweets="' + latest_tweets_include_retweets + '"]';
			}
			else if ( sh_selected == 'process' )
			{
				var process_icon = $( '#process_icon' ).val();
				var process_text = $( '#process_text' ).val();
				
				sh_out = '[process icon="' + process_icon + '" text="' + process_text + '"]';
			}
			else if ( sh_selected == 'fun_fact' )
			{
				var fun_fact_icon = $( '#fun_fact_icon' ).val();
				var fun_fact_text = $( '#fun_fact_text' ).val();
				
				sh_out = '[fun_fact icon="' + fun_fact_icon + '" text="' + fun_fact_text + '"]';
			}
			else if ( sh_selected == 'client' )
			{
				var client_image = $( '#client_image' ).val();
				var client_url = $( '#client_url' ).val();
				
				sh_out = '[client image="' + client_image + '" url="' + client_url + '"]';
			}
			else if ( sh_selected == 'icon' )
			{
				var icon_name = $( '#icon_name' ).val();
				var icon_size = $( '#icon_size' ).val();
				
				sh_out = '[icon name="' + icon_name + '" size="' + icon_size + '"]';
			}
			else if ( sh_selected == 'map' )
			{
				var map_latitude = $( '#map_latitude' ).val();
				var map_longitude = $( '#map_longitude' ).val();
				var map_zoom = $( '#map_zoom' ).val();
				
				sh_out = '[map latitude="' + map_latitude + '" longitude="' + map_longitude + '" zoom="' + map_zoom + '"]';
			}
			else if ( sh_selected == 'letter' )
			{
				var letter_title = $( '#letter_title' ).val();
				var letter_email = $( '#letter_email' ).val();
				var letter_telephone = $( '#letter_telephone' ).val();
				var letter_address = $( '#letter_address' ).val();
				var letter_image_url = $( '#letter_image_url' ).val();
				
				sh_out = '[letter title="' + letter_title + '" email="' + letter_email + '" telephone="' + letter_telephone + '" address="' + letter_address + '" image_url="' + letter_image_url + '"]';
			}
			else if ( sh_selected == 'slide' )
			{
				var slide_first_slide = $( '#slide_first_slide' ).val();
				var slide_last_slide = $( '#slide_last_slide' ).val();
				var slide_autoplay = $( '#slide_autoplay' ).val();
				var slide_title = $( '#slide_title' ).val();
				var slide_src = $( '#slide_src' ).val();
				
				sh_out = '[slide first_slide="' + slide_first_slide + '" last_slide="' + slide_last_slide + '" autoplay="' + slide_autoplay + '" title="' + slide_title + '" src="' + slide_src + '"]';
			}
			else if ( sh_selected == 'progress_bar' )
			{
				var progress_bar_first_bar = $( '#progress_bar_first_bar' ).val();
				var progress_bar_last_bar = $( '#progress_bar_last_bar' ).val();
				var progress_bar_text = $( '#progress_bar_text' ).val();
				var progress_bar_percent = $( '#progress_bar_percent' ).val();
				
				sh_out = '[progress_bar first_bar="' + progress_bar_first_bar + '" last_bar="' + progress_bar_last_bar + '" text="' + progress_bar_text + '" percent="' + progress_bar_percent + '"]';
			}
			else if ( sh_selected == 'social_icon' )
			{
				var social_icon_first_icon = $( '#social_icon_first_icon' ).val();
				var social_icon_last_icon = $( '#social_icon_last_icon' ).val();
				var social_icon_type = $( '#social_icon_type' ).val();
				var social_icon_url = $( '#social_icon_url' ).val();
				
				sh_out = '[social_icon first_icon="' + social_icon_first_icon + '" last_icon="' + social_icon_last_icon + '" type="' + social_icon_type + '" url="' + social_icon_url + '"]';
			}
			else if ( sh_selected == 'my_button' )
			{
				var button_text = $( '#button_text' ).val();
				var button_new_tab = $( '#button_new_tab' ).val();
				var button_size = $( '#button_size' ).val();
				var button_icon = $( '#button_icon' ).val();
				var button_color = $( '#button_color' ).val();
				var button_colored = $( '#button_colored' ).val();
				var button_url = $( '#button_url' ).val();
				
				sh_out = '[button text="' + button_text + '" new_tab="' + button_new_tab + '" size="' + button_size + '" icon="' + button_icon + '" color="' + button_color + '" colored="' + button_colored + '" url="' + button_url + '"]';
			}
			else if ( sh_selected == 'quote' )
			{
				var quote_name = $( '#quote_name' ).val();
				var quote_text = $( '#quote_text' ).val();
				
				sh_out = '[quote name="' + quote_name + '"]' + quote_text + '[/quote]';
			}
			else if ( sh_selected == 'service' )
			{
				var service_color = $( '#service_color' ).val();
				var service_icon = $( '#service_icon' ).val();
				var service_content = $( '#service_content' ).val();
				
				sh_out = '[service color="' + service_color + '" icon="' + service_icon + '"]' + service_content + '[/service]';
			}
			else if ( sh_selected == 'alert' )
			{
				var alert_type = $( '#alert_type' ).val();
				var alert_title = $( '#alert_title' ).val();
				var alert_content = $( '#alert_content' ).val();
				
				sh_out = '[alert type="' + alert_type + '" title="' + alert_title + '"]' + alert_content + '[/alert]';
			}
			else if ( sh_selected == 'tabs_wrap' )
			{
				var tabs_wrap_titles = $( '#tabs_wrap_titles' ).val();
				var tabs_wrap_active = $( '#tabs_wrap_active' ).val();
				var tabs_wrap_content = $( '#tabs_wrap_content' ).val();
				
				sh_out = '[tabs_wrap titles="' + tabs_wrap_titles + '" active="' + tabs_wrap_active + '"]' + tabs_wrap_content + '[/tabs_wrap]';
			}
			else if ( sh_selected == 'tab_pane' )
			{
				var tab_pane_content = $( '#tab_pane_content' ).val();
				
				sh_out = '[tab_pane]' + tab_pane_content + '[/tab_pane]';
			}
			else if ( sh_selected == 'toggle' )
			{
				var toggle_first_toggle = $( '#toggle_first_toggle' ).val();
				var toggle_last_toggle = $( '#toggle_last_toggle' ).val();
				var toggle_active = $( '#toggle_active' ).val();
				var toggle_title = $( '#toggle_title' ).val();
				var toggle_content = $( '#toggle_content' ).val();
				
				sh_out = '[toggle first_toggle="' + toggle_first_toggle + '" last_toggle="' + toggle_last_toggle + '" active="' + toggle_active + '" title="' + toggle_title + '"]' + toggle_content + '[/toggle]';
			}
			else if ( sh_selected == 'accordion' )
			{
				var accordion_first_accordion = $( '#accordion_first_accordion' ).val();
				var accordion_last_accordion = $( '#accordion_last_accordion' ).val();
				var accordion_active = $( '#accordion_active' ).val();
				var accordion_title = $( '#accordion_title' ).val();
				var accordion_content = $( '#accordion_content' ).val();
				
				sh_out = '[accordion first_accordion="' + accordion_first_accordion + '" last_accordion="' + accordion_last_accordion + '" active="' + accordion_active + '" title="' + accordion_title + '"]' + accordion_content + '[/accordion]';
			}
			else if ( sh_selected == 'row' )
			{
				var row_content = $( '#row_content' ).val();
				
				sh_out = '[row]' + row_content + '[/row]';
			}
			else if ( sh_selected == 'column' )
			{
				var column_width = $( '#column_width' ).val();
				var column_width_xs = $( '#column_width_xs' ).val();
				var column_width_md = $( '#column_width_md' ).val();
				var column_width_lg = $( '#column_width_lg' ).val();
				var column_content = $( '#column_content' ).val();
				
				sh_out = '[column width="' + column_width + '" width_xs="' + column_width_xs + '" width_md="' + column_width_md + '" width_lg="' + column_width_lg + '"]' + column_content + '[/column]';
			}
			else if ( sh_selected == 'media_wrap' )
			{
				var media_wrap_content = $( '#media_wrap_content' ).val();
				
				sh_out = '[media_wrap]' + media_wrap_content + '[/media_wrap]';
			}
			else if ( sh_selected == 'video' )
			{
				var video_src = $( '#video_src' ).val();
				var video_poster = $( '#video_poster' ).val();
				
				sh_out = '[video src="' + video_src + '" poster="' + video_poster + '"]';
			}
			else if ( sh_selected == 'audio' )
			{
				var audio_src = $( '#audio_src' ).val();
				
				sh_out = '[audio src="' + audio_src + '"]';
			}
			else if ( sh_selected == 'testimonial' )
			{
				var testimonial_first = $( '#testimonial_first' ).val();
				var testimonial_last = $( '#testimonial_last' ).val();
				var testimonial_name = $( '#testimonial_name' ).val();
				var testimonial_job = $( '#testimonial_job' ).val();
				var testimonial_image = $( '#testimonial_image' ).val();
				var testimonial_content = $( '#testimonial_content' ).val();
				
				sh_out = '[testimonial first="' + testimonial_first + '" last="' + testimonial_last + '" name="' + testimonial_name + '" job="' + testimonial_job + '" image="' + testimonial_image + '"]' + testimonial_content + '[/testimonial]';
			}
			else if ( sh_selected == 'timeline' )
			{
				var timeline_title = $( '#timeline_title' ).val();
				var timeline_icon = $( '#timeline_icon' ).val();
				var timeline_content = $( '#timeline_content' ).val();
				
				sh_out = '[timeline title="' + timeline_title + '" icon="' + timeline_icon + '"]' + timeline_content + '[/timeline]';
			}
			else if ( sh_selected == 'event' )
			{
				var event_date = $( '#event_date' ).val();
				var event_current = $( '#event_current' ).val();
				var event_content = $( '#event_content' ).val();
				
				sh_out = '[event date="' + event_date + '" current="' + event_current + '"]' + event_content + '[/event]';
			}
			else if ( sh_selected == 'inline_lightbox_wrap' )
			{
				var inline_lightbox_wrap_type = $( '#inline_lightbox_wrap_type' ).val();
				var inline_lightbox_wrap_thumbnail = $( '#inline_lightbox_wrap_thumbnail' ).val();
				var inline_lightbox_wrap_content = $( '#inline_lightbox_wrap_content' ).val();
				
				sh_out = '[inline_lightbox_wrap type="' + inline_lightbox_wrap_type + '" thumbnail="' + inline_lightbox_wrap_thumbnail + '"]' + inline_lightbox_wrap_content + '[/inline_lightbox_wrap]';
			}
			else if ( sh_selected == 'inline_lightbox_image' )
			{
				var inline_lightbox_image_first_item = $( '#inline_lightbox_image_first_item' ).val();
				var inline_lightbox_image_gallery = $( '#inline_lightbox_image_gallery' ).val();
				var inline_lightbox_image_title = $( '#inline_lightbox_image_title' ).val();
				var inline_lightbox_image_url = $( '#inline_lightbox_image_url' ).val();
				
				sh_out = '[inline_lightbox_image first_item="' + inline_lightbox_image_first_item + '" gallery="' + inline_lightbox_image_gallery + '" title="' + inline_lightbox_image_title + '" url="' + inline_lightbox_image_url + '"]';
			}
			else if ( sh_selected == 'inline_lightbox_iframe' )
			{
				var inline_lightbox_iframe_first_item = $( '#inline_lightbox_iframe_first_item' ).val();
				var inline_lightbox_iframe_gallery = $( '#inline_lightbox_iframe_gallery' ).val();
				var inline_lightbox_iframe_title = $( '#inline_lightbox_iframe_title' ).val();
				var inline_lightbox_iframe_src = $( '#inline_lightbox_iframe_src' ).val();
				
				sh_out = '[inline_lightbox_iframe first_item="' + inline_lightbox_iframe_first_item + '" gallery="' + inline_lightbox_iframe_gallery + '" title="' + inline_lightbox_iframe_title + '" src="' + inline_lightbox_iframe_src + '"]';
			}
			else if ( sh_selected == 'portfolio_lightbox_image' )
			{
				var portfolio_lightbox_image_first_item = $( '#portfolio_lightbox_image_first_item' ).val();
				var portfolio_lightbox_image_title = $( '#portfolio_lightbox_image_title' ).val();
				var portfolio_lightbox_image_url = $( '#portfolio_lightbox_image_url' ).val();
				
				sh_out = '[portfolio_lightbox_image first_item="' + portfolio_lightbox_image_first_item + '" title="' + portfolio_lightbox_image_title + '" url="' + portfolio_lightbox_image_url + '"]';
			}
			else if ( sh_selected == 'portfolio_lightbox_iframe' )
			{
				var portfolio_lightbox_iframe_first_item = $( '#portfolio_lightbox_iframe_first_item' ).val();
				var portfolio_lightbox_iframe_title = $( '#portfolio_lightbox_iframe_title' ).val();
				var portfolio_lightbox_iframe_src = $( '#portfolio_lightbox_iframe_src' ).val();
				
				sh_out = '[portfolio_lightbox_iframe first_item="' + portfolio_lightbox_iframe_first_item + '" title="' + portfolio_lightbox_iframe_title + '" src="' + portfolio_lightbox_iframe_src + '"]';
			}
			else if ( sh_selected == 'portfolio_tags' )
			{
				var portfolio_tags_titles = $( '#portfolio_tags_titles' ).val();
				
				sh_out = '[portfolio_tags titles="' + portfolio_tags_titles + '"]';
			}
			else if ( sh_selected == 'intro' )
			{
				var intro_content = $( '#intro_content' ).val();
				
				sh_out = '[intro]' + intro_content + '[/intro]';
			}
			else if ( sh_selected == 'rotate_words' )
			{
				var rotate_words_titles = $( '#rotate_words_titles' ).val();
				
				sh_out = '[rotate_words titles="' + rotate_words_titles + '"]';
			}
			else if ( sh_selected == 'launch_button_wrap' )
			{
				var launch_button_wrap_content = $( '#launch_button_wrap_content' ).val();
				
				sh_out = '[launch_button_wrap]' + launch_button_wrap_content + '[/launch_button_wrap]';
			}
			// end sh_out
			
			
			// add to editor
			if ( window.tinyMCE )
			{
				var tmce_ver = window.tinyMCE.majorVersion;
				
				if ( tmce_ver < "4" )
				{
					window.tinyMCE.execInstanceCommand( 'content', 'mceInsertContent', false, sh_out );
				}
				else
				{
					parent.tinyMCE.execCommand( 'mceInsertContent', false, sh_out );
				}
				// end if
				
				tb_remove();
			}
			// end add to editor
		
		});
		// end insert button
	
	});

</script>