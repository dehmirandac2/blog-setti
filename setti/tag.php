<?php get_header(); ?>

<div class="wrapper" id="tags">
		<div id="container">
			<div id="content">
				<div class="second-header-intern">
						<h2 class="entry-title">
							<?php _e( 'Tag Archive: ', 'html5blank' ); echo single_tag_title('', false); ?>
						</h2>
					</div>
				<div class="third-header-intern">
						<div class="info-search">

                           
						<div class="info-search">
                            <div class="pagination">
                            	<?php paginate(); ?>
                            </div>
                        </div>
                        </div>
					</div>
					<!-- section -->
					<section>

						<?php get_template_part('loop'); ?>

						<?php get_template_part('pagination'); ?>

					</section>
					<!-- /section -->
			</div>
		</div>
				<div class="pagination pagination-bottom" style="margin-top: 10px;">
					<?php paginate(); ?>
                </div>

	<?php get_sidebar(); ?>
</div>

<?php get_footer(); ?>
