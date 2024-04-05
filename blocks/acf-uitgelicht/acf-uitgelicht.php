<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="https://freekvonk.attentionseekers.studio/wp-content/themes/freekvonk/img/preview/uitgelicht.png" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- UITGELICHT -->
<section id="<?php echo get_field('section_id');?>" class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
    <div class="w-full relative">
        <div class="overflow-x-hidden relative ">
            <div class="container overflow-visible uitgelicht">
                <div class="swiper mySwiper-d3 overflow-visible">
                    <div class="swiper-wrapper">
                        <?php
                        if( have_rows('uitgelicht') ):
                            while( have_rows('uitgelicht') ) : the_row(); ?>
                            <?php
                            $image = get_sub_field('afbeelding');
                            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                            ?>
                            <?php
                            $link = get_sub_field('link');
                            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                            ?>
                            <div class="swiper-slide <?php echo get_sub_field('achtergrond');?> w-full lg:max-w-[1145px]">
                                <div class="flex flex-col lg:flex-row">
                                    <div class="h-[499px] md:h-[674px] lg:h-[640px] w-full lg:w-[452px] flex items-center justify-center relative overflow-hidden">
                                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-full h-full object-cover object-center z-[1] overflow-hidden bg-[#2B2828]">
                                    </div>
                                    <div class="flex items-center justify-center w-full lg:w-[693px]">
                                        <div class="max-w-full px-2 lg:px-[unset] lg:max-w-[510px] xl:max-w-[570px] py-[50px] md:py-[45px] lg:py-[unset]">
                                            <?php if (get_sub_field('subtitel')): ?>   
                                            <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen font-normal text-color uppercase mb-[15px] tracking-wider"><?php echo get_sub_field('subtitel');?></h2>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('titel')): ?>   
                                            <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-color"><?php echo get_sub_field('titel');?></h3>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('tekst')): ?>    
                                            <div class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen font-normal text-color mt-[30px] text-editor"><?php echo get_sub_field('tekst');?></div>
                                            <?php endif; ?>
                                            <?php if (get_sub_field('link')): ?>   
                                            <a href="<?php echo $link_url; ?>" class="w-[163px] h-[45px] lg:w-[240px] lg:h-[58.5px] bg-[#8CC63F] duration-300 flex justify-center items-center text-19 leading-19 lg:text-25 lg:leading-25 font-tanker font-normal text-white <?php echo get_sub_field('glow');?> mt-[30px]" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php
                            endwhile;
                        else :
                        endif;
                        ?>
                    </div>
                </div>
            </div>
            <?php
            if (have_rows('uitgelicht')) :
                $count = count(get_field('uitgelicht')); // Het aantal items in het veld 'uitgelicht'
                if ($count === 1) {
                    while (have_rows('uitgelicht')) : the_row();
                    endwhile;
                } else {
                    while (have_rows('uitgelicht')) : the_row(); ?>
                    <div class="swiper-button-next hidden lg:flex"></div>
                    <div class="swiper-button-prev hidden lg:flex"></div>
                        <?php
                    endwhile;
                }
            else :
            endif;
            ?>
        </div>
    </div>
</section>
<?php endif; ?>
