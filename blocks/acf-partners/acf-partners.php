<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="https://freekvonk.attentionseekers.studio/wp-content/themes/freekvonk/img/preview/partners.png" style="width:100%; height:auto;">
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
            <div class="col-span-1 flex justify-center items-center aspect-square w-full relative partners-hover">
                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="grayscale opacity-60 object-cover object-center">
                <?php if(get_sub_field('title')): ?>
                    <div class="absolute top-0 left-0 w-full h-full bg-[#2B2828] hidden lg:flex flex-col text-center py-[25px] px-2 opacity-0 hover:opacity-100 transition-opacity">
                        <h3 class="text-20 leading-32 font-karlsen text-white text-center font-bold uppercase pb-1"><?php the_sub_field('title'); ?></h3>
                        <p class="text-16 leading-32 font-karlsen text-white text-center"><?php the_sub_field('text'); ?></p>
                    </div>
                <?php endif; ?>
            </div>
            <?php
            endwhile;
        else :
        endif;
        ?>
    </div>
</section>
<?php endif; ?>
