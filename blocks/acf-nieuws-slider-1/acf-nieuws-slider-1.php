<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="https://freekvonk.attentionseekers.studio/wp-content/themes/freekvonk/img/preview/nieuws-slider-1.png" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- NIEUWS SLIDER 1 -->
<section id="<?php the_field('section_id');?>" class="<?php the_field('achtergrond');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="relative w-screen overflow-hidden mySwiper-over-freek-section uitgelicht black-slider">
        <div class="swiper mySwiper-over-freek-content">
            <div class="swiper-wrapper">
                <?php
                    $loop = new WP_Query( array(
                        'post_type' => 'nieuws',
                        'posts_per_page' => 8,
                        'orderby' => 'date',
                        'order' => 'ASC'
                    )
                    );
                    ?>
                <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID();  ?>
                <?php
                $thumbnail_id = get_post_thumbnail_id(get_the_ID());
                $thumbnail_info = wp_get_attachment_image_src($thumbnail_id, 'full');
                $image_url = isset($thumbnail_info[0]) ? esc_url($thumbnail_info[0]) : '';
                $image_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
                ?>
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <!-- AFBEELDING -->
                        <div class="h-[242px] md:h-[450px] lg:h-[46vw] lg:w-[50vw] overflow-hidden relative">
                            <!-- <div class="bg-[#ECE1D5] px-1 h-[31px] absolute top-0 left-0 flex justify-center items-center md:hidden">
                                <p class="text-[#0A1F16] text-14 leading-28 text-center font-karlsen font-normal tracking-wider"><?php echo get_the_date('j F Y');?></p>
                            </div> -->
                            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full w-full object-cover object-center">
                        </div>
                        <!-- CONTENT -->
                        <div class="lg:aspect-square h-[460px] w-full lg:h-[46vw] lg:w-[50vw] lg:flex lg:items-center lg:justify-center overflow-hidden bg-[#EFE7DE]">
                            <div class="max-w-[390px] px-2 md:px-[unset] md:max-w-[603px] mx-auto lg:w-[506px] h-[385px] lg:max-h-[500px] z-[40] py-[60px] lg:py-[unset] overflow-hidden relative">
                                <a href="<?php the_permalink();?>">
                                <!-- <p class="text-14 leading-26 lg:text-18 lg:leading-[32px] font-karlsen font-normal text-black tracking-wider mb-[15px] hidden md:flex z-[40]"><?php echo get_the_date('j F Y');?></p> -->
                                <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen font-normal text-black uppercase mb-[25px] tracking-wider z-[40]">Allerlaatste nieuws</h2>
                                <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-black z-[40]"><?php the_title();?></h3>
                                <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen font-normal text-black mt-[30px] z-[40] line-clamp-4"><?php the_field('teaser_tekst', $post_id);?></p>
                                <p class="text-16 leading-28 font-karlsen font-semibold text-black mt-[20px] z-[40] block">Lees meer</p>
                                </a>
                            </div>
                            <img src="/wp-content/themes/freekvonk/img/local/patroon-9.png" alt="" class="z-[30] h-full w-full object-cover object-center absolute top-0 left-0 right-0">
                        </div>
                    </div>
                </div>
                <?php endwhile; wp_reset_query(); ?>
                
                
                
            </div>
        </div>
        <div class="swiper-button-next-over-freek"></div>
        <div class="swiper-button-prev-over-freek"></div>
        <div class="swiper-pagination swiper-pagination-news"></div>
    </div>

</section>
<?php endif; ?>
