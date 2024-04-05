<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="https://freekvonk.attentionseekers.studio/wp-content/themes/freekvonk/img/preview/content-2.png" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- CONTENT 2 -->
<section id="<?php echo get_field('section_id');?>" class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?> relative">
    <div class="container relative z-[40]">
        <?php if (get_field('subtitel')): ?>  
        <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen font-normal text-color uppercase mb-[15px] tracking-wider text-center"><?php echo get_field('subtitel');?></h2>
        <?php endif; ?>
        <?php if (get_field('titel')): ?>  
        <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-color text-center pb-[30px]"><?php echo get_field('titel');?></h3>
        <?php endif; ?>
        <?php if (get_field('tekst')): ?>  
        <div class="max-w-[390px] md:max-w-[603px] lg:max-w-[912px] mx-auto z-[40]">
            <div class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen font-normal text-color text-center text-editor z-[40]"><?php echo get_field('tekst');?></div>
        </div>
        <?php endif; ?>
    </div>
</section>
<?php endif; ?>