<?php get_header();?>
<!-- TOP IMAGE OR VIDEO -->
<?php if (have_posts()) : the_post();

 if (get_post_meta($post->ID,'gblu_imageoptions',true)== 'gblu_top'):
 gblu_post_image('large','','prettyPhoto'); endif;

 if (get_post_meta($post->ID,'gblu_videooptions',true)== 'gblu_full'):
	$videoargs = array('size' => "large");
	 echo gblu_video($videoargs);
 endif;

gblu_breadcrumbs();

if(get_post_meta($post->ID,'gblu_fullwidth_post',true)==false){
$sidebarposition = get_option('gblu_sidebarposition'); // Get sidebar position from admin
echo '<div id="content-default" class="content-'.$sidebarposition.'">';
}
if(get_post_meta($post->ID,'gblu_fullwidth_post',true)==true){
echo '<div id="content-default" class="content-full">';
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
									
									echo '<h1>'.get_the_title().'</h1>';
									the_content();
									edit_post_link(__('Edit','gblucsa'), '<p>', '</p>');									
									wp_pagenavi(); 
									
									//comments_template();
									
if(get_post_meta($post->ID,'gblu_fullwidth_post',true)==false){			
echo '</div>';
}
if(get_post_meta($post->ID,'gblu_fullwidth_post',true)==true){			
echo '</div>';
}
endif;


if(get_post_meta($post->ID,'gblu_fullwidth_post',true)==false){	
get_sidebar();
}
get_footer();?>

