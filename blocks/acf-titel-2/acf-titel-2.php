<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- TITEL 2 -->
<section id="<?php the_field('section_id');?>" class="<?php the_field('achtergrond');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container">
        <h2 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-color"><?php the_field('titel');?></h2>
        <div class="h-[5px] w-[150px] bg-[#78B047] mt-2 rounded-full"></div> 
    </div>
</section>
<?php endif; ?>
