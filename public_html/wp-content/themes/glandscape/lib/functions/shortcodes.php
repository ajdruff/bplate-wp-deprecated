<?php

/**********************************
 RAW FORMATTER
**********************************/

function gblu_formatter($content) {
	$new_content = '';
	$pattern_full = '{(\[raw\].*?\[/raw\])}is';
	$pattern_contents = '{\[raw\](.*?)\[/raw\]}is';
	$pieces = preg_split($pattern_full, $content, -1, PREG_SPLIT_DELIM_CAPTURE);

	foreach ($pieces as $piece) {
		if (preg_match($pattern_contents, $piece, $matches)) {
			$new_content .= $matches[1];
		} else {
			$new_content .= wptexturize(wpautop($piece));
		}
	}

	return $new_content;
}


remove_filter('the_content', 'wpautop');
remove_filter('the_content', 'wptexturize');

add_filter('the_content', 'gblu_formatter', 99);
add_filter('widget_text', 'gblu_formatter', 99);


/**********************************
 LIGHTBOX
**********************************/
function gblu_lightbox( $atts, $content = null ) {
	extract(shortcode_atts(array(
			'title' => '',
			'href' => ''
    ), $atts));

	
		return '[raw]<div class="image-wrap portfolio"><a href="'.$href.'" rel="prettyPhoto" title="'.$title.'"><span class="zoom"></span>'.$content.'</a></div>[/raw]';
}
add_shortcode('lightbox', 'gblu_lightbox');



/**********************************
 SLIDESHOW
**********************************/
function gblu_slideshow( $atts, $content = null ) {
	extract(shortcode_atts(array(
			'type' 		=> 'cycle',
			'category' 	=> '',
			'size'		=> ''
    ), $atts));

	if($type=='cycle'){
	return gblu_cycle_slider($category,$size);
	}
	elseif($type=='accordion'){
		return gblu_accordion_slider($category);
	}
	
	elseif($type=='nivo'){
		return gblu_nivo_slider($category,$size);
	}
}
add_shortcode('slideshow', 'gblu_slideshow');

/**********************************
 BUTTONS
**********************************/
function gblu_button( $atts, $content = null ) {
	extract(shortcode_atts(array(
			'url' => '#',
			'size' => ''
    ), $atts));

	return '[raw]<p class="button_wrap"><a href="'.$url.'" class="button'.$size.'">'.$content.'</a></p>[/raw]';
}
add_shortcode('button', 'gblu_button');

function gblu_button_light( $atts, $content = null ) {
	extract(shortcode_atts(array(
			'url' => '#',
			'size' => ''
    ), $atts));

	return '[raw]<p class="button_wrap"><a href="'.$url.'" class="button'.$size.' lightbtn">'.$content.'</a></p>[/raw]';
}
add_shortcode('button_light', 'gblu_button_light');

function gblu_button_dark( $atts, $content = null ) {
	extract(shortcode_atts(array(
			'url' => '#',
			'size' => ''
    ), $atts));

	return '[raw]<p class="button_wrap"><a href="'.$url.'" class="button'.$size.' darkbtn">'.$content.'</a></p>[/raw]';
}
add_shortcode('button_dark', 'gblu_button_dark');


function gblu_link( $atts, $content = null ) {
	extract(shortcode_atts(array(
			'url' => '#',
			'style' => ''
    ), $atts));

	return '<p><a href="'.$url.'" class="'.$style.'">'.$content.'</a></p>';
}
add_shortcode('link', 'gblu_link');



/**********************************
 QUOTE
**********************************/
function gblu_quote( $atts, $content = null ) {
	extract(shortcode_atts(array(
    ), $atts));

	return '<div class="quote_wrap"><div class="quote">'.do_shortcode($content).'</div></div>';
}
add_shortcode('quote', 'gblu_quote');

/**********************************
 RELATED POSTS
**********************************/
function gblu_relatedposts_shortcode( $atts, $content = null ) {
	extract(shortcode_atts(array(
				'max_posts' => '2'
    ), $atts));

	return gblu_related_posts($max_posts);
}
add_shortcode('relatedposts', 'gblu_relatedposts_shortcode');

