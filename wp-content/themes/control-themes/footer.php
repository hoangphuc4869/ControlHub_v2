
	<div class="bg-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-6 col-12">
					<?php $image = get_field('logo', 'option');

			        if( !empty( $image ) ): ?>

			        	<a href="<?php echo home_url(); ?>">
			            	<img class="img_logo" src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
			            </a>

			        <?php endif; ?>

			        <ul class="contact-footer">
		        		<?php if( have_rows('contact-footer', 'option') ): ?>
				            <?php while( have_rows('contact-footer', 'option') ): the_row(); ?>

				                <li>
				                	<?php echo get_sub_field('icon'); ?>

				                	<?php echo get_sub_field('text'); ?>
				                </li>

				            <?php endwhile; ?>
				    	<?php endif; ?>
			        </ul>

			        <!-- ----------------------- -->

			        <ul class="list-social">
			        	<?php if( have_rows('list-social', 'option') ): ?>
				            <?php while( have_rows('list-social', 'option') ): the_row(); ?>

				            	<li>
				            		<a href="<?php echo get_sub_field('link'); ?>">
				            			<?php echo get_sub_field('icon'); ?>
				            		</a>
				            	</li>

				            <?php endwhile; ?>
				    	<?php endif; ?>
			        </ul>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<h3 class="title-footer"><?php echo get_field('we-are', 'option'); ?></h3>

					<?php wp_nav_menu (
				    array('theme_location' => 'menu-2', 'menu_class' => 'menu-footer'));?>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<h3 class="title-footer"><?php echo get_field('information', 'option'); ?></h3>

					<?php wp_nav_menu (
				    array('theme_location' => 'menu-3', 'menu_class' => 'menu-footer'));?>
				</div>

				<div class="col-lg-3 col-md-6 col-12">
					<h3 class="title-footer"><?php echo get_field('company', 'option'); ?></h3>

					<?php wp_nav_menu (
				    array('theme_location' => 'menu-4', 'menu_class' => 'menu-footer'));?>
				</div>
			</div>


			<!-- copyright -->

			<p class="copyright"><?php echo get_field('copyright', 'option'); ?></p>
		</div>
	</div>


	<!-- <a class="back-top" href="#"><i class="far fa-angle-up"></i></a> -->

   
<!-- Thư Viện jquery -->
<script src="<?php bloginfo('template_directory') ?>/vendor/jquery/jquery-3.6.0.min.js"></script>

<!-- bootstrap -->
<script src="<?php bloginfo('template_directory') ?>/vendor/bootstrap5/js/bootstrap.min.js"></script>

<!-- Thư Viện carousel js -->
<script src="<?php bloginfo('template_directory') ?>/vendor/OwlCarousel/dist/owl.carousel.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>

<!-- library animation js -->
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/aos.js"></script>


<!-- My Js -->

<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/style.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory') ?>/js/app.js"></script>

<?php wp_footer() ?>

</body>
</html>