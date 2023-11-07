<?php
/**
 * Template name: Afrekenen
 */


 get_header(); ?>

 
 
 
<main class="freek-checkout ">

    <!-- CHECKOUT -->
    <div class="bg-[#EFE7DE] freek-afrekenen pt-[45px] pb-[50px] xl:pb-[80px]">
        <div class="container lg:flex lg:justify-between">
            <div class="w-full lg:max-w-[680px]">
                <?php echo do_shortcode( '[woocommerce_checkout]' ); ?>
            </div>
            <div class="w-full lg:max-w-[448px] hidden lg:block">
            <?php include get_template_directory() . '/componenten/side-cart-checkout.php'; ?>
            </div>
        </div>
    </div>

    <!-- BEDANKPAGINA -->
    <div class="w-full bg-[#FFFFFF] pb-[50px] xl:pb-[80px] freek-bedankt relative">
        <div class="container mt-[45px] relative z-[40]">
            <h1 class="w-full text-center font-tanker text-black text-40 leading-37 md:text-70 md:leading-58 lg:text-80 lg:leading-67 max-w-[600px] lg:max-w-[unset] mb-[15px]">Bedankt voor je bestelling!</h1>
            <div class="w-[172px] md:w-[409.815px] h-[11.98px] md:h-[28.388px] md:max-w-[unset] mx-auto">
                <svg width="100%" height="auto" viewBox="0 0 409.815 28.388" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <rect id="path-xhblqq5rej-1" x="0" y="0" width="409.815" height="28.388"></rect>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Group_13-Clipped" transform="translate(204.9075, 14.194) rotate(180) translate(-204.9075, -14.194)translate(0, 0)">
                            <mask id="mask-xhblqq5rej-2" fill="white">
                                <use xlink:href="#path-xhblqq5rej-1"></use>
                            </mask>
                            <g id="Rectangle_14"></g>
                            <g id="Group_13" mask="url(#mask-xhblqq5rej-2)" fill="#8CC63F" fill-rule="nonzero">
                                <g transform="translate(-0.0008, -0.0001)" id="Path_14">
                                    <path d="M406.776825,7.57111643 C402.776825,8.02011643 398.776825,8.22411643 394.749825,8.45011643 C390.741825,8.67511643 386.766825,9.05011643 382.772825,9.40611643 C374.764825,10.1261164 366.747492,10.7737831 358.720825,11.3491164 C342.737825,12.4911164 326.663825,13.2111164 310.620825,13.0141164 C295.015565,12.9033222 279.439823,11.6395479 264.020825,9.23311643 C256.204158,7.97044976 248.495825,6.34144976 240.895825,4.34611643 C233.086825,2.29111643 225.146825,-0.0188835724 216.845825,-8.63431505e-16 C204.400825,0.0281164276 194.500825,6.09011643 185.042825,12.0001164 C180.708843,14.8894641 176.127636,17.3895516 171.352825,19.4711164 C167.151583,21.2605799 162.54197,21.8707927 158.019825,21.2361164 C152.507825,20.2861164 147.819825,17.5301164 143.312825,14.7971164 C138.434825,11.8421164 133.667825,8.79711643 128.029825,6.87111643 C121.93313,4.86859435 115.406705,4.56130173 109.148825,5.98211643 C102.519825,7.40111643 96.448825,10.2001164 90.280825,12.5651164 C83.975219,15.1722978 77.1916466,16.4237324 70.370825,16.2381164 C62.470825,15.9011164 54.811825,13.8671164 47.217825,12.1991164 C34.731825,9.45811643 20.557825,7.65711643 8.55982497,12.7711164 C5.83011554,13.9262056 3.31715999,15.537933 1.12882497,17.5371164 C-2.47117503,20.8541164 3.36382497,25.7371164 7.10282497,22.4481164 C15.251825,15.2851164 28.622825,15.7941164 39.354825,17.8021164 C54.623825,20.6591164 69.954825,25.8381164 85.654825,21.6121164 C92.154825,19.8631164 98.116825,17.0721164 104.339825,14.7951164 C109.644825,12.8541164 115.650825,11.2951164 121.471825,12.4231164 C126.855825,13.4661164 131.463825,16.2171164 135.901825,18.9101164 C140.772825,21.8661164 145.550825,24.8721164 151.201825,26.7711164 C162.214825,30.4711164 173.214825,27.3461164 182.547825,22.0921164 C191.338825,17.1441164 199.673825,10.1921164 209.903825,7.75811643 C217.075825,6.04911643 224.373825,7.38411643 231.341825,9.11311643 C238.936825,10.9981164 246.417825,13.0631164 254.150825,14.5541164 C269.703108,17.4616693 285.46376,19.1156516 301.280825,19.5001164 C317.175963,19.9081687 333.081567,19.4869299 348.932825,18.2381164 C364.718825,17.0561164 380.724825,15.6811164 396.273825,13.1251164 C400.199825,12.4801164 404.092825,11.8401164 408.060825,11.3951164 C408.623141,11.3253003 409.1289,11.0187319 409.450927,10.5525 C409.772953,10.0862681 409.88061,9.50472965 409.746825,8.95411643 C409.378825,7.80611643 408.062825,7.42411643 406.777825,7.56811643"></path>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </div>
            <img src="/wp-content/themes/freekvonk/img/local/Website-Laterrrrr.gif" alt="" class="w-full md:w-[360px] lg:w-[380px] xl:w-[450px] mx-auto mt-[20px] md:mt-[50px] mb-[20px] md:mb-[30px]">
            <p class="w-full md:w-[360px] lg:w-[380px] xl:w-[450px] mx-auto text-center text-16 leading-32 font-karsen font-normal">Holy moly! Wat gaaf dat je een bestelling hebt geplaatst. Nu ben je klaar om op avontuur te gaan! Geniet van de te gekke items en tot ziens!</p>
        </div>
        <img src="/wp-content/themes/freekvonk/img/local/patroon-bedankt.png" alt="" class="z-[30] h-full w-full object-cover object-top absolute top-0 opacity-[0.04]">
    </div>



</main>




<?php get_footer(); ?>



