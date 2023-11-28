 <?php 
/**
 * template name: contact
 */
 get_header() ?>



 <div class="container contact">
     <div class="row">
         <div class="col-lg-7">
             <div class="contactForm">
                 <p><?php echo get_field('contact-title')?></p>
                 <p>
                     <?php echo get_field('contact-text')?>
                 </p>
                 <div class="row c-form">
                     <?php echo do_shortcode('[contact-form-7 id="d4d7372" title="Contact form 1"]')?>

                 </div>
             </div>
         </div>
         <div class="col-lg-5">
             <div class="right-contact d-flex justify-content-center">
                 <div class="r-c-item">
                     <ul>
                         <li>
                             <?php $image = get_field('logo', 'option');

                        if( !empty( $image ) ): ?>

                             <a href="<?php echo home_url(); ?>">
                                 <img class="img_logo" src="<?php echo esc_url($image['url']); ?>"
                                     alt="<?php echo esc_attr($image['alt']); ?>" />
                             </a>

                             <?php endif; ?>
                         </li>
                         <?php if( have_rows('contact-footer', 'option') ): ?>
                         <?php while( have_rows('contact-footer', 'option') ): the_row(); ?>

                         <li>
                             <?php echo get_sub_field('icon'); ?>

                             <?php echo get_sub_field('text'); ?>
                         </li>

                         <?php endwhile; ?>
                         <?php endif; ?>
                     </ul>
                 </div>
             </div>
         </div>
     </div>
     <div class="map">
         <iframe
             src="https://www.google.com/maps/embed?pb=!1m17!1m8!1m3!1d251874.75494543585!2d105.8754266361395!3d9.460113896534422!3m2!1i1024!2i768!4f13.1!4m6!3e0!4m3!3m2!1d9.5904999!2d105.8335231!4m0!5e0!3m2!1svi!2s!4v1696316797837!5m2!1svi!2s"
             width="100%" height="450" style="border: 0" allowfullscreen="" loading="lazy"
             referrerpolicy="no-referrer-when-downgrade"></iframe>
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

 <?php get_footer() ?>