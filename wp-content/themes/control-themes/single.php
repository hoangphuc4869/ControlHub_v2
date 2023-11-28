<?php get_header(); ?>




<div class="container bg-single">


    <?php ?>
    <div class="row">
        <div class="col-lg-8 col-12">
            <h3 class="title-single"><?php the_title(); ?></h3>
            <div class="post-info">Posted on <?php echo get_the_date('M D, Y'); ?> by <?php echo get_the_author()?>
            </div>
            <div class="content-single"><?php the_content(); ?></div>
        </div>

        <div class="col-lg-4 col-12">
            <div class="bg-contact-sidebar">
                <div class="search-title">
                    Search ControlHub Blog
                </div>
                <div class="post-search">
                    <?php echo do_shortcode('[wp_search_form]'); ?>
                </div>
                
                <div class="recent-pos">
                    Recent Posts
                </div>
                <?php 
                            $args = array(
                                'posts_per_page' => 5,
                                'post_type'      => 'post',
                                'cat'            => 'blogs',
                            );
                            $the_query = new WP_Query( $args );
                            ?>
                <?php if( $the_query->have_posts() ): ?>
                <?php while( $the_query->have_posts() ) : $the_query->the_post();
                            $post_date = get_the_date('d. M Y');
                             ?>
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
                <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>