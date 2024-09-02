<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="https://freekvonk.attentionseekers.studio/wp-content/themes/freekvonk/img/preview/formulier.png" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$link = get_field('link');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>
<!-- FORMULIER -->
<section id="<?php echo get_field('section_id');?>" class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
    
    <div class="container formulier formulier-ah">
        <div class="w-full md:w-[480px] lg:w-[448px] mx-auto">
            <?php echo do_shortcode('[gravityform id="4" title="false" description="false" ajax="true"]'); ?>
            <a href="<?php echo $link_url; ?>" class="font-karlsen text-12 leading-20 text-white italic mt-[30px] block" target="<?php echo $link_target; ?>"><?php echo get_field('tekst');?></a>
        </div>
    </div>
</section>
<?php endif; ?>
