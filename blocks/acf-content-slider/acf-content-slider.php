<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="https://freekvonk.attentionseekers.studio/wp-content/themes/freekvonk/img/preview/content-slider.png" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- CONTENT SLIDER -->
<section id="<?php echo get_field('section_id');?>" class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?> ">
    <div class="relative w-screen overflow-hidden mySwiper-over-freek-section uitgelicht swiper-container">
        <div class="swiper mySwiper-over-freek-content">
            <div class="swiper-wrapper">
                <?php
                if( have_rows('slider') ):
                    while( have_rows('slider') ) : the_row(); ?>
                    <?php
                    $image = get_sub_field('afbeelding');
                    $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                    $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                    ?>
                    <div class="swiper-slide">
                        <div class="grid grid-cols-1 lg:grid-cols-2">
                            <div class="lg:aspect-square h-[242px] md:h-[450px] lg:h-[46vw] lg:w-[50vw] relative">
                                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full w-full object-cover object-center bg-[#2B2828]">
                            </div>
                            <div class="lg:aspect-square h-[460px] w-full lg:h-[46vw] lg:w-[50vw] lg:flex lg:items-center lg:justify-center <?php echo get_sub_field('achtergrond');?> overflow-hidden">
                                <div class="max-w-[390px] px-2 md:px-[unset] md:max-w-[603px] mx-auto lg:w-[506px] h-[385px] lg:max-h-[500px] z-[40] py-[60px] lg:py-[unset] overflow-hidden">
                                    <?php if (get_sub_field('titel')): ?>  
                                    <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-color"><?php echo get_sub_field('titel');?></h3>
                                    <?php endif; ?>
                                    <?php if (get_sub_field('tekst')): ?>  
                                    <div class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen font-normal text-color mt-[30px] text-editor"><?php echo get_sub_field('tekst');?></div>
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
        <div class="swiper-button-next-over-freek"></div>
        <div class="swiper-button-prev-over-freek"></div>
        <div class="swiper-pagination swiper-pagination-content"></div>
        </div>

    </div>
</section>
<?php endif; ?>
