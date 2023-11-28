<?php
/**
 * The template for displaying product content in the single-product.php template
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-single-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see     https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.6.0
 */

defined( 'ABSPATH' ) || exit;

global $product;

/**
 * Hook: woocommerce_before_single_product.
 *
 * @hooked woocommerce_output_all_notices - 10
 */
do_action( 'woocommerce_before_single_product' );

if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
}
?>

<div class="container">
    <div class="row prdetail">
        <div class="col-lg-6">
            <div id="product-<?php the_ID(); ?>" <?php wc_product_class( '', $product ); ?>>
            	<?php
            	/**
            	 * Hook: woocommerce_before_single_product_summary.
            	 *
            	 * @hooked woocommerce_show_product_sale_flash - 10
            	 * @hooked woocommerce_show_product_images - 20
            	 */
            	do_action( 'woocommerce_before_single_product_summary' );
            	?>
            
            </div>
        </div>
        <div class="col-lg-6">
            <div class="product-detaill">
                <p><?php the_title()?></p>
                <p><?php echo nl2br($product->get_short_description());?></p>
                <?php if ($product->get_sale_price() !== '' && $product->get_sale_price() !== false) { ?>
                <p>List Price: <del><?php  echo wc_price($product->get_regular_price());?></del></p>
                <p>Today's Price: <span><?php  echo wc_price($product->get_sale_price());?></span></p>
                <?php } else { ?>
                <p> Today Price:
                    <?php echo strip_tags(wc_price($product->get_regular_price()))?></p>
                <?php } ?>


                <div class="add-cart-cus">
                    <form class="cart" method="post" enctype="multipart/form-data">
                        <div class="quantity quan-cus">
                            <input type="number" step="1" min="1" max="" name="quantity" value="1" title="Quantity"
                                class="input-text qty text" size="4" pattern="[0-9]*" inputmode="numeric">
                        </div>

                        <input type="hidden" name="add-to-cart" value="<?php echo get_the_ID(); ?>">

                        <button type="submit" class="single_add_to_cart_button button alt addToCart"> Add to
                            cart</button>
                    </form>
                </div>

            </div>
        </div>
    </div>
    
    <div class="de-products">
        <div class="f-d-title">Chi tiết sản phẩm</div>
        <?php echo nl2br($product->get_description());?>
         

        
    </div>


    <div class="flash-deals related">
        <div class="f-d-title">Related Products</div>
        <div class="swiper swiperFlashDeals position-relative">
            <div class="swiper-wrapper">
                <?php  
                    $args = array(
                        'post_type'      => 'product',
                        'posts_per_page' => -1,  
                    );

                    $loop = new WP_Query( $args );

                    while ( $loop->have_posts() ) : $loop->the_post(); ?>

                <div class="swiper-slide">
                    <div class="bg-feature">
                    <?php if($product->get_sale_price()) { ?>
                        <div class="sale-tag">Sale</div>
                        <?php } ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'id' =>'img-feature') ); ?>
                    </a>

                    <h4 class="category-feature">
                            <?php
                        $categories = wc_get_product_category_list($product->get_id());
                        $categories_with_space = str_replace(',', ' ', $categories); 
                        echo $categories_with_space; 
                        ?>
                    </h4>

                    <h3 class="title-feature"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                    <div class="text-feature"><?php the_excerpt();?></div>

                    <div class="price-block">
                       <?php if($product->get_sale_price()) { ?>
                        <div class="price-salee"><?php echo wc_price($product->get_sale_price()); ?></div>
                        <del class="price-ori"><?php echo wc_price($product->get_regular_price()); ?></del>
                        <?php } else { ?>
                            <div class="price-ori-without-sale"><?php echo wc_price($product->get_regular_price()); ?></div>
                        <?php } ?>
                    </div>

                    <p class="quick-add">
                        <a href="<?php bloginfo('url'); ?>?add-to-cart=<?php the_ID(); ?>">
                            Quick Add
                        </a>
                    </p>
                </div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <div class="swiper-pagination-deals"></div>
        </div>
    </div>


    <!-- *************************flash deals******************************** -->
    <div class="flash-deals single-page-detail">
        <div class="f-d-title">Top Sellers</div>
        <div class="swiper topSellers position-relative">
            <div class="swiper-wrapper">
                <?php
					$tax_query[] = array(
					    'taxonomy' => 'product_visibility',
					    'field'    => 'name',
					    'terms'    => 'featured',
					    'operator' => 'IN',
					);
				?>

                <?php $args = array( 
					'post_type' => 'product',
					'posts_per_page' => -1,
					'ignore_sticky_posts' => 1, 
					'tax_query' => $tax_query
				); ?>

                <?php $getposts = new WP_query( $args);?>

                <?php while ($getposts->have_posts()) : $getposts->the_post(); ?>

                <div class="swiper-slide">
                    <div class="bg-feature">
                    <?php if($product->get_sale_price()) { ?>
                        <div class="sale-tag">Sale</div>
                        <?php } ?>
                    <a href="<?php the_permalink(); ?>">
                        <?php echo get_the_post_thumbnail(get_the_ID(), 'thumnail', array( 'id' =>'img-feature') ); ?>
                    </a>

                    <h4 class="category-feature">
                            <?php
                        $categories = wc_get_product_category_list($product->get_id());
                        $categories_with_space = str_replace(',', ' ', $categories); 
                        echo $categories_with_space; 
                        ?>
                    </h4>

                    <h3 class="title-feature"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

                    <div class="text-feature"><?php the_excerpt();?></div>

                    <div class="price-block">
                       <?php if($product->get_sale_price()) { ?>
                        <div class="price-salee"><?php echo wc_price($product->get_sale_price()); ?></div>
                        <del class="price-ori"><?php echo wc_price($product->get_regular_price()); ?></del>
                        <?php } else { ?>
                            <div class="price-ori-without-sale"><?php echo wc_price($product->get_regular_price()); ?></div>
                        <?php } ?>
                    </div>

                    <p class="quick-add">
                        <a href="<?php bloginfo('url'); ?>?add-to-cart=<?php the_ID(); ?>">
                            Quick Add
                        </a>
                    </p>
                </div>
                </div>
                <?php endwhile; wp_reset_postdata(); ?>
            </div>
            <div class="swiper-pagination-products-top"></div>
        </div>
    </div>

</div>



<?php do_action( 'woocommerce_after_single_product' ); ?>