/**********************************
 TAB PANEL
**********************************/
function gblu_tabmenu( $atts, $content = null ) {
	extract(shortcode_atts(array(
			
			
    ), $atts));
	
	if($style== 'simple'){$ulId = 'simpletabnav';}
	else{$ulId = 'tabnav';}

	tabmenuoutput;
	$tabmenuoutput .= '<ul id="tabnav">';
	$i = 1;
	foreach ($atts as $tab) {
		$tabmenuoutput .= '<li><a href="#tab'.$i.'">' .$tab. '</a></li>';
		$i++;
	}
	$tabmenuoutput .= '</ul>';	
	return $tabmenuoutput;
}
add_shortcode('tabpanel', 'gblu_tabmenu');


function gblu_tabmenu_simple( $atts, $content = null ) {
	extract(shortcode_atts(array(
			
    ), $atts));
	
	tabmenuoutput;
	$tabmenuoutput .= '<ul id="simpletabnav">';
	$i = 1;
	foreach ($atts as $tab) {
		$tabmenuoutput .= '<li><a href="#tab'.$i.'">' .$tab. '</a></li>';
		$i++;
	}
	$tabmenuoutput .= '</ul>';	
	return $tabmenuoutput;
}
add_shortcode('tabpanel_simple', 'gblu_tabmenu_simple');

function gblu_tabmenu_minimal( $atts, $content = null ) {
	extract(shortcode_atts(array(
			
    ), $atts));
	
	tabmenuoutput;
	$tabmenuoutput .= '<ul id="minimaltabnav">';
	$i = 1;
	foreach ($atts as $tab) {
		$tabmenuoutput .= '<li><a href="#tab'.$i.'">' .$tab. '</a></li>';
		$i++;
	}
	$tabmenuoutput .= '</ul>';	
	return $tabmenuoutput;
}
add_shortcode('tabpanel_minimal', 'gblu_tabmenu_minimal');

/**********************************
 TAB
**********************************/
function gblu_tab( $atts, $content = null ) {
	extract(shortcode_atts(array(
			'id' => '',
			'size' => ''
			
    ), $atts));
	
	
	
	$taboutput;
	$taboutput .= '<div class="tabcontent'.$size.'" id="tab'.$id.'">';
	$taboutput .= do_shortcode($content);
	$taboutput .= '</div>';
	return $taboutput;	
}
add_shortcode('tab', 'gblu_tab');



/**********************************
 TOGGLE
**********************************/
function gblu_toggle( $atts, $content = null ) {
	extract(shortcode_atts(array(
		 'title' => '',
		 'style' => 'list'
    ), $atts));

	output;
	$output .= '<div class="'.$style.'"><p class="trigger"><a href="#">' .$title. '</a></p>';
	$output .= '<div class="toggle_container"><div class="block">';
	$output .= do_shortcode($content);
	$output .= '</div></div></div>';

	return $output;
	}
add_shortcode('toggle', 'gblu_toggle');

/**********************************
 FAQ
**********************************/
function faq ($atts, $content = null) {
		extract(shortcode_atts(array(
				
				), $atts));
				
				return gblu_faq('return');
}

add_shortcode("faq", "faq");

/**********************************
 EVENTS
**********************************/
function events ($atts, $content = null) {
		extract(shortcode_atts(array(
				
				), $atts));
				
				return gblu_event_list('return');
}

add_shortcode("events", "events");

/**********************************
 TESTIMONIALS
**********************************/
function testimonials ($atts, $content = null) {
		extract(shortcode_atts(array(
				 'per_page' => '4',
				), $atts));
				
				return gblu_testimonial_list($per_page,'return');
}

add_shortcode("testimonials", "testimonials");

/**********************************
 GALLERY
**********************************/
function gallery ($atts, $content = null) {
		extract(shortcode_atts(array(
				'columns' => '3',
				'per_page' => '6',
				'id' => 'none',				
				), $atts));
				
				return '[RAW]'.gblu_insert_gallery($columns,$per_page,$id).'[/RAW]';
}

add_shortcode("gall", "gallery");

/**********************************
 GALLERY SLIDESHOW
**********************************/
function galleryslideshow ($atts, $content = null) {
		extract(shortcode_atts(array(
				'id' => 'none',
				), $atts));

				return '[raw]'.gblu_insert_gallery_slider($id).'[/raw]';
}
add_shortcode("gallslider", "galleryslideshow");

