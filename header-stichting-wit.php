<?php 
/**
 * The template for displaying the header
 * 
 * @package Day Six theme
 */
 ?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
    <link rel="preload" as="font" href="/wp-content/themes/freekvonk/fonts/Tanker-Regular.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="/wp-content/themes/freekvonk/fonts/Karlsen-Regular.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="preload" as="font" href="/wp-content/themes/freekvonk/fonts/Karlsen-Bold.woff2" type="font/woff2" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js" integrity="sha512-jEnuDt6jfecCjthQAJ+ed0MTVA++5ZKmlUcmDGBv2vUI/REn6FuIdixLNnQT+vKusE2hhTk2is3cFvv5wA+Sgg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <title><?php bloginfo( 'name' ); ?> | <?php if (is_shop()) { ?><?php woocommerce_page_title(); ?><?php } else { the_title(); } ?></title>
    <?php wp_head(); ?>
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-ZRDQM5PGJ1"></script>
    <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'G-ZRDQM5PGJ1');
    </script>
</head>
<body <?php body_class( 'page-block' ); ?>>
<header class="fixed z-[999] bg-[#fff]">
    <!-- LIVE NOW BALK -->
    <div class="h-[33px] w-screen bg-[#438645] relative overflow-x-hidden swiper swiperhero">
        <div  id="scroll-text" class="flex w-full swiper-wrapper">
            <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
            <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php echo get_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php echo get_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php echo get_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
        </div>
        <!-- LIVE NOW TITEL -->
        <div class="absolute left-0 top-0 bottom-0 bg-[#8CC63F] w-[110px] flex items-center justify-center z-[2] live-now">
            <h3 class="text-13 leading-15 font-karlsen font-bold text-white flex items-center justify-center uppercase">Nu live
                <svg xmlns="http://www.w3.org/2000/svg" width="8" height="7" viewBox="0 0 8 7" class="ml-[15px]">
                    <ellipse id="Ellipse_2" data-name="Ellipse 2" cx="4" cy="3.5" rx="4" ry="3.5" fill="#fff"/>
                </svg>
            </h3>
        </div>
    </div>
    <!-- NAVIGATIE -->
    <div class="mx-[20px] lg:mx-[40px] h-[38px] md:h-[37.67px] flex items-end justify-between">
        <a href="/" class="mb-[-15px] md:mb-[-15px] h-[47px]">
            <img src="/wp-content/themes/freekvonk/img/local/NWC_dubbelzwart.png" alt="Logo No Wildlife Crime" class="h-[47px] w-auto">
        </a>
         <div class="flex items-center space-x-[20px]">
            <div class="md:hidden h-[18px] flex items-center relative">
                <h1 class="w-full text-center text-16 leading-18 pb-[2px] font-tanker text-black">
                        <?php
                        if (is_shop()) {
                            ?>
                                Shop
                            <?php
                        } else {
                            the_title();
                        }
                        ?>
                         
                    </h1>
                    <div class="absolute bottom-[-5px] h-[5px] w-full overflow-hidden">
                    <svg class="h-[5px]" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="65.854" height="5.471" viewBox="0 0 65.854 5.471">
                            <defs>
                                <clipPath id="clip-path">
                                <rect id="Rectangle_14" data-name="Rectangle 14" width="65.854" height="5.471" fill="#8cc63f"/>
                                </clipPath>
                            </defs>
                            <g id="Group_503" data-name="Group 503" transform="translate(0 0)">
                                <g id="Group_13" data-name="Group 13" transform="translate(0 0)" clip-path="url(#clip-path)">
                                <path id="Path_14" data-name="Path 14" d="M65.366,1.459c-.643.087-1.286.126-1.933.169s-1.283.115-1.925.184q-1.93.208-3.865.374a77.276,77.276,0,0,1-7.73.321,42.652,42.652,0,0,1-7.489-.729A33.545,33.545,0,0,1,38.709.837,12.872,12.872,0,0,0,34.845,0c-2,.005-3.591,1.174-5.11,2.314a13.662,13.662,0,0,1-2.2,1.44,3.429,3.429,0,0,1-2.143.34,6.339,6.339,0,0,1-2.363-1.241,12,12,0,0,0-2.456-1.528,4.787,4.787,0,0,0-3.034-.171,18.348,18.348,0,0,0-3.032,1.269,6.688,6.688,0,0,1-3.2.707,18.5,18.5,0,0,1-3.72-.778c-2.006-.528-4.284-.875-6.212.11A4.192,4.192,0,0,0,.182,3.38c-.578.639.359,1.58.96.947,1.309-1.38,3.458-1.282,5.183-.9,2.454.551,4.917,1.549,7.439.734a32.34,32.34,0,0,0,3-1.314,4.459,4.459,0,0,1,2.753-.457,6.637,6.637,0,0,1,2.319,1.25A11.673,11.673,0,0,0,24.3,5.159a5.325,5.325,0,0,0,5.037-.9c1.413-.954,2.752-2.293,4.4-2.762a6.122,6.122,0,0,1,3.445.261c1.22.363,2.423.761,3.665,1.049a39.91,39.91,0,0,0,7.575.953,61.317,61.317,0,0,0,7.657-.243,73.307,73.307,0,0,0,7.607-.985c.631-.124,1.256-.248,1.894-.333a.385.385,0,0,0,.271-.47.4.4,0,0,0-.477-.267" transform="translate(0 0)" fill="#8cc63f"/>
                                </g>
                            </g>
                        </svg>
                    </div>

                <!-- <div class="h-[2px] w-[70px] bg-[#78B047] mx-auto rounded-[full]"></div>  -->
            </div>
            <!-- <a href="#" class="hidden lg:block">
                <svg width="80.2723982px" height="33px" viewBox="0 0 80.2723982 33" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Group_331" fill-rule="nonzero">
                            <g id="Kids_button" transform="translate(-0, 0)">
                                <g id="Group" transform="translate(0, 2.8662)" fill="#957860">
                                    <path d="M45.2963982,25.6268381 L53.0363982,26.1878381 L53.8613982,25.9648381 C54.5750619,25.7730222 55.3287,25.7893302 56.0333982,26.0118381 L58.0253982,26.6458381 C58.509649,26.7991221 59.0193488,26.8555288 59.5253982,26.8118381 L64.7123982,26.3738381 C65.1630483,26.3586633 65.5400501,26.0269017 65.6123982,25.5818381 L65.7773982,24.0018381 L68.8773982,26.2278381 L76.0583982,25.5848381 C78.2939484,25.5128227 80.1046422,23.7459535 80.2313982,21.5128381 C80.2163982,16.1368381 80.1963982,6.66883814 80.2433982,5.46883814 C80.2653982,4.91483814 80.2723982,4.25883814 80.2723982,3.62583814 C80.2261728,2.03222414 79.2501984,0.613656631 77.7783982,0.00083814016 L68.8963982,0.12683814 C67.6941898,0.132336725 66.5320202,0.559480028 65.6123982,1.33383814 L64.2483982,2.51383814 L63.6483982,1.45583814 C63.0825595,0.52985147 62.0662845,-0.0245842217 60.9813982,0.00083814016 L4.04039816,0.00083814016 C4.04039816,0.00083814016 2.36039816,-0.13316186 1.96839816,3.58883814 C1.57639816,7.31083814 1.09239816,11.1888381 1.09239816,11.1888381 C1.89310288,11.0658654 2.70852784,11.0746479 3.50639816,11.2148381 C3.00762338,11.5296913 2.52687081,11.8722275 2.06639816,12.2408381 C1.75575902,12.4555663 1.50183424,12.7424326 1.32639816,13.0768381 C1.27054448,13.2164612 1.23452775,13.3632209 1.21939816,13.5128381 C1.07939816,14.6558381 1.61939816,15.8128381 1.37239816,16.9448381 C1.20858398,17.4246732 1.11101716,17.9246191 1.08239816,18.4308381 C1.0115886,18.9333061 0.86244463,19.421567 0.640398162,19.8778381 C0.321143088,20.923438 0.119890949,22.0014786 0.0403981619,23.0918381 C-0.0694872132,23.8493625 0.0459754294,24.6224754 0.372398162,25.3148381 C1.00418202,26.2530991 2.02647474,26.8552262 3.15339816,26.9528381 C4.30747973,27.0658544 5.47252594,26.9582751 6.58639816,26.6358381 C7.06110627,26.5550496 7.50803016,26.3566841 7.88639816,26.0588381 C7.92539816,26.0218381 7.96239816,25.9828381 7.99839816,25.9438381 C8.21909891,25.7064317 8.51316709,25.5500649 8.83339816,25.4998381 C9.46239816,25.3998381 9.78039816,25.7098381 10.2223982,25.8638381 C10.4973982,25.9638381 10.8173982,25.7908381 11.1093982,25.7208381 C11.7665682,25.5674592 12.4356907,25.470771 13.1093982,25.4318381 C14.4592539,25.3692675 15.8120014,25.4278353 17.1513982,25.6068381 L45.2963982,25.6268381 Z" id="Path_30-2"></path>
                                </g>
                                <g id="Group" transform="translate(19.5014, 0)" fill="#FFFFFF" font-family="Tanker-Regular, Tanker" font-size="26" font-weight="normal" stroke="#50362A" stroke-width="0.2">
                                    <g id="KIDS-2" transform="translate(0, 0)">
                                        <text id="KIDS">
                                            <tspan x="0" y="26">KIDS</tspan>
                                        </text>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </a> -->
            <a href="/?s=" class="hidden lg:block">
                <svg class="h-[18px] md:h-[17.68px]" width="auto" height="100%" viewBox="0 0 16.0580325 16.6270055" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <path d="M15.8135231,15.1424942 L11.8555231,11.0254942 C13.8777749,8.61414444 13.9531014,5.12153413 12.0366948,2.62523778 C10.1202881,0.128941426 6.72679989,-0.7006599 3.87484193,0.629921031 C1.02288397,1.96050196 -0.521649616,5.09393728 0.160004901,8.1663072 C0.841659418,11.2386771 3.56644353,13.4248959 6.71352307,13.4244942 C8.09080283,13.4280835 9.43514766,13.0034983 10.5605231,12.2094942 L14.5485231,16.3574942 C14.7655619,16.5834647 15.0866679,16.6764811 15.3908835,16.6015052 C15.6950991,16.5265293 15.9362067,16.2949516 16.0233835,15.9940052 C16.1105603,15.6930588 16.0305619,15.3684647 15.8135231,15.1424942 L15.8135231,15.1424942 Z M6.71352307,1.74649417 C9.45438204,1.74704643 11.6758912,3.9693017 11.675523,6.7101607 C11.6751549,9.4510197 9.45304883,11.6726781 6.71218981,11.6724941 C3.97133079,11.67231 1.74952307,9.4503532 1.74952307,6.70949417 C1.75283021,3.96948563 3.97351393,1.74924928 6.71352307,1.74649417 Z" id="search" fill="#0A1F16" fill-rule="nonzero"></path>
                    </g>
                </svg>
            </a>
            <button class="hidden lg:block h-[18px] md:h-[17.68px] relative sidecar">
                <svg class="h-[18px] md:h-[17.68px]" width="auto" height="100%" viewBox="0 0 16.2163916 19.1606747" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Group" transform="translate(-1299.0418, -62.8223)" fill="#0A1F16">
                            <g id="ngicon" transform="translate(1299.0418, 62.8223)">
                                <path d="M3.67719579,4.67367471 L2.43519579,4.67367471 C1.57736884,4.67409993 0.865543947,5.33704414 0.804195785,6.19267471 L0.0041957854,17.4086747 C-0.0282914254,17.8614987 0.128960542,18.3074436 0.438298793,18.6397309 C0.747637044,18.9720182 1.18120789,19.1606747 1.63519579,19.1606747 L14.5811958,19.1606747 C15.0351837,19.1606747 15.4687545,18.9720182 15.7780928,18.6397309 C16.087431,18.3074436 16.244683,17.8614987 16.2121958,17.4086747 L15.4121958,6.19267471 C15.3508476,5.33704414 14.6390227,4.67409993 13.7811958,4.67367471 L12.5511958,4.67367471 L12.5511958,4.43967471 C12.5511958,1.9880827 10.5637878,0.00067470665 8.11219579,0.00067470665 C6.92864511,-0.0201277937 5.7874411,0.440868081 4.95041513,1.27789405 C4.11338916,2.11492002 3.65239329,3.25612403 3.67319579,4.43967471 C3.67319579,4.51767471 3.67919579,4.59567471 3.68219579,4.67367471 L3.67719579,4.67367471 Z M12.5471958,6.07367405 L12.5471958,9.57367405 C12.5471958,9.96027403 12.2337951,10.2736747 11.8471958,10.2736747 C11.4605965,10.2736747 11.1471958,9.96027403 11.1471958,9.57367405 L11.1471958,6.07367405 L5.07219579,6.07367405 L5.07219579,9.57367405 C5.07219566,9.96027394 4.75879502,10.2736745 4.37219579,10.2736745 C3.98559655,10.2736745 3.67219592,9.96027394 3.67219579,9.57367405 C3.67219579,9.57367405 3.73319579,7.93567471 3.71319579,6.07367405 L2.44019579,6.07367405 C2.3175114,6.07338513 2.21562015,6.16827956 2.20719579,6.29067471 L1.40719579,17.5066747 C1.40276755,17.5712844 1.42531337,17.6348401 1.46946737,17.6822156 C1.51362137,17.7295911 1.57543467,17.7565495 1.64019579,17.7566747 L14.5811958,17.7566747 C14.6459569,17.7565495 14.7077702,17.7295911 14.7519242,17.6822156 C14.7960782,17.6348401 14.818624,17.5712844 14.8141958,17.5066747 L14.0141958,6.29067471 C14.0057714,6.16827956 13.9038802,6.07338513 13.7811958,6.07367405 L12.5471958,6.07367405 Z M11.1471958,4.67367471 L11.1471958,4.43967471 C11.1471958,2.76210978 9.78726071,1.40217471 8.10969579,1.40217471 C6.43213086,1.40217471 5.07219579,2.76210978 5.07219579,4.43967471 L5.07219579,4.67367471 L11.1471958,4.67367471 Z" id="Path_3"></path>
                            </g>
                        </g>
                    </g>
                </svg>
                <?php  if ( ! WC()->cart->get_cart_contents_count() == 0 ) { ?>
                <div class="absolute bottom-[-3px] right-[-3px] bg-[#8CC63F] h-[14px] w-[14px] rounded-full flex justify-center items-center text-9 text-white"><?php echo WC()->cart->get_cart_contents_count(); ?></div>
                <?php } ?>
            </button>
            <button id="hamburger" class="pointer">
                <svg class="h-[18px] md:h-[12.5px]" width="auto" height="100%" viewBox="0 0 21.611 12.496" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <defs>
                        <rect id="path-utg7ymm8rw-1" x="0" y="0" width="21.611" height="12.496"></rect>
                    </defs>
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Group" transform="translate(-1340.07, -3.6947)">
                            <g id="Group_332-Clipped" transform="translate(1340.07, 3.6947)">
                                <mask id="mask-utg7ymm8rw-2" fill="white">
                                    <use xlink:href="#path-utg7ymm8rw-1"></use>
                                </mask>
                                <g id="Rectangle_44"></g>
                                <g id="Group_332" mask="url(#mask-utg7ymm8rw-2)" fill="#0A1F16" fill-rule="nonzero">
                                    <g transform="translate(-0.0036, -0.0001)">
                                        <path d="M21.282618,0.990104562 C20.7925477,0.771840216 20.282053,0.602680247 19.758618,0.485104562 C19.2426809,0.375032386 18.7192111,0.303832473 18.192618,0.272104562 C17.2087322,0.223290734 16.2224511,0.262782138 15.245618,0.390104562 C14.594618,0.465104562 13.945618,0.558104562 13.294618,0.646104562 L13.471618,0.622104562 C12.667618,0.730104562 11.858618,0.830104562 11.046618,0.869104562 C10.2402487,0.908437204 9.43197506,0.874968318 8.63161799,0.769104562 L8.80861799,0.793104562 C6.65561799,0.500104562 4.50861799,-0.186895438 2.31561799,0.0481045624 C1.69278207,0.10494016 1.08034949,0.244847878 0.494617994,0.464104562 C0.328888554,0.515362085 0.18699092,0.624268519 0.0946179942,0.771104562 C0.00540264716,0.92690741 -0.01867701,1.11163791 0.0276179942,1.28510456 C0.0744389489,1.45308896 0.184456368,1.59643413 0.334617994,1.68510456 C0.489249352,1.77774272 0.675406271,1.80200831 0.848617994,1.75210456 C1.31371801,1.57280681 1.7984337,1.44927816 2.29261799,1.38410456 L2.11561799,1.40810456 C3.03046349,1.30369632 3.95507277,1.32017118 4.86561799,1.45710456 L4.68861799,1.43310456 C5.91261799,1.59810456 7.11461799,1.89010456 8.33661799,2.06210456 C9.00436668,2.1628068 9.6783499,2.21660516 10.353618,2.22310456 C10.9737638,2.21921177 11.5932797,2.18282856 12.209618,2.11410456 C12.967618,2.03410456 13.721618,1.92510456 14.475618,1.82310456 L14.298618,1.84710456 C15.8209927,1.58640731 17.3713706,1.53024394 18.908618,1.68010456 L18.731618,1.65610456 C19.3963388,1.74307784 20.0470502,1.91550291 20.667618,2.16910456 L20.509618,2.10010456 L20.609618,2.14310456 C20.7669575,2.22765311 20.9498623,2.25149478 21.123618,2.21010456 C21.2913207,2.1627208 21.4344768,2.0528485 21.523618,1.90310456 C21.613683,1.74758899 21.6378079,1.56251133 21.590618,1.38910456 C21.5467999,1.21963797 21.435988,1.07525761 21.283618,0.989104562" id="Path_130"></path>
                                        <path d="M21.282618,11.2541046 C20.7925524,11.035828 20.2820565,10.8666676 19.758618,10.7491046 C19.2426809,10.6390324 18.7192111,10.5678325 18.192618,10.5361046 C17.2090647,10.4873506 16.223121,10.5268419 15.246618,10.6541046 C14.595618,10.7291046 13.946618,10.8221046 13.295618,10.9101046 L13.472618,10.8861046 C12.666618,10.9941046 11.858618,11.0941046 11.046618,11.1331046 C10.2402487,11.1724535 9.43197365,11.1389846 8.63161799,11.0331046 L8.80861799,11.0571046 C6.65561799,10.7671046 4.50861799,10.0811046 2.31561799,10.3161046 C1.69278207,10.3729402 1.08034949,10.5128479 0.494617994,10.7321046 C0.328888554,10.7833621 0.18699092,10.8922685 0.0946179942,11.0391046 C0.00540264716,11.1949074 -0.01867701,11.3796379 0.0276179942,11.5531046 C0.0744389489,11.721089 0.184456368,11.8644341 0.334617994,11.9531046 C0.489249352,12.0457427 0.675406271,12.0700083 0.848617994,12.0201046 C1.31369795,11.8407439 1.79842122,11.7172133 2.29261799,11.6521046 L2.11561799,11.6761046 C3.03046349,11.5716963 3.95507277,11.5881712 4.86561799,11.7251046 L4.68861799,11.7011046 C5.91261799,11.8661046 7.11461799,12.1581046 8.33661799,12.3301046 C9.00436743,12.4308003 9.67835019,12.4845986 10.353618,12.4911046 C10.9737632,12.4871935 11.5932781,12.4508103 12.209618,12.3821046 C12.967618,12.3021046 13.721618,12.1931046 14.475618,12.0911046 L14.298618,12.1151046 C15.8209927,11.8544073 17.3713706,11.7982439 18.908618,11.9481046 L18.731618,11.9241046 C19.396341,12.0110669 20.0470538,12.1834923 20.667618,12.4371046 L20.508618,12.3701046 L20.608618,12.4131046 C20.7659575,12.4976531 20.9488623,12.5214948 21.122618,12.4801046 C21.2903673,12.4328138 21.4335545,12.3229176 21.522618,12.1731046 C21.612683,12.017589 21.6368079,11.8325113 21.589618,11.6591046 C21.5457999,11.489638 21.434988,11.3452576 21.282618,11.2591046" id="Path_131"></path>
                                        <path d="M0.335617994,6.36510456 C0.825683587,6.58338117 1.33617946,6.75254155 1.85961799,6.87010456 C2.37555509,6.98017674 2.89902488,7.05137665 3.42561799,7.08310456 C4.4091713,7.13184777 5.39511405,7.09235651 6.37161799,6.96510456 C7.02261799,6.89010456 7.67161799,6.79710456 8.32261799,6.70910456 L8.14561799,6.73310456 C8.95161799,6.62510456 9.75961799,6.52510456 10.571618,6.48610456 C11.3779874,6.44677736 12.1862605,6.48024623 12.986618,6.58610456 L12.809618,6.56210456 C14.962618,6.85210456 17.109618,7.53810456 19.302618,7.30310456 C19.925452,7.2462571 20.5378831,7.10634974 21.123618,6.88710456 C21.2893474,6.83584704 21.4312451,6.72694061 21.523618,6.58010456 C21.6130883,6.42736169 21.6381718,6.24531779 21.5933435,6.07407016 C21.5485153,5.90282254 21.4374525,5.75641825 21.284618,5.66710456 C21.1299866,5.5744664 20.9438297,5.55020081 20.770618,5.60010456 C20.305518,5.77940232 19.8208023,5.90293097 19.326618,5.96810456 L19.503618,5.94410456 C18.5887731,6.04852442 17.6641623,6.03204953 16.753618,5.89510456 L16.930618,5.91910456 C15.706618,5.75410456 14.504618,5.46210456 13.282618,5.29010456 C12.6148686,5.18940884 11.9408858,5.13561051 11.265618,5.12910456 C10.643418,5.13379658 10.0218943,5.17118146 9.40361799,5.24110456 C8.64561799,5.32110456 7.89161799,5.43010456 7.13761799,5.53210456 L7.31461799,5.50810456 C5.79224334,5.76880182 4.24186536,5.82496519 2.70461799,5.67510456 L2.88161799,5.69910456 C2.21689714,5.61213128 1.56618577,5.43970622 0.945617994,5.18610456 L1.10461799,5.25310456 L1.00461799,5.21010456 C0.847278448,5.12555601 0.664373684,5.10171434 0.490617994,5.14310456 C0.32291532,5.19048832 0.17975923,5.30036062 0.0906179942,5.45010456 C0.0005530163,5.60562013 -0.0235718934,5.7906978 0.0236179942,5.96410456 C0.0674361037,6.13357115 0.178248036,6.27795152 0.330617994,6.36410456" id="Path_132"></path>
                                    </g>
                                </g>
                            </g>
                        </g>
                    </g>
                </svg>
            </button>
        </div>
    </div>
    <div class="bg-[transparent] h-[20px]"></div>

</header>


<?php include get_template_directory() . '/componenten/hamburger-menu.php'; ?>