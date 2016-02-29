<?php 
	get_header(); 
	the_post();
?>

	<div class="wrapper">
		<div id="container">
			<div id="content">
            	<ul id="breadcrumb">
						<li><a href="<?php echo site_url(); ?>">Início</a><span>></span></li>
						<li><?php the_title(); ?></li>
					</ul>
				<div class="post">
					<h2 class="entry-title post-title"><?php the_title(); ?></h2>
					<div class="entry-content"><?php the_content(); ?></div>
				
				</div><!-- .post -->
		
		</div><!-- #content -->
	</div><!-- #container -->

<?php get_sidebar(); ?>

<?php get_footer(); ?>
