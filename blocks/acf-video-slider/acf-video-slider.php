<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="https://freekvonk.attentionseekers.studio/wp-content/themes/freekvonk/img/preview/video-slider.png" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- VIDEO SLIDER -->
<section id="<?php the_field('section_id');?>" class="<?php the_field('achtergrond');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="relative">
        <div class="swiper mySwiper-video overflow-visible">
            <div class="swiper-wrapper overflow-visible">

                <div class="swiper-slide bg-black md:aspect-video h-[265px] md:h-auto w-[174px] md:w-[411px] lg:w-[566px] overflow-hidden">
                    <button class="aspect-[16/11] relative overflow-hidden h-full w-full post">
                        <img src="/wp-content/themes/freekvonk/img/local/_DSC1637.png" alt="" class="h-full w-full object-cover object-center hover-blur duration-200">
                        <div class="absolute top-0 left-0 right-0 bottom-0 z-[2] duration-200 overflow-hidden text-left hidden lg:block">
                            <div class="relative h-full w-full">
                                <div class="absolute left-[25px] hover-content duration-200">
                                    <h4 class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen font-normal text-white uppercase tracking-wider pb-1">Subtitel</h4>
                                    <div class="flex">
                                        <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-white">HIER EEN TITEL <br>VAN DEZE Video </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="video absolute top-0 left-0 right-0 bottom-0 z-[3]">
                            <div class="bg-black h-full w-full">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/IkEPdDNnpKs?si=-epipZtvUBe6ONsI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div> -->
                    </button>    
                </div>

                <div class="swiper-slide bg-black md:aspect-video h-[265px] md:h-auto w-[174px] md:w-[411px] lg:w-[566px] overflow-hidden">
                    <button class="aspect-[16/11] relative overflow-hidden h-full w-full post">
                        <img src="/wp-content/themes/freekvonk/img/local/_DSC1637.png" alt="" class="h-full w-full object-cover object-center hover-blur duration-200">
                        <div class="absolute top-0 left-0 right-0 bottom-0 z-[2] duration-200 overflow-hidden text-left hidden lg:block">
                            <div class="relative h-full w-full">
                                <div class="absolute left-[25px] hover-content duration-200">
                                    <h4 class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen font-normal text-white uppercase tracking-wider pb-1">Subtitel</h4>
                                    <div class="flex">
                                        <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-white">HIER EEN TITEL <br>VAN DEZE Video </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="video absolute top-0 left-0 right-0 bottom-0 z-[3]">
                            <div class="bg-black h-full w-full">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/IkEPdDNnpKs?si=-epipZtvUBe6ONsI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div> -->
                    </button>    
                </div>

                <div class="swiper-slide bg-black md:aspect-video h-[265px] md:h-auto w-[174px] md:w-[411px] lg:w-[566px] overflow-hidden">
                    <button class="aspect-[16/11] relative overflow-hidden h-full w-full post">
                        <img src="/wp-content/themes/freekvonk/img/local/_DSC1637.png" alt="" class="h-full w-full object-cover object-center hover-blur duration-200">
                        <div class="absolute top-0 left-0 right-0 bottom-0 z-[2] duration-200 overflow-hidden text-left hidden lg:block">
                            <div class="relative h-full w-full">
                                <div class="absolute left-[25px] hover-content duration-200">
                                    <h4 class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen font-normal text-white uppercase tracking-wider pb-1">Subtitel</h4>
                                    <div class="flex">
                                        <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-white">HIER EEN TITEL <br>VAN DEZE Video </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="video absolute top-0 left-0 right-0 bottom-0 z-[3]">
                            <div class="bg-black h-full w-full">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/IkEPdDNnpKs?si=-epipZtvUBe6ONsI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div> -->
                    </button>    
                </div>

                <div class="swiper-slide bg-black md:aspect-video h-[265px] md:h-auto w-[174px] md:w-[411px] lg:w-[566px] overflow-hidden">
                    <button class="aspect-[16/11] relative overflow-hidden h-full w-full post">
                        <img src="/wp-content/themes/freekvonk/img/local/_DSC1637.png" alt="" class="h-full w-full object-cover object-center hover-blur duration-200">
                        <div class="absolute top-0 left-0 right-0 bottom-0 z-[2] duration-200 overflow-hidden text-left hidden lg:block">
                            <div class="relative h-full w-full">
                                <div class="absolute left-[25px] hover-content duration-200">
                                    <h4 class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen font-normal text-white uppercase tracking-wider pb-1">Subtitel</h4>
                                    <div class="flex">
                                        <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-white">HIER EEN TITEL <br>VAN DEZE Video </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="video absolute top-0 left-0 right-0 bottom-0 z-[3]">
                            <div class="bg-black h-full w-full">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/IkEPdDNnpKs?si=-epipZtvUBe6ONsI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div> -->
                    </button>    
                </div>

                <div class="swiper-slide bg-black md:aspect-video h-[265px] md:h-auto w-[174px] md:w-[411px] lg:w-[566px] overflow-hidden">
                    <button class="aspect-[16/11] relative overflow-hidden h-full w-full post">
                        <img src="/wp-content/themes/freekvonk/img/local/_DSC1637.png" alt="" class="h-full w-full object-cover object-center hover-blur duration-200 bg-[#2B2828]">
                        <div class="absolute top-0 left-0 right-0 bottom-0 z-[2] duration-200 overflow-hidden text-left hidden lg:block">
                            <div class="relative h-full w-full">
                                <div class="absolute left-[25px] hover-content duration-200">
                                    <h4 class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen font-normal text-white uppercase tracking-wider pb-1">Subtitel</h4>
                                    <div class="flex">
                                        <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-white">HIER EEN TITEL <br>VAN DEZE Video </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="video absolute top-0 left-0 right-0 bottom-0 z-[3]">
                            <div class="bg-black h-full w-full">
                                <iframe width="100%" height="100%" src="https://www.youtube.com/embed/IkEPdDNnpKs?si=-epipZtvUBe6ONsI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
                            </div>
                        </div> -->
                    </button>    
                </div>

                
            </div>
        </div>
        <div class="swiper-button-next-video hidden lg:flex"></div>
        <div class="swiper-button-prev-video hidden lg:flex"></div>
    </div>
</section>
<?php endif; ?>