/**********************************
 PORTFOLIO
**********************************/
function portfolio ($atts, $content = null) {
		extract(shortcode_atts(array(
				'category' => '',							  
				'columns' => '3',
				'per_page' => '6',						
				), $atts));
				
				return '[raw]'.gblu_portfolio($columns, $category, $per_page).'[/raw]';
}
add_shortcode("portfolio", "portfolio");

/**********************************
 PORTFOLIO
**********************************/
function portfolio2 ($atts, $content = null) {
		extract(shortcode_atts(array(
				'category' => '',							  
				'columns' => '3',
				'per_page' => '6',						
				), $atts));
				
				return '[raw]'.gblu_portfolio_test($columns, $category,$per_page).'[/raw]';
}
add_shortcode("portfolio2", "portfolio2");




/**********************************
 VIDEO (NEW!)
**********************************/
function gblu_addvideo($atts, $content = null) {
		
		return gblu_video(
				shortcode_atts(array(
				'type' 	=> '',
				'id' 		=> '',
				'size' 	=> 'medium',
				'width'	=> '',
				'height' => '',
				'source' => 'shortcode'
				
				), $atts));
}
            
add_shortcode("video_new", "gblu_addvideo");
add_shortcode("video", "gblu_addvideo");


/**********************************
 CONTACTFORM
**********************************/
function addcontactform($atts, $content = null) {
		extract(shortcode_atts(array(
				'recipient' => '',
				), $atts));
	
		return gblu_contact_form($recipent);
}
add_shortcode("contactform", "addcontactform");

/**********************************
 FEEDBACKFORM
**********************************/
function addfeedbackform($atts, $content = null) {
		extract(shortcode_atts(array(
				'recipient' => '',
				), $atts));
	
		return gblu_feedback_form($recipent);
}
add_shortcode("feedbackform", "addfeedbackform");

/**********************************
 IMAGE
**********************************/
function addimage($atts, $content = null) {
				extract(shortcode_atts(array(
				'url' => '',
				), $atts));
                return '<img src="'.$url.'"/>';
}
add_shortcode("image", "addimage");

/**********************************
 Centered text blocks
**********************************/
function gblu_h2center($atts, $content = null) {
				extract(shortcode_atts(array(
				
				), $atts));
                return '<h2 style="text-align:center">'.do_shortcode($content).'</h2>';
}
add_shortcode("h2center", "gblu_h2center");


function gblu_h3center($atts, $content = null) {
				extract(shortcode_atts(array(
				
				), $atts));
                return '<h3 style="text-align:center">'.do_shortcode($content).'</h3>';
}
add_shortcode("h3center", "gblu_h3center");



/**********************************
 PULLQUOTE
**********************************/
function pullquote( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'float' => '$align',
    ), $atts));
   return '<blockquote class="pullquote"><p>'.$content.'</p></blockquote>';
}
add_shortcode('pull', 'pullquote');

/**********************************
 PUSHQUOTE
**********************************/
function pushquote( $atts, $content = null ) {
    extract(shortcode_atts(array(
        'float' => '$align',
    ), $atts));
   return '<blockquote class="pushquote"><p>'.$content.'</p></blockquote>';
}
add_shortcode('push', 'pushquote');


/**********************************
 COLUMNS
**********************************/

// 1-3 col variations
function gblu_one_third( $atts, $content = null ) {
   return '<div class="one-third">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_third', 'gblu_one_third');

function gblu_one_third_last( $atts, $content = null ) {
   return '<div class="one-third last">' . do_shortcode($content) . '</div><br class="break"/>';
}
add_shortcode('one_third_last', 'gblu_one_third_last');

function gblu_two_third( $atts, $content = null ) {
   return '<div class="two-third">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_third', 'gblu_two_third');

function gblu_two_third_last( $atts, $content = null ) {
   return '<div class="two-third last">' . do_shortcode($content) . '</div><br class="break"/>';
}
add_shortcode('two_third_last', 'gblu_two_third_last');

// 1-4 col variations

