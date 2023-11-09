<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="https://freekvonk.attentionseekers.studio/wp-content/themes/freekvonk/img/preview/titel-2.png" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- TITEL 2 -->
<section id="<?php the_field('section_id');?>" class="<?php the_field('achtergrond');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container">
        <h2 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-color"><?php the_field('titel');?></h2>
        <div class="h-[10px] w-fit mt-1 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" width="161.792" height="8.516" viewBox="0 0 161.792 8.516">
            <path id="Path_223" data-name="Path 223" d="M-1352.292,5970.209a508.511,508.511,0,0,1,52.458-3.235c25.541,0,38.532,1.494,64.525,1.991s30.166-.311,39.446,0" transform="translate(1355.073 -5964.474)" fill="none" stroke="#78b047" stroke-linecap="round" stroke-width="5"/>
            </svg>

        </div> 
    </div>
</section>
<?php endif; ?>
