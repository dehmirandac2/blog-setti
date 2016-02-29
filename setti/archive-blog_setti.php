<?php get_header(); ?>
	
	  <?php

	  			$count_value = new WP_Query( array(
					'post_type'      => 'blog_setti',
            		'post_status'    => 'publish',
            		'posts_per_page' => 1000000000000,		
            		'orderby' 		 => 'post_date',
            		'order' 		 => 'desc',
            		'offset'         => $offset,
            		'taxonomy'		 => 'categoria_veiculos',
					'term' 			 => $_GET['slug']
	  			));

	  			$loop = new WP_Query( array(
					'post_type'      => 'blog_setti',
            		'post_status'    => 'publish',
            		'posts_per_page' => 10,		
            		'orderby' 		 => 'post_date',
            		'order' 		 => 'desc',
            		'offset'         => $offset,
            		'taxonomy'		 => 'categoria_veiculos',
					'term' 			 => $_GET['slug'],
					'paged'			 => $paged
				) ); 

				$count = $count_value->post_count;

	            if ( get_query_var( 'paged' ) )
					$paged = get_query_var('paged');
				else if ( get_query_var( 'page' ) )
					$paged = get_query_var( 'page' );
				else
					$paged = 1;

				$per_page    = 10;
				$total_terms = 12; // This needs to be the total number of series (count the number of terms in the series with a function)
				$offset      = $per_page * ( $paged - 1) ;

				if ( $_GET['categoria'] )
				{
				   $args['taxonomy'] = 'categoria_veiculos';
				   $args['term'] = $_GET['slug'];
				}

				$titulo = get_term($_GET['categoria'], 'categoria_veiculos');

			?>

	<div class="wrapper">
		<div id="container">
			<div id="content" class="fotos">
				
					<ul id="breadcrumb">
						<li><a href="<?php echo site_url(); ?>">Início</a><span>></span></li>
						<li><a href="<?php echo site_url('fotos'); ?>">Blog Setti</a></li>
						<li><? echo (isset($_GET['categoria']) ? '>  ' .$titulo->name : ''); ?></li>
					</ul>
					<div class="second-header-intern">
						<h2 class="entry-title" style="margin-bottom: 10px">Blog do Setti
							
						</h2>
					</div>
					<div class="third-header-intern">
						<div class="info-search">
                            <div class="pagination">
                            	<?php pagination_per_category($count); ?>
                            </div>
                        </div>
					</div>
					<div class="entry-content">
				


			<div class="gallery" id="blog-setti">
           

			<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
				<dl style="margin-bottom: 20px;">
					<dd class="title-blog-setti"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
					<div class="entry-meta-post">Postado em <?php the_date() ?> às <?php the_time() ?></div>
					<dt class=" aligncenter" style="text-align:center; margin-bottom:20px"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'size-full')); ?></a></dt>
					<dd class="gallery-caption-content"><?php the_excerpt_limit('100'); ?></dd>
				</dl>
			<?php endwhile; ?>
			
				</div>
				<div class="pagination pagination-bottom" style="margin-top: 10px;">
					<?php pagination_per_category($count); ?>
                </div>
			</div>
		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>