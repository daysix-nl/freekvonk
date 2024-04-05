<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="https://freekvonk.attentionseekers.studio/wp-content/themes/freekvonk/img/preview/video-slider.png" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- VIDEO SLIDER -->
<section id="<?php echo get_field('section_id');?>" class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
    <div class="relative">
        <div class="swiper mySwiper-video overflow-visible">
            <div class="swiper-wrapper overflow-visible">

                <?php if( have_rows('video_slider') ): ?>
                    <?php $index = 0; ?>
                    <?php while( have_rows('video_slider') ): the_row();  ?>
                        <div class="swiper-slide bg-black md:aspect-video h-[265px] md:h-auto w-[174px] md:w-[411px] lg:w-[566px] overflow-hidden">
                            <button class="aspect-[16/11] relative overflow-hidden h-full w-full post" data-popup-id="popup-<?php echo $index; ?>">
                                <?php 
                                $image = get_sub_field('image');
                                if( !empty( $image ) ): ?>
                                    <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" class="h-full w-full object-cover object-center hover-blur duration-200">
                                <?php endif; ?>
                                <div class="absolute top-0 left-0 right-0 bottom-0 z-[2] duration-200 overflow-hidden text-left hidden lg:block">
                                    <div class="relative h-full w-full">
                                        <div class="absolute left-[25px] hover-content duration-200">
                                            <h4 class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen font-normal text-white uppercase tracking-wider pb-1"><?php echo get_sub_field('subtitle'); ?></h4>
                                            <div class="flex">
                                                <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-white"><?php echo get_sub_field('title'); ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </button>    
                        </div>
                                 <?php $index++; ?>
                    <?php endwhile; ?>
           
                <?php endif; ?>

                
            </div>
        </div>
        <div class="swiper-button-next-video hidden lg:flex"></div>
        <div class="swiper-button-prev-video hidden lg:flex"></div>
    </div>
</section>

<?php if( have_rows('video_slider') ): ?>
   <?php $index = 0; ?>
    <?php while( have_rows('video_slider') ): the_row();  ?>
        <div class="bg-black/40 fixed top-0 left-0 w-screen h-screen z-[1000] flex iframe-pop-up hidden" id="popup-<?php echo $index; ?>">
            <div class="m-auto flex flex-col">
                <button class="ml-auto mb-1">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 15.983 15.983">
                        <g id="Group_283" data-name="Group 283" transform="translate(2.121 2.121)">
                            <line id="Line_29" data-name="Line 29" y2="16.603" transform="translate(11.74 0) rotate(45)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3"/>
                            <line id="Line_30" data-name="Line 30" y2="16.603" transform="translate(11.74 11.74) rotate(135)" fill="none" stroke="#fff" stroke-linecap="round" stroke-width="3"/>
                        </g>
                    </svg>
                </button>
                <div class="iframe-video">
                    <?php echo get_sub_field('video'); ?>
                </div>
            </div>
        </div>
        <?php $index++; ?>
    <?php endwhile; ?>

<?php endif; ?>

<?php endif; ?>
