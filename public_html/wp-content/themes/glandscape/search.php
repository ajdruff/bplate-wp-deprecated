<?php

 get_header();
 gblu_breadcrumbs();?>

<div id="content-default"  class="content-<?php echo $sidebarposition;?>">
			<!-- TOP IMAGE OR VIDEO -->
			<!-- Page content -->
			<?php 
									
									
									
									$pager = get_option(gblu_blog_pager);
									
									$page = (get_query_var('paged')) ? get_query_var('paged') : 1;
	$s = get_query_var('s');
	query_posts("s=$s&paged=$page&showposts=-1");
							
	if (have_posts()): while (have_posts()) : the_post(); 
									?>
									
			<div class="searchresult">
			
						<h3>
									<?php the_title();?>
						</h3>
						<?php 
						$customexcerpt = get_post_meta($post->ID,'gblu_custom_excerpt',true);
															if(has_excerpt()){
															the_excerpt();
															}
															elseif($customexcerpt){
															echo '<p>'.$customexcerpt.'</p>';						
															}
															
															echo '<div style="float:left; clear:both; margin: 0 0 10px 0;"><a href="'.get_permalink().'">'.get_permalink(),'</a></div>';
															?>
						<a href="<?php the_permalink();?>" class="button"><?php _e('Read more','glandscape');?></a>
</div>
<?php
endwhile;
						endif;
						wp_pagenavi();	
						wp_reset_query();
						?>
								
			<!-- end page content -->
</div>
<?php get_sidebar();?>
<?php get_footer();?>
