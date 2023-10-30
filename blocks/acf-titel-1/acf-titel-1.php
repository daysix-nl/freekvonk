<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- TITEL 1 -->
<section id="<?php the_field('section_id');?>" class="<?php the_field('achtergrond');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container">
        <?php if (get_field('subtitel')): ?>   
        <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen font-normal text-color uppercase mb-[15px] tracking-wider text-center"><?php the_field('subtitel');?></h2>
        <?php endif; ?>
        <?php if (get_field('titel')): ?>   
        <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-color text-center max-w-[1043px] mx-auto"><?php the_field('titel');?></h3>
        <?php endif; ?>
        <div class="h-[5px] w-[305px] bg-[#78B047] mx-auto rounded-[full] mt-2"></div>  
    </div>
</section>
<?php endif; ?>
