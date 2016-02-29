<?php get_header(); ?>


	<div class="wrapper">
		<div id="container" class="archives-date">
	<div class="second-header-intern">
		<?php /* If this is a monthly archive */ if (is_month()) { ?> 
			<h2 class="entry-title">Arquivos de <?php the_time('F, Y'); ?></h2> 
		<?php } ?>
	</div> 

	<div class="entry-content">
		<?php if(have_posts()) : while(have_posts()) : the_post(); ?>
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
	<?php endif;?>
	</div>



			
	</div>
		<?php get_sidebar(); ?>
	</div>

<?php get_footer(); ?>
