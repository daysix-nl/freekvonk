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
    <title><?php bloginfo( 'name' ); ?> | <?php the_title(); ?></title>
    <link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css"
/>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.12.2/lottie.min.js" integrity="sha512-jEnuDt6jfecCjthQAJ+ed0MTVA++5ZKmlUcmDGBv2vUI/REn6FuIdixLNnQT+vKusE2hhTk2is3cFvv5wA+Sgg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <?php wp_head(); ?>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-68500534-1', 'auto');
  ga('send', 'pageview');

</script>

<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '315349892386568');
fbq('track', 'PageView');
</script>
<noscript><img decoding="async" data-tf-not-load="1" height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=315349892386568&ev=PageView&noscript=1" /></noscript>
<!-- End Facebook Pixel Code -->

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-5NNLDHW');</script>
<!-- End Google Tag Manager -->

<!-- Facebook Pixel Code -->
<script>
  !function(f,b,e,v,n,t,s)
  {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
  n.callMethod.apply(n,arguments):n.queue.push(arguments)};
  if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
  n.queue=[];t=b.createElement(e);t.async=!0;
  t.src=v;s=b.getElementsByTagName(e)[0];
  s.parentNode.insertBefore(t,s)}(window, document,'script',
  'https://connect.facebook.net/en_US/fbevents.js');
  fbq('init', '856721864393495');
  fbq('track', 'PageView');
</script>
<noscript><img decoding="async" data-tf-not-load="1" height="1" width="1" style="display:none" src="https://www.facebook.com/tr?id=849447321825720&ev=PageView&noscript=1" /></noscript>
<!-- End Facebook Pixel Code -->
    
</head>
<body <?php body_class( 'page-block' ); ?>>
<!-- Google Tag Manager -->
<noscript><iframe loading="lazy" data-lazy="1" src="about:blank" class="tf_iframe_lazy" data-tf-src="//www.googletagmanager.com/ns.html?id=GTM-M73FKS" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-M73FKS');</script>


<?php if (get_field('zichtbaarheid', 'option') !== "uit"): ?>   
    <?php if(!isset($_COOKIE["popup"]) || $_COOKIE["popup"] !== "yes") { ?>
        <?php
        $image = get_field('afbeelding_popup', 'option');
        $image_url = isset($image['url']) ? esc_url($image['url']) : '';
        $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
        ?>
        <?php
        $link = get_field('link_popup', 'option');
        $link_url = isset($link['url']) ? esc_url($link['url']) : '';
        $link_text = isset($link['title']) ? esc_html($link['title']) : '';
        $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
        ?>
        <div class="pop_up fixed top-0 left-0 w-screen flex bg-transparent z-20 justify-center items-center h-screen overflow-scroll py-5">
            <div class="m-auto flex flex-col bg-[#EFE7DE] w-full mx-2 px-[15px] pt-1 pb-3 md:max-w-[481px] lg:px-1 lg:pb-2 lg:pt-1 lg:max-w-[594px] rounded-[5px] relative">
                <button class="closePopUp absolute top-3 right-3">
                    <svg xmlns="http://www.w3.org/2000/svg" width="19.799" height="19.799" viewBox="0 0 19.799 19.799">
                    <g id="Group_431" data-name="Group 431" transform="translate(-8.485 9.899) rotate(-45)">
                        <line id="Line_55" data-name="Line 55" y2="26" transform="translate(13 0)" fill="none" stroke="#fff" stroke-width="2"/>
                        <line id="Line_56" data-name="Line 56" y2="26" transform="translate(26 13) rotate(90)" fill="none" stroke="#fff" stroke-width="2"/>
                    </g>
                    </svg>
                </button>
                <div class="h-auto aspect-[16/8] rounded-[5px] overflow-hidden mb-[25px] lg:mb-2">
                    <img class="min-w-full min-h-full object-cover object-center" src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>">
                </div>
                
                <p class="uppercase text-center font-karlsen font-normal text-[#0A1F16] text-22 leading-22 md:text-24 md:leading-22 pb-2 md:pb-[20px] mx-auto"><?php the_field('subtitel_popup', 'option');?></p>
                <p class="text-[#0A1F16] font-tanker font-normal text-40 leading-37 md:text-50 md:leading-47 text-center md:max-w-[404px] lg:max-w-[473px] xl:max-w-[531px] mx-auto pb-1 md:pb-[10px]"><?php the_field('titel_popup', 'option');?></>
                <div class="text-[#2B2828] font-karlsen text-16 leading-32 pb-2 md:pb-2 lg:pb-[20px] mx-auto text-center max-w-[301px] md:max-w-[395px] lg:max-w-[484px] text-editor"><?php the_field('tekst_popup', 'option');?></div>
                <a href="<?php echo $link_url; ?>" class="text-25 leading-35 font-tanker font-normal text-[#FFFFFF] flex justify-center items-center max-w-[270px] uppercase md:max-w-[202px] bg-[#0A1F16] h-[58px] md:h-[49px] mx-auto w-full target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
            </div>
        </div>
    <?php } ?>
