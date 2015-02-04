<?php get_header();?>
<!-- TOP IMAGE OR VIDEO -->
<?php if (have_posts()) : the_post();

$signature = get_post_meta($post->ID,'gblu_signature',true);
$thequote = get_post_meta($post->ID,'gblu_quotehere',true);	

 if (get_post_meta($post->ID,'gblu_imageoptions',true)== 'gblu_top'):
 gblu_post_image('large','','prettyPhoto'); endif;

 if (get_post_meta($post->ID,'gblu_videooptions',true)== 'gblu_full'):
	$videoargs = array('size' => "large");
	 echo gblu_video($videoargs);
 endif;

// default image on page.
gblu_breadcrumbs();

if(get_post_meta($post->ID,'gblu_fullwidth_post',true)==true){
$sidebarposition = get_option('gblu_sidebarposition'); // Get sidebar position from admin
echo '<div id="content"><div class="content-'.$sidebarposition.'">';
}
else {
	echo '<div class="content-right">';
}

									
									// Post video medium
									
									if(get_post_meta($post->ID,'gblu_videooptions',true)== 'gblu_medium'){
										$videoargs = array('size' => "medium");
										 echo gblu_video($videoargs);
									}
																										
									// Post image medium
									
										if (get_post_meta($post->ID,'gblu_imageoptions',true)== 'gblu_content'){
											gblu_post_image('post','','prettyPhoto'); 
											}
								
								
									
									echo '<div class="right-title"><h1>'.get_the_title().'</h1></div>';
									echo '<div class="right-content">';
									the_content();
									edit_post_link(__('Edit','glandscape'), '<p>', '</p>');									
									wp_pagenavi();
									echo '</div>'; 
									
									//comments_template();
									
if(get_post_meta($post->ID,'gblu_fullwidth_post',true)==true){			
echo '</div>';
}
else {
	echo '</div>';
}
endif; 

if(get_post_meta($post->ID,'gblu_fullwidth_post',true)==true){	
get_sidebar();
}
get_footer();?>

