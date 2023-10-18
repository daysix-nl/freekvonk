<?php
/**
 * Template name: Nieuws 
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
</main>




<?php get_footer(); ?>



