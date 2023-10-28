<?php
$image1 = get_field('achtergrond_patroon');
$image1_url = isset($image1['url']) ? esc_url($image1['url']) : '';
$image1_alt = isset($image1['alt']) ? esc_attr($image1['alt']) : '';
?>
<!-- CONTENT 2 -->
<section id="<?php the_field('section_id');?>" class="<?php the_field('achtergrond');?> relative">
    <div class="container py-[80px] relative z-[40]">
        <?php if (get_field('subtitel')): ?>  
        <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen font-normal text-color uppercase mb-[15px] tracking-wider text-center"><?php the_field('subtitel');?></h2>
        <?php endif; ?>
        <?php if (get_field('titel')): ?>  
        <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-color text-center"><?php the_field('titel');?></h3>
        <?php endif; ?>
        <?php if (get_field('tekst')): ?>  
        <div class="max-w-[390px] md:max-w-[603px] lg:max-w-[912px] mx-auto z-[40] pt-[30px]">
            <div class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen font-normal text-color text-center text-editor z-[40]"><?php the_field('tekst');?></div>
        </div>
        <?php endif; ?>
    </div>
    <?php if (get_field('achtergrond_patroon')): ?>   
    <img src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>" class="z-[30] h-full w-full object-cover object-center absolute top-0">
    <?php endif; ?>
</section>