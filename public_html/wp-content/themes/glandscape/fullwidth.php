<?php 
/*
Template Name: Full width page
*/

get_header();
?>

<div class="homediv">
<?php

if (have_posts()) : while (have_posts()) : the_post();

echo '<div class="blog_post_full">';

		
			if (get_post_meta($post->ID,'gblu_imageoptions',true)== 'gblu_top'):
			gblu_post_image('top','', 'prettyPhoto'); 
			endif;

			if (get_post_meta($post->ID,'gblu_videooptions',true)== 'gblu_full'):
			$videoargs = array('size' => 'large');
			echo gblu_video($videoargs);
			endif;
			
	

// Post video medium
if(get_post_meta($post->ID,'gblu_videooptions',true)== 'gblu_medium'){
	$videoargs = array('size' => 'medium');
	 echo gblu_video($videoargs);
}
// Post image medium
if (get_post_meta($post->ID,'gblu_imageoptions',true)== 'gblu_content'){
	gblu_post_image('content','post',''); 
	}


echo '<h1>'.get_the_title().'</h1>';
the_content();
edit_post_link(get_option('gblu_trans_edit'), '<p class="edit_link">', '</p>');
endwhile; 
endif; 
echo '</div>';
echo '</div> <!-- end homediv -->';
 
get_footer();?>