function gblu_one_half( $atts, $content = null ) {
   return '<div class="one-half">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_half', 'gblu_one_half');


function gblu_one_half_last( $atts, $content = null ) {
   return '<div class="one-half last">' . do_shortcode($content) . '</div><br class="break"/>';
}
add_shortcode('one_half_last', 'gblu_one_half_last');


function gblu_one_fourth( $atts, $content = null ) {
   return '<div class="one-fourth">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fourth', 'gblu_one_fourth');


function gblu_one_fourth_last( $atts, $content = null ) {
   return '<div class="one-fourth last">' . do_shortcode($content) . '</div><br class="break"/>';
}
add_shortcode('one_fourth_last', 'gblu_one_fourth_last');

function gblu_three_fourth( $atts, $content = null ) {
   return '<div class="three-fourth">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_fourth', 'gblu_three_fourth');


function gblu_three_fourth_last( $atts, $content = null ) {
   return '<div class="three-fourth last">' . do_shortcode($content) . '</div><br class="break"/>';
}
add_shortcode('three_fourth_last', 'gblu_three_fourth_last');

// 1-5 col variations

function gblu_one_fifth( $atts, $content = null ) {
   return '<div class="one-fifth">' . do_shortcode($content) . '</div>';
}
add_shortcode('one_fifth', 'gblu_one_fifth');


function gblu_one_fifth_last( $atts, $content = null ) {
   return '<div class="one-fifth last">' . do_shortcode($content) . '</div><br class="break"/>';
}
add_shortcode('one_fifth_last', 'gblu_one_fifth_last');

function gblu_two_fifth( $atts, $content = null ) {
   return '<div class="two-fifth">' . do_shortcode($content) . '</div>';
}
add_shortcode('two_fifth', 'gblu_two_fifth');

function gblu_two_fifth_last( $atts, $content = null ) {
   return '<div class="two-fifth last">' . do_shortcode($content) . '</div><br class="break"/>';
}
add_shortcode('two_fifth_last', 'gblu_two_fifth_last');

function gblu_three_fifth( $atts, $content = null ) {
   return '<div class="three-fifth">' . do_shortcode($content) . '</div>';
}
add_shortcode('three_fifth', 'gblu_three_fifth');

function gblu_three_fifth_last( $atts, $content = null ) {
   return '<div class="three-fifth last">' . do_shortcode($content) . '</div><br class="break"/>';
}
add_shortcode('three_fifth_last', 'gblu_three_fifth_last');


/**********************************
 NEWS LIST
**********************************/
function gblu_news_listShortcode ($atts, $content = null) {
		extract(shortcode_atts(array(
				'per_page' => '',							  
				), $atts));
		return gblu_news_list($per_page, 'return');
}
add_shortcode("newslist", "gblu_news_listShortcode");

/**********************************
 NEWS ARCHIVE
**********************************/
function gblu_news_archiveShortcode ($atts, $content = null) {
		extract(shortcode_atts(array(
				'per_page' => '',							  
				), $atts));
				return gblu_news_archive($per_page, 'return');
}
add_shortcode("newsarchive", "gblu_news_archiveShortcode");




/**********************************
 LINE BREAKs
**********************************/
function gblu_break($atts, $content = null) {
		extract(shortcode_atts(array(
										  
				), $atts));
				return '[raw]<br class="break"/>[/raw]';
}
add_shortcode("break", "gblu_break");


function gblu_break_shadowline($atts, $content = null) {
		extract(shortcode_atts(array(
										  
				), $atts));
				return '[raw]<p class="shadowline_break"></p>[/raw]';
}
add_shortcode("line", "gblu_break_shadowline");

/**********************************
INSERT AUTOR INFO-BOX
**********************************/

function gblu_author_infobox($atts, $content = null) {
		extract(shortcode_atts(array(
										  
				), $atts));
				return gblu_author_box();
}
add_shortcode("authorbox", "gblu_author_infobox");

/**********************************
BOXED TITLE
**********************************/

function gblu_boxed_title($atts, $content = null) {
		extract(shortcode_atts(array(
										  
				), $atts));
				return '[raw]<h6><span>'.$content.'</span></h6>[/raw]';
}
add_shortcode("boxedtitle", "gblu_boxed_title");



?>