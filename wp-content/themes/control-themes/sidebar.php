<div class="m-sidebar">
    <p>
        <?php echo get_field('sidebar_1','option') ?>
        <i class="far fa-angle-up"></i>

    </p>
    <?php wp_nav_menu (
array('theme_location' => 'menu-5', 'menu_class' => 'menu-sidebar'));?>
</div>


<div class="m-sidebar">
    <p><?php echo get_field('sidebar_2','option') ?>
        <i class="far fa-angle-up"></i>
    </p>
    <?php wp_nav_menu (
array('theme_location' => 'menu-6', 'menu_class' => 'menu-sidebar'));?>
</div>


<div class="m-sidebar">
    <p><?php echo get_field('sidebar_3','option') ?>
        <i class="far fa-angle-up"></i>
    </p>
    <?php wp_nav_menu (
array('theme_location' => 'menu-7', 'menu_class' => 'menu-sidebar'));?>
</div>


<div class="m-sidebar">
    <p><?php echo get_field('sidebar_4','option') ?>
        <i class="far fa-angle-up"></i>
    </p>
    <?php wp_nav_menu (
array('theme_location' => 'menu-8', 'menu_class' => 'menu-sidebar'));?>
</div>