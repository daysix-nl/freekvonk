<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="https://freekvonk.attentionseekers.studio/wp-content/themes/freekvonk/img/preview/content-3.png" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<!-- CONTENT 3 -->
<section id="<?php echo get_field('section_id');?>" class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?> relative">
    <div class="container relative z-[40] flex justify-between items-center flex-col lg:flex-row">
        <div class="order-1 <?php echo get_field('uitlijning');?> w-full lg:w-[448px]">
             <?php if (get_field('subtitel')): ?>   
            <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen font-normal text-color uppercase mb-[15px] tracking-wider"><?php echo get_field('subtitel');?></h2>
            <?php endif; ?>
            <?php if (get_field('titel')): ?>   
            <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-color"><?php echo get_field('titel');?></h3>
            <?php endif; ?>
             <div class="order-2 w-full lg:w-[493px] xl:w-[564px] hidden md:block lg:hidden h-[400px] md:h-[368px] lg:h-[100%] mt-[30px]">
                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full w-full object-cover object-center bg-[#2B2828]">
            </div>
            <?php if (get_field('tekst')): ?>   
            <div class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen font-normal text-color mt-[30px] text-editor"><?php echo get_field('tekst');?></div>
            <?php endif; ?>
        </div>
        <div class="order-2 w-full md:w-[564px] block md:hidden lg:block h-[400px] md:h-[368px] lg:h-[100%] mt-[30px] lg:mt-[unset]">
            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full w-full object-cover object-center bg-[#2B2828]">
        </div>
    </div>
</section>
<?php endif; ?>