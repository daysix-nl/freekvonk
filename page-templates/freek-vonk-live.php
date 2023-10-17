<?php
/**
 * Template name: Freek Vonk Live
 */


 get_header('black'); ?>
 <div class="fixed z-[998] right-[74px] top-[50px] md:hidden">
    <h1 class="w-full text-center text-16 leading-26 font-tanker text-white"><?php the_title();?></h1>
    <div class="h-[2px] w-[70px] bg-[#78B047] mx-auto rounded-[full]"></div>         
</div>
<main class="bg-[#000]">
    <!-- ACHTERGROND -->
    <div class="relative overflow-hidden z-[2]">

        <div class="pt-[74px]">
            <!-- TITEL -->
            <section class="container hidden md:grid pt-[80px]">
                <h1 class="w-full text-center md:text-80 md:leading-100 font-tanker text-white"><?php the_title();?></h1>        
                <div class="h-[5px] w-[305px] bg-[#78B047] mx-auto rounded-[full]"></div>    
            </section>

            <!-- SUBMENU -->
            <section class="pt-[40px] md:pt-[unset]">
                <!-- MOBIEL SUBMENU -->
                <div class="swiper mySwiper-navigatie md:hidden">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide flex justify-center items-center"><a href="#item-1" class=" md:text-25 md:leading-26 font-tanker text-white underline-effect">Freek op TV</a></div>
                        <div class="swiper-slide flex justify-center items-center"><a href="#item-1" class=" md:text-25 md:leading-26 font-tanker text-white underline-effect">Video's</a></div>
                        <div class="swiper-slide flex justify-center items-center"><a href="#item-3" class=" md:text-25 md:leading-26 font-tanker text-white underline-effect">Foto's</a></div>
                        <div class="swiper-slide flex justify-center items-center"><a href="#item-4" class=" md:text-25 md:leading-26 font-tanker text-white underline-effect">Shows</a></div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
                <!-- DESKTOP SUBMENU -->
                <div class="hidden md:flex md:space-x-[30px] lg:space-x-[30px] xl:space-x-[65px] mx-auto w-fit md:mt-[50px]">
                    <a href="#item-1" class=" md:text-25 md:leading-26 font-tanker text-white underline-effect">Freek op TV</a>
                    <a href="#item-2" class=" md:text-25 md:leading-26 font-tanker text-white underline-effect">Video's</a>
                    <a href="#item-3" class=" md:text-25 md:leading-26 font-tanker text-white underline-effect">Foto's</a>
                    <a href="#item-4" class=" md:text-25 md:leading-26 font-tanker text-white underline-effect">Shows</a>
                </div>
            </section> 
            <!-- CONTENT -->
            <section>
                <div class="container mt-[30px] md:mt-[50px] lg:mt-[80px] pb-[30px] md:pb-[50px] lg:pb-[80px]">
                    <div class="max-w-[390px] md:max-w-[426px] lg:max-w-[604px]">
                        <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen text-white uppercase mb-[15px] tracking-wider">Subtitel</h2>
                        <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, diam nonumy eirmod tempor </h3>
                        <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen text-white mt-[30px]">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata  </p>
                        <button class="w-[163px] h-[45px] lg:w-[240px] lg:h-[58.5px] bg-[#8CC63F] duration-300 flex justify-center items-center text-19 leading-19 lg:text-25 lg:leading-25 font-tanker text-white drop-shadow-[0px_0px_15px_#8CC63F] mt-[30px]">Koop hier je tickets</button>
                    </div>
                    
                </div>
            </section>
        </div>
       <!-- ACHTERGROND -->
        <div class="absolute top-0 left-0 right-0 bottom-0 z-[-1]">
            <div class="relative pt-[33px] h-full">
                <img src="/wp-content/themes/freekvonk/img/local/freeklive.png" alt="" class="w-full h-full object-cover object-right-top">
                <div class="h-[80px] bg-gradient-to-b from-[#000] to-transparent w-full absolute top-[33px] left-0 right-0"></div>
                <div class="h-[180px] bg-gradient-to-b from-transparent to-[#000] w-full absolute left-0 right-0 bottom-[30px] md:bottom-[50px] lg:bottom-[80px]"></div>
                <div class="h-[30px] md:h-[50px] lg:h-[80px] bg-gradient-to-b bg-[#000] absolute left-0 right-0 bottom-0"></div>
            </div>
        </div>
    </div>
  
        <section>
            <div class="w-full relative">
                <!-- SLIDER -->
                <section class="pb-8 overflow-x-hidden relative ">
                    <div class="container overflow-visible">
                        <div class="swiper mySwiper-d3 overflow-visible">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide bg-[#2B2828] w-full max-w-[390px] md:max-w-[481px] lg:max-w-[996px]  xl:max-w-[1145px]">
                                    <div class="flex flex-col lg:flex-row">
                                        <!-- POSTER -->
                                        <div class="bg-white h-[499px] md:h-[674px] lg:h-[533px] xl:h-[640px] w-[390px] md:w-[481px] lg:w-[376px] xl:w-[452px] flex items-center justify-center relative overflow-hidden">
                                            <img src="/wp-content/themes/freekvonk/img/local/show-1.png" alt="" class="px-[20px] z-[2]">
                                            <img src="/wp-content/themes/freekvonk/img/local/patroon-8.png" alt="" class="object-cover  absolute top-0 z-[1] overflow-hidden scale-105">
                                        </div>
                                        <!-- CONTENT -->
                                        <div class="flex items-center justify-center w-[390px] md:w-[481px] lg:w-[630px] xl:w-[693px]">
                                            <div class="max-w-[350px] md:max-w-[426px] lg:max-w-[510px] xl:max-w-[570px] py-[50px] md:py-[45px] lg:py-[unset]">
                                                <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen text-white uppercase mb-[15px] tracking-wider">Subtitel</h2>
                                                <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,</h3>
                                                <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen text-white mt-[30px]">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                                <button class="w-[163px] h-[45px] lg:w-[240px] lg:h-[58.5px] bg-[#8CC63F] duration-300 flex justify-center items-center text-19 leading-19 lg:text-25 lg:leading-25 font-tanker text-white drop-shadow-[0px_0px_15px_#8CC63F] mt-[30px]">Koop hier je tickets</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="swiper-slide bg-[#2B2828] w-full max-w-[390px] md:max-w-[481px] lg:max-w-[996px]  xl:max-w-[1145px]">
                                    <div class="flex flex-col lg:flex-row">
                                        <!-- POSTER -->
                                        <div class="bg-white h-[499px] md:h-[674px] lg:h-[533px] xl:h-[640px] w-[390px] md:w-[481px] lg:w-[376px] xl:w-[452px] flex items-center justify-center relative overflow-hidden">
                                            <img src="/wp-content/themes/freekvonk/img/local/show-1.png" alt="" class="px-[20px] z-[2]">
                                            <img src="/wp-content/themes/freekvonk/img/local/patroon-8.png" alt="" class="object-cover  absolute top-0 z-[1] overflow-hidden scale-105">
                                        </div>
                                        <!-- CONTENT -->
                                        <div class="flex items-center justify-center w-[390px] md:w-[481px] lg:w-[630px] xl:w-[693px]">
                                            <div class="max-w-[350px] md:max-w-[426px] lg:max-w-[510px] xl:max-w-[570px] py-[50px] md:py-[45px] lg:py-[unset]">
                                                <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen text-white uppercase mb-[15px] tracking-wider">Subtitel</h2>
                                                <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,</h3>
                                                <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen text-white mt-[30px]">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
                                                <button class="w-[163px] h-[45px] lg:w-[240px] lg:h-[58.5px] bg-[#8CC63F] duration-300 flex justify-center items-center text-19 leading-19 lg:text-25 lg:leading-25 font-tanker text-white drop-shadow-[0px_0px_15px_#8CC63F] mt-[30px]">Koop hier je tickets</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </section>
                <!-- ACHTERGROND -->
                <div class="absolute gradient-radial top-0 bottom-0 left-[-60px] right-[-60px] h-auto w-[calc(100%+120px)]"></div>
                <div class="h-[180px] bg-gradient-to-b from-[#000] to-transparent w-full absolute top-[0px] left-0 right-0"></div>
                <div class="h-[180px] bg-gradient-to-b from-transparent to-[#000] w-full absolute left-0 right-0 bottom-[0px]"></div>
            </div>
        </section>

        <div class="gradient-test">
            <div class="container">
                <h2 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">Video's</h2>
                <div class="h-[5px] w-[150px] bg-[#78B047] mt-2 rounded-full"></div>   
            </div>
        <section class="relative">
 
                <div class="swiper mySwiper-video  overflow-visible pt-3">
                    <div class="swiper-wrapper overflow-visible">

                        <div class="swiper-slide bg-black  md:aspect-video h-[265px] md:h-auto w-[174px] md:w-[411px] lg:w-[566px] opacity-60">
                            <a href="" class="aspect-[16/11] relative overflow-hidden h-full w-full post">
                                <img src="/wp-content/themes/freekvonk/img/local/_DSC1637.png" alt="" class="h-full w-full object-cover object-center hover-blur duration-200">
                                <div class="absolute top-0 left-0 right-0 bottom-0 z-[2] duration-200 overflow-hidden">
                                    <div class="relative h-full w-full">
                                        <div class="absolute left-[25px] hover-content duration-200">
                                            <h4 class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-white uppercase tracking-wider pb-1">Subtitel</h4>
                                            <div class="flex">
                                                <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">HIER EEN TITEL <br>VAN DEZE Video </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>    
                        </div>

                        <div class="swiper-slide bg-black  md:aspect-video h-[265px] md:h-auto w-[174px] md:w-[411px] lg:w-[566px] opacity-60">
                            <a href="" class="aspect-[16/11] relative overflow-hidden h-full w-full post">
                                <img src="/wp-content/themes/freekvonk/img/local/_DSC1637.png" alt="" class="h-full w-full object-cover object-center hover-blur duration-200">
                                <div class="absolute top-0 left-0 right-0 bottom-0 z-[2] duration-200 overflow-hidden">
                                    <div class="relative h-full w-full">
                                        <div class="absolute left-[25px] hover-content duration-200">
                                            <h4 class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-white uppercase tracking-wider pb-1">Subtitel</h4>
                                            <div class="flex space-x-3">
                                                <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">HIER EEN TITEL <br>VAN DEZE Video </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>    
                        </div>

                        <div class="swiper-slide bg-black  md:aspect-video h-[265px] md:h-auto w-[174px] md:w-[411px] lg:w-[566px] opacity-60">
                            <a href="" class="aspect-[16/11] relative overflow-hidden h-full w-full post">
                                <img src="/wp-content/themes/freekvonk/img/local/_DSC1637.png" alt="" class="h-full w-full object-cover object-center hover-blur duration-200">
                                <div class="absolute top-0 left-0 right-0 bottom-0 z-[2] duration-200 overflow-hidden">
                                    <div class="relative h-full w-full">
                                        <div class="absolute left-[25px] hover-content duration-200">
                                            <h4 class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-white uppercase tracking-wider pb-1">Subtitel</h4>
                                            <div class="flex space-x-3">
                                                <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">HIER EEN TITEL <br>VAN DEZE Video </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>    
                        </div>

                        <div class="swiper-slide bg-black  md:aspect-video h-[265px] md:h-auto w-[174px] md:w-[411px] lg:w-[566px] opacity-60">
                            <a href="" class="aspect-[16/11] relative overflow-hidden h-full w-full post">
                                <img src="/wp-content/themes/freekvonk/img/local/_DSC1637.png" alt="" class="h-full w-full object-cover object-center hover-blur duration-200">
                                <div class="absolute top-0 left-0 right-0 bottom-0 z-[2] duration-200 overflow-hidden">
                                    <div class="relative h-full w-full">
                                        <div class="absolute left-[25px] hover-content duration-200">
                                            <h4 class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-white uppercase tracking-wider pb-1">Subtitel</h4>
                                            <div class="flex space-x-3">
                                                <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">HIER EEN TITEL VAN DEZE Video </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>    
                        </div>
                        <div class="swiper-slide bg-black  md:aspect-video h-[265px] md:h-auto w-[174px] md:w-[411px] lg:w-[566px] opacity-60">
                            <a href="" class="aspect-[16/11] relative overflow-hidden h-full w-full post">
                                <img src="/wp-content/themes/freekvonk/img/local/_DSC1637.png" alt="" class="h-full w-full object-cover object-center hover-blur duration-200">
                                <div class="absolute top-0 left-0 right-0 bottom-0 z-[2] duration-200 overflow-hidden">
                                    <div class="relative h-full w-full">
                                        <div class="absolute left-[25px] hover-content duration-200">
                                            <h4 class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-white uppercase tracking-wider pb-1">Subtitel</h4>
                                            <div class="flex space-x-3">
                                                <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">HIER EEN TITEL VAN DEZE Video </h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>    
                        </div>

                    </div>
                </div>
            <div class="swiper-button-next-video"></div>
            <div class="swiper-button-prev-video"></div>
        </section>


        <section>
            <div class="container pt-[30px] md:pt-[50px] lg:pt-[80px]">
                <h2 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">Foto's</h2>
                <div class="h-[5px] w-[150px] bg-[#78B047] mt-2 rounded-full"></div>   
            </div>
                <div class="swiper mySwiper-foto lg:mx-[-20%] overflow-visible pt-3">
                    <div class="swiper-wrapper overflow-visible items-end">

                        <div class="swiper-slide bg-black">
                            <a href="" class="aspect-[16/11] relative overflow-hidden h-full w-full">
                                <img src="/wp-content/themes/freekvonk/img/local/_DSC1637.png" alt="" class="h-full w-full object-cover object-center">
                            </a>    
                        </div>

                        <div class="swiper-slide bg-black">
                            <a href="" class="aspect-[16/11] relative overflow-hidden h-full w-full">
                                <img src="/wp-content/themes/freekvonk/img/local/_DSC1637.png" alt="" class="h-full w-full object-cover object-center">
                            </a>    
                        </div>

                        <div class="swiper-slide bg-black">
                            <a href="" class="aspect-[11/16] relative overflow-hidden h-full w-full">
                                <img src="/wp-content/themes/freekvonk/img/local/afbeelding-slider.jpeg" alt="" class="h-full w-full object-cover object-center">
                            </a>    
                        </div>

                        <div class="swiper-slide bg-black">
                            <a href="" class="aspect-[16/11] relative overflow-hidden h-full w-full">
                                <img src="/wp-content/themes/freekvonk/img/local/_DSC1637.png" alt="" class="h-full w-full object-cover object-center">
                            </a>    
                        </div>   
                    </div>  
                </div>

            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </section>

        </div>


    <div class="bg-gradient-to-b from-[#071303] to-[#102D06]">
         <section class="">
            <div class="container pt-[30px] md:pt-[50px] lg:pt-[80px]">
                <h2 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">Shows</h2>
                <div class="h-[5px] w-[150px] bg-[#78B047] mt-2 rounded-full"></div>   
            </div>
            <div class="container grid grid-cols-1 md:grid-cols-2 gap-[15px] md:gap-[10px] pt-[50px]">
                <a href="" class="aspect-[16/11] relative overflow-hidden post">
                    <img src="/wp-content/themes/freekvonk/img/local/afbeelding-2.png" alt="" class="h-full object-cover object-center hover-blur duration-200">
                    <div class="absolute hover:bg-gradient-to-b hover:from-[transparent] hover:to-[#8CC63F] top-0 left-0 right-0 bottom-0 z-[2] duration-200 overflow-hidden">
                        <div class="relative h-full w-full">
                             <div class="absolute left-[25px] hover-content duration-200">
                                <h4 class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-white uppercase tracking-wider pb-1">Subtitel</h4>
                                <div class="flex space-x-3">
                                    <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">Titel van de show</h3>
                                    <div class="w-[40px] flex items-end justify-end pr-2 pb-[3px]">
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
                        </div>
                    </div>
                </a>
                <a href="" class="aspect-[16/11] relative overflow-hidden post">
                    <img src="/wp-content/themes/freekvonk/img/local/afbeelding-2.png" alt="" class="h-full object-cover object-center hover-blur duration-200">
                    <div class="absolute hover:bg-gradient-to-b hover:from-[transparent] hover:to-[#8CC63F] top-0 left-0 right-0 bottom-0 z-[2] duration-200 overflow-hidden">
                        <div class="relative h-full w-full">
                             <div class="absolute left-[25px] hover-content duration-200">
                                <h4 class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-white uppercase tracking-wider pb-1">Subtitel</h4>
                                <div class="flex space-x-3">
                                    <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">Titel van de show</h3>
                                    <div class="w-[40px] flex items-end justify-end pr-2 pb-[3px]">
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
                        </div>
                    </div>
                </a>
                <a href="" class="aspect-[16/11] relative overflow-hidden post">
                    <img src="/wp-content/themes/freekvonk/img/local/afbeelding-2.png" alt="" class="h-full object-cover object-center hover-blur duration-200">
                    <div class="absolute hover:bg-gradient-to-b hover:from-[transparent] hover:to-[#8CC63F] top-0 left-0 right-0 bottom-0 z-[2] duration-200 overflow-hidden">
                        <div class="relative h-full w-full">
                             <div class="absolute left-[25px] hover-content duration-200">
                                <h4 class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-white uppercase tracking-wider pb-1">Subtitel</h4>
                                <div class="flex space-x-3">
                                    <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">Titel van de show</h3>
                                    <div class="w-[40px] flex items-end justify-end pr-2 pb-[3px]">
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
                        </div>
                    </div>
                </a>
                <a href="" class="aspect-[16/11] relative overflow-hidden post">
                    <img src="/wp-content/themes/freekvonk/img/local/afbeelding-2.png" alt="" class="h-full object-cover object-center hover-blur duration-200">
                    <div class="absolute hover:bg-gradient-to-b hover:from-[transparent] hover:to-[#8CC63F] top-0 left-0 right-0 bottom-0 z-[2] duration-200 overflow-hidden">
                        <div class="relative h-full w-full">
                             <div class="absolute left-[25px] hover-content duration-200">
                                <h4 class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-white uppercase tracking-wider pb-1">Subtitel</h4>
                                <div class="flex space-x-3">
                                    <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">Titel van de show</h3>
                                    <div class="w-[40px] flex items-end justify-end pr-2 pb-[3px]">
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
                        </div>
                    </div>
                </a>
                <a href="" class="aspect-[16/11] relative overflow-hidden post">
                    <img src="/wp-content/themes/freekvonk/img/local/afbeelding-2.png" alt="" class="h-full object-cover object-center hover-blur duration-200">
                    <div class="absolute hover:bg-gradient-to-b hover:from-[transparent] hover:to-[#8CC63F] top-0 left-0 right-0 bottom-0 z-[2] duration-200 overflow-hidden">
                        <div class="relative h-full w-full">
                             <div class="absolute left-[25px] hover-content duration-200">
                                <h4 class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-white uppercase tracking-wider pb-1">Subtitel</h4>
                                <div class="flex space-x-3">
                                    <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">Titel van de show</h3>
                                    <div class="w-[40px] flex items-end justify-end pr-2 pb-[3px]">
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
                        </div>
                    </div>
                </a>
                <a href="" class="aspect-[16/11] relative overflow-hidden h-full w-full post">
                    <img src="/wp-content/themes/freekvonk/img/local/afbeelding-3.png" alt="" class="h-full w-full object-cover object-center hover-blur duration-200">
                    <div class="absolute hover:bg-gradient-to-b hover:from-[transparent] hover:to-[#8CC63F] top-0 left-0 right-0 bottom-0 z-[2] duration-200 overflow-hidden">
                        <div class="relative h-full w-full">
                             <div class="absolute left-[25px] hover-content duration-200">
                                <h4 class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-white uppercase tracking-wider pb-1">Subtitel</h4>
                                <div class="flex space-x-3">
                                    <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">Titel van de show</h3>
                                    <div class="w-[40px] flex items-end justify-end pr-2 pb-[3px]">
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
                        </div>
                    </div>
                </a>    
            </div>
            <div class="flex justify-center pt-4">
                <button class="w-[163px] h-[45px] lg:w-[240px] lg:h-[58.5px] bg-[#8CC63F] hover:bg-[#8CC63F] duration-300 flex justify-center items-center text-19 leading-19 lg:text-25 lg:leading-25 font-tanker text-white button-posts">Laad meer</button>
            </div>    
   
              
        </section>


    <section class="h-[1000px]"></section>




        </div>


  
   
</main>




<?php get_footer(); ?>



