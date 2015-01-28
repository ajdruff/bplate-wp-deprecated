

<?php $sidebarposition = get_option('gblu_sidebarposition'); // Get sidebar position from admin?>

<div class="sidebar sidebar-left">
<div class="sidebar-inner">
					
					<?php 
					global $post;
					//$selectsidebar = get_post_meta($post->ID,'gblu_selectsidebar',true);
					
					if(is_home()){if (function_exists('dynamic_sidebar') && dynamic_sidebar('Home Sidebar')){};}
					
					elseif(is_page_template('blog.php') || is_archive() || is_category() || is_search() || is_tag()){if (function_exists('dynamic_sidebar') && dynamic_sidebar('Blog Sidebar')){};}
			
					elseif(is_page()){
					
							if($selectsidebar == 'gblu_bar_1'){if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 1')){}; }
							if($selectsidebar == 'gblu_bar_2') { if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 2')){}; }
							elseif($selectsidebar == 'gblu_bar_3') { if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 3')){}; }				  
							/*elseif($selectsidebar == 'gblu_bar_4') { if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 4')){}; }
							elseif($selectsidebar == 'gblu_bar_5') { if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 5')){}; }
							elseif($selectsidebar == 'gblu_bar_6') { if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 6')){}; }
							elseif($selectsidebar == 'gblu_bar_7') { if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 7')){}; }
							elseif($selectsidebar == 'gblu_bar_8') { if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 8')){}; }
							elseif($selectsidebar == 'gblu_bar_9') { if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 9')){}; }
							elseif($selectsidebar == 'gblu_bar_10'){ if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 10')){};}*/
							else{ if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 1')){};}
							
					}
					elseif(is_single()){
							if($selectsidebar == 'blog'){if (function_exists('dynamic_sidebar') && dynamic_sidebar('Blog Sidebar')){}; }
							elseif($selectsidebar == 'gblu_bar_1'){if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 1')){}; }
							elseif($selectsidebar == 'gblu_bar_2') { if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 2')){}; }
							elseif($selectsidebar == 'gblu_bar_3') { if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 3')){}; }				  
							/*elseif($selectsidebar == 'gblu_bar_4') { if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 4')){}; }
							elseif($selectsidebar == 'gblu_bar_5') { if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 5')){}; }
							elseif($selectsidebar == 'gblu_bar_6') { if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 6')){}; }
							elseif($selectsidebar == 'gblu_bar_7') { if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 7')){}; }
							elseif($selectsidebar == 'gblu_bar_8') { if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 8')){}; }
							elseif($selectsidebar == 'gblu_bar_9') { if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 9')){}; }
							elseif($selectsidebar == 'gblu_bar_10'){ if (function_exists('dynamic_sidebar') && dynamic_sidebar('Sidebar 10')){};}*/
							else{ if (function_exists('dynamic_sidebar') && dynamic_sidebar('Blog Sidebar)')){};}
							
					}
					
					else{
					if (function_exists('dynamic_sidebar') && dynamic_sidebar('Blog Sidebar')){};
					}
			?>
			</div>
</div>






