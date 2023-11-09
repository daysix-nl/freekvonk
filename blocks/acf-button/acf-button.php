<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="/wp-content/themes/freekvonk/img/preview/button.png" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$link = get_field('link');
$link_url = isset($link['url']) ? esc_url($link['url']) : '';
$link_text = isset($link['title']) ? esc_html($link['title']) : '';
$link_target = isset($link['target']) ? esc_attr($link['target']) : '';
?>
<!-- BOTTON -->
<section id="<?php the_field('section_id');?>" class="<?php the_field('achtergrond');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container">
        <a href="<?php echo $link_url; ?>" class="w-[100%] h-[45px] md:w-[240px] lg:w-[240px] lg:h-[58.5px] bg-[#8CC63F] duration-300 flex justify-center items-center text-19 leading-19 lg:text-25 lg:leading-25 font-tanker font-normal text-white mx-auto <?php the_field('glow');?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
    </div>
</section>
<?php endif; ?>
