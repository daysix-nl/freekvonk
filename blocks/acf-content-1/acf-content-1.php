<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<?php
$image1 = get_field('achtergrond_patroon');
$image1_url = isset($image1['url']) ? esc_url($image1['url']) : '';
$image1_alt = isset($image1['alt']) ? esc_attr($image1['alt']) : '';
?>
<?php
$image3 = get_field('logo');
$image3_url = isset($image3['url']) ? esc_url($image3['url']) : '';
$image3_alt = isset($image3['alt']) ? esc_attr($image3['alt']) : '';
?>

<!-- CONTENT 1 -->
<section id="<?php the_field('section_id');?>" class="<?php the_field('achtergrond');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="grid grid-cols-1 lg:grid-cols-2">
        <div class="lg:aspect-square h-[390px] md:h-[450px] lg:h-[47.5vw] lg:w-[50vw] overflow-hidden relative order-1 <?php the_field('uitlijning');?>">
            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full w-full object-cover object-center bg-[#2B2828]">
            <?php if (get_field('logo')): ?>  
            <div class="absolute top-0 left-0 right-0 bottom-0 flex justify-center items-center">
                <img src="<?php echo $image3_url; ?>" alt="<?php echo $image3_alt; ?>" class="h-[55%]">
            </div>
            <?php endif; ?>
        </div>
        <div class="lg:aspect-square  h-full w-full lg:h-[47.5vw] lg:w-[50vw] lg:flex lg:items-center lg:justify-center relative <?php the_field('achtergrond');?> order-2">
            <div class="max-w-[390px] px-2 md:px-[unset] md:max-w-[603px] mx-auto lg:w-[506px] lg:max-h-[47.5vh] lg:overflow-hidden z-[40] py-[50px] lg:py-[unset]">
                <?php if (get_field('subtitel')): ?>   
                <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen font-normal text-color uppercase mb-[15px] tracking-wider"><?php the_field('subtitel');?></h2>
                <?php endif; ?>
                <?php if (get_field('titel')): ?>   
                <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-color"><?php the_field('titel');?></h3>
                <?php endif; ?>
                <?php if (get_field('tekst')): ?>   
                <div class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen font-normal text-color mt-[30px] text-editor"><?php the_field('tekst');?></div>
                <?php endif; ?>
            </div>
            <?php if (get_field('achtergrond_patroon')): ?>   
            <img src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>" class="z-[30] h-full w-full object-cover object-center absolute top-0">
            <?php endif; ?>
        </div>
    </div>
</section>
<?php endif; ?>