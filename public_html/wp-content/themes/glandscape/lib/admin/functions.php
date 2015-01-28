<?php

$myterms = get_terms('gbluportfoliocats');
$gblu_getTerms = array();
foreach ($myterms as $term_list) {
	$gblu_getTerms [$term_list->term_id] = $term_list->name;
	
	}

$categories = get_categories(array('hide_empty'=>false));
$gblu_getcat = array();
foreach ($categories as $category_list ) {
       $gblu_getcat[$category_list->cat_ID] = $category_list->cat_name;
}

$pages = get_pages();
$gblu_getpages = array();
foreach ($pages as $page_list ) {
       $gblu_getpages[$page_list ->ID] = $page_list ->post_title;
}

$pages_top_level = get_pages('sort_column=menu_order&depth=0');
$gblu_gettoplevelpages = array();
foreach ($pages_top_level as $page_list ) {
	if ($page_list->post_parent == "0") {
       $gblu_gettoplevelpages[$page_list ->ID] = $page_list ->post_title;
	}
}


$styles = array();
if(is_dir(TEMPLATEPATH . "/styles/")) {
	if($open_dirs = opendir(TEMPLATEPATH . "/styles/")) {
		while(($style = readdir($open_dirs)) !== false) {
			if(stristr($style, ".css") !== false) {
				$styles[] = $style;
			}
		}
	}
}
$style_dropdown = array_unshift($styles, "Choose a colour scheme:");
?>