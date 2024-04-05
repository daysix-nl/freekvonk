<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="https://freekvonk.attentionseekers.studio/wp-content/themes/freekvonk/img/preview/foto-slider-3.png" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$image1 = get_field('afbeelding_1');
$image1_url = isset($image1['url']) ? esc_url($image1['url']) : '';
$image1_alt = isset($image1['alt']) ? esc_attr($image1['alt']) : '';
?>
<?php
$image2 = get_field('afbeelding_2');
$image2_url = isset($image2['url']) ? esc_url($image2['url']) : '';
$image2_alt = isset($image2['alt']) ? esc_attr($image2['alt']) : '';
?>
<?php
$image3 = get_field('afbeelding_3');
$image3_url = isset($image3['url']) ? esc_url($image3['url']) : '';
$image3_alt = isset($image3['alt']) ? esc_attr($image3['alt']) : '';
?>
<!-- FOTO SLIDER 3 -->
<section class="<?php echo get_field('achtergrond');?> relative overflow-hidden <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?> z-[2]">
   <div class="container grid-cols-3 gap-[11px] relative z-[40] hidden md:grid">
      <img src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>" class="aspect-square lg:aspect-[4/3] overflow-hidden object-cover object-center bg-[#2B2828]">
      <img src="<?php echo $image2_url; ?>" alt="<?php echo $image2_alt; ?>" class="aspect-square lg:aspect-[4/3] overflow-hidden object-cover object-center bg-[#2B2828]">
      <img src="<?php echo $image3_url; ?>" alt="<?php echo $image3_alt; ?>" class="aspect-square lg:aspect-[4/3] overflow-hidden object-cover object-center bg-[#2B2828]">
   </div>
   <div class="mySwiper-over-freek-image swiper md:hidden relative z-[40]">
      <div class="swiper-wrapper">
            <div class="swiper-slide w-fit"><img src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>" class="aspect-square lg:aspect-[4/3] object-cover object-center overflow-hidden w-full max-w-[235px] bg-[#2B2828]"></div>
            <div class="swiper-slide w-fit"><img src="<?php echo $image2_url; ?>" alt="<?php echo $image2_alt; ?>" class="aspect-square lg:aspect-[4/3] object-cover object-center overflow-hidden w-full max-w-[235px] bg-[#2B2828]"></div>
            <div class="swiper-slide w-fit"><img src="<?php echo $image3_url; ?>" alt="<?php echo $image3_alt; ?>" class="aspect-square lg:aspect-[4/3] object-cover object-center overflow-hidden w-full max-w-[235px] bg-[#2B2828]"></div>
      </div>
   </div>
</section>
<?php endif; ?>