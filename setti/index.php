<?php get_header(); ?>

    <div class="wrapper" id="home">
        <div id="container">
            <div id="content">
                <div class="wrap open-text">
                    <p>Este site abriga a maior parte da produção que pôde ser guardada ou localizada ao longo de uma extensa carreira iniciada antes dos 19 anos de idade.</p>

                    <p>Reportagens, entrevistas, artigos, editoriais, posts para blogs e mesmo simples matérias de dia-a-dia de jornalista iniciante estão organizados de acordo com o veículo em que foram publicados, em ordem cronológica invertida, começando sempre pelos mais recentes.</p>

                    <p>O mesmo foi feito em relação a fotos, áudios e a vídeos de programas de TV de que participei. </p>
                    <p>As milhares de notas escritas ao longo dos anos para diferentes colunas do <i>Jornal do Brasil</i> e de <i>O Estado de S. Paulo</i>, contudo, fugiram a esse esquema de organização e estão agrupadas em separado. </p>

                    <p>Peço que levem em conta o fato de o site ainda estar em construção e, portanto, não totalmente completo. </p>

                    <p>Mas a maior parte do que produzi está à disposição dos que me honrarem com a visita a este site. Obrigado!</p>
                </div>
                
                <div class="wrap hold-all-texts">
                    <h2 class="titles">Textos</h2>      	
					<?php 
                        $args = array(
                            'post_type'      => 'post',
                            'post_status'    => 'publish',
                            'posts_per_page' => 4,	
                            'orderby' 		 => 'post_date',
                            'order' 		 => 'desc',             	
                        );
                        
                        $results = query_posts($args);
                
                    ?>

                    <div class="float-left">
                        <?php $counter = 0; ?>
                        <? foreach ( $results as $post ) : setup_postdata($post); ?>
                        <?php $counter++ ?>
                        <?php if ($counter % 2 != 0): ?>
                            <div class="hold-texts">
                            <?php 
                            if ( get_the_post_thumbnail($post_id) != '' ) {

                              echo '<dt class="gallery-icon"><a href="'; the_permalink(); echo '" class="thumbnail-wrapper">';
                               the_post_thumbnail("medium");
                              echo '</a></dt>';

                            } else {

                             echo '<dt class="gallery-icon"><a href="'; the_permalink(); echo '" class="thumbnail-wrapper">';
                             echo '<img src="';
                             echo catch_that_image("medium");
                             echo '" alt="" />';
                             echo '</a></dt>';

                            }
                            ?>

                            <a href="<?php the_permalink(); ?>" title="><?php the_title(); ?>"></a>

                            <div class="hold-title-text-home">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php the_excerpt_limit('30'); ?></p>
                            </div>
                               <?php if(get_the_terms( $post->ID, 'categoria_veiculos' )){ ?>
                                <?php $taxonomy = get_the_terms( $post->ID, 'categoria_veiculos' );?>
                                <? foreach ( $taxonomy as $tax ) : ?>
                                    <a class="categories" href="<?= site_url() ?>/textos/?categoria=<?=$tax->term_id?>&slug=<?=$tax->slug?>"><?=$tax->name?></a>
                                <? endforeach ?>
                                <? } ?>
                            <span class="readmore"><a href="<? the_permalink(); ?>">Continuar lendo</a>
                            </span> 
                        </div>
                        <?php endif ?>

                        <? endforeach; ?>
                    </div>
            

                    <div class="float-right">
                        <?php $counter = 0; ?>
                        <? foreach ( $results as $post ) : setup_postdata($post); ?>
                        <?php $counter++ ?>
                        <?php if ($counter % 2 == 0): ?>
                            <div class="hold-texts">
                            <?php 
                            if ( get_the_post_thumbnail($post_id) != '' ) {

                              echo '<dt class="gallery-icon"><a href="'; the_permalink(); echo '" class="thumbnail-wrapper">';
                               the_post_thumbnail("medium");
                              echo '</a></dt>';

                            } else {

                             echo '<dt class="gallery-icon"><a href="'; the_permalink(); echo '" class="thumbnail-wrapper">';
                             echo '<img src="';
                             echo catch_that_image("medium");
                             echo '" alt="" />';
                             echo '</a></dt>';

                            }
                            ?>

                            <a href="<?php the_permalink(); ?>" title="><?php the_title(); ?>"></a>

                            <div class="hold-title-text-home">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <p><?php the_excerpt_limit('30'); ?></p>
                            </div>
                               <?php if(get_the_terms( $post->ID, 'categoria_veiculos' )){ ?>
                                <?php $taxonomy = get_the_terms( $post->ID, 'categoria_veiculos' );?>
                                <? foreach ( $taxonomy as $tax ) : ?>
                                    <a class="categories" href="<?= site_url() ?>/textos/?categoria=<?=$tax->term_id?>&slug=<?=$tax->slug?>"><?=$tax->name?></a>
                                <? endforeach ?>
                                <? } ?>
                            <span class="readmore"><a href="<? the_permalink(); ?>">Continuar lendo</a>
                            </span> 
                        </div>
                        <?php endif ?>

                        <? endforeach; ?>
                    </div>
                </div>


                
                <div class="wrap">
                    <h2 class="titles">Fotos</h2>
                    <?php 
						$args = array(
							'post_type'      => 'fotos',
							'post_status'    => 'publish',
							'posts_per_page' => 4,	
							'orderby' 		 => 'post_date',
							'order' 		 => 'desc',             	
						);
						
						$results = query_posts($args);
				
					?>
                    
                    <div class="hold-fotos">
                        <div class="float-left">

                            <?php $counter = 0; ?>
                        	<? foreach ( $results as $post ) : setup_postdata($post); ?>
                            <?php $counter++ ?>
                            <?php if ($counter % 2 != 0): ?>
                            <div class="hold-texts"> 
                                
                                <dt class="gallery-icon"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'thumb-100')); ?></a></dt>
                                <a href="<?php the_permalink(); ?>"><p class="gallery-caption"><?php the_title(); ?></p></a>
                                <?php if(get_the_terms( $post->ID, 'categoria_veiculos' )){ ?>
                                <?php $taxonomy = get_the_terms( $post->ID, 'categoria_veiculos' );?>
                                <? foreach ( $taxonomy as $tax ) : ?>
                                    <a class="categories" href="<?= site_url() ?>/fotos/?categoria=<?=$tax->term_id?>&slug=<?=$tax->slug?>"><?=$tax->name?></a>
                                <? endforeach ?>
                                <? } ?>
                            </div>
                            <?php endif ?>
                            <? endforeach; ?>

                        </div>

                        <div class="float-right">

                            <?php $counter = 0; ?>
                            <? foreach ( $results as $post ) : setup_postdata($post); ?>
                            <?php $counter++ ?>
                            <?php if ($counter % 2 == 0): ?>
                            <div class="hold-texts"> 
                                
                                <dt class="gallery-icon"><a href="<?php the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'thumb-100')); ?></a></dt>
                                <a href="<?php the_permalink(); ?>"><p class="gallery-caption"><?php the_title(); ?></p></a>
                                <?php if(get_the_terms( $post->ID, 'categoria_veiculos' )){ ?>
                                <?php $taxonomy = get_the_terms( $post->ID, 'categoria_veiculos' );?>
                                <? foreach ( $taxonomy as $tax ) : ?>
                                    <a class="categories" href="<?= site_url() ?>/fotos/?categoria=<?=$tax->term_id?>&slug=<?=$tax->slug?>"><?=$tax->name?></a>
                                <? endforeach ?>
                                <? } ?>
                            </div>
                            <?php endif ?>
                            <? endforeach; ?>

                        </div>
                    </div>
                </div>
            
            
                <div class="wrap">
                	<h2 class="titles">Vídeos</h2>
					<?php 
						$args = array(
							'post_type'      => 'videos',
							'post_status'    => 'publish',
							'posts_per_page' => 3,	
							'orderby' 		 => 'post_date',
							'order' 		 => 'desc',             	
						);
						
						$results = query_posts($args);
				
					?>
                    <div class="hold-videos">
                    	<? foreach ( $results as $post ) : setup_postdata($post); ?>
                        <div class="gallery"> 
                            <?php if ( has_post_thumbnail() ) : ?>
                                <a href="<? the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'thumb-videos')); ?></a>
                            <?php else  : ?>
                                <div class="thumb-video-home"><? the_field('endereco_do_video');?></div>
                            <?php endif; ?>
                            
                            <a href="<?php the_permalink(); ?>"><p class="gallery-caption"><?php the_title(); ?></p></a>
                            <?php if(get_the_terms( $post->ID, 'categoria_veiculos' )){ ?>
                            <?php $taxonomy = get_the_terms( $post->ID, 'categoria_veiculos' );?>
                            <? foreach ( $taxonomy as $tax ) : ?>
                                <a class="categories" href="<?= site_url() ?>/videos/?categoria=<?=$tax->term_id?>&slug=<?=$tax->slug?>"><?=$tax->name?></a>
                            <? endforeach ?>
                            <? } ?>
                        </div>
                        <? endforeach; ?>
                    </div>
                </div>
            </div>
        <!-- #content --> 
        </div>
    <!-- #container -->


<?php get_sidebar(); ?>
<?php get_footer(); ?>
