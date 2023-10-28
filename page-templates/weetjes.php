<?php
/**
 * Template name: XXX
 */


 get_header(); ?>
 
 
<main class="pt-[33px]">
    <!-- Swiper js 3d slider maken with tailwindcss -->
    <section class="py-12 overflow-x-hidden relative">
        <div class="container overflow-visible">
            <div class="swiper mySwiper-d3 overflow-visible px-3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-black w-full h-[500px] max-w-[354px] md:max-w-[unset]">
                        Slide 1
                    </div>
                    <div class="swiper-slide bg-black w-full h-[500px] max-w-[354px] md:max-w-[unset]">
                        Slide 2
                    </div>
                    <div class="swiper-slide bg-black w-full h-[500px] max-w-[354px] md:max-w-[unset]">
                        Slide 3
                    </div>
                </div>
              
            </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </section>


    <section class="py-12 relative">

            <div class="swiper mySwiper-video px-3">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-black w-[400px]  aspect-video h-auto">
                        Slide 1
                    </div>
                    <div class="swiper-slide bg-black aspect-video h-auto">
                        Slide 2
                    </div>
                    <div class="swiper-slide bg-black aspect-video h-auto">
                        Slide 3
                    </div>
                    <div class="swiper-slide bg-black aspect-video h-auto">
                        Slide 4
                    </div>
                </div>
              
            </div>

        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
    </section>
   
</main>




<?php get_footer(); ?>



