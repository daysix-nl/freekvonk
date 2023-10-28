<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<!-- AFBEELDING -->
<section class="<?php the_field('achtergrond');?> relative overflow-hidden z-[2]">
   <div class="relative aspect-[16/9] overflow-hidden">
        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-full h-full object-cover object-center">
   </div>     
</section>