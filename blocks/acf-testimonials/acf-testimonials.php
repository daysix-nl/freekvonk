<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="https://freekvonk.attentionseekers.studio/wp-content/themes/freekvonk/img/preview/testimonials.png" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- CONTENT SLIDER -->
<section id="<?php the_field('section_id');?>" class="<?php the_field('achtergrond');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container hidden lg:block testimonial">
        <div class="grid grid-cols-2 gap-y-[50px] gap-x-[30px]">
            <?php
            if( have_rows('testimonial') ):
                while( have_rows('testimonial') ) : the_row(); ?>
                    <?php
                    $image = get_sub_field('afbeelding');
                    $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                    $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                    ?>
                    <div class="w-full">
                        <h6 class="text-[110px] leading-[110px] lg:text-[140px] lg:leading-[140px] font-tanker font-normal text-[#8CC63F] text-left md:text-center lg:text-left w-full block h-[140px] mb-[-90px]">“</h6>
                        <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-color mt-[30px] line-clamp-5"><?php the_sub_field('quote');?></h3>
                       
                        <div class="flex items-center mt-3">
                            <div class="w-[103px] h-[103px] lg:w-[154px] lg:h-[154px] aspect-square rounded-full overflow-hidden">
                                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="min-w-full min-h-full object-cover object-center bg-[#FFFFFF]">
                            </div>
                            <div class="ml-[15px] lg:ml-[30px]">
                                <h4 class="text-24 leading-32 font-karlsen font-semibold tracking-wider text-color uppercase"><?php the_sub_field('naam');?></h4>
                                <h5 class="text-24 leading-32 font-karlsen font-normal tracking-wider text-color uppercase"><?php the_sub_field('functie');?></h5>
                            </div>
                        </div>
                         <div class="h-2 t my-3">
                            <svg width="100%" height="auto" viewBox="0 0 601.994 3.235" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                    <g id="Group" stroke="#78B047" stroke-width="5">
                                        <path d="M0,3.235 C0,3.235 103.586,0 201.877,0 C300.168,0 350.164,1.494 450.194,1.991 C550.224,2.488 566.285,1.68 601.994,1.991" id="Path_186"></path>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                <?php
                endwhile;
            else :
            endif;
            ?>
        </div>
    </div>

    <div class="relative w-screen overflow-hidden mySwiper-over-freek-section block lg:hidden">
        <div class="swiper mySwiper-over-freek">
            <div class="swiper-wrapper mb-10">
                <?php
                if( have_rows('testimonial') ):
                    while( have_rows('testimonial') ) : the_row(); ?>
                    <?php
                    $image = get_sub_field('afbeelding');
                    $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                    $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                    ?>
                    <div class="swiper-slide">
                        <div class="container">
                            <div class="w-full">
                                <h6 class="text-[110px] leading-[110px] lg:text-[140px] lg:leading-[140px] font-tanker font-normal text-[#8CC63F] text-left md:text-center lg:text-left w-full block h-[140px] mb-[-90px]">“</h6>
                                <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-color mt-[30px] line-clamp-5"><?php the_sub_field('quote');?></h3>
                                <div class="flex items-center mt-3">
                                    <div class="w-[103px] h-[103px] lg:w-[154px] lg:h-[154px] aspect-square rounded-full overflow-hidden">
                                        <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="min-w-full min-h-full object-cover object-center bg-[#FFFFFF]">
                                    </div>
                                    <div class="ml-[15px] lg:ml-[30px]">
                                        <h4 class="text-24 leading-32 font-karlsen font-semibold tracking-wider text-color uppercase"><?php the_sub_field('naam');?></h4>
                                        <h5 class="text-24 leading-32 font-karlsen font-normal tracking-wider text-color uppercase"><?php the_sub_field('functie');?></h5>
                                    </div>
                                </div>
                                 <div class="h-2 t xl:max-w-[426px] my-3">
                                    <svg width="100%" height="auto" viewBox="0 0 601.994 3.235" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                            <g id="Group" stroke="#78B047" stroke-width="5">
                                                <path d="M0,3.235 C0,3.235 103.586,0 201.877,0 C300.168,0 350.164,1.494 450.194,1.991 C550.224,2.488 566.285,1.68 601.994,1.991" id="Path_186"></path>
                                            </g>
                                        </g>
                                    </svg>
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
        <div class="swiper-button-next-over-freek"></div>
        <div class="swiper-button-prev-over-freek"></div>
        <div class="swiper-pagination swiper-pagination-over-freek"></div>
    </div>

</section>
<?php endif; ?>
