<?php get_header(); ?>

	<!-- ------------------------- -->

	<div class="container mr-bottom">
		<p class="text-result">Kết quả tìm kiếm "<?php echo get_search_query()?>"</p>
		<div class="row">
			

			<div class="col-lg-4 col-12">
				<?php if (have_posts()) : ?>
					<?php while (have_posts()) : the_post(); ?>

		            <a href="<?php the_permalink()?>">
                        <div class="post d-flex">
                            <?php the_post_thumbnail()?>
                            <div class=" post-in4">
                                <div class="post-name">
                                    <div class="p-n"><?php the_title()?></div>
                                </div>
                                <div class="psot-author">Posted by <?php echo get_the_author()?></div>
                            </div>
                        </div>
                    </a>

			       <?php endwhile; wp_reset_postdata(); ?>
			    <?php
				else :
					echo '<p>No search results found!</p>';

				endif; ?>
			</div>
		</div>
	</div>


<?php get_footer(); ?>