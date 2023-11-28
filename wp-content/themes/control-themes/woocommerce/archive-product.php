<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */

defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>
<div class="bg-main">

    <div class="container bg-detail-woo">

        <div class="row bg-woo2">

            <div class="col-lg-3 col-12 si">
                <?php
					/**
					 * Hook: woocommerce_sidebar.
					 *
					 * @hooked woocommerce_get_sidebar - 10
					 */
					do_action( 'woocommerce_sidebar' ); ?>

                <div class="n-p-left h-100 position-relative access-sale">
                    <img src="<?php echo get_field('sidebar-img','option')['url']?>" alt="" class="img-fluid w-100" />
                    <div class="n-p-left-content d-flex flex-column asale">
                        <p>Sale up to</p>
                        <p>40%</p>
                        <button class="shop-now s-b-btn n-p-btn">
                            <a href="#">Shop Now</a><i class="fal fa-arrow-right"></i>
                        </button>
                    </div>
                </div>
            </div>

            <div class="col-lg-9 col-12 bg-woo3">
                <?php if ( apply_filters( 'woocommerce_show_page_title', true ) ) : ?>
                <h1 class="woocommerce-products-header__title page-title"><?php woocommerce_page_title(); ?></h1>
                <?php the_archive_description( '<div class="taxonomy-description">', '</div>' );?>
                <?php endif; ?>


                <?php
					if ( woocommerce_product_loop() ) {

						/**
						 * Hook: woocommerce_before_shop_loop.
						 *
						 * @hooked woocommerce_output_all_notices - 10
						 * @hooked woocommerce_result_count - 20
						 * @hooked woocommerce_catalog_ordering - 30
						 */
						do_action( 'woocommerce_before_shop_loop' );

						woocommerce_product_loop_start();

						if ( wc_get_loop_prop( 'total' ) ) {
							while ( have_posts() ) {
								the_post();

								/**
								 * Hook: woocommerce_shop_loop.
								 */
								do_action( 'woocommerce_shop_loop' );

								wc_get_template_part( 'content', 'product' );
							}
						}

						woocommerce_product_loop_end();

						/**
						 * Hook: woocommerce_after_shop_loop.
						 *
						 * @hooked woocommerce_pagination - 5
						 */
						do_action( 'woocommerce_after_shop_loop' );
					} else {
						/**
						 * Hook: woocommerce_no_products_found.
						 *
						 * @hooked wc_no_products_found - 10
						 */
						do_action( 'woocommerce_no_products_found' );
					}

					/**
					 * Hook: woocommerce_after_main_content.
					 *
					 * @hooked woocommerce_output_content_wrapper_end - 10 (outputs closing divs for the content)
					 */
					do_action( 'woocommerce_after_main_content' ); ?>
            </div>
        </div>



    </div>

</div>

</div>
<div class="container-fluid iconBox">
    <div class="row">
        <?php if(have_rows('box-icons','option')):
		while(have_rows('box-icons','option')): the_row(); ?>
        <div class="col-lg-3 col-6 boxWrap">
            <div class="box">
                <div class="icon">
                    <?php echo get_sub_field('icon-svg')?>
                </div>
                <div class="boxContent">
                    <p> <?php echo get_sub_field('box-content1')?></p>
                    <p> <?php echo get_sub_field('box-content2')?></p>
                </div>
            </div>
        </div>

        <?php endwhile; endif; ?>

    </div>
</div>

<?php get_footer( 'shop' ); ?>