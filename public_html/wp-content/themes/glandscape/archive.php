<?php get_header();?>
<?php
					while (have_posts()) : the_post();
					
					echo '<div class="cat-title">';	
					echo '<h1>';
					
					if(is_tag()):
					
					_e('Tag:','glandscape');
					single_tag_title();
						
					elseif(is_category()):
					single_cat_title(); 
					elseif(is_archive()):
					$prefix = ' '; echo single_month_title( $prefix, $display ); 
					elseif(is_search()):
					_e('Searchresult for','glandscape');
					$allsearch = &new WP_Query("s=$s&showposts=-1"); 
					$key = esc_html($s, 1); 
					$count = $allsearch->post_count;
					echo $key; 
					_e(' - ','glandscape'); 
					echo $count . ' '; 
					_e('articles','glandscape'); 
					wp_reset_query(); 
					endif;
					echo '</h1>';
					echo '</div>';
					
					
					endwhile;
					
					$pager = get_option(gblu_blog_pager);
					query_posts($query_string."&posts_per_page=$pager");
					
					if(get_option('gblu_blog_layout')=='fullwidth'){
					echo gblu_blog('fullwidth',true, $pager);
					}
							
					if(get_option('gblu_blog_layout')=='normal'){
					echo '<div id="content-default" class="content-right">';
					echo gblu_blog('',true, $pager);
					echo '</div>';
					get_sidebar();
					}				
					?>
<?php get_footer();?>
