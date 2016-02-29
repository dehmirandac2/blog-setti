<?php 
	get_header(); 
	the_post();
?>

	<div class="wrapper">
		<div id="container">
			<div id="content" class="foto-grande">
				<div>
					<ul id="breadcrumb">
						<li><a href="#">Início</a><span>></span></li>
						<li><a href="#">Fotos</a><span>></span></li>
						<li><? echo (isset($_GET['categoria']) ? '>  ' .$titulo->name : ''); ?></li>
					</ul>
					<h2 class="entry-title">Fotos 
						<?php if ( $_GET['categoria'] ) {?>
							<?php echo (isset($_GET['categoria']) ? '- ' .$titulo->name : '');?>
							<img src="<?php echo get_template_directory_uri(); ?>/images/<?php echo $args['term']?>.jpg">
						<?php } ?>
					</h2>
					<div class="entry-content">


				<div style="width: 602px" class="wp-caption">
					<h4 title="<?php the_title_attribute(); ?>"><?php the_title(); ?></h4>
					<div class="entry-meta-post">Postado em <?php the_date() ?> às <?php the_time() ?></div>
                    <?php the_post_thumbnail('full', array('class' => 'foto-interna')); ?>
					<div class="wp-caption-text">
						<? the_content(); ?>
						<div class="tags">
							<ul>
								<?php
									global $post;
									$posttags = get_the_tags();
									if($posttags){
										echo '<h5>TAGS:</h5>';
										$myArray = array();
										foreach(get_the_tags($post->ID) as $tag)
										{
											$myArray[] = '<a href="' . get_tag_link($tag->term_id) . '"> ' . $tag->name . '</a>';
										}
										echo implode(', ', $myArray);
									}
								?>	
							</ul>
						</div>
					</div>
				</div>
				<div class="share-buttons">
				        <div class="fbShare" style="float: left; margin-right:20px">
				          <div id="fb-root"></div>
				          <script>(function(d, s, id) {
				              var js, fjs = d.getElementsByTagName(s)[0];
				              if (d.getElementById(id)) return;
				              js = d.createElement(s); js.id = id;
				              js.src = "//connect.facebook.net/en_US/all.js#xfbml=1";
				              fjs.parentNode.insertBefore(js, fjs);
				            }(document, 'script', 'facebook-jssdk'));</script>
				          <?php echo '<div class="fb-like" data-href="' .get_permalink($post->ID).'" data-layout="button_count" data-action="like" data-show-faces="false"></div>' ?>
				        </div>
				        <div class="twShare" style="float: left;margin-right:20px; width:80px">
				         	<a href="https://twitter.com/share" class="twitter-share-button" data-url="<?php the_permalink($post->ID) ?>" data-lang="en">Tweet</a>
							<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="https://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
				        </div>
				        <div class="gpShare" style="float: left; width:75px">
				          <!-- Place this tag where you want the +1 button to render. -->
				          <?php echo '<div class="g-plusone" data-size="medium" data-href="'. get_permalink($post->ID) . '""></div>' ?>

				          <!-- Place this tag after the last +1 button tag. -->
				          <script type="text/javascript">
				            window.___gcfg = {lang: 'pt-BR'};

				            (function() {
				              var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
				              po.src = 'https://apis.google.com/js/platform.js';
				              var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
				            })();
				          </script>
				      </div> <!--share-->
				</div>

				<div id="comments">
					
					<?php $withcomments = "1"; comments_template(); ?>

				</div><!-- #comments -->

				<div id="see-more">
					<h3>Veja mais fotos</h3>
                    
                    <?php 
						$args = array(
							'post_type'      => 'fotos',
							'post__not_in'   => array(get_the_ID()),
							'post_status'    => 'publish',
							'posts_per_page' => 3,		
							'orderby' 		 => 'post_date',
							'order' 		 => 'desc'                	
						);
						
						$results = get_posts($args);
					?>	
					<div class="gallery">
                    	<? foreach ( $results as $post ) : setup_postdata($post); ?>
						<dl class="gallery-item">
							<dt class="gallery-icon"><a href="<? the_permalink(); ?>"><?php the_post_thumbnail('full', array('class' => 'foto-relacionada')); ?></a></dt>
							<h4><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h4>
							<dd class="gallery-caption-content"><?php the_excerpt_limit('15'); ?></dd>
							<span class="categories-posts">
								<?php $taxonomy = get_the_terms( $post->ID, 'categoria_veiculos' );?>
		                            <? foreach ( $taxonomy as $tax ) : ?>
		                                <a class="categories" href="<?= site_url() ?>/fotos/?categoria=<?=$tax->term_id?>&slug=<?=$tax->slug?>"><?=$tax->name?></a>
		                            <? endforeach ?>
		                    </span>
						</dl>
                        <? endforeach; ?>
					</div>
				</div>
				</div>
			</div>

		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar(); ?>

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "dba6cdff-c038-4fa0-b051-debc3a157864", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<?php get_footer(); ?>
