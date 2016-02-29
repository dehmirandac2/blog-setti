<?php get_header(); ?>

	<?php 
		$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
	   	$args = array(
            'post_type'      => 'livros',
            'post_status'    => 'publish',
            'posts_per_page' => 10,	
			'paged' 		 => $paged, 
            'orderby' 		 => 'post_date',
            'order' 		 => 'desc',             	
        );
		
		$results = query_posts($args);
		$num_results = count($results);

	?>	

    <div class="wrapper">
        <div id="container">
            <div id="content" class="livros entry-content">
                <ul id="breadcrumb">
                    <li><a href="#">Início</a><span>></span></li>
                    <li>Livros</li>
                </ul>
            <div>
                <div class="second-header-intern">
                    <h2 class="entry-title">Livros</h2>
                </div>
                <div class="third-header-intern">
                    <div class="info-search">
                        <div class="pagination pagination-bottom">
                            <?php html5wp_pagination(); ?>
                        </div>
                    </div>
                </div>
                <div class="entry-content">
                
                <? foreach ( $results as $post ) : setup_postdata($post); ?>
                    <div class="hold-books">
                        <a href="<? the_permalink(); ?>" class="img-books"><?php the_post_thumbnail( 'small' ); ?></a>
                        <h3><a href="<? the_permalink(); ?>"><?php the_title(); ?> </a></h3>
                        <div class="p">
                            <p><? the_excerpt_limit('45'); ?></p>
                        </div>
                    </div>
                <? endforeach; ?>
                </div>
                
                <div class="pagination pagination-bottom">
	                <?php html5wp_pagination(); ?>
                </div>
            </div>
            
            </div><!-- #content -->
        </div><!-- #container -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
