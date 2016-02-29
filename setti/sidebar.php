<div class="sidebar">
		<!--<div class="sidebar-widget">
			<h3><a href="<?php echo site_url()?>/blog_setti" style="color: #000; font-size:21px; font-family: Georgia, serif">Blog do Setti</a></h3>
			<?php 
                $args = array(
                    'post_type'      => 'blog_setti',
                    'post_status'    => 'publish',
                    'posts_per_page' => 4,  
                    'orderby'        => 'post_date',
                    'order'          => 'desc',                 
                );
                
                $results = query_posts($args);
        
            ?>
            <div style="padding-top:15px; border-top:1px solid #fff; overflow:hidden; margin-bottom:10px">
                <? foreach ( $results as $post ) : setup_postdata($post); ?>
                <div class="hold-texts">
                    <a hrerf="<?php the_permalink(); ?>" class="thumb-photo-home"><?php the_post_thumbnail("medium"); ?></a> 
                    <a href="<?php the_permalink(); ?>" title="><?php the_title(); ?>"></a>
                    <div class="hold-title-text-home">
                        <h4><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h4>
                        
                    </div>
                </div>
                <? endforeach; ?>
            </div>
		</div>-->
		<div class="sidebar-widget">
			<?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
		</div>
	</div>
</div>