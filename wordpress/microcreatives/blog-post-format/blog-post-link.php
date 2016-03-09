<?php

global $global_theme_options;

$post_link = get_post_meta( $post->ID, 'newave_blog_post_link', true );

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
                    	<div class="blog-type"><img src="<?php echo get_template_directory_uri()."/images/blog-link.png"; ?>" alt=""></div>
                        <div class="blog-date"><h5><?php the_time('d'); ?></h5><h5><?php the_time('M'); ?></h5></div>                    
                    </div>
                    </a>
                    <?php } ?>
                	
                    
                    <!-- Post Content -->
                	<div class="post-content">

                        <?php if( $post_link ){ ?>
                        <div class="link-wrapper">
                            <?php echo $post_link; ?>
                        </div>
                        <?php } ?>

                        <?php get_template_part('blog-post-format/post-common'); ?>
                    
                    </div>
                	<!--/Post Content -->
                    
                </div>
            	<!-- Blog Post -->

