<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="https://freekvonk.attentionseekers.studio/wp-content/themes/freekvonk/img/preview/content-2.png" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- AUDIO -->
<section id="<?php echo get_field('section_id');?>" class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?> relative">
    <div class="container relative z-[40]">
        <div class="max-w-[390px] md:max-w-[603px] lg:max-w-[912px] mx-auto z-[40]">
            <audio controls class="w-full">
            <!-- <source src="horse.ogg" type="audio/ogg"> -->
            <source src="<?php echo get_field('mp3');?>" type="audio/mpeg">
            Je browser ondersteunt het audio-element niet.
            </audio>
        </div>
    </div>
</section>
<?php endif; ?>