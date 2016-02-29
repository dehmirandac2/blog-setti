<?php get_header(); ?>
     
	<div class="wrapper">
        <div id="container"> 
        	<div class="second-header-intern">
					<h2 class="entry-title">Resultado de busca por: <?php echo get_search_query(); ?></h2> 
			</div> 
            <div id="content" class="entry-content">
                <?php /* Start the Loop */ ?>
                <?php while ( have_posts() ) : the_post(); ?>
					<dl class="gallery-item">
							<dt class="gallery-icon"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'thumb-100')); ?></a></dt>
							<dd class="title-gallery-caption"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></dd>
							<dd class="gallery-caption-content">
								<?php the_excerpt_limit('40'); ?>
								<?php $imagem = get_post_meta($post->ID, 'intro-do-texto', true); 
		                    		echo $imagem
		                    	?>
							</dd>
							<span class="categories-posts">
								<?php if (get_the_terms( $post->ID, 'categoria_veiculos' )){?>
									<?php $taxonomy = get_the_terms( $post->ID, 'categoria_veiculos' );?>
				                    	<? foreach ( $taxonomy as $tax ) : ?>
				                        	<a class="categories" href="<?= site_url() ?>/textos/?categoria=<?=$tax->term_id?>&slug=<?=$tax->slug?>"><?=$tax->name?></a>
				                    	<? endforeach ?>
				                <?php } else{ ?>
				            		<a class="categories" href="#">Sem veículo</a>
				            	<?php }?>
		                    </span>
						</dl>

                <?php endwhile; ?>

            </div><!-- #content -->     
        </div><!-- #container -->
         
<?php get_sidebar(); ?>   
</div>
<?php get_footer(); ?>