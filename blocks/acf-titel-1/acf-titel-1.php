<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="https://freekvonk.attentionseekers.studio/wp-content/themes/freekvonk/img/preview/titel-1.png" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- TITEL 1 -->
<section id="<?php echo get_field('section_id');?>" class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
    <div class="container">
        <?php if (get_field('subtitel')): ?>   
        <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen font-normal text-color uppercase mb-[15px] tracking-wider text-center"><?php echo get_field('subtitel');?></h2>
        <?php endif; ?>
        <?php if (get_field('titel')): ?>   
        <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-color text-center max-w-[1043px] mx-auto"><?php echo get_field('titel');?></h3>
        <?php endif; ?>
        <div class="h-[10px] w-fit mx-auto rounded-[full] mt-2">
            
            <svg xmlns="http://www.w3.org/2000/svg" width="278.074" height="8.401" viewBox="0 0 278.074 8.401">
            <path id="Path_1106" data-name="Path 1106" d="M-1352.292,5970.209s46.951-3.235,91.5-3.235,67.212,1.494,112.551,1.991,52.619-.311,68.807,0" transform="translate(1354.958 -5964.474)" fill="none" stroke="#78b047" stroke-linecap="round" stroke-width="5"/>
            </svg>

        </div>  
        
    </div>
</section>
<?php endif; ?>
