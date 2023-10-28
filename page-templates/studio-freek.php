<?php
/**
 * Template name: XXX
 */


 get_header(); ?>
 

<div class="fixed z-[998] right-[74px] top-[50px] md:hidden">
    <h1 class="w-full text-center text-16 leading-26 font-tanker text-black"><?php the_title();?></h1>
    <div class="h-[2px] w-[70px] bg-[#78B047] mx-auto rounded-[full]"></div>         
</div>
<main class="">
    <!-- TITEL -->
    <section class="container hidden md:grid pt-[80px]">
        <h1 class="w-full text-center md:text-80 md:leading-100 font-tanker text-black"><?php the_title();?></h1>        
        <div class="h-[5px] w-[305px] bg-[#78B047] mx-auto rounded-[full]"></div>    
    </section>

    <!-- SUBMENU -->
    <section class="pt-[40px] md:pt-[unset]">
        <!-- MOBIEL SUBMENU -->
        <div class="swiper mySwiper-navigatie md:hidden">
            <div class="swiper-wrapper">
                <div class="swiper-slide flex justify-center items-center"><a href="#item-1" class=" md:text-25 md:leading-26 font-tanker text-black underline-effect">Over Studio Freek</a></div>
                <div class="swiper-slide flex justify-center items-center"><a href="#item-1" class=" md:text-25 md:leading-26 font-tanker text-black underline-effect">Team</a></div>
                <div class="swiper-slide flex justify-center items-center"><a href="#item-3" class=" md:text-25 md:leading-26 font-tanker text-black underline-effect">Cases</a></div>
                <div class="swiper-slide flex justify-center items-center"><a href="#item-4" class=" md:text-25 md:leading-26 font-tanker text-black underline-effect">Partners</a></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <!-- DESKTOP SUBMENU -->
        <div class="hidden md:flex md:space-x-[30px] lg:space-x-[30px] xl:space-x-[65px] mx-auto w-fit md:mt-[50px]">
            <a href="#item-1" class=" md:text-25 md:leading-26 font-tanker text-black underline-effect">Over Studio Freek</a>
            <a href="#item-2" class=" md:text-25 md:leading-26 font-tanker text-black underline-effect">Team</a>
            <a href="#item-3" class=" md:text-25 md:leading-26 font-tanker text-black underline-effect">Cases</a>
            <a href="#item-4" class=" md:text-25 md:leading-26 font-tanker text-black underline-effect">Partners</a>
        </div>
    </section> 
    
    <!-- AFBEELDING - CONTENT -->
    <section>
        <div class="grid grid-cols-1 lg:grid-cols-2 mt-[30px] md:mt-[50px] lg:mt-[80px]">
            <!-- AFBEELDING -->
            <div class="lg:aspect-square h-[390px] md:h-[450px] lg:h-[50vw] lg:w-[50vw] overflow-hidden relative">
                <img src="/wp-content/themes/freekvonk/img/local/afbeelding-1.png" alt="" class="h-full w-full object-cover object-center">
                <div class="absolute top-0 left-0 right-0 bottom-0 flex justify-center items-center">
                    <img src="/wp-content/themes/freekvonk/img/local/logo-studio-freek.png" alt="" class="h-[55%]">
                </div>
            </div>
            <!-- CONTENT -->
            <div class="lg:aspect-square bg-[#8CC63F] h-full w-full lg:h-[50vw] lg:w-[50vw] lg:flex lg:items-center lg:justify-center relative">
                <div class="max-w-[390px] md:max-w-[603px] mx-auto lg:w-[506px] lg:max-h-[calc(50vw-60px)] lg:overflow-y-auto z-[40] py-[50px] lg:py-[unset]">
                    <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen text-white uppercase mb-[15px] tracking-wider">Prof. Dr. Freek vonk</h2>
                    <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  diam nonumy eirmod </h3>
                    <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen text-white mt-[30px]">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor </p>
                </div>
                <img src="/wp-content/themes/freekvonk/img/local/patroon-5.png" alt="" class="z-[30] h-full w-full object-cover object-center absolute top-0">
            </div>
        </div>
    </section>

    <!-- Team -->
    <section id="item-2" class="bg-[#EFE7DE] relative">
        <div class="container py-[80px] overflow-hidden relative z-40">
            <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen text-black uppercase mb-[15px] tracking-wider text-center">Team Studio Freek</h2>
            <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-black text-center max-w-[1043px] mx-auto">Lorem ipsum dolor sit amet, consetetur sadipscing elitr,  diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero</h3>
            <div class="h-[5px] w-[305px] bg-[#78B047] mx-auto rounded-[full] mt-2"></div>  
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-x-1 gap-y-[35px] md:gap-y-[40px] lg:gap-y-[50px] xl:gap-y-[60px] pt-6">
                <div class="col-span-1">
                    <div class="aspect-[15/16] overflow-hidden">
                        <img src="https://studiofreek.nl/wp-content/uploads/2016/08/freekking.jpg" alt="" class="object-cover object-center h-full">
                    </div>
                    <h4 class="text-40 leading-37 lg:text-40 lg:leading-36 font-tanker text-black pt-2 text-center lg:text-left">Prof. dr. <br>Freek Vonk</h4>
                    <div class="h-[5px] w-[55%] bg-[#78B047] rounded-[full] my-[15px] mx-auto lg:mx-[unset]"></div>
                    <p class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-black uppercase tracking-wider text-center lg:text-left">Eindbaas</p>
                </div>
                <div class="col-span-1">
                    <div class="aspect-[15/16] overflow-hidden">
                        <img src="https://studiofreek.nl/wp-content/uploads/2016/08/jochem-768x768.jpg" alt="" class="object-cover object-center h-full">
                    </div>
                    <h4 class="text-40 leading-37 lg:text-40 lg:leading-36 font-tanker text-black pt-2 text-center lg:text-left">Jochem Manus <br>van der Jagt</h4>
                    <div class="h-[5px] w-[55%] bg-[#78B047] rounded-[full] my-[15px] mx-auto lg:mx-[unset]"></div>
                    <p class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-black uppercase tracking-wider text-center lg:text-left">Algemeen Directeur</p>
                </div>
                <div class="col-span-1">
                    <div class="aspect-[15/16] overflow-hidden">
                        <img src="https://studiofreek.nl/wp-content/uploads/2016/08/Peter.jpg" alt="" class="object-cover object-center h-full">
                    </div>
                    <h4 class="text-40 leading-37 lg:text-40 lg:leading-36 font-tanker text-black pt-2 text-center lg:text-left">Peter <br>Paskamp</h4>
                    <div class="h-[5px] w-[55%] bg-[#78B047] rounded-[full] my-[15px] mx-auto lg:mx-[unset]"></div>
                    <p class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-black uppercase tracking-wider text-center lg:text-left">Productieleider</p>
                </div>
                <div class="col-span-1">
                    <div class="aspect-[15/16] overflow-hidden">
                        <img src="https://studiofreek.nl/wp-content/uploads/2016/08/roos-768x768.jpg" alt="" class="object-cover object-center h-full">
                    </div>
                    <h4 class="text-40 leading-37 lg:text-40 lg:leading-36 font-tanker text-black pt-2 text-center lg:text-left">Roos <br>Stone</h4>
                    <div class="h-[5px] w-[55%] bg-[#78B047] rounded-[full] my-[15px] mx-auto lg:mx-[unset]"></div>
                    <p class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-black uppercase tracking-wider text-center lg:text-left">Hoofd Vormgeving</p>
                </div>
                <div class="col-span-1">
                    <div class="aspect-[15/16] overflow-hidden">
                        <img src="https://studiofreek.nl/wp-content/uploads/2016/08/Schermafbeelding-2022-10-03-om-09.48.54-260x260.png" alt="" class="object-cover object-center h-full">
                    </div>
                    <h4 class="text-40 leading-37 lg:text-40 lg:leading-36 font-tanker text-black pt-2 text-center lg:text-left">Chaimae <br>Abakhti</h4>
                    <div class="h-[5px] w-[55%] bg-[#78B047] rounded-[full] my-[15px] mx-auto lg:mx-[unset]"></div>
                    <p class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-black uppercase tracking-wider text-center lg:text-left">Key Account Manager</p>
                </div>
                <div class="col-span-1">
                    <div class="aspect-[15/16] overflow-hidden">
                        <img src="https://studiofreek.nl/wp-content/uploads/2016/08/Sander1-768x769.jpg" alt="" class="object-cover object-center h-full">
                    </div>
                    <h4 class="text-40 leading-37 lg:text-40 lg:leading-36 font-tanker text-black pt-2 text-center lg:text-left">Sander <br>Donders</h4>
                    <div class="h-[5px] w-[55%] bg-[#78B047] rounded-[full] my-[15px] mx-auto lg:mx-[unset]"></div>
                    <p class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-black uppercase tracking-wider text-center lg:text-left">Producer / YouTube Guru</p>
                </div>
                <div class="col-span-1">
                    <div class="aspect-[15/16] overflow-hidden">
                        <img src="https://studiofreek.nl/wp-content/uploads/2016/08/Schermafbeelding-2022-10-03-om-09.44.26-260x260.png" alt="" class="object-cover object-center h-full">
                    </div>
                    <h4 class="text-40 leading-37 lg:text-40 lg:leading-36 font-tanker text-black pt-2 text-center lg:text-left">Kim <br>Willigenburg</h4>
                    <div class="h-[5px] w-[55%] bg-[#78B047] rounded-[full] my-[15px] mx-auto lg:mx-[unset]"></div>
                    <p class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-black uppercase tracking-wider text-center lg:text-left">Head of Product</p>
                </div>
                <div class="col-span-1">
                    <div class="aspect-[15/16] overflow-hidden">
                        <img src="https://studiofreek.nl/wp-content/uploads/2016/08/karen.jpeg" alt="" class="object-cover object-center h-full">
                    </div>
                    <h4 class="text-40 leading-37 lg:text-40 lg:leading-36 font-tanker text-black pt-2 text-center lg:text-left">Karen <br>Bosma</h4>
                    <div class="h-[5px] w-[55%] bg-[#78B047] rounded-[full] my-[15px] mx-auto lg:mx-[unset]"></div>
                    <p class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-black uppercase tracking-wider text-center lg:text-left">Bioloog / Medior Redacteur</p>
                </div>
              
            </div>
               <div class="mySwiper-freekteam">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide grid gap-1 grid-cols-1 lg:grid-col-2">
                            <div>
                                <div class="aspect-[15/16] overflow-hidden">
                                    <img src="https://studiofreek.nl/wp-content/uploads/2016/08/freekking.jpg" alt="" class="object-cover object-center h-full">
                                </div>
                                <h4 class="text-40 leading-37 lg:text-40 lg:leading-36 font-tanker text-black pt-2 text-center lg:text-left">Prof. dr. <br>Freek Vonk</h4>
                                <div class="h-[5px] w-[55%] bg-[#78B047] rounded-[full] my-[15px] mx-auto lg:mx-[unset]"></div>
                                <p class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-black uppercase tracking-wider text-center lg:text-left">Eindbaas</p>
                            </div>
                  
                             <div >
                                <div class="aspect-[15/16] overflow-hidden">
                                    <img src="https://studiofreek.nl/wp-content/uploads/2016/08/jochem-768x768.jpg" alt="" class="object-cover object-center h-full">
                                </div>
                                <h4 class="text-40 leading-37 lg:text-40 lg:leading-36 font-tanker text-black pt-2 text-center lg:text-left">Jochem Manus <br>van der Jagt</h4>
                                <div class="h-[5px] w-[55%] bg-[#78B047] rounded-[full] my-[15px] mx-auto lg:mx-[unset]"></div>
                                <p class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-black uppercase tracking-wider text-center lg:text-left">Algemeen Directeur</p>
                            </div>
                        </div>
                        <div class="swiper-slide grid gap-1 grid-cols-1 lg:grid-col-2">
                            <div>
                                <div class="aspect-[15/16] overflow-hidden">
                                    <img src="https://studiofreek.nl/wp-content/uploads/2016/08/freekking.jpg" alt="" class="object-cover object-center h-full">
                                </div>
                                <h4 class="text-40 leading-37 lg:text-40 lg:leading-36 font-tanker text-black pt-2 text-center lg:text-left">Prof. dr. <br>Freek Vonk</h4>
                                <div class="h-[5px] w-[55%] bg-[#78B047] rounded-[full] my-[15px] mx-auto lg:mx-[unset]"></div>
                                <p class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-black uppercase tracking-wider text-center lg:text-left">Eindbaas</p>
                            </div>
                        
                             <div >
                                <div class="aspect-[15/16] overflow-hidden">
                                    <img src="https://studiofreek.nl/wp-content/uploads/2016/08/jochem-768x768.jpg" alt="" class="object-cover object-center h-full">
                                </div>
                                <h4 class="text-40 leading-37 lg:text-40 lg:leading-36 font-tanker text-black pt-2 text-center lg:text-left">Jochem Manus <br>van der Jagt</h4>
                                <div class="h-[5px] w-[55%] bg-[#78B047] rounded-[full] my-[15px] mx-auto lg:mx-[unset]"></div>
                                <p class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-black uppercase tracking-wider text-center lg:text-left">Algemeen Directeur</p>
                            </div>
                        </div>
                                                <div class="swiper-slide grid gap-1 grid-cols-1 lg:grid-col-2">
                            <div>
                                <div class="aspect-[15/16] overflow-hidden">
                                    <img src="https://studiofreek.nl/wp-content/uploads/2016/08/freekking.jpg" alt="" class="object-cover object-center h-full">
                                </div>
                                <h4 class="text-40 leading-37 lg:text-40 lg:leading-36 font-tanker text-black pt-2 text-center lg:text-left">Prof. dr. <br>Freek Vonk</h4>
                                <div class="h-[5px] w-[55%] bg-[#78B047] rounded-[full] my-[15px] mx-auto lg:mx-[unset]"></div>
                                <p class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-black uppercase tracking-wider text-center lg:text-left">Eindbaas</p>
                            </div>
                      
                             <div >
                                <div class="aspect-[15/16] overflow-hidden">
                                    <img src="https://studiofreek.nl/wp-content/uploads/2016/08/jochem-768x768.jpg" alt="" class="object-cover object-center h-full">
                                </div>
                                <h4 class="text-40 leading-37 lg:text-40 lg:leading-36 font-tanker text-black pt-2 text-center lg:text-left">Jochem Manus <br>van der Jagt</h4>
                                <div class="h-[5px] w-[55%] bg-[#78B047] rounded-[full] my-[15px] mx-auto lg:mx-[unset]"></div>
                                <p class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-black uppercase tracking-wider text-center lg:text-left">Algemeen Directeur</p>
                            </div>
                        </div>
                                                <div class="swiper-slide grid gap-1 grid-cols-1 lg:grid-col-2">
                            <div>
                                <div class="aspect-[15/16] overflow-hidden">
                                    <img src="https://studiofreek.nl/wp-content/uploads/2016/08/freekking.jpg" alt="" class="object-cover object-center h-full">
                                </div>
                                <h4 class="text-40 leading-37 lg:text-40 lg:leading-36 font-tanker text-black pt-2 text-center lg:text-left">Prof. dr. <br>Freek Vonk</h4>
                                <div class="h-[5px] w-[55%] bg-[#78B047] rounded-[full] my-[15px] mx-auto lg:mx-[unset]"></div>
                                <p class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-black uppercase tracking-wider text-center lg:text-left">Eindbaas</p>
                            </div>
                    
                             <div >
                                <div class="aspect-[15/16] overflow-hidden">
                                    <img src="https://studiofreek.nl/wp-content/uploads/2016/08/jochem-768x768.jpg" alt="" class="object-cover object-center h-full">
                                </div>
                                <h4 class="text-40 leading-37 lg:text-40 lg:leading-36 font-tanker text-black pt-2 text-center lg:text-left">Jochem Manus <br>van der Jagt</h4>
                                <div class="h-[5px] w-[55%] bg-[#78B047] rounded-[full] my-[15px] mx-auto lg:mx-[unset]"></div>
                                <p class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-black uppercase tracking-wider text-center lg:text-left">Algemeen Directeur</p>
                            </div>
                        </div>
                        
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
        </div>
        <img src="/wp-content/themes/freekvonk/img/local/patroon-6.png" alt="" class="z-[30] h-full w-full object-cover object-center absolute top-0">
    </section>


    <!-- TITEL -->
    <section id="item-3">
        <div class="container pt-[80px] team-block list-b-none">
            <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen text-black uppercase mb-[15px] tracking-wider text-center">Cases</h2>
            <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-black text-center">Lorem ipsum dolor sit amet, consetetur </h3>
            <div class="h-[5px] w-[305px] bg-[#78B047] mx-auto mt-2 rounded-full"></div>   
            <div class="grid grid-cols-1 md:grid-cols-2 gap-[15px] md:gap-[10px] pt-[50px]">
                <a href="" class="aspect-[16/11] relative overflow-hidden post">
                    <img src="/wp-content/themes/freekvonk/img/local/afbeelding-2.png" alt="" class="h-full object-cover object-center hover-blur duration-200">
                    <div class="absolute hover:bg-gradient-to-b hover:from-[transparent] hover:to-[#8CC63F] top-0 left-0 right-0 bottom-0 z-[2] duration-200 overflow-hidden">
                        <div class="relative h-full w-full">
                             <div class="absolute left-[25px] hover-content duration-200">
                                <h4 class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-white uppercase tracking-wider pb-1">Subtitel</h4>
                                <div class="flex space-x-3">
                                    <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">HIER EEN TITEL VAN DEZE CASE </h3>
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
                                    <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">HIER EEN TITEL VAN DEZE CASE </h3>
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
                                    <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">HIER EEN TITEL VAN DEZE CASE </h3>
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
                                    <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">HIER EEN TITEL VAN DEZE CASE </h3>
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
                                    <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">HIER EEN TITEL VAN DEZE CASE </h3>
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
                                    <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white">HIER EEN TITEL VAN DEZE CASE </h3>
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
                <button class="w-[163px] h-[45px] lg:w-[240px] lg:h-[58.5px] bg-black hover:bg-[#8CC63F] duration-300 flex justify-center items-center text-19 leading-19 lg:text-25 lg:leading-25 font-tanker text-white button-posts">Laad meer</button>
            </div>    
        </div>
    </section>



      <!-- TITEL -->
    <section id="item-4">
        <div class="container py-[80px]">
            <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen text-black uppercase mb-[15px] tracking-wider text-center">Partners</h2>
            <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-black text-center">Lorem ipsum dolor sit amet, consetetur </h3>
            <div class="h-[5px] w-[305px] bg-[#78B047] mx-auto mt-2 rounded-full"></div>   
            <div class="grid grid-cols-2 md:grid-cols-4 pt-[50px] gap-3">
                <div class="col-span-1 flex justify-center items-center">
                    <img src="https://studiofreek.nl/wp-content/uploads/2021/09/aholddelhaze.jpg" alt="" class="grayscale opacity-60">
                </div>
                <div class="col-span-1 flex justify-center items-center">
                    <img src="https://studiofreek.nl/wp-content/uploads/2016/08/Naturalis.jpg" alt="" class="grayscale opacity-60">
                </div>
                <div class="col-span-1 flex justify-center items-center">
                    <img src="https://studiofreek.nl/wp-content/uploads/2016/08/scouting1.jpg" alt="" class="grayscale opacity-60">
                </div>
                <div class="col-span-1 flex justify-center items-center">
                    <img src="https://studiofreek.nl/wp-content/uploads/2016/08/AAA.jpg" alt="" class="grayscale opacity-60">
                </div>
                <div class="col-span-1 flex justify-center items-center">
                    <img src="https://studiofreek.nl/wp-content/uploads/2016/08/blink.jpg" alt="" class="grayscale opacity-60">
                </div>
                <div class="col-span-1 flex justify-center items-center">
                    <img src="https://studiofreek.nl/wp-content/uploads/2016/08/Kruidvat.png" alt="" class="grayscale opacity-60">
                </div>
                <div class="col-span-1 flex justify-center items-center">
                    <img src="https://studiofreek.nl/wp-content/uploads/2021/09/ASwatson.jpg" alt="" class="grayscale opacity-60">
                </div>
                <div class="col-span-1 flex justify-center items-center">
                    <img src="https://studiofreek.nl/wp-content/uploads/2016/08/ADM.jpg" alt="" class="grayscale opacity-60">
                </div>
                    <div class="col-span-1 flex justify-center items-center">
                    <img src="https://studiofreek.nl/wp-content/uploads/2016/08/AAA.jpg" alt="" class="grayscale opacity-60">
                </div>
                <div class="col-span-1 flex justify-center items-center">
                    <img src="https://studiofreek.nl/wp-content/uploads/2016/08/blink.jpg" alt="" class="grayscale opacity-60">
                </div>
                <div class="col-span-1 flex justify-center items-center">
                    <img src="https://studiofreek.nl/wp-content/uploads/2016/08/Kruidvat.png" alt="" class="grayscale opacity-60">
                </div>
                <div class="col-span-1 flex justify-center items-center">
                    <img src="https://studiofreek.nl/wp-content/uploads/2021/09/ASwatson.jpg" alt="" class="grayscale opacity-60">
                </div>
                <div class="col-span-1 flex justify-center items-center">
                    <img src="https://studiofreek.nl/wp-content/uploads/2016/08/ADM.jpg" alt="" class="grayscale opacity-60">
                </div>
                    <div class="col-span-1 flex justify-center items-center">
                    <img src="https://studiofreek.nl/wp-content/uploads/2016/08/AAA.jpg" alt="" class="grayscale opacity-60">
                </div>
                <div class="col-span-1 flex justify-center items-center">
                    <img src="https://studiofreek.nl/wp-content/uploads/2016/08/blink.jpg" alt="" class="grayscale opacity-60">
                </div>
                <div class="col-span-1 flex justify-center items-center">
                    <img src="https://studiofreek.nl/wp-content/uploads/2016/08/Kruidvat.png" alt="" class="grayscale opacity-60">
                </div> 
            </div>
        </div>
    </section>


</main>




<?php get_footer(); ?>



