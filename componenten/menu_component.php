<?php function renderMenuComponent($title, $menuItems) { ?>
    <section class="container hidden md:grid pt-[80px]">
        <h1 class="w-full text-center md:text-80 md:leading-100 font-tanker text-black">
            <?php echo $title; ?>
        </h1>
        <div class="h-[5px] w-[305px] bg-[#78B047] mx-auto rounded-[full]"></div>
    </section>

    <!-- SUBMENU -->
    <section class="mt-[40px] md:pt-[unset] mySwiper-navigatie-section relative">
        <!-- MOBILE SUBMENU -->
        <div class="swiper mySwiper-navigatie md:hidden">
            <div class="swiper-wrapper">
                <?php foreach ($menuItems as $item): ?>
                    <div class="swiper-slide flex justify-center items-center">
                        <a href="<?php echo $item['href']; ?>" class="md:text-25 md:leading-26 font-tanker text-black underline-effect">
                            <?php echo $item['name']; ?>
                        </a>
                    </div>
                <?php endforeach; ?>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <!-- DESKTOP SUBMENU -->
        <div class="hidden md:flex md:space-x-[30px] lg:space-x-[30px] xl:space-x-[65px] mx-auto w-fit md:mt-[50px]">
            <?php foreach ($menuItems as $item): ?>
                <a href="<?php echo $item['href']; ?>" class="md:text-25 md:leading-26 font-tanker text-black underline-effect">
                    <?php echo $item['name']; ?>
                </a>
            <?php endforeach; ?>
        </div>
    </section>
<?php } ?>
