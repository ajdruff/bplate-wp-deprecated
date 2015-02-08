<?php get_header();

// SLIDESHOW

$slideTerm = get_option('gblu_home_slideshow_category');

if(get_option('gblu_home_slideshow_type') == 'cycle'){
	echo gblu_cycle_slider($slideTerm,'fullwidth');
}
?>
<div class="homediv">
<?php
// HOME PAGE ARTICLES

if(get_option('gblu_display_home_article_1')==true || get_option('gblu_display_home_article_1')==true){
	echo '<div class="module no-padding" id="gblu_home_article">';
}
	
if(get_option('gblu_display_home_article_1') == true  && get_option('gblu_home_article_1')!= false){
gblu_home_article();
}

if(get_option('gblu_display_home_article_2') == true && get_option('gblu_home_article_2')!= false){
gblu_home_article2();
}

if(get_option('gblu_display_home_article_1') == true || get_option('gblu_display_home_article_2')==true){
	echo '</div>';
}

// HOME PAGE BLOG POSTS

if (get_option('gblu_home_blog')== true):

echo '<div class="module no-border" id="home_blog">';

if(get_option('gblu_home_blog_header')!=""){
	
	echo '<h3 class="diagonal"><span>'.get_option('gblu_home_blog_header').'</span></h3>';
}
		$pager = get_option('gblu_home_blog_pager');

					if(get_option('gblu_home_blog_layout')=='fullwidth'){
					echo gblu_blog('fullwidth',false, $pager );
					}
							
					if(get_option('gblu_home_blog_layout')=='normal'){
					echo '<div id="content-default">';
					echo gblu_blog('',false, $pager);
					echo '</div>';
					get_sidebar();
					}
echo '</div>';
endif;
?>

</div> <!-- /HOME DIV -->
<?php


if (function_exists('dynamic_sidebar') && dynamic_sidebar('Home Page Widget 4')){};

get_footer();?>
