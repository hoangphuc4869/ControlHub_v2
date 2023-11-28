<?php
/**
 * The template for displaying product content within loops
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/content-product.php.
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

// Ensure visibility.
if ( empty( $product ) || ! $product->is_visible() ) {
	return;
}
?>
<div class="col-lg-4 col-sm-6 ">
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