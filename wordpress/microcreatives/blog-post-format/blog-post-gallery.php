<?php

global $global_theme_options;

?>
    			<!-- Blog Post -->
            	<?php if( $global_theme_options['blog_layout'] == "Normal" ) { ?>
    			<div id="post-<?php the_ID(); ?>" <?php post_class("blog-post"); ?>>
    			<?php } else { ?>
    			<div id="post-<?php the_ID(); ?>" <?php post_class("blog-post masonry"); ?>>
    			<?php } ?>
                
                	<?php if( $global_theme_options['blog_layout'] == "Normal" ) { ?>
                    <a href="<?php the_permalink(); ?>" class="external">
            		<div class="type-date">                    
                    	<div class="blog-type"><img src="<?php echo get_template_directory_uri()."/images/blog-gallery.png"; ?>" alt=""></div>
                        <div class="blog-date"><h5><?php the_time('d'); ?></h5><h5><?php the_time('M'); ?></h5></div>                    
                    </div>
                    </a>
                    <?php } ?>
                	
                    
                    <!-- Post Content -->
                	<div class="post-content">

                    <?php if( has_post_thumbnail() ){ ?>
                    <div class="post-slider">                        
                    	<ul class="blog-slider">
                    	<?php
                    	
                    		if( has_post_thumbnail() ){
                    		
                    			$full_image = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full');
                    			
                    			echo '<li><img src="'. $full_image[0] . '" alt=""></li>';
                    		}
                    	
                   			$i = 2;
				    		while( $i <= 5 ){
					
                        		$image_url = "";
                            	if (class_exists('MultiPostThumbnails')) { 
                            		$image_url = MultiPostThumbnails::get_post_thumbnail_url(get_post_type(), 'featured-image-'.$i); 
                            	}
                                        
								if( $image_url != "" ){
									
									echo '<li><img src="'. $image_url . '" alt=""></li>';
								}
								
								$i++;
				    		}
						
                    	?>
                    	</ul>
                    </div>
                    <?php } ?>

                        <?php get_template_part('blog-post-format/post-common'); ?>
                    
                    </div>
                	<!--/Post Content -->
                    
                </div>
            	<!-- Blog Post -->


