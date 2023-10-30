<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- TEAM -->
<section id="<?php the_field('section_id');?>" class="<?php the_field('achtergrond');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?> team-section">
    <div class="container overflow-hidden relative z-40 team-block list-b-none">
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-1 gap-y-[35px] md:gap-y-[40px] lg:gap-y-[50px] xl:gap-y-[60px]">
            <?php
            if( have_rows('team') ):
                while( have_rows('team') ) : the_row(); ?>
                <?php
                $image = get_sub_field('afbeelding');
                $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                ?>
                <div class="col-span-1 post">
                    <div class="aspect-[15/16] overflow-hidden">
                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="object-cover object-center h-full bg-[#2B2828]">
                    </div>
                    <h4 class="text-40 leading-37 lg:text-40 lg:leading-36 font-tanker font-normal text-color pt-2 text-center lg:text-left"><?php the_sub_field('naam');?></h4>
                    <div class="h-[5px] w-[55%] bg-[#78B047] rounded-[full] my-[15px] mx-auto lg:mx-[unset]"></div>
                    <p class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen font-normal text-color uppercase tracking-wider text-center lg:text-left"><?php the_sub_field('functie');?></p>
                </div>
                <?php
                endwhile;
            else :
            endif;
            ?>
        </div>
        <div class="flex justify-center pt-4 lg:hidden">
            <button class="w-[163px] h-[45px] lg:w-[240px] lg:h-[58.5px] bg-black hover:bg-[#8CC63F] duration-300 flex justify-center items-center text-19 leading-19 lg:text-25 lg:leading-25 font-tanker font-normal text-white button-posts">Laad meer</button>
        </div>
    </div>
</section>
<?php endif; ?>
