<?php
/**
 * Template name: XXX
 */


 get_header(); 
 
 
include __DIR__ . '../../componenten/menu_component.php';

$menuItems = [
    ['href' => '#item-1', 'name' => 'NIEUWS'],
    ['href' => '#item-2', 'name' => 'VERHALEN'],
    ['href' => '#item-3', 'name' => 'Spreekbeurt'],
    ['href' => '#item-4', 'name' => 'OUDER NIEUWS'],
];

?>
 
 
<main class="pt-[74px]">
   <?php 
        renderMenuComponent('NIEUWS & MEER', $menuItems); 
    ?>
   <!-- AFBEELDING - CONTENT SLIDER -->
    <section class="relative w-screen overflow-hidden mySwiper-over-freek-section black-slider mt-3 md:mt-4">
        <div class="swiper mySwiper-over-freek">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <!-- AFBEELDING -->
                        <div class="lg:aspect-square h-[390px] md:h-[450px] lg:h-[50vw] lg:w-[50vw]  relative">
                            <div class="bg-[#ECE1D5] px-1 h-[31px] absolute top-0 left-0 flex justify-center items-center md:hidde">
                                <p class="text-[#0A1F16] text-14 leading-28 text-center font-karlsen">12 juni 2023</p>
                            </div>
                            <img src="/wp-content/themes/freekvonk/img/local/super-freek-show.jpeg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <!-- CONTENT -->
                        <div class="lg:aspect-square bg-[#EFE7DE] min-h-[460px] md:min-h-[430px] lg:min-h-[unset] h-full w-full lg:h-[50vw] lg:w-[50vw] lg:flex lg:items-center lg:justify-center relative">
                            <div class="max-w-[390px] md:max-w-[603px] mx-auto lg:w-[506px] lg:max-h-[calc(50vw-60px)] lg:overflow-y-auto z-[40] py-[60px] lg:py-[unset]">
                                <p class="text-14 leading-26 lg:text-18 lg:leading-[32px] font-karlsen text-black mb-[15px] hidden md:flex">12 juni 2023</p>
                                <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen text-black uppercase mb-[15px] tracking-wider">ALLERLAATSTE NIEUWS</h2>
                                <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-black">De Super Freek Show</h3>
                                <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen text-black mt-[30px]">Freek maakt een ontdekkingstocht over het verst gelegen continent: Australië. Van alle slangen wereldwijd is maar 15 procent giftig, maar in Australië is dat meer dan de helft. Ook komt hij er giftige kikkers, kwallen, vissen en zeeslangen tegen. </p>
                                <img src="/wp-content/themes/freekvonk/img/local/patroon-9.png" alt="" class="z-[30] h-full w-full object-cover object-center absolute top-0 left-0 right-0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <!-- AFBEELDING -->
                        <div class="lg:aspect-square h-[390px] md:h-[450px] lg:h-[50vw] lg:w-[50vw]  relative">
                            <div class="bg-[#ECE1D5] px-1 h-[31px] absolute top-0 left-0 flex justify-center items-center md:hidde">
                                <p class="text-[#0A1F16] text-14 leading-28 text-center font-karlsen">12 juni 2023</p>
                            </div>
                            <img src="/wp-content/themes/freekvonk/img/local/super-freek-show.jpeg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <!-- CONTENT -->
                        <div class="lg:aspect-square bg-[#EFE7DE] min-h-[460px] md:min-h-[430px] lg:min-h-[unset] h-full w-full lg:h-[50vw] lg:w-[50vw] lg:flex lg:items-center lg:justify-center relative">
                            <div class="max-w-[390px] md:max-w-[603px] mx-auto lg:w-[506px] lg:max-h-[calc(50vw-60px)] lg:overflow-y-auto z-[40] py-[60px] lg:py-[unset]">
                                <p class="text-14 leading-26 lg:text-18 lg:leading-[32px] font-karlsen text-black mb-[15px] hidden md:flex">12 juni 2023</p>
                                <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen text-black uppercase mb-[15px] tracking-wider">ALLERLAATSTE NIEUWS</h2>
                                <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-black">De Super Freek Show</h3>
                                <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen text-black mt-[30px]">Freek maakt een ontdekkingstocht over het verst gelegen continent: Australië. Van alle slangen wereldwijd is maar 15 procent giftig, maar in Australië is dat meer dan de helft. Ook komt hij er giftige kikkers, kwallen, vissen en zeeslangen tegen. </p>
                                <img src="/wp-content/themes/freekvonk/img/local/patroon-9.png" alt="" class="z-[30] h-full w-full object-cover object-center absolute top-0 left-0 right-0">
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <!-- AFBEELDING -->
                        <div class="lg:aspect-square h-[390px] md:h-[450px] lg:h-[50vw] lg:w-[50vw]  relative">
                                     <div class="bg-[#ECE1D5] px-1 h-[31px] absolute top-0 left-0 flex justify-center items-center md:hidde">
                                <p class="text-[#0A1F16] text-14 leading-28 text-center font-karlsen">12 juni 2023</p>
                            </div>
                            <img src="/wp-content/themes/freekvonk/img/local/super-freek-show.jpeg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <!-- CONTENT -->
                        <div class="lg:aspect-square bg-[#EFE7DE] min-h-[460px] md:min-h-[430px] lg:min-h-[unset] h-full w-full lg:h-[50vw] lg:w-[50vw] lg:flex lg:items-center lg:justify-center relative">
                            <div class="max-w-[390px] md:max-w-[603px] mx-auto lg:w-[506px] lg:max-h-[calc(50vw-60px)] lg:overflow-y-auto z-[40] py-[60px] lg:py-[unset]">
                                <p class="text-14 leading-26 lg:text-18 lg:leading-[32px] font-karlsen text-black mb-[15px] hidden md:flex">12 juni 2023</p>
                                <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen text-black uppercase mb-[15px] tracking-wider">ALLERLAATSTE NIEUWS</h2>
                                <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-black">De Super Freek Show</h3>
                                <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen text-black mt-[30px]">Freek maakt een ontdekkingstocht over het verst gelegen continent: Australië. Van alle slangen wereldwijd is maar 15 procent giftig, maar in Australië is dat meer dan de helft. Ook komt hij er giftige kikkers, kwallen, vissen en zeeslangen tegen. </p>
                                <img src="/wp-content/themes/freekvonk/img/local/patroon-9.png" alt="" class="z-[30] h-full w-full object-cover object-center absolute top-0 left-0 right-0">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="grid grid-cols-1 lg:grid-cols-2">
                        <!-- AFBEELDING -->
                        <div class="lg:aspect-square h-[390px] md:h-[450px] lg:h-[50vw] lg:w-[50vw]  relative">
                            <div class="bg-[#ECE1D5] px-1 h-[31px] absolute top-0 left-0 flex justify-center items-center md:hidden">
                                <p class="text-[#0A1F16] text-14 leading-28 text-center font-karlsen">12 juni 2023</p>
                            </div>
                            <img src="/wp-content/themes/freekvonk/img/local/super-freek-show.jpeg" alt="" class="h-full w-full object-cover object-center">
                        </div>
                        <!-- CONTENT -->
                        <div class="lg:aspect-square bg-[#EFE7DE] min-h-[460px] md:min-h-[430px] lg:min-h-[unset] h-full w-full lg:h-[50vw] lg:w-[50vw] lg:flex lg:items-center lg:justify-center relative">
                            <div class="max-w-[390px] md:max-w-[603px] mx-auto lg:w-[506px] lg:max-h-[calc(50vw-60px)] lg:overflow-y-auto z-[40] py-[60px] lg:py-[unset]">
                                <p class="text-14 leading-26 lg:text-18 lg:leading-[32px] font-karlsen text-black mb-[15px] hidden md:flex">12 juni 2023</p>
                                <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen text-black uppercase mb-[15px] tracking-wider">ALLERLAATSTE NIEUWS</h2>
                                <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-black">De Super Freek Show</h3>
                                <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen text-black mt-[30px]">Freek maakt een ontdekkingstocht over het verst gelegen continent: Australië. Van alle slangen wereldwijd is maar 15 procent giftig, maar in Australië is dat meer dan de helft. Ook komt hij er giftige kikkers, kwallen, vissen en zeeslangen tegen. </p>
                                <img src="/wp-content/themes/freekvonk/img/local/patroon-9.png" alt="" class="z-[30] h-full w-full object-cover object-center absolute top-0 left-0 right-0">
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>
        </div>
        <div class="swiper-button-next-over-freek"></div>
        <div class="swiper-button-prev-over-freek"></div>
         <div class="swiper-pagination"></div>
    </section>

    <section class="bg-[#183E0A] pt-6 xl:pt-7 pb-7 md:pb-5 lg:pb-4 xl:pb-5 relative ">
        <div class="container pb-7 md:pb-[35px] lg:pb-[60px] xl:pb-[65px] z-10 relative">
            <h4 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen text-white uppercase lg:mb-[20px] md:mb-[30px] mb-[35px] tracking-wider text-center">ALLERLAATSTE NIEUWS</h4>
            <h5 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white text-center xl:pb-3 lg:pb-2 md:pb-3 pb-[35px]">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  diam nonumy eirmod tempor invidunt ut labore et</h5>
            <div class="h-[5px] w-[305px] bg-[#78B047] mx-auto rounded-[full]"></div>
        </div>
        <div class="container grid grid-cols-1 lg:grid-cols-3  lg:gap-[15px] gap-2 z-10 relative">
            <?php
            $items = array_fill(0, 12, null);

            foreach ($items as $item) {
                ?>
                <a href="" class="item w-full col-span-1 relative overflow-hidden max-h-[314px] h-full md:max-h-[371px] lg:max-h-[294px] xl:max-h-[331px]">
                    <img src="/wp-content/themes/freekvonk/img/local/afbeelding-2.png" alt="" class="h-full w-full object-cover object-center hover-blur duration-200">
                    <div class="absolute left-[25px] hover-content duration-200 overflow-hidden w-[90%]">
              
                                <h4 class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-white uppercase tracking-wider pb-1">Subtitel</h4>
                                <div class="flex space-x-3">
                                    <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">Titel van de show</h3>
                                    <div class="w-[40px] flex items-end justify-end pr-2 pb-[3px] ml-auto">
                                        <svg class="h-[15px] lg:h-[31px]" width="auto" height="100%" viewBox="0 0 17.5283931 14.7362632" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                                <g id="Group" stroke="#FFFFFF" stroke-width="2">
                                                    <line x1="9.10107819" y1="3.23581491" x2="18.5600782" y2="4.15981491" id="Line_36" transform="translate(13.8306, 3.6978) rotate(45) translate(-13.8306, -3.6978)"></line>
                                                    <line x1="9.09955515" y1="11.5004482" x2="18.5585551" y2="10.5764482" id="Line_37" transform="translate(13.8291, 11.0384) rotate(135) translate(-13.8291, -11.0384)"></line>
                                                    <line x1="15.459" y1="7.36887006" x2="0" y2="7.36887006" id="Line_70"></line>
                                                </g>
                                            </g>
                                        </svg>
                                    </div>
                                </div>
             
                    </div>
                    
                </a>
                <?php
        }
        ?>
        </div>
        <div class="flex justify-center pt-4 z-10 relative">
            <button  id="loadMoreBtn" class="load-more-btn w-[163px] h-[45px] lg:w-[240px] lg:h-[58.5px]  hover:bg-black bg-[#8CC63F] duration-300 flex justify-center items-center text-19 leading-19 lg:text-25 lg:leading-25 font-tanker text-white button-posts">Laad meer</button>
        </div>    
        <img class="w-screen h-full object-cover absolute top-0 left-0 opacity-[0.01]" src="/wp-content/themes/freekvonk/img/local/background-nieuws.png" alt="">
    </section>

    <section class="bg-[#EFE7DE] pt-4 pb-6 md:pt-[45px] md:pb-[75px] lg:pt-8 lg:pb-10 ">
        <div class="container">
            <h4 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen text-[#38241B] uppercase lg:mb-[20px] md:mb-[30px] mb-[35px] tracking-wider text-center">ALLERLAATSTE NIEUWS</h4>
            <h5 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-[#0A1F16] text-center xl:pb-3 lg:pb-2 md:pb-3 pb-[35px]">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  diam nonumy eirmod tempor invidunt ut labore et</h5>
            <div class="h-[5px] w-[305px] bg-[#78B047] mx-auto rounded-[full]"></div>
        </div>
        <section class="relative pt-7 md:pt-7 lg:pt-10">
            <div class="swiper mySwiper-foto overflow-visible relative swiper-initialized swiper-horizontal swiper-backface-hidden">
                 <!-- <div class="absolute top-0 h-full left-0 w-[100px] md:w-[150px] bg-red-50 z-50 bg-left-gradient"></div>
                 <div class="absolute top-0 h-full right-0 w-[100px] md:w-[150px] bg-red-50 z-50 bg-right-gradient"></div> -->
                    <div class="swiper-wrapper overflow-visible items-end" style="transition-duration: 0ms; transition-delay: 0ms; transform: translate3d(-1216px, 0px, 0px);" id="swiper-wrapper-31beae74589d4cbc" aria-live="polite">
                        <div class="swiper-slide bg-black w-auto" role="group" aria-label="1 / 6" style="margin-right: 8px;" data-swiper-slide-index="0">
                            <a href="" class=" relative overflow-hidden h-full w-full">
                                <img src="/wp-content/themes/freekvonk/img/local/_DSC1637.png" alt="" class="h-full image-format w-full object-cover object-center">
                            </a>    
                        </div><div class="swiper-slide bg-black w-auto swiper-slide-prev" role="group" aria-label="2 / 6" style="margin-right: 8px;" data-swiper-slide-index="1">
                            <a href="" class=" relative overflow-hidden h-full w-full">
                                <img src="/wp-content/themes/freekvonk/img/local/_DSC1637.png" alt="" class="h-full image-format  w-full object-cover object-center">
                            </a>    
                        </div><div class="swiper-slide bg-black w-auto swiper-slide-active" role="group" aria-label="3 / 6" style="margin-right: 8px;" data-swiper-slide-index="2">
                            <a href="" class="a relative overflow-hidden h-full w-full">
                                <img src="/wp-content/themes/freekvonk/img/local/afbeelding-slider.jpeg" alt="" class="h-full image-format  w-full object-cover object-center">
                            </a>    
                        </div><div class="swiper-slide bg-black w-auto swiper-slide-next" role="group" aria-label="4 / 6" style="margin-right: 8px;" data-swiper-slide-index="3">
                            <a href="" class=" relative overflow-hidden h-full w-full">
                                <img src="/wp-content/themes/freekvonk/img/local/_DSC1637.png" alt="" class="h-full w-full image-format  object-cover object-center">
                            </a>    
                        </div><div class="swiper-slide bg-black w-auto" role="group" aria-label="5 / 6" style="margin-right: 8px;" data-swiper-slide-index="4">
                            <a href="" class=" relative overflow-hidden h-full w-full">
                                <img src="/wp-content/themes/freekvonk/img/local/_DSC1637.png" alt="" class="h-full w-full image-format  object-cover object-center">
                            </a>    
                        </div><div class="swiper-slide bg-black w-auto" role="group" aria-label="6 / 6" style="margin-right: 8px;" data-swiper-slide-index="5">
                            <a href="" class="a relative overflow-hidden h-full w-full">
                                <img src="/wp-content/themes/freekvonk/img/local/afbeelding-slider.jpeg" alt="" class="h-full w-full image-format  object-cover object-center">
                            </a>    
                        </div></div>  
                        <div class="swiper-button-next-foto hidden lg:flex" tabindex="0" role="button" aria-label="Next slide" aria-controls="swiper-wrapper-31beae74589d4cbc"></div>
                        <div class="swiper-button-prev-foto hidden lg:flex" tabindex="0" role="button" aria-label="Previous slide" aria-controls="swiper-wrapper-31beae74589d4cbc"></div>
                        <span class="swiper-notification" aria-live="assertive" aria-atomic="true"></span></div>
        </section>
    </section>
</main>




<?php get_footer(); ?>



