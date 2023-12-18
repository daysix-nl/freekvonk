<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="https://freekvonk.attentionseekers.studio/wp-content/themes/freekvonk/img/preview/foto-slider-1.png" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- FOTO SLIDER 1 -->
<section class="<?php the_field('achtergrond');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?> relative overflow-hidden z-[2]">
<div class="swiper mySwiper-fototwo overflow-visible relative">
      <div class="swiper-wrapper overflow-visible items-end pb-6 md:pb-8">
         <?php
         if( have_rows('foto_slider') ):
            while( have_rows('foto_slider') ) : the_row(); ?>
               <?php
               $image = get_sub_field('afbeelding');
               $image_url = isset($image['url']) ? esc_url($image['url']) : '';
               $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
               ?>
               <div class="swiper-slide w-auto">
                     <div class="relative overflow-hidden h-full w-full border-[8px] md:border-[15px] border-white">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full image-format-two w-full object-cover object-center bg-[#2B2828]">
                     </div>    
               </div>
            <?php
            endwhile;
         else :
         endif;
         ?>
      </div>  
      <div class="swiper-button-next-fototwo flex"></div>
      <div class="swiper-button-prev-fototwo flex"></div>

   </div>  
</section>
<?php endif; ?>