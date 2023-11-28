<!DOCTYPE html>
<html>

<head>
    <title>
        <?php if (is_front_page()) : ?>
        <?php bloginfo('name') ?>
        <?php elseif (is_single()) : ?>
        <?php echo wp_title('', true, ''); ?>
        <?php else : ?>
        <?php echo wp_title('', true, ''); ?>
        <?php endif ?>
    </title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" type="text/css"
        href="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/css/bootstrap.min.css">

    <!-- fontawesome -->
    <link rel="stylesheet" type="text/css"
        href="<?php bloginfo('template_directory') ?>/vendor/FontAwesome.Pro.5.15.2.Web/css/all.css">
   
    <!-- carousel -->
    <link rel="stylesheet"
        href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets/owl.carousel.min.css">
    <link rel="stylesheet"
        href="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/assets//owl.theme.default.min.css">

    <!-- swiper -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />

    <!-- font -->

    <link href="https://fonts.googleapis.com/css2?family=Space+Grotesk:wght@300;400;500;600;700&display=swap"
        rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet" />


    <!-- library animation -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/aos.css">
    <link rel="shortcut icon" type="image/png" type="text/css"
        href="<?php bloginfo('template_directory') ?>/images/icon.ico">

    <!-- My CSS -->
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/reset.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/css/custom-2.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory') ?>/style.css">

    <?php wp_head() ?>
</head>

<body>

    <div class="display-pc">

        <!-- header discount -->

        <div class="bg-header">
            <div class="container">
                <p class="discount-header"><?php echo get_field('discount-header', 'option'); ?></p>
            </div>
        </div>

        <!-- -------------- -->

        <div class="container">
            <div class="header-logo">
                <?php $image = get_field('logo', 'option');

		        if( !empty( $image ) ): ?>

                <a href="<?php echo home_url(); ?>">
                    <img class="img_logo" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>

                <?php endif; ?>

                <ul class="menu-icon">

                    <li><?php echo do_shortcode('[wp_search_form]'); ?></li>

                    <li><i class="fal fa-user"></i></li>

                    <li>
                        <?php global $woocommerce; ?>
                        <a class="cart-home" href="<?php echo WC()->cart->get_cart_url(); ?>"
                            title="<?php _e( 'Giỏ hàng ' ); ?>">
                            <span class="icon-cart"><i class="fal fa-shopping-cart"></i></span>

                            <span
                                class="quantity-home"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>


        <!-- menu pc -->

        <div class="bg-header bg-header-2">
            <div class="container">
                <?php wp_nav_menu (
			    array('theme_location' => 'menu-1', 'menu_class' => 'menu-pc'));?>
            </div>

        </div>
    </div>




    <!-- menu mobile -->

    <div class="display-mobile">

        <div class="bg-header bg-header-2">
            <div class="container">
                <ul class="menu-icon">
                    <li class="btn-search"><i class="far fa-search"></i></li>

                    <li><i class="fal fa-user"></i></li>

                    <li>
                        <?php global $woocommerce; ?>
                        <a class="cart-home" href="<?php echo WC()->cart->get_cart_url(); ?>"
                            title="<?php _e( 'Giỏ hàng ' ); ?>">
                            <span class="icon-cart"><i class="fal fa-shopping-cart"></i></span>

                            <span
                                class="quantity-home"><?php echo sprintf(_n('%d', '%d', $woocommerce->cart->cart_contents_count, 'woothemes'), $woocommerce->cart->cart_contents_count);?>
                            </span>
                        </a>
                    </li>
                </ul>
            </div>

        </div>


        <!-- tìm kiếm -->

        <div class="search-mobile">
            <?php echo do_shortcode('[wp_search_form]'); ?>
        </div>


        <!-- menu -->

        <div class="container">
            <div class="header-logo">
                <?php $image = get_field('logo', 'option');

		        if( !empty( $image ) ): ?>

                <a href="<?php echo home_url(); ?>">
                    <img class="img_logo" src="<?php echo esc_url($image['url']); ?>"
                        alt="<?php echo esc_attr($image['alt']); ?>" />
                </a>

                <?php endif; ?>

                <span class="icon-bar"><i class="fas fa-bars"></i></span>
            </div>
        </div>

        <div class="modal-menu">
            <?php wp_nav_menu (
		    array('theme_location' => 'menu-1', 'menu_class' => 'menu-mobile'));?>
        </div>


    </div>

    <?php if(!is_front_page()){ ?>
    <div class="breadcr">
        <div class="container breadcrumb-sec">
            <?php
                if ( function_exists('yoast_breadcrumb') ) {
                yoast_breadcrumb( '<p id="breadcrumbs">','</p>' );
                }
                ?>
        </div>
    </div>
    
    <?php } ?>