<?php get_header(); ?>
<!-- -------------------------- -->

<div class="container mr-top mr-bottom">
    <div class="row">
        <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
        <div class="col-lg-4 col-6">
            <a href="<?php the_permalink() ?>">
                <div class="blog position-relative">
                    <?php the_post_thumbnail() ?>
                    <div class="blog-content">
                        <div class="datee">
                            <?php echo get_the_date('d')?> <br />
                            <?php echo get_the_date('M')?>
                        </div>
                        <div class="b-c-title"> <?php the_title() ?>
                        </div>
                        <div class="b-c-text">
                            <?php the_excerpt() ?>
                        </div>
                    </div>
                </div>
            </a>
        </div>


        <?php endwhile;?>
        <?php endif; ?>
    </div>


    <!-- phân trang -->

    <?php if(paginate_links()!='') {?>
    <div class="pagination-blogs">
        <?php
						global $wp_query;
						$big = 999999999;
						echo paginate_links( array(
							'base' => str_replace( $big, '%#%', esc_url( get_pagenum_link( $big ) ) ),
							'format' => '?paged=%#%',
							'prev_text'    => __('<i class="far fa-angle-left"></i>'),
							'next_text'    => __('<i class="far fa-angle-right"></i>'),
							'current' => max( 1, get_query_var('paged') ),
							'total' => $wp_query->max_num_pages,
							'mid_size' => 1
							) );
					    ?>
    </div>
    <?php } ?>
</div>

<?php get_footer(); ?>