<?php endif; ?>
<header class="fixed z-[10]">
    <!-- LIVE NOW BALK -->
    <div class="h-[33px] w-screen bg-[#438645] relative overflow-x-hidden swiper swiperhero">
        <div  id="scroll-text" class="flex w-full swiper-wrapper">
            <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php the_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php the_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php the_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php the_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php the_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php the_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php the_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php the_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php the_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php the_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php the_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php the_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php the_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php the_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php the_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php the_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php the_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php the_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
            <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php the_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php the_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php the_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php the_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php the_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php the_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php the_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php the_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php the_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php the_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php the_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php the_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php the_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php the_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php the_sub_field('titel', 'option');?></h4>
                </a>
                <?php
                endwhile;
            else :
            endif;
            ?>
             <?php
            if( have_rows('live_now', 'option') ):
                while( have_rows('live_now', 'option') ) : the_row(); ?>
                 <a href="<?php the_sub_field('link', 'option');?>" class="h-[33px] flex items-center space-x-[15px] w-max pr-5 swiper-slide">
                    <p class="text-15 leading-17 font-karlsen text-white uppercase w-max"><?php the_sub_field('subtitel', 'option');?></p>
                    <h4 class="text-15 leading-17 font-karlsen font-bold text-white uppercase w-max"><?php the_sub_field('titel', 'option');?></h4>
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
        <a href="/" class="mb-[0px] md:mb-[0px]">
            <svg id="Group_293" data-name="Group 293" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="145.268" height="17.676" viewBox="0 0 145.268 17.676">
            <defs>
                <clipPath id="clip-path">
                <rect id="Rectangle_12" data-name="Rectangle 12" width="145.268" height="17.676" fill="#fff"/>
                </clipPath>
            </defs>
            <g id="Group_292" data-name="Group 292" transform="translate(0 0)" clip-path="url(#clip-path)">
                <path id="Path_18" data-name="Path 18" d="M263.989,9.152c-.012.763.039,1.392.019,1.974-.067,1.9-.124,4.07-.179,5.972a1.019,1.019,0,0,0,.071.445.4.4,0,0,0,.273.217,15.042,15.042,0,0,0,1.772-.062,7.677,7.677,0,0,1,1.957-.006c.482.066.6-.045.568-.591-.044-.732-.1-1.73-.156-2.461a5.465,5.465,0,0,1-.059-.6c.017-.421.061-.84.1-1.259.018-.2.048-.4.067-.6.049-.522.095-1.044.142-1.571a.628.628,0,0,1,.632.36c.179.319.409.6.615.9a10.4,10.4,0,0,1,1,1.491c.31.679.637,1.342.982,2a6.75,6.75,0,0,1,.557,1.437l.077.245.052.188a.3.3,0,0,0,.374.276,3.2,3.2,0,0,1,.464-.046c.522.013,1.045.045,1.568.059.192,0,.412-.01.6-.015l.375-.019c.461-.008.341-.014.287-.521-.025-.237,0-.652-.006-.892-.021-.856-.061-1.712-.065-2.568-.006-1,.029-2.008.026-3.012,0-.81-.044-1.62-.051-2.43-.007-.851.013-1.7.012-2.552,0-.874-.011-1.747-.021-2.62,0-.246-.024-.491-.035-.7-.027-.456-3.146-.144-3.146-.144a.587.587,0,0,0-.331.154c-.131.155-.156.228-.264.251-.232.05-.25.208-.248.4s.038.387.035.579c-.008.476-.046.952-.041,1.427.01.98.041,1.961.062,2.942.005.249,0,.5.005.748l-.111.042c-.086-.117-.175-.231-.257-.352-.065-.1-.108-.212-.181-.3a14.385,14.385,0,0,1-1.06-1.265c-.506-.772-.952-1.594-1.418-2.4a.508.508,0,0,1-.039-.234c0-.543-.006-1.086,0-1.629,0-.242-.059-.362-.316-.363-.662,0-1.283-.027-2.019-.027-.195,0-1.2.054-1.811.085-.253-.035-.222.158-.222.158a1.245,1.245,0,0,0,.015.256c.011.272-.028.4-.254.394-.3-.013-.319.167-.3.425,0,0-.223,4.621-.113,5.825" transform="translate(-156.411 -1.145)" fill="#fff"/>
                <path id="Path_19" data-name="Path 19" d="M238.354,7.516c.031.588.075,1.137.084,1.685.009.515-.02,1.032-.029,1.548,0,.134.013.268.012.4-.008.761-.02,1.523-.029,2.285a.784.784,0,0,1,0,.116c-.065.412-.14.824-.2,1.237-.067.5-.106,1.009-.182,1.51-.07.465-.161.928-.271,1.386a.357.357,0,0,1-.274.193c-.581-.013-1.161-.061-1.742-.085a20.976,20.976,0,0,0-3.006-.026,10.478,10.478,0,0,1-3.255-.225c-.41-.088-.829-.136-1.235-.238q-.907-.226-1.8-.511a.454.454,0,0,1-.253-.293c-.044-.2-.081-.347-.331-.375a.272.272,0,0,1-.171-.2c0-.239.037-.479.061-.719,0-.047.032-.118.009-.138-.35-.318-.254-.774-.379-1.16a11.425,11.425,0,0,1-.255-1.25c-.1-.482-.216-.96-.3-1.444a16.122,16.122,0,0,1-.266-1.879,13.244,13.244,0,0,1,.067-2.021c.051-.5.211-.981.311-1.472a1.106,1.106,0,0,0,0-.393c-.068-.4-.158-.8-.222-1.2a.265.265,0,0,1,.112-.209c.268-.171.553-.315.819-.488a.586.586,0,0,0,.191-.257c.109-.254.2-.517.3-.774.029-.071.112-.131.118-.2.035-.362.277-.375.559-.325.59.107,1.179.223,1.771.324a.863.863,0,0,0,.352-.028,12.5,12.5,0,0,1,3.148-.476c.636-.007,1.273.047,1.91.064.721.02,1.443.022,2.164.046.407.013.831.028.89.566a.135.135,0,0,0,.1.088c.294-.026.279.2.316.366a21.884,21.884,0,0,1,.627,3.188,10.145,10.145,0,0,0,.277,1.38m-4.317,6.653c.023-.168.041-.292.056-.416.038-.316.087-.63.109-.947.026-.393.029-.787.044-1.18s.034-.8.043-1.206a6.011,6.011,0,0,0-.064-1.051c-.077-.508.015-1.039-.026-1.555a8.737,8.737,0,0,0-.4-2.353c-.063-.172-.1-.254-.316-.246a18.793,18.793,0,0,0-4.181.617.886.886,0,0,0-.781.891c-.062.751-.109,1.5-.153,2.256,0,.074.054.152.084.228.043.11.129.221.124.329-.026.617-.061,1.235-.119,1.85a2.592,2.592,0,0,0,.184,1.383,5.742,5.742,0,0,1,.314.9.409.409,0,0,0,.367.325,17.518,17.518,0,0,0,4.711.169" transform="translate(-133.115 -1.077)" fill="#fff"/>
                <path id="Path_20" data-name="Path 20" d="M195.407,17.344c.321.024.28-.007.351-.189.107-.273.162-.36.273-.632.208-.508.391-.785.576-1.3.139-.389.223-.8.35-1.191.17-.527.371-1.044.534-1.573.261-.851.5-1.709.751-2.565.2-.7.4-1.4.594-2.1.139-.489.243-.992.427-1.463.255-.652.562-1.284.863-1.917.129-.272.3-.526.453-.8a.859.859,0,0,0-.114-.1q-1.508-.911-3.017-1.82c-.195-.118-.312-.009-.443.116a3.515,3.515,0,0,0-.78,1.321c-.2.5-.422.982-.626,1.476-.232.558-.463,1.117-.677,1.682-.27.711-.524,1.429-.78,2.146-.139.389-.267.783-.4,1.174-.174.5-.344,1.009-.526,1.511a3.213,3.213,0,0,1-.237.414c-.138-.745-.251-1.385-.381-2.022a.75.75,0,0,0-.175-.279c-.088-.11-.23-.192-.275-.315-.233-.628-.456-1.261-.656-1.9a6.415,6.415,0,0,1-.333-1.5,18.1,18.1,0,0,0-.32-1.86c-.066-.379-.111-.762-.181-1.141-.05-.269-.208-.332-.464-.243q-.78.272-1.571.507c-.64.191-1.286.36-1.927.55-.139.041-.41.061-.368.18.081.318.148.6.226.882.033.116.091.225.133.338.175.475.383.94.514,1.426.219.815.358,1.652.583,2.464a20.635,20.635,0,0,0,1.29,3.331,11.545,11.545,0,0,1,.733,1.8c.213.751.473,1.489.724,2.228.139.409.336.581.488.986a.443.443,0,0,0,.477.321s3.67.015,3.912.065" transform="translate(-110.461 -0.973)" fill="#fff"/>
                <path id="Path_21" data-name="Path 21" d="M305.228,6.157c.832-1.1,1.625-2.112,2.382-3.152A20.624,20.624,0,0,0,308.959.912c.315-.564.34-.558.927-.273.461.224.883.522,1.326.76a9.829,9.829,0,0,1,1.859,1.465c.3.27.295.272-.011.537q-1.355,1.174-2.586,2.479-.578.61-1.175,1.2a.267.267,0,0,0-.046.389c.737,1.168,1.421,2.364,2.246,3.482.555.752,1.2,1.428,1.72,2.2.229.339.621.506.826.867.188.331.208.352-.093.6a6.778,6.778,0,0,1-.7.508,1.92,1.92,0,0,0-.559.456.476.476,0,0,1-.283.169,2.478,2.478,0,0,0-.753.365c-.175.114-.312.307-.568.2-.032-.013-.1.043-.141.075-.077.053-.146.117-.224.167-.635.408-.655.387-1.02-.262-.986-1.75-1.99-3.49-2.987-5.233-.093-.162-.188-.323-.283-.484-.07-.118-.137-.17-.248-.027-.223.288-.454.569-.69.846a.384.384,0,0,0-.064.316c.1,1.192.177,2.385.377,3.566.059.349.057.708.107,1.059.033.23-.048.3-.27.344a11.8,11.8,0,0,1-3.513.115c-.277-.029-.63.07-.811-.115s.009-.511.029-.775c.068-.906,0-1.812.009-2.717,0-.243,0-.487.021-.728a.5.5,0,0,0-.242-.522,2.324,2.324,0,0,1-.668-.631.235.235,0,0,1,.04-.361c.264-.237.509-.5.78-.724a.564.564,0,0,0,.228-.5c-.083-1.726-.168-3.452-.227-5.179-.036-1.048-.245-2.075-.339-3.116-.031-.349-.028-.349.324-.357a27.793,27.793,0,0,0,3.449-.28.755.755,0,0,1,.3,0c.52.134.542.171.5.7-.107,1.462-.3,2.917-.315,4.386,0,.062.005.125.012.274" transform="translate(-178.093 -0.266)" fill="#fff"/>
                <path id="Path_22" data-name="Path 22" d="M14.171,5.98a2.342,2.342,0,0,1-1.208.356.8.8,0,0,0-.7.183.356.356,0,0,1-.274.08c-.146,0-.293-.006-.438-.013-.806-.043-1.6-.144-2.418-.135a8.547,8.547,0,0,1-2.055-.117c-.234-.055-.321.017-.332.275a12.832,12.832,0,0,0,0,2.306c.026.189-.157.425.013.545.139.1.376.054.568.081a3.787,3.787,0,0,0,.875-.034c1.417-.131,2.845-.143,4.249-.4.171-.031.2.05.21.188.052.935.112,1.869.158,2.8.025.506.03,1.013.041,1.519.009.377-.171.544-.555.535a5.88,5.88,0,0,1-1.189-.143c-1.078-.25-2.185-.272-3.275-.428-.268-.038-.545-.019-.817-.034-.122-.007-.158.031-.177.16a4.366,4.366,0,0,0,.05,1.856,2.056,2.056,0,0,1,.059.551,8.816,8.816,0,0,0,.094,1.426c.086.509-.058.631-.511.867a3.556,3.556,0,0,1-1.217.239,10.723,10.723,0,0,1-2.971-.037.286.286,0,0,1-.286-.355q.068-.787.122-1.575c.068-.982.1-1.966.091-2.951,0-.049.014-.11-.009-.144-.349-.5-.153-1.062-.1-1.569a23.106,23.106,0,0,0,.091-2.538c0-.906-.011-1.812,0-2.719,0-.262-.082-.344-.348-.294A10.428,10.428,0,0,1,.8,6.6c-.085.007-.39.167-.219-.194.039-.083-.122-.2-.141-.331A14,14,0,0,1,.2,4.519C.178,3.924.021,3.351,0,2.76c-.013-.373.217-.549.591-.506a3.737,3.737,0,0,0,1.47.054c.075-.02.16,0,.164-.118.009-.3.249-.369.463-.388a1.878,1.878,0,0,1,.866.079,1.922,1.922,0,0,0,.754.032A4.438,4.438,0,0,1,5.5,1.959a.616.616,0,0,0,.258-.033,3.858,3.858,0,0,1,.989-.063c.225.012.409.053.367.355-.029.206.144.17.263.168.6-.009,1.208-.011,1.812-.038a32.7,32.7,0,0,0,4.22-.357,3.961,3.961,0,0,1,.758-.051c.217,0,.317.073.29.314-.105.96-.118,1.925-.141,2.89a1.891,1.891,0,0,0,.023.435.334.334,0,0,1-.169.4" transform="translate(0 -1.059)" fill="#fff"/>
                <path id="Path_23" data-name="Path 23" d="M86.048,4.558c.268-.022.36.1.316.35-.013.071,0,.147-.009.219-.048.4-.265.574-.656.5-.785-.142-1.57-.272-2.362-.358-.558-.061-1.117.024-1.675-.038a8.965,8.965,0,0,0-1.4-.068c-.2.009-.3.065-.3.285.008.678.006,1.356.005,2.034,0,.135.079.144.182.136,1.571-.116,3.14-.254,4.7-.447.45-.056.544.008.551.454a20.227,20.227,0,0,1,.021,2.061,4.674,4.674,0,0,0,.063.57c.024.566-.022.614-.579.637-.9.037-1.8.068-2.693.108-.65.029-1.3.074-1.949.105-.162.008-.256.05-.252.239.01.6.013,1.191.007,1.787,0,.216.079.289.292.281a26.236,26.236,0,0,0,3.231-.249c.073-.011.149-.038.215,0a2.6,2.6,0,0,0,1.741.148c.38-.029.418-.02.485.349a9.335,9.335,0,0,1,.07,2.708c-.025.224.055.451.047.682-.012.358-.07.432-.433.416-.329-.014-.659-.036-.986-.072-1.119-.123-2.236-.285-3.363-.312a1.652,1.652,0,0,0-1.162.177.043.043,0,0,1-.026.008c-.8-.077-1.557.348-2.358.212a6.769,6.769,0,0,0-1.369.03c-.487.015-.526-.045-.5-.527.039-.8.047-1.593.07-2.389.03-1.043.077-2.086.086-3.13a8.289,8.289,0,0,0-.064-.942c-.132-1.2-.222-2.4-.284-3.612a13.342,13.342,0,0,0-.267-1.6c-.009-.055-.023-.118-.083-.132-.256-.059-.209-.242-.167-.412a1.058,1.058,0,0,0-.022-.647,1.078,1.078,0,0,1,.005-.545,4.925,4.925,0,0,0-.14-1.688c-.046-.23.054-.3.251-.32a22.856,22.856,0,0,1,3.064-.156c.33.013.653-.047.985-.044.851.009,1.693.172,2.547.12.3-.018.605.012.906,0,1.007-.055,2.015.035,3.022-.041.555-.042.557-.026.55.527,0,.037.015.079,0,.109-.3.63,0,1.236.073,1.85.052.464.052.464-.39.62" transform="translate(-44.48 -0.816)" fill="#fff"/>
                <path id="Path_24" data-name="Path 24" d="M50.245,17.2a5.19,5.19,0,0,1-1.525.609.572.572,0,0,1-.746-.294,8.517,8.517,0,0,0-1.023-1.554,25.687,25.687,0,0,0-1.8-2.352c-.494-.556-.265-.516-.967-.3-.719.218-.586.022-.517.808.095,1.076.256,2.142.456,3.2.06.317-.076.478-.441.5-.7.051-1.405.089-2.109.128-.739.042-1.48.074-2.219.121-.221.014-.308-.039-.291-.285.061-.9.131-1.808.14-2.713.01-1.068-.063-2.138-.058-3.206.008-1.835-.241-3.648-.4-5.469-.013-.143-.009-.3-.205-.341-.113-.025-.116-.132-.117-.223,0-.228,0-.457,0-.686A8.24,8.24,0,0,0,38.207,3a3.808,3.808,0,0,1-.1-.813c-.009-.278.221-.31.425-.31.439,0,.878.026,1.317.031,1,.01,1.988-.138,2.983-.189.152-.008.34-.087.362.187.007.089.117.066.187.062a38.469,38.469,0,0,1,5.044.02,5.43,5.43,0,0,0,1.527-.025.484.484,0,0,1,.548.305A10.748,10.748,0,0,1,50.918,4a15.684,15.684,0,0,1,.41,4.273c-.045.905-.2,1.8-.289,2.7a.294.294,0,0,1-.169.266c-.27.1-.5.355-.851.121a1.35,1.35,0,0,0-1.2.293c-.085.112,0,.189.052.27a10.022,10.022,0,0,0,1.195,1.533,11.236,11.236,0,0,0,2,1.9c.23.156.226.285.011.452-.607.468-1.221.928-1.833,1.391M47.627,7.984a.254.254,0,0,0,.194-.25,8.928,8.928,0,0,0-.1-1.778.239.239,0,0,0-.237-.219,20.313,20.313,0,0,0-4.13-.215c-.151.01-.215.055-.211.209.007.265,0,.53,0,.8,0,.96,0,1.921-.009,2.881,0,.227.073.284.294.21.805-.272,1.625-.5,2.415-.82.627-.254,1.237-.546,1.78-.814" transform="translate(-22.589 -1.012)" fill="#fff"/>
                <path id="Path_25" data-name="Path 25" d="M145.311,5.708c.832-1.1,1.625-2.112,2.382-3.152A20.637,20.637,0,0,0,149.043.463c.315-.564.34-.558.927-.273.462.224.883.522,1.326.76a9.829,9.829,0,0,1,1.859,1.465c.3.27.295.272-.011.537q-1.355,1.174-2.586,2.479-.578.61-1.175,1.2a.267.267,0,0,0-.046.389c.737,1.168,1.421,2.364,2.246,3.482.555.752,1.2,1.428,1.72,2.2.229.339.621.506.826.867.188.331.208.352-.093.6a6.779,6.779,0,0,1-.7.508,1.919,1.919,0,0,0-.559.456.476.476,0,0,1-.283.169,2.478,2.478,0,0,0-.753.365c-.175.114-.312.307-.568.2-.032-.013-.1.043-.141.075-.077.053-.146.117-.224.167-.635.408-.655.387-1.02-.262-.986-1.75-1.99-3.49-2.987-5.233-.093-.162-.188-.323-.283-.484-.07-.118-.137-.17-.248-.027-.223.288-.454.569-.69.846a.384.384,0,0,0-.064.316c.1,1.192.177,2.385.377,3.566.059.349.057.708.107,1.059.033.23-.048.3-.27.344a11.8,11.8,0,0,1-3.513.115c-.277-.029-.63.07-.811-.115s.009-.511.029-.775c.068-.906,0-1.812.009-2.717,0-.243,0-.487.021-.728a.5.5,0,0,0-.242-.522,2.324,2.324,0,0,1-.668-.631.235.235,0,0,1,.04-.361c.264-.237.509-.5.78-.724a.564.564,0,0,0,.228-.5c-.083-1.726-.168-3.452-.227-5.179-.036-1.048-.245-2.075-.339-3.116-.031-.349-.028-.349.324-.357a27.794,27.794,0,0,0,3.449-.28.755.755,0,0,1,.3,0c.52.134.542.171.5.7-.107,1.462-.3,2.917-.315,4.386,0,.062.005.125.012.274" transform="translate(-83.287 0)" fill="#fff"/>
                <path id="Path_26" data-name="Path 26" d="M111.721,1.458l.517.191c.026.01.066.022.07.039.081.375.362.174.56.191a34.243,34.243,0,0,0,5.544-.046c.436-.034.473.007.4.43a1.054,1.054,0,0,0,.013.354,6.581,6.581,0,0,1,.062,1.478.366.366,0,0,1-.067.2c-.108.131-.086.219.048.313a.2.2,0,0,1,.05.291.575.575,0,0,0-.078.344c.022.245-.111.28-.307.235a21.947,21.947,0,0,0-3.487-.39c-.844-.058-1.7-.024-2.548-.076a.179.179,0,0,0-.219.182,16.473,16.473,0,0,0-.062,2.414c.007.132.072.17.2.167a22.136,22.136,0,0,0,4.517-.275c.359-.082.41-.027.45.341.1.942-.076,1.877-.066,2.817,0,.173-.006.348-.018.521s-.1.254-.275.219c-1.034-.2-2.1-.158-3.132-.382a5.961,5.961,0,0,0-1.28.105c-.1,0-.1.09-.088.167q.187,1.194.375,2.389c.026.164.152.153.274.16.633.036,1.261-.059,1.894-.062a17.347,17.347,0,0,0,2.981-.249,2.186,2.186,0,0,1,.274-.018c.267-.013.384.1.458.378a7.979,7.979,0,0,1,.013,2.812c-.014.155-.028.311-.028.466a.272.272,0,0,1-.307.3,1.164,1.164,0,0,1-.487-.048,6.876,6.876,0,0,0-2.093-.395c-.706-.107-1.419-.165-2.129-.239-.184-.02-.385-.053-.336.257.02.127-.107.126-.2.14a5.612,5.612,0,0,1-1.343,0,1.525,1.525,0,0,0-.542.035,1.075,1.075,0,0,1-.325.051c-.8-.042-1.584.12-2.381.093-.243-.008-.3-.1-.276-.318a24.427,24.427,0,0,0,.151-4.524c-.066-1.162-.194-2.319-.267-3.48-.14-2.234-.519-4.44-.756-6.662-.084-.791-.046-.856.76-.89.43-.018.861.029,1.283.024.442,0,.9-.054,1.348-.1a3.866,3.866,0,0,1,.849.037" transform="translate(-63.702 -0.835)" fill="#fff"/>
                <path id="Path_27" data-name="Path 27" d="M342.591.695c-.014-.042,0-.03-.014-.064V.6a1.78,1.78,0,0,0-.019-.269V.314c0-.115-.169-.116-.31-.086L340.573.194c-.808-.025-.75,0-.758.034s-.023.058-.006.084v.01c-.008,0-.017,0-.017.008s.011,0,.016,0V.354H339.8s0,0,.005,0l-.033.482h0a.309.309,0,0,0,.01.169.274.274,0,0,0,.059.02l-.015,0h.026a.375.375,0,0,0,.228,0h.007c.16,0,.369,0,.569,0,0,0,0,0,0,0h.066l0,.007,0,.508a1.756,1.756,0,0,0,0,.265l0,.312s0,.01,0,.015v0l0,.552a4.475,4.475,0,0,0-.013.509.507.507,0,0,0-.017.131.03.03,0,0,0,0,.03c.007.05.03.094.092.094.151,0,.707,0,.707,0s.175.024.165-.059c0-.03-.046-.968-.061-1.308,0-.018,0-.041,0-.062,0-.038,0-.06,0-.06h0c0-.072-.009-.155-.019-.265.009-.017,0-.34,0-.365-.047,0,.033-.259.019-.285.113.022.334-.055.517-.03.179-.021.339.072.447-.008a1.038,1.038,0,0,0,.019-.323" transform="translate(-201.432 -0.109)" fill="#fff"/>
                <path id="Path_28" data-name="Path 28" d="M351.085,1.687a.075.075,0,0,0,0-.01c0-.064-.028-.123-.028-.183a.632.632,0,0,0-.02-.124v0l-.068-.817v0h0l0-.024c0-.02,0-.041-.006-.064s0-.038-.006-.057V.391c0-.021,0-.039-.006-.061s0-.024,0-.033h0c0-.007,0-.013,0-.02l-.011-.1c0-.028-.006-.053-.009-.07-.012-.077-.194-.081-.456-.089a.082.082,0,0,0-.066,0c-.076,0-.156-.006-.241-.012-.418-.029-.415.08-.415.08l0,.015a.124.124,0,0,0,0,.031l-.118.808-.026.089c0,.024-.009.047-.012.069-.057.327-.066.377-.067.406,0,0-.008.063-.015.1-.009.05-.014.077-.019.125s-.007.1-.037.074c-.018-.126-.024-.209-.057-.357a2.12,2.12,0,0,0-.047-.259c-.052-.182-.033-.454-.113-.671a.076.076,0,0,1,0-.024.511.511,0,0,1-.011-.1.677.677,0,0,1-.035-.22s-.014-.037-.019-.037-.02-.019-.033-.035-.036-.031-.076-.042h0a5.479,5.479,0,0,0-.988-.051h0c-.041,0-.07.006-.077.026a19.328,19.328,0,0,0-.393,2.759l0,0a.069.069,0,0,1,0,.009c0,.042-.008.082-.011.116a.193.193,0,0,0-.014.121c0,.007,0,.015,0,.022l0,.059s-.056.147.129.156c.1,0,.276.009.428.013l.005,0a.112.112,0,0,1,.037,0c.124,0,.221.005.219.007s.053,0,.057-.189v0a1.356,1.356,0,0,1,.035-.4,3.052,3.052,0,0,1,.052-.811c0-.042.042-.05.052-.123a1.758,1.758,0,0,1,.073-.5c.024-.032.048-.053.068-.043-.014,0,.014.039.009.043.014.033.014.152.066.4.024.009.019.4.038.42,0,0,.057,1.162.259,1.159s.634,0,.634,0,.034,0,.068-.074l.017-.046c0-.018.012-.046.02-.09,0-.021.009-.047.015-.081.037-.192.1-.481.118-.522-.033-.127.07-.353.051-.412.066-.169.038-.288.118-.518a.94.94,0,0,0,.07-.314c0-.017.015-.038.038-.021,0,.05,0,.395,0,.425a.187.187,0,0,0,.014.08c.016.134.046.368.081.62v0s0,.009,0,.014c.023.166.048.336.072.487h0c.013.077.025.149.037.213a.542.542,0,0,0,.024.12.947.947,0,0,0,.027.1c0,.01.016.017.025.025s0,.011.008.018,0,0,.007,0a1.823,1.823,0,0,0,.694.018s.094-.015.079-.086V3.19c-.017-.1-.155-1.007-.23-1.5" transform="translate(-206.049 0)" fill="#fff"/>
            </g>
            </svg>
        </a>
        <div class="flex items-center space-x-[20px]">
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
                        <path d="M15.8135231,15.1424942 L11.8555231,11.0254942 C13.8777749,8.61414444 13.9531014,5.12153413 12.0366948,2.62523778 C10.1202881,0.128941426 6.72679989,-0.7006599 3.87484193,0.629921031 C1.02288397,1.96050196 -0.521649616,5.09393728 0.160004901,8.1663072 C0.841659418,11.2386771 3.56644353,13.4248959 6.71352307,13.4244942 C8.09080283,13.4280835 9.43514766,13.0034983 10.5605231,12.2094942 L14.5485231,16.3574942 C14.7655619,16.5834647 15.0866679,16.6764811 15.3908835,16.6015052 C15.6950991,16.5265293 15.9362067,16.2949516 16.0233835,15.9940052 C16.1105603,15.6930588 16.0305619,15.3684647 15.8135231,15.1424942 L15.8135231,15.1424942 Z M6.71352307,1.74649417 C9.45438204,1.74704643 11.6758912,3.9693017 11.675523,6.7101607 C11.6751549,9.4510197 9.45304883,11.6726781 6.71218981,11.6724941 C3.97133079,11.67231 1.74952307,9.4503532 1.74952307,6.70949417 C1.75283021,3.96948563 3.97351393,1.74924928 6.71352307,1.74649417 Z" id="search" fill="#fff" fill-rule="nonzero"></path>
                    </g>
                </svg>
            </a>
            <button class="hidden lg:block h-[18px] md:h-[17.68px] relative sidecar">
                <svg class="h-[18px] md:h-[17.68px]" width="auto" height="100%" viewBox="0 0 16.2163916 19.1606747" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                        <g id="Group" transform="translate(-1299.0418, -62.8223)" fill="#fff">
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
                                <g id="Group_332" mask="url(#mask-utg7ymm8rw-2)" fill="#fff" fill-rule="nonzero">
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

</header>


<?php include get_template_directory() . '/componenten/hamburger-menu.php'; ?>