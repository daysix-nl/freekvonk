<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="https://freekvonk.attentionseekers.studio/wp-content/themes/freekvonk/img/preview/gadient.png" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$image1 = get_field('achtergrond_patroon');
$image1_url = isset($image1['url']) ? esc_url($image1['url']) : '';
$image1_alt = isset($image1['alt']) ? esc_attr($image1['alt']) : '';
?>
<!-- ACHTERGROND GRADIENT -->
<section id="<?php the_field('section_id');?>" class="bg-gradient-to-b <?php the_field('from');?> <?php the_field('to');?> relative overflow-hidden">
    <div class="w-full z-[60] relative">
        <?php $allowed_blocks_text = ['acf/acf-afbeelding', 'acf/acf-button', 'acf/acf-cases', 'acf/acf-content-1', 'acf/acf-content-2', 'acf/acf-content-3', 'acf/acf-content-slider', 'acf/acf-formulier', 'acf/acf-foto-slider-1', 'acf/acf-foto-slider-3', 'acf/acf-header-1', 'acf/acf-header-2', 'acf/acf-nieuws-slider-1', 'acf/acf-nieuws-slider-2', 'acf/acf-partners', 'acf/acf-shows', 'acf/acf-spreekbeurt', 'acf/acf-team', 'acf/acf-testimonials', 'acf/acf-titel-1', 'acf/acf-titel-2', 'acf/acf-uitgelicht', 'acf/acf-verhalen', 'acf/acf-video-slider']; ?> <InnerBlocks allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks_text ) ); ?>" />
    </div>
    <?php if (get_field('achtergrond_patroon')): ?>   
    <img src="<?php echo $image1_url; ?>" alt="<?php echo $image1_alt; ?>" class="z-[30] h-full w-full object-cover object-center absolute top-0">
    <?php endif; ?>
</section>
<?php endif; ?>
