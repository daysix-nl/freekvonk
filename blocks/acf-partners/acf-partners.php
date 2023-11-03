<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- PARTNERS -->
<section id="<?php the_field('section_id');?>" class="<?php the_field('achtergrond');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container grid grid-cols-2 md:grid-cols-4 gap-x-3">
        <?php
        if( have_rows('partners') ):
            while( have_rows('partners') ) : the_row(); ?>
            <?php
            $image = get_sub_field('logo');
            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
            ?>
            <div class="col-span-1 flex justify-center items-center aspect-square w-full">
                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="grayscale opacity-60 object-cover object-center">
            </div>
            <?php
            endwhile;
        else :
        endif;
        ?>
    </div>
</section>
<?php endif; ?>
