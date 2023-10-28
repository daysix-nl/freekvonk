
<!-- FOTO SLIDER 1 -->
<section class="<?php the_field('achtergrond');?> relative overflow-hidden z-[2]">
<div class="swiper mySwiper-foto overflow-visible relative">
      <div class="swiper-wrapper overflow-visible items-end">
         <?php
         if( have_rows('foto_slider') ):
            while( have_rows('foto_slider') ) : the_row(); ?>
               <?php
               $image = get_sub_field('afbeelding');
               $image_url = isset($image['url']) ? esc_url($image['url']) : '';
               $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
               ?>
               <div class="swiper-slide w-auto">
                     <div class="relative overflow-hidden h-full w-full">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full image-format w-full object-cover object-center">
                     </div>    
               </div>
            <?php
            endwhile;
         else :
         endif;
         ?>
      </div>  
      <div class="swiper-button-next-foto hidden lg:flex"></div>
      <div class="swiper-button-prev-foto hidden lg:flex"></div>
   </div>  
</section>