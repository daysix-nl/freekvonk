<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="https://freekvonk.attentionseekers.studio/wp-content/themes/freekvonk/img/preview/button.png" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$link = get_field('link');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>
<!-- CALL TO ACTION -->
<section id="<?php the_field('section_id');?>" class="<?php the_field('achtergrond');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container  text-center">
        <h2 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-color text-center max-w-[1043px] mx-auto"><?php the_field('titel');?></h2>
        <a href="<?php echo $link_url; ?>" class="w-[240px] h-[45px] md:w-[240px] lg:w-[240px] lg:h-[58.5px] bg-[#8CC63F] duration-300 flex justify-center items-center text-19 leading-19 lg:text-25 lg:leading-25 font-tanker font-normal text-white mx-auto my-3" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
        <p class="text-16 leading-32 lg:text-16 lg:leading-32 font-karlsen font-normal text-color"><?php the_field('tekst');?></p>
    </div>
</section>
<?php endif; ?>
