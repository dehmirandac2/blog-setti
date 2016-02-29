<?php 
	get_header(); 
	the_post();
?>

	<div class="wrapper">
		<div id="container">
			<div id="content">
				<ul id="breadcrumb">
						<li><a href="<?php echo site_url(); ?>">Início</a><span>></span></li>
						<li><a href="<?php echo site_url('textos'); ?>">Textos</a><span>></span></li>
						<li><? the_title(); ?></li>
					</ul>
				<div class="post">
					<h2 class="entry-title post-title" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></h2>
					<h3 class="post-subtitle">
						<?php $imagem = get_post_meta($post->ID, 'intro-do-texto', true); 
			            	echo $imagem
			            ?>
			        </h3>
					<div class="entry-meta-post">
						Postado em <?php the_date() ?> às <?php the_time() ?>

                        <?php $taxonomy = get_the_terms( $post->ID, 'categoria_veiculos' );?>
                        <?php if($taxonomy){?>
                        	, em 
                        	<? foreach ( $taxonomy as $tax ) : ?>
                            	<a class="categories" href="<?= site_url() ?>/textos/?categoria=<?=$tax->term_id?>&slug=<?=$tax->slug?>"><?=$tax->name?></a>
                       		<? endforeach ?>	
                    	<?}	?>
                    </div>
                    <div class="thumbnail-inside-post">
                    	<?php if (has_post_thumbnail( $post->ID ) ){ ?>
						<?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
						<div class="wp-caption aligncenter">
							<img src="<?php echo $image[0]; ?>" alt="<?php the_title(); ?>" title="<?php the_title(); ?>"/>
							<?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?>
						</div>
						<?} ?>
                    </div>
					<div class="entry-content">

						<?php the_content(); ?>


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
				
				</div><!-- .post -->
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
				
                <?php comments_template(); ?>

			</div><!-- #comments -->
		
		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar(); ?>

<script type="text/javascript">var switchTo5x=true;</script>
<script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
<script type="text/javascript">stLight.options({publisher: "dba6cdff-c038-4fa0-b051-debc3a157864", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>

<?php get_footer(); ?>
