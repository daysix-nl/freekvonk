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
<header class="fixed z-[999] bg-[#000]">
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
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="auto" height="100%" viewBox="0 0 149 71">
                <defs>
                    <pattern id="pattern" preserveAspectRatio="none" width="100%" height="100%" viewBox="0 0 802 327">
                    <image width="802" height="327" xlink:href="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAyIAAAFHCAYAAABd6/ieAABJz0lEQVR42uzdUY3CQBQF0JVQCUhAAhKQsBIqoRKQgIRKWAlIQEIdzJYmJJCwpO2b2UzDecn57J2Uvxs6M18pJQAAgH8VDgAAAFBEAACA6oUDAAAAFBEAAKB64QDYkMNdhiwAABQReOuUXk8/2mXIBwBAEYEn5/R+hlGTYR0AABQRmBzTvGkzrAUAgCICk0uaNz8Z1gIAQBFhg/aj7sExmLdL4ygiAAB1CgdAUDMVgddzCezfaBURAIB6hQOg0IlW9+nX5E7PzZ9ThvcAAEARYSNmfT618ojdIc2fLsO7AACgiLARbaFTrZrbQ4oIAEC9wgFwU/jzqW7xDerL5rDy35zuwT7D7wEA8DHCARBwLbSZ/LtwEfkrv3c5IgCAIkL9Sp1q1aUFk/mSRBvfAQAUESpW8p6PJSdmXRfuPRkKba4HAPgo4QB+2bub27aBIAzDLoElqIJAJbAElcASeMg54NFHlaASVEHCEnjMkTCQO2Ug582IgAIJiQnK+81yRb0DPEcPbcEiOTv7gwvHdRz3FiJtuArh9sB7p6leAJ7DxuyEB7cCwEOLTgAkKET6DLbuLcxAIQKEralNY+qFO4CXTSMOphbk87Ax+4k1cS1rywA8q+gEQIJCJDitPTlHKd5qOLCDFlasDf+JhUb2d+YUbuMgyKtSmqPTFuUAsArRCYBP2joVIuXlB8SHJXYz8w2CzwbIURWmu5ZV4u5Il+lAQHkp2BynnwLAKkQnABLsmnWOQrSr1U04HJB4FHwuQI7mjO6fEnZHrqPNoLuwHX+Pz0dtWtMwVQvAs4hOAIheJFRTqBoTxN2LsbhhigWe3Nw4JeiMFGG6u1AJrnHP77IP2jhxLwHwDKITOKtMb44JHmxIz6MQOThMh9g7TPUCHs11vJte8N3yWmP2LrjGHFvTB79gITuAVYtO4KgMtzf4jhvy6nQOnYbOYRpV57S7F/R25jWzRctrcVc4dyV2GQwK1CFNnDJY9wIALqITOGrMGBQjq9U6bLMbxDmLcBWcqp61itFkV3e/QDt+/o1wXdkNh86rIihGAKxSdAJHtRkj4+0Zka4QOTrsxFXNebll296HUFEcuhvDodj/S3y46IuDwnTh/uhNRzECAI9TiJwdKEZWrRWv5ygd1p0cZubqBJ8HtEUIhYhWuITTFtnqe8eLWBFRTNRXOWrTU4wAQP6FyNSL4Hfn1jv8teKtdhuHF6RBvIYFWlWYji+Ca+BsRiQcOOoE94tURUhvig/+d9/MZDBFGcCaRSdI5KMHwG+n0Tak0YrPEtmLC5uduKiB1rcwHT8E10B8IeLx/VB8vxUDYrEdjMI0mRR3AJBcdIJEyvBx/DSl4BpIrxVPpRrzCXe4YlpWvr6G6fgluAZ0hYj6xTllIbI3wblzsTGtwxo3AMhadIKEGnYsWp3WBOEWvr14zQnTsvL0GqZjYB69iyGTrkiZcHBgl/j8jyazgyMBwFV0goQK0y+0Qwt87MWjqkFYiFTCTg00CvNGYbiYNpOuSCn4fs+xMacF/s7d+bqi+xgAZC06QWJzHkA9o0QPoxEWD1sThGd+HIVrTRBvLEISvATCrxBRdUWaRC/o7QJFyMX2XIwwRQvA2kUnWEAz52HAriIPoTFBtMC8FJ5vsDGB9SHZGIsQ8Zx8pHkx93hRb0TnDqk6osq/7Z9iZOGDIwHAVXSChcx5IA6MFGWvEY6oVsJCZC/srCC+CzqnCBlEo+3wLUQUXZHW+SDFwpwWLkIuSu5DANYsOsFC5u7pPgiuhT/s3cGRozAQBdAUCIEQCEEhOASF4BAIgRAIwSEQAiFQGwH2Ya/atqtmyz6MC9BvSS2+qt5V42GMR99qNXp6EUCds3rQPE9r5s41DrBYq0En/vKp9sVABZExwevoE34uIcrAELsz/MwgInOiJ8io27hgHLhtXSwnAmgnAxVEfOJvd9/1YgV03rGuEWPmMEjx99hv4yEa5e5dfcQB9YdSi96vAGfWtAMRERFc9ASZubBtrKJP9A+DwifgAfPnGEGLJEQL4AVwDcTXHb71ZO/bTszAls6Es+l8HqA0EvEMEZegk98j4U5cI+6KvzcRURbRExTAh+1jOdmizoLXABwORzxVvQOFIlQIQf4cC7xYE19/wgaRVjwUD1h3ikGkEfeCQ/AlwSF9IqKkoicohBOrCPygNmcGdc6aMoSZS4IQcoazTs176Qnv42L1GwPAqFhS5xSDyNXA+29KXC5KRKQqeoKCdHwStkm3DEFkApRlBcDu2gwoJbPu/5cIBdbl07Eg0iqWNnrF+2Ux8ERzp1z2RkSUVPQEhbmw7ao5qM5Zu4IIoCxrSvhU+Vp3RHoRGELM6Lfem4q7Ir1SEHEFl2SJD5NCwCMiyiJ6ggJ58Rp89oAJ17B/eIUgMoiQaDFyYRnS94UqD+4X6bojiHRKgX5UCiKj4i4OmmM7ayKqRfQEhbqI+cSLPEscqHPWHLaPGVCW1Ua0B10BO0BWNWI9EkK4uMrO7XyvTgrv70kh3DzdlXZwtMzc8SeiGkRPULiJ3bSK58T38f0bv+bn7xxxvqMFde5CHU4PwBKwknRiZggxa28Q8Qrdz2aFe+ZiaDfkx9XQayUiOm0Q2dXal4udbI6OSSzh2Ojfw0GisqybCCctHbxyJ8S8nUHk5Q7eYdTY5R6M7YY8NcBrSkSUTfQEBoyJFpmUPojEjvknyCQoyxpFSNweuAQfrXlPeg1qcSSIDMAHHDbAufaWZf4BXD+02VBwIiI6bRA5ciB6YqlWUpbGnCiE1NCC82O3CdSUgPI5EkRaEUALfadw77SGuywOwJI3IqIsoicwZGEYKdYc7IxrghBSQwOFRkwMIVVxyq21PeDnv+ZROB9SYnmg5zkRIrIuegJDugM16ktlHYtKNQU7o1UOITU8J6MTK0NIdY4GEQ9qzNArdOEajB1Sf+cSPHSViEhV9ATGDCKctEymZFaCyE25JKmGw+kMIfVy4ft4vC98FQ6tawSRCdzVK6UOfC2IiJKLnsCgMVFJDm23BhvDK4aQUss/9vAMIVVzEWcpRsBZjAkQZj5U8Nlv+bUTEZ0yiJz58HCJmmBjrMq7AdYX4V68Bncdq+UinmrehW3jDggi6IPqJe8q8L4iItOiJzBsDvvGUsFisUQ+2Bij0hPDa1gseOVrS2XYtCMC+My9/LZzCg4iTmGHJaUWcO6GiCir6AkMa8Rywm+uS3MLNsY/9u7utm0YCsNwR9AInqDQCBzBI3gET1BoBI/gEYRO4BEEdAHf98a5LgqWLhDABhIkET+SOjzvAR4gV3Qi2Q4/8W9faDqW9U44IcSPTy1WF2yj/uZaLOHI5atJHGxqCwQRANZlN2DcuDKMHDuYz78VVmooEEKs75BFCPHlMx3fg2ga5tPnIhlFO2/1smPWXRAHMwCoLruBThyS/8V0rapCtFPK9UY9hJA9IcSdQTDNcF65QDwUCCIXcXu1HY2P6AAAQeTBseIhd8i/5rUrvDe1w+E2vSFZCCEufVST6KHPkjx9VzQKIltev2V9ahkAEERE6xV+G3+63cop2qnlITwMOSHE+LS+wEiIa4r7u+ZMkanA++tmfMesmSACwLrsBjozZEy1+WP8KXcLVg4yfKwliU5DyD65EUJcU4xInFeMNM8FdqD7qF4E16ukhSACwLrsBjq1dgHyT8Fre2IxiJQ+EHGrWJgOVRAZV0zPujQIIlteH/JNsL4NAJrLbqBja8PImWlaBJHOQshECIG483794vSsmziIDMK/pYWRIAKgB9kNdG6XXB3uiFSLlyBieTODMyEEBYLI6SufnQKHg1o/g+NAEAHQg+wGHAhOt2et4Rb7L8sdcUIISgWR3RcONxwLjDxaDyJnggiAHmQ34MSUPFWBrSS9GWP/NQuuUyuEECTPxAcAfnbq6/71B+EuV9aDyJUgAqAH2Q04snYa0V7w2j2aYt9leUSMEIK3jOKO77HATnUegsiOh2EAepHdgCNDMjvcsrWUa+y3rB5YOCQzIQTvCOIgsov6UgaRrY4mHAkiAHqR3YBDxzUd08pPx4fkkEzJJT47JVOybxiQeh8N2fIhaOpd4gghfpTovM9RWx6CyFJg8T4ANJHdgFNhxULrW4VpWkNyWvF7zcmhUlgaO1+kbvEfPyEErTrvh6gtdRBp9bBGNYpkecc+AA5kN+DYmNw2dJ6EojMZC4cS1e+45Spx3UpS3BNCiA8lgsgQtaUOIlsb3TwVuh4A0ER2A85tKYyopzjc6yz8R6bo8G69rM3HVtyTEu9lbFOJIKL+7lIHka2NcL4kkR2zAPQiuwGsDiM/BK9dctHnY12S0LjDa6FOgntZi+KeEEJ8KRVElNOz1EFkS6N9h84fjABwKLsBrA4jf5Pvgte+C7FOXZLQoMNrpUqvAVJR3BNCiD+lgsjdS9SUOogsguumcmV9CIDeZDeArKd6v0TbvNY+HPCShEodXktlYX2I4p78Y+/ubtuGoTAMewSPoBE4gkbQCBrBI3gEL1BAIwSdwN3AIwiZgM5tL1iqQAFfpbbPD3/0HuC5C2gngS1+OiRFCNknyyCyJJ0aDbrIhwqc0ouldG0BAFPiASA+ljYq7cO4Jv+6fjMpHTt/VkjNd04JIbBgGUSmpFOj4lPia9nwfczuHX4fAQBBxMBSaIJX8ljcmF2z80Zhstti1b4/hBCCQ8VBRGt5lkUQKf3Z/sgSy7IA9Eg8AFQnfLPCa2stcaDsJkDeCCHQYB1ENL67RoMHA64KfzvPJb/3RpaJAgBBxMiQxYIbnodsKdgh2VtFhf+ZFY1OGSEEHkFEY3nWaNRpKHGjIWRfO3moKoCdEg8A9Q3kUXmT4byzvRol6kPh/2RBGkJihU+WRjnWQeSgEJpHow3g3kfhDm8uVfukGwKgJeIBoN5W3+pmcDGZFZbnUO10DAgh0OYRRC6OQWQwHLvUUkqNjjoAuBEPALMLq0UY2YTsQpdEtTQ7WBqkIeRGCEGhIBIcg8jmWllXJGSfnXVmAYAgUthSWRj5J2Qn9pN0dWxvyGKHy8xQnkcQ2ayOQWSu6DSqSXBy2Gp8rQAAE+IB0HwYYT/JQzV+TGbIYie/C+rjFUQujkFkszq8xneOwt/5iw4mgFaJB4BLGPGeIJ4T1dqyLGkIWRTeA/rmFUQG5yDyalfkrjjxnxRu/tS4Rw0ACCKVeieMrIoXvmeNLNdqZlmWNIT8UngP6J9XENncHIPIZnW+QTRl1yQvjuoF0DTxAHjLJbs1cIpR4KQts4mIlpDFjp8Ij7p4hfOTcxCRnHA4vdDpOSt0QOhiAuiGeACI/GigDX9UvHD2VqWXZQWF07EOgGIQ0TpZ6ugcRDJRh2LNluyUjQ/O2WLwHUoIAdAF8QAQrw9uYU1wYJlWdZP4oNAJ8ToEAf3wCiKbj/R6hQIPEfQuQgiAbogHgNhIGGmySi7LGrKViQwK8AwiU3oop/0pU6q7+OwC6Ip4AKgYs9/ptYoFlgbVfpH2LO+/vVYgLN3JQds8g8hTm8gffiYqvN7mlOos9nMB6I54AKj52cikck6U9mTLM4SwHAuWwUD7jv35yX0hs/LNgUuqq7w74ADgQjwA1Ly73CYaPGDrf+adL9MqMSk4KjwxnRCCvww3dGsfJ3s03qBe+00XzWeWAEB1xANA3bmRyXEwOAmmhYoFJvQje0Lwh727O5EbBgI4fiWoBFcQXIJLcAkqYUtwCWogsCUY0oBKWMhrIMtV4DwnoMwdLCxHLmCPvv0f+L3cw6zwcXsaSyNVwhf4HnKFCpHSR5jz8gBA99QJkMStkWLEiDWcK3JP6qfGxou+fVYUfBe/Im+PejD/O80q02TdZnzx8irmCGMGgOqpEyCJqbFtQ5cTbdVKMdFK1RNCEYLYbKFetTn8O+4Rcu8xJ3z58iqWTIUVAFRBnQDJXMPBKPQ2bRA+9B05J/YUIaiVL/R9M4lVeHEXrmD/hBGzcBG2bq2FXiABQHHqBEjKhWOxFfwHPXe6OpLzuGQb4bJF3qoipUksGYuQFoxPz+WNE/4TTlj+TgGcnToBkjt6QtVWcJJgOlwdyXWBIUUIAAA4BXUCZDGKraFtWrVfDFbrvSHaIuSecdUGAACAQuQkxoaOm+3pmN9cz8821L8CAACgpk6ArL6K32F/uAif/XLSY35T3lFAEQIAAE5LnQBFuLA/fMEG9pdGb2TPUcBxTwgAADgldQIUYRq69LDVY35zbMnSFGZbxgZ6AACA6NQJUMzQ2KWHrV2CmPoZWfEejZ2IBgAAEIU6AYqyjW/pMeIa6ovUp2TZyoskAACA5NQJUNzhSW0FPSMPg7hWskJyT7wlyzbQPA8AAJCcOgGqcNE0ZCeeeO9hhC3YQ+ITP4tRWWwtEcYAAABQBXUCVENzPO4a4fNjG8RF3EL6WDOsNBhx6+x3BAAAQCGCd67TvgMjZuEirZZ44YRNvALyYJSXOv7MNE4AAIBs1AlQlUFsnRYjH41iEsuTVXjxxj39/CImMUT43Nzbsf6ILxHGAQAAUBV1AlTHiEX8CPtjq6iBvQdjhJ4QVkIAAECX1AlQrSkci1uhlYPeaIuQbxHGAOAve/ePIycMhQF8jsAROAJH8BF8BBepUpEb+AgcgSNQp6JIHSGlSoe2TBExqzSpnMdISATN7DD42fjP96SftJWHHQHjz9gGAACCZd0ABK3NZJpWaAoyRv6OFwAAAACnrBuA4H0xx2pCGDlldyyEEAAAAMiCdQMQhW8Bv2U8JQghAAAAAAgisFGTP+b1mrBmZJcK07EAAAAAEETgvs/meH1n+PxUScuF6Q3DMQAAAABExboBiI4yx+srtpNl/T6xKQAAAACEoiBiRRG90ZH+Aw0pEUTgIwXWjLCwDSEdwzEAAAAA7A0ZkmjSkP6Gv66kQBCBh2xOPKwZYQkhLZ4uQeQqInAeQyCWzlVPJvO4ptWobY2X+CbD5/2oIOIVHo9tVq2uh9ZR0NhTEkEEnhEH1jb8JXP9yvgGbhtCaoZjADjLdmOGawKDE5XHTgLYKVedrI4Mxr6upCMqgXM5NxW5vjDTYAks9WqqUb8xGTfFPQui2gTw0YRVCkEE9mjM8frN8PmxUQxPQi4AEWvJtjRDu2fRZK4BYSRIkrRMgWNvDaRGKAleQX6QbTXrKUgnnD8uprYLUgf0v2BqFrApLN/A/onhGGKBEAJgTM/8A3smQdb1RiRDuzaK1WitYGgvViKQEd7uhHNCEY3NTJ7qTFzVv3j+6xOnVdmGEInF6uDrgp7ISJrERxMVw4/ZhZEkXeSdQIjTvRoZ2j1Dbe7UCR3PR9NMronfV+8pSWvCq9FDMCjIgJ0VnyojDCF7f6s1uZo4aiA96YgmNRHYvheOKhjmRaY6tUEF9r3UZlOZj5yCX3eLoV3fyqXTF9BUsz7jNWUykiknbw7DQe1hECt2jYm3+qcDEefXJlzcKCJmLqYrWjcASZHGvlKbfiQYLmrOEKLw9ns4UZlQEOmYplCsCdKSmjHkdUQm/tTZxROQifSkXS9KZtyudHCwYcuj46pI5+DzfCtIQzQpMwshe15eXJJ3466214Qi4uzzyroBSI4y9vUzkR9M2zem9w6+hzGgaSSQH5FQEOmZg0h/bxCC4bsdEh7o4RoAW6ZOtS/ufFWs5uIPAeyCOD05B64Mn3EWtelkz3/Lo0Hdw/qh/oGO6B0kEWseBj6XGlbHKUOfMWHdACSJ42IYHXTCfaoCfDKkAppCAnnKJYgMTPcLxfTdmoTXgzUWna2GSMbfmpLoE+/3Kb/Hi2OTi5EhXPy3niGEJwIrtbGv6PoE1g1AshTTmpFLpIbAQshsyKBTAmET5FYJrFMaiGEKVoLhXrC0YRiPKwbyyFMIx7tZLYHk3fN93yyV0HXGubbs1ZA4RtgX6R/+LyTFwQrrBiBpFUMY4Xxs7YMK8EnIrCIGu6nAyVIKIpwdfs3QKZCZBpEjuzaOnjtdg6f7f45BpDqyY+QLnfJbBfTUw+ZN8RpBBHLEEUY046Nzl0INITPNcAMHuDicOhBbB4mzw68Z2tEZB5F/7J2/rdswEIffCBxBEwQaQSOoTKkRNALLlBoghUdQmZIjGMgCwgPSpdArUjOn4gGGYT/L5u+OR+oO+Ao3lGRR0n38u9ESw+XEckVJ1yDU+FariDREZFgqu30krKD7ogUfH8cKOI4oyQUYhwAhI5xJOoI27gzAWHDUOOo3wxDGV5QgPQoH+l8QZRzxudfW+hue2MytYaqTJT5nGx3jnIZzpr28clDlOyK5AOMwIGSEO1l/lYZYlV9XYHrZtMRIzFfLXPYFT4o0eGiJtaIECZnwzQ8aYdxRkwzmpEtSRBzxDtovwkQEtwzyRMQaewqO8o5ILsA4FA0xK9pdHIEjzsol5I3hZeOI086X94kYiO4OI+H3AF7hxpDFV5YgIRO+AFjJpsokg7G+SYvIRkdERmHgKjc3HeN97D8LAfdyaqTKd0RyAcYheTVxfwccG0mKhKyMK7Zc04FfNi1gGcSoaJNHQwYTERMRSbzSIb8TY69IrSIyMNbrhlkONVHlghbJBRiH5NUE/h/xQ0kSmpKMr8ITxT3wZYMYYocI9H/YEf4GYwUfHy2YiJiISOKV7pngiI94EcAVoWpNpj1zvV5r3WPjCEt8JxdgHJo+oUchgBNRyT1SpD8EC/Blk7Mn5JaMBMITA9E9mQwMxPzEsU6CvVg1cjQR6YG9xCYimHlxWhLLgWmRFo3fHwTcIhKY7oc2TEQMA9zCnmPy2LfC9kUZgN3+PpYRCxGIifA3mBNFchGc21MTRxMRL1yWiUg5IrK3UecDXCdLfM4kRMQzDpfThImIYTDIyBZBaLhWS/yJr8cEOIdncMQCOpcuWlzHudCPei5qExFELwZSRKoc/80sIjkbFEYignvWTER4505EwLXkxETEMBhl5BezjNw9P8VjSz3o49YqmReiNSbmulcLtYkIYl4HUkS6+DgWwHWXQlCelDuG4UC1isjEnDy3cWcUviy9iYhhMCe8H4Bz4DivHK1ujlgBQ9pak5BdsWScs1QKJiL5RaT0oSXI+6Ohzp3A37VaRSQIJM9a53giMRExDOAkPqkHaCiwJ2RjALSwmYSUIZ2lYCJiIiLJUkBS2YNXz8rxjZRAQkSC8m86AhMRZTiiJyYiEOudCa+euaWzI/wlCl6OuUmRkb+EBw2VGQpOSuevzsskhDVK/lBxEpQnhejr8cB9DExEeFq4Ed+JVD5A999EhL93qvSVs0xElNAT84tDLyaQlDjCP2ixWYEJ9YYnQoZVm3JJwE/CCW1ypE1CHk2k9SYh7GEyYiISgMmBiQiPiLwpYE8+Mld2zehnDXFdPu6LM+BYuehqnAeTXACYhugJT/REd/F7jrhYifmi96J54txOt5I8ZiHxhVayMd4J5pYLR5wzHBfJV3E2CRGJ3DKqDRMRExFJSknKR+BS9aVcM/pZQ1xXl3EIuBRdjfNgkgsA4IiROEcdsRBhA3xO66eQAHYNLaVXZOMU0+L7sw9qyr4milrClx0JybWQjiYh0EDv/l46JiImIpKgkntukK3Ua6VJdBC4lw0RwXN2NGIiAsYfMHF6VkiGCoaN3JUR8DrsKcdZgMPoEMy7dwsnlO2YXlOU3I2PxkTERESK0v4LVHIo0XOQA6l7uYJzCo2g6poakgt4kRbc21Bi7BWSmfGhlSRFEn4TDaB7XNNmhYjufguZKKkHkpPaRGQCJUcoEXGCCZt2ShORM6gOmIjwvqNKbcw1EQEzHLAX5KtYb0yibwhH+EKSZgkZ2WJkqlMaE00XLbTEqqy3LBe1iYgHJUcoEZFM2LRTmojMoLmHJiIyOQbqeDkwEQFIiEV6FFXJgJPIV2IAT87WMDH9jUncLHChuZ5IYSJym9FEBE5X2DPpQffuP3tnb+s2DEVhj6ARNIIXCMARNIJG0AgawUUGcJrUHkFFBtAIKtKloVMHYK4LA4JhP8vmuT+k7wG+JgWfQ/HnHvKSdCPC/x1QZ1K0qC5GzC7AU03EJbWluAcODkgzctERZEKk6pLjdXWXvEq5rY6LTzMiCViOGxH8t7E0fm+JbxZAH3Mjkm9g1+2nJ8Itxg+z1xDbiBuRFhB4urCddQsD499DmJGOiMCdFat0yWVFllZgNajNiARQ0IcMmi3NAZog61QC1ENzbkTyF1C5NBMnAwfd3YgIXqXq0r3BZwYODlxmpKYzIZ6iVYY+eVekNiPSgoI+ZNAsFbBZB1mnEqCMyAFQhkUk2zW3JOOweyTgA5omyC7Az4OIaxIIhlqhFWANM/IT8Ls1kK4nl/3gRxoNI9IQPVPZF0ZA0IcMmhfBgM0yx8Ly4Peg3H1UuqAlpC8eiOmxzilf2tkUW3T+oq2FNRYuYskuwF93VlFkNiNHwaBL0ox8B/xeLRrilFzaKvmQ464wI9LfBA6/GcYka0YE9bZJ6UyAoF4aNyI2jMj09MHqPJ2Vdxw4dNQ0JNkF3KHxx9VEhOy4a4LCoz8SZgQdwGjRuclXl1S/sMYsGBjuhfryBAj63IjgcSPiRoSz7SCk1f64hPwG6kbkSCQ3IyLi6AizUj48pxkp9d2VRzTE6IZETdwpi1aRGI964i9xFkqPQBiRgxsROHOB57UQc7YbkXzGxK+oeLMWp1DjqqoRCdeP5AdsRbSl87ZvduAF0B4smJHaTMi9/PnJTYmoPjU9KzEbkS69IFAg8CzwbwBluBHBtzWLAbmUEUG0e0lqNCKaB8I59Qvw+9SNyEQkX60V1fDkTMFWlxuMrPqizEj8oBSaZqPxj0TjZ7ggCoDvVhqcddK8cZD0DFgVR5x7cSOC51ONSACUYQ1pIyJ1UVKNRkRlpzG7gDuNbRF0pK6U4oNVu9MLnbwloqE8+Ib4k/L0A/A7LNMSHXEg4htbyQ0xEBPI+H2aVLawleEMkA5KV2laMyK1Xt+KbmsW68GNiA0jEhKvZmJQPNzNLfH2lV3AncF48NVWcc0rF9veuV1p2rIDoZyWxbGiUepVvc/YX7/ZTSpkf+ffJ2IkGsB1mS6eA9OlwDWBtYrpl9aMSI1nBDgCSWTgiqAFBXluRPIJgJT3KyNxoTOUEseps4bByi7gphNGYBDpwun4lQkxFmQh208scNDeAVaVI9EbzautRZp9RAuuAAlxy03P9LfdiMgjHbgiCG5EHjIKf8+m4jG8SXyatcxWdgE3AdDB3zowqe6Ft16ihiNmMCFrLYUOOu9OhHumycJV9iS2M2hEQsLoTOzdiFRBJxy4InAj8mKbZs7CqHUMR42XCzERJ2LUMiBoI7IQF7WelmVOy92rXx9rALQHSyZE9RCWIPP1+zFOFn4td9mT2I55cg8MRoD7vIgbEXuMBV6hvXX+agAr3jUaEXS7Rt06ao3wQrrqQIQL1mOf7AKIfVpv67isKRLD+mAzeCJHIGFCLjppO38mBsAtHv2GQbtnCB5LlRuR/ACJo98fCjcinXDAZhHkA5FSIINtrjRELZB1gxqrajciu5LILmDVyAbgtpFLRxpBepdkVdsbEC0RQSl1AzGtOBID0TKuYpcqa4GQBGgjwrW71gkbkQVokMKH7+yiH4iU4ghMPyrt/27RiExuRMohuwBiXg2OQ3KVKo2UrIYxGEnAgMkyk4KJdCNSXjCAANmvOHZD3nlf5ARYfUauvtZ4RoBjfLHW/5CBb2n/dzcicrgR+SKfcfYDr0VLq0Oe0vv650YkBaWtejci9bQhLSPCvQAxgYKkEVAvbkTw44u1OojAXbFPNSLIxTQ3IgWxA6XVDG5EitUCSOl5lZBpQmbiGxEL2v2pCTci9gIhCVB10r959mNk2LWSMiIRGGjU3vaWwuqgBc87M6BNWuI/e2d64zgMQ2GX4BJcgktQCSnBJbgEleASXIJLUAkuIZgKnNn972UGMNYIkvH1SFEHgQ9Y7GIzGR/SexRFWYaSSsQclY2IEgpQLWflqd4/x/X9EsgsBJcIWce4Mk71BTPiEqi15iIbEflVKA2gxOHXhUO2GvC+Nykj8owWdE6AJhHOQWiJgAb8nV1gHcNQRgTZLCdWI9JmI/I+czEy9DjOwR/SJqQkBmICmZACYEamRAVlITDIxx6hZSURIITWUSPx58041QBXfLUZkRi7JqGfM20b9nuwOHSRCWgfRsQK/zwpfOy3YQfRtrcVOvUxBy58mJARcDp8uXwm0IykKiqzEclGBC0QDcNqSHOhs9ISvQIj4oDXOeZnrw5QaN3B9z82I+L2JBzA5jJKwU5YYBmoGhBZgHL99wDBmYM/QjMh4/ozGczIPe8bgW/MjD1CEwMItsKAV0NuW7X0gM+SMiIN8DrHbERCq4GvGRIXKRoR9OpEykYktOejuDpYDG8zVTk0xzADHhxBEzIsZpfZjIRYe+uDvOoZaNYJwFYYQOb4iHCricfFlr4G8D32xDdRgYx+zEbkFpiA7BiSf1ZYtHPjwKWLiGuo7TlCPm9JGJG12LspOKAuh86SkhJgSvv1Z2YzooK8D2ye7x5WFjWwFQa0GjIybN58xujRiDyjBwm3DnAvtRJabf+eUsMHwzUoAsIRs7AxiNWIRLkJ/4rIu39sZZfjTDhiAKwgaDAiiJWQdvm8bEZUkXqLbkdYwDMaIlthQGVUNeN5RPbViADGgr0rIiVIbAQnNMDji5bfv2GaT1I1IsjxNGUjElyi4oq4awAZohwUFNOHblA3ogOIeum2h+OVawHqJ57NCA/DnHb0RO2hzFEDW2G26uiZJtGSeMz7wxwwIg5UqtgAxYYWIc7BEJARcUxzbopGBH1PYzUio5JkM5Szou4OyBClHhNhiYaod062LXEHGx409krJC7jcJZsRPNwnYmsPu67jF3ifNHFWcNkj54Uw7y14/TnVlkAClSqm3DUJLVo1JADM3jmN6VkOadzZc0//5q5ZkDE4WiNSvhFzBnCxUg93cRDsCEdMisqyKmJSdsJ7NiM4ctnl/7GvZygn0M5ZI+IYVg3e0Z0Zf4WMyDNakIi6A+6lVkLJ+I7gex7z6fqOYW9YkY1IFM/GD2cO6+lAFyv1QApcQzjBl5yjbAdRjpXNCC+5EcV/s2wSEIUII9IwnLPwifLgil0rbER6oIgqIkVDQg3VIOFBlNmIzM5DxUaMRqRO1YhUxDoG4GCSYkyLeAEvQ25N+h3wBf9Er7hcLJsRDN2cdryajjHUgZ9JJL5eh8bD3rX6xJlKo4AR+SYqoIgqIkW7EamIB/P3TNWIIO+rDfCEfsRzEVrZ3g9HhMdIlPmcgcu15RLUhHki9FB2gZzwns2IzIQSawyvEwMwmx8CR8XR6Om9sgfNpRMwIgP4+xcRUitYPUeNgd9EyXhWUwP4XaRwHgS0FU6ASBDaGTswI3JfTAhDS7uUQqIsyhe10nKsbEbwSEWttE1w+24lMMAJjev+m5fMcc9YvoISP8s77ZiNiAVnPiUTOFIY5eKxE0w8cn++JI5pU39qRsR6uI4i7HHlE1HnrjqX4/LNUkoLFHVSZDPCJxJm4N6piuhnPWE+nZkT6gQAFkdmEWwKxoHqYEvfkdmI3MDvWkgCCp3x9fG7N/P++AKY69SMCHpVOVUjgr6OIuwZDA14AE01QqpF5NwXMil5+bMZ4Tec04kN7vUHsd94PsNk+i1pwyioNbG7o5iSlWJEcwWUEUHPoxrGUDSW6cDLQtCEoFb6Oc7b8YWPlswxGpEhVl2y2YlJQKzMgImiI6ZZd4T0wG9REkMAe0KyGcHRn90XxVDCuBz2aZ+sWll3y58ZxgP0RBkiW2GWzd+KxsSe0YByGZE6sj0CaPFYCGI9zQkxnSXjPKzwxGhEfFxHEbZupBEq35gu/L9qWYoHGRKu0rKYMqZufgmhcwI4yGYE2zd//W6WHjctl4QFjAean11p9kzqg4d7vfUcjIxltRxGJLbSHPS8UghwJtk2AkqyshHBYCPUZaPQapw4v/1jxdTt4TUGwoI7Ud2IfueNG4mBaImasU1pSEupHKtemoVcTUzZZEI3qt88t29E3VuOji6hMu0Q287jBnWOhhooI4J+3zjeFd9oMSIN8ZiPxQO82u8i2pSs2Yigf+4/9s7g1nEbCMMuQSWoBJXAElSCDilAJbAElaBTzgpSQFiCgD0FWCDCO+QsvyTAJkDijIMIIATZks1/yCHFAb7DvoPWok1y/hnOkBOOgIcInB8AcFgaomQ4u7sWVcoGMHE4P69ECuKHBEUIwmHluhVeCupV0S0sTa6ABfRnxoCESAjh3iYmRGLfT7aYAUflXKiX4GVgEXKnY/hNhWIKIAjOKkQuMeL8gDUOG/wo6BI8DiES7Y/kf/4i/jNA8bFUnMRIIAfLB62j4G4CC5E7TWRtpiWCECLcBerPGBjWbS4hInkcuQgR0CuJdnGWhYiQOzqhBjghBIFO7KRKmWrr3pBCZKtzkgEcyUJhDgsp4gQF6z8lnAlBipG7GWaRHILBMUBQCZkfA+A29TODECIcTht3vYhEIRKTI4pytBBCpCQaogfUg3KJkDs6of01hE+njq7vHvYdBMrD3AiG8wNWKIfOSUaQQz+98DmUIAGFpngzOzRHvkkixMglISZA5kDCvC5PXNuF4IgQmYSPZUVcExEiHONZEGrVla4njFXPqRkccMWwti7vookBVCu22Mi8x9UBgyRqGTcLc8f6d52IEPG191w8vA/HeuAF5wcAB0sL+tG8uiD2iTo144kL8ytizl2WbiWova0RMK/vjPlYFqsQ4bzkDUVF/CZciPg4466Idml5HTj7WzuuM4poCM3Uvtt37dhhYeYgiKrVmE1vZIsrkD8VWohIX+ePzA9zFEAnwT2breBFSxTShEgFiFZyOyxHrA6QVvZJ/a4IAW5OoXEVIz8CPkNoGlDNVidgXt/pgNHws7E3dirwd8uVGbkAHB4uIWLXp1UP9lXbSR8AR5I49jR99P+zszTgd9mzCfC9In2pxT6JnlAHMlw9uAb2ShSAjHpIIcIpKFHoW9w2SBIiE2iwuTe1d1Kig8dFm5vviG8nzgIgxQj6CINvetAm0gqY14jC+zOj976/yDKkBdF4utCQIwAgxRBHlIabfJs8NwyIxVpANjykEInhstrYhcjdGl9CpAUc2ekFOCx71iRcTFQR/9xes28Jd4xyFSM/Ry5GJtA5ZQXY0BCokx0xRKKOFKtHuOY9c/oN6PeEHmtJpg5eLrqmIww4Qo+0rc+2+CdfPGT+YzEdsRD5I5L9ub3Fb5MvIaIB0eEi8Hm+cm8wE74N9R2He45kIl8CjE3s2aIS+F5FgM1oizLx74wbveOQlpaz1ntw1lBoYUKkusVjBSC4KMWuhLGK0c1GsKTy9LvmPsePsgYgRNDBZQUU0hKIKTDx0CQIkQlYFMnp0NcOUVLlKY3NQZ1FCLsYieEs6mUBcGxF6m3RKW1QvqkSHq8th3kAOQicv9OQZoDCP5RdiZ6oV40MPonZ4/1lvu4zQ9pElID3QK8dqR3NimEeiREiBuS0miMTgCli2e0JEccoxsgw6S6Ad/4zi5DDC4JmTGNLogO/ywh+HrcQuWQ2uSZaD7X+zY9EBXB4TIIR8ZbBIfRpE9ER9YE1rydMgH1bcl1ATxRAfw49tqWAu2DQ+OgEx2lGghCx1WcNeA7XjdbT0ZZ5gBs9fUZXkEcAzipCbL6eIDNiwNk9I0SIjFmIOEcbjeWsG/AaHJqCKIHrp4m0gHsizAr9xrz/uIW3keiJhih3vvsPjwXpkhsWzIRZ0RMKvO5znRTZbTggxAeLZT04auPWvTM+u2ahelCbQJHmEhAVMBE5pEUWIU5j9zXxzMjNNkDHGC2kONwwOo+Z88G1zvssUB2JjmgYnMLKY5vd0XKAGkK9+Xl7YmCI1HP6I66icyBahv3dBAr6jFvruhCRKXU9GB8EH2waQi0g1ovLzX1wXJ3aAiREZsA7KMA7mACtD9/llyxCnH/zI2ORX0gKBueqFuL8ZyGSQcIVdChAhd7jKqKtiZZQntfzklAWeoOBMBsMzxyiyCLbr9ACjuTMD8ZReRJaPajzomvg61dCEVfiw9O7IymJz33x8HiuoAUECucHALp8KEFCpAQctdGRRMYr4u/Ebh8NwVMxwpBV8IUCnRG3KYU4/1mIZJCMHs6/l4R6RgBhkfFHsffdexQWF3AmnPNkSEuYlZ9VJCxco8T5ASsMyBGrHqSFlr/N9jPAKVTtWIRTvDAOJsCEUG+kyWfg+KaIixgxkiITFoopkzcJcP5N5CIxI4vKOtbyu7Vm3u17wPMzmZgpiI7QxJdI7/HIMOL8gCfKvSY00T86cxbACX/1xl0DaP+mFgSkketcE8JGQQweutD4omZy0vvAQqQg5lysnmGiJFqiCJjtzmQk0y7dJ7NvkeESIqkSUyoUVf8yCo3WS6UkxkS6aXVMxwkV8/HKPbp8FDGTyWQyGRk4PyATBS0xR1K7kgID8dCEdI7aY2J00KebZR7bKVaovueZTCaTyWT+Ze8ObuQEggCKOoTOwERgEcAeCGFCIARCIAQODoAQ5uiDD/jqE5IDMCEg+eC1fGBrLSGh0Xhg6Gqohl/Su9ZqZmd3uujuKn/eCWBezn2QzSWPCr+dOohoLtiLgIOZQu0K5XO/kwMP6QMAwCTvBDCtEENE7YRH7gAdYPJIj2gtuUPRCRewGYT2bpwT/YHnvQAAECXvBDDpsuJ4UG9g0ZXduWORP/mkuzVUwFxENR5FUhiWGZoTbcBiqV76WVQuiC+RFoUAAByadwKYk48rqMhmhFQrz+n3kXT6WhPtxsVIFfDYUrlzF7FUZBPtAYZOAgAQNe8EMGXVZHgDRUix9sJwRBeNx52bVzEbO+3wNAHvsnQKg041JfcmzBppsw0AwCl4J4Ap3yIsQt51AQoRixeNnXgRvdFZLtnM8NCxMKpEpjx92mLnMAAAEJB3ApjhxB+Di9tZnovSPsIFbWq4GAkpEbko/6NQvhsCAAAM804AE9LpE+cIz7773F1pFI8PbemsxQgAAACFyEHkEV5Mv1VMjgJV4ir6he2E64gnw38VA8UIAAA4I+8E2NV3MUS8E/KIW9g5Kb0pYooNLjpr+SwGihEAAHBG3gmwm8uBi5Cz+Ch+R9LaFwAAQJV3AuwiF4OxdqhYx4mrWBMVxQgAAIiVdwJsLmUnZJYTuahFM1EZLshS8YNjWgAA4Cy8E2BzrVgarycrQtzC6eCN0cV7JtZEx84IAACIjXcCbKoRS+OXeFH4mZoSUd15HZ2oPXcr0hXTu0uF16TtYTES0SR5AMC+EpHdKJjlBEu8E2ATz15M/2nwCXkplsRVuA1mcozRGHyvvgyTYCI5AOCmuMhFOXm4964bdOJMJymwM+8ECM49eRzrr/ik8HM11QE7QjmFf74WO1C1fIEAwCklIhsLDeUiY0n0Cq8BoBA5iDLyBXUV+Ol+PeiEtfcuHXd5DjCwEtCWimJcpE2Uxv6OgbnP8UWU4irawU58ALbgnQDBPNvWtTf4BZwKn0hmnxrpxlXhNWvKRE8nLeCfVFSi2+G+VCKa8TiM4TtmsGu8n1GLZrAdIf6GAAqRN/bOHldOJIrCbwnsYFgCS2AJnU3KEggcWxU67GhiIkcOOnZUSyByjCYdaUQ/S9ZEZi6jQUKY94Cuc+uHPkf6wld043ZVnbo/lRg28Y1nBjjdaTaeUQ941YDvjiSfQvQ0I+RJqYQWfIjxaHrp0gRdHthkdrN24nXELcWflfJ/Csd5uxIawDroW3euHcQnzgMQFUphr3qFRRcBImVqK0/1NuAVY2RpomVbX/IkZIIR7sIQ+ALXbPAjK5gENoFTtP71ZE0y8hWjefVgmkNrMsaNUHPNIL5xHoDAKRM/wR+pBpzeXJQVi/diTrkohTbh2hdCNnAxICL5W/Bv3gz+1QnXhA6ZYp4zZzwUYc8j/p1smYuR66w970UoR8D/RwihETkJH4R/hD3qIy1KLgas3jZaekqhY0hNM0JORgU6XEB2jkPPZ4/IKkR4ykdNjsd0ON8YYU0Xj1kAe9QuDEYllODfCCHecB6AwPhwgvx/RCvdpSwocnTGzlOVsFddIt+JPB8FuHgX9TsvhPsQjyxg3l9GmwzQiMTW7OM9zKwRyHXDiBiFw6G9EQ0j1EJ5AqNHCI1IpBQHJ7AOsBhpoVGzMQQyIqnkPX8ENwAgxBeZcB2w+g7asCE3lWhV4LTfAjDGf4o4nWwrcnEBGBHEIRzKRBOSDM4DEGcT0p8kxUbTGJSen5da+8I/hJ8nqYEhz8FFIdqAiBhk4OiMlgwwglorzPMx1i6+9w4MwIhcBncxvYo8Hc4DEG+LXewn2ZqLdx3AiKRQJ/JoeksPzqMnROt+pD1qQBs4RMtxn6pANRA3BSOCrtVBUAivikZkcUGhMCsMT9zAEaKG8wDEy2IX++SkbQqaAM9M9WbZSvgu7FEH2sAR4jsK0iq0GtUqNu4FK9zmG9QVaqFV7A5mANHfMuET/nYjwnQFGJE3UYx0EZI0zgMQ6GQ4JJoipLWAT7KABRFlRHLBjEScC50LP5mXTCIhA84RDSD9SqsLXyvYeScjh4OdTiFSbgGHLuXRVsqRzJNmhwGwymtwSyNCCI1IaMqT5owiivSOpknlg75Wa3oS6F428ruwV38BnkfIGjkg3ekuGHD0Y41X8GGJD/N2FzKAESkU17AW8D5cyIUtXTwYEUsjQgiNSGjqE7To1ThJ3FSg574sMIqLlAYGdHEkIaHa3149GJA9kd3esxGZaIC1GBYwB5Qei+tR7DEAZSRGJPZaUELgOA9AVDpk3SIJZ2udkCFMwUg/6Klb29gnUpQ5kR94R19oRggY6xJhCDAHLqMQ7SwF0wYyIiMNaPNqAbWIZWIdoSphj4pIjAjqWYQkg/MABLaYTPoGeJZPQhoRzU5d9oAR6QDvUQsjDIyMkADcFilEfwpbeo20OYedPmCAOSAT7oDNKyJqUS7/SLG4/kX5vU3qNzpZdqDPTSNCCI1IEC4Haig+gSY8n2SDvnrQJts1lcAkWPCdC31C+dzkPOQH6y7aiI1wE7jL3hXw7NBGxPdG2xyc663yrfE0IoTQiHinSbjn+ioBUqRGWaVF8WgagYk0B3qLXGiE/mS3ypM4MQ80sGgiP4QxgY3IBfDsGIyIr7kyf6A1vlU2CDQihNCIeOXTk5gQH+17G88mqHtncbMLukTuepn4IexRH3GUh8RLE+nG9CVxI1IB0sIQ/w4II+IjBXT35a40IoSExXkAskom/P1Emz3U4vSWavDGB7Egz8kjP82d8xloAgmZ03i4HTwUoY3IFbB5Rcx7qLkeVXexP3q0nXJlAWaPRoQQGpHglEKfeD70iJl9j16oAJOsxukZ+j4RzQUyBn4TvgpH1J78nRB36hObkBETsCtUJtwdUykLT0bkl8+pXHexRvdgZ0qrbDQNjQghNCLalCfZ7P7L3tnjvG0EYVhH2BuEJzB4BNau1Lth5VpHYJdWyAl4BN4gLFy6YJkugoogJWXAgZFmM19gAbKsH1L7zu7s7AzwFF+zFD9K3Hl3/vb+tlXAomh/NkA3GmTRevMs+iFcQHKdXpsYMVBF6bmJkNRC5Nm1t6C9CSFEdom/B92aTowmRAwjPcELGP6MIyYFDl31aKMChsTRaVKTD7f2QX72eEck9Rmn17XEJ+KvpWIkwWwHQz6j/26KmyGkEiLVkyjDCXhIhhAizUoxcgIe7KyJjvcmRAxDBsELGP/jiEGBCHn2shyBA6SW2Ew4sBC8soepZ/WKNQ8Mp3uxqJVO/Df4aQkvIB2Hm1RCZALVcMUSIud6viFBy/BxjQgxIWIYMghewPCOOChoT4nsHNKC0rS6F57F/oVi7Ap4D9Jrfx7WNpkYMVZyLCS9r0mQZtT751YBPz9CiHSX+2LEKNkWsK9MJkQMIz7BCxTOB+JvZZ2HDqD7uBlNiHRKVhE7YiTmG5GLgdgRFeiUV4uj/q6AezRwdH65fcn8+4Jy5JEipE/w+ZsVa9TXtUOAWpdbOOIIaH7C3RXNhIhhmBCB8lHgJFkE4wPHs3phg+iIOaPC6BoUzcnVUR8Ib7NGDHA0JJc5O9yOPEqEnAgH7mqGKHrfBxzqnIgK2Fzl7n5sQsQw5BC8QKHUS196CR1qZMesMdCpdgunLc/AzZwzzU5zK2B3flaAIn9DLy3I+cuFGELEET1T9ABV49K88Kx7xkh4A+yKaELEMBIQvECBaOmOtSTXtmcowKyIhugu2DFcBxkNilnnIoWKmEEbvKGPyX83YB2DZBrmOoeKmBgL/lMKEUdMDPUijjgABbEEIYIYnGgYWRG8QGHUxAx8kUqlJdzV38Odl+Y+0xQkzlkklzZnKkjfqIl/lKeiGbxtUnMV4tc0AEf3HlvixJy2mlKInN8lHlgv4ogBGA2RIkQQ1zGMrAheoCC2xMy4UUhku+LEacz4VJxj/omW1KXf/HL7Q8npt4HJyT8qehdyCBFHDJFmbqQWIm90oHt15wgLMBpiQsQwEhG8QCHUBYqQ3t8wRW2K0cXp6FQKSRwBM1kMPRwKEODcQqQlTiDHHOUEI4TIBEx/nQh3TwiDoyGShEhO+6dhBBO8QAFsiWmB87VX9ALpAelIOURHHGgiO7oAUxoVMRcwPdvApWVpy3VHCZH67IxHFCExhYh/9v1Z2dK3v3V9hmiIJCGSw95pGDCCF1BOV2Bu/N7jTHrLzsHHs03muEvRZid7xdIq+e3/AMhR9aCOWBwDUnugA/zQQK2E732XRqZoCOK+EP6EproqwzAhEqmNYmnpB/7SwEO3YsJVnM61iUlhjTP1GXA9QxZ9wSL01d95d07DSjhPaRTmsA8vFK/vGKMhG+D/B7HnTMR4xXRrOK/V5Rm5E7yAUmbiqYFOqiSBnKEhWYxwF6drFiKOODKcRhp5cMjw947iqd2IHh2F1NpJEyJudY0MGWM0RJoQiZ26ZxjJCF5AIa1fZr8CriWJ1vOaFOekilCcrlmIvOGI3/0y+xNwPUMGDtR6NVeWRoJa4iAspVWaEIlxIDSCn69UIaKxJssoiOAFlPG+wJqQmPUSEnJfe5/GNgr5lJkINfhTN0+A60iF204AZzcnIYKuSby2Bvx8G8FCBPH5DCMJwQso4iPxtcB0rFibrJTT0hQ2Aj63RHZ+uf2rsKaqNHYFtKpO9e4YwalYuQiRDVPnwpHh+TbChYgd+BhZEryAEn4hviUKmUug9vEs5aRxjmL8EuaIbEBzAXJq7Wz8TFfwO5JTiMSIFEsWIjXxxWOtYXi+TYTfj6VnGcURvEDmvFt4GtMr70wR20FP5Zj/x97Z4zgRBFHYR5gjzBF8hD4AwR5hYqJFIiQYESBCh0RoEnILCYmMDgiIkCUiEIEzkBDSLBnRUEYYeVdrz9j9qrt6+pX0pT2eH3fX6/rp2PdZgnO241GE3UqSnnUEZ80yaNtGfF6WhQi6RtErvV9nXIikWlcJoRAJKFr+GrmFolVSOOgO8LstR35KSOc7pBaeTGwE8BRwPRIfr+SE5gLSYh+AuwHOyVrfAKp+zym9X2dYiJTgp5CZEjxApjzjnzu5EEm1e6PVopjhckGohFb4Nhy3j8JDwfME9qwYEyI94BqWQVjMKMh/wGdiaQmRClAvslZ8Rs6YENkKa9bdkdwJHiBDKmEouDuWpUhBdUH4vrtHTPT7CRlUcIu0Uh3tl8Zy5Ek4vVJKTC4MGRcTI/+HWkJkvxbdDJdbrfiMYgkRL3RC+49GcHsK2RwlBRE8QIa8YU2IyiKrGUJvhP4MAXkFSFNAWWnf0Z6OUaPZoZWbnwt+CLdFInIRIjuaBEKvBq5Xx2iV74GQLAkeIEM+Mh0ruXM+dWKvBK+wKFWRUrRKXlTqYbr9AFyP6EMhco64Fgw1rUAKEa8sRHasIm/6OMB6hRAic/8PEVK0EFkKm8S93C2jebDUMVsq5wufEgLLCCeslxoN2dMIv4dx+wK4FtGndCfKD5fZLwPph7kJkR0daK63IkQ8/0OElClEKmHF/GZzdSIe0Co0tHXu1aBnpdaG3KUSPg/j1hS8CZALQ+FzqM/0ENcF2JmPJUROiZHNwdkjN4BNHwoRQhIRPIBxpu6q/6QTFL2j1DJSF69eqCNHgrb8nm5RCQ+Et1yEs6Z0J+pSIXJjoPEJYnNoj4/cOe36TgH7WqgFJ7QAEUIhQkhCggcwzhQn8zudxuAiQfRJwoii0EPrItfHpHY6rFIJLSNJ2WK5GDsGPuNzHpBz15gQ6ZTuVXNetSJEUqfwERKd4AGM86HwE68tRkU8sMgZVa+BqEf5a+zpDhG8/F/aZCi8LsonPONiEeHd7ewa9Bxyc6gpRAhJRPAARqmET8MJU9y1yR3NqMhWqBJdv1Ps0EURcj6PeYZPduRSD6GFH8ItxfOpp0ZtgM+hA/zumMQQIlsKEULKESLtzCbJ2CAW3KPOZaQi9fusBnw799mWjrPKd8Y0LVtsCm/SgJgXEYXVGk72zq5Az6FPcI+LCM/IRRDyFCKkOIIHMEYlrEGTbclU4Na2vbAE7txpRUUOf0c38b5aRtaCdmrfA1JFSBw8cFc9RxBCJEVBsgP/rhVoHEtYESKMqpPiCB7AEGN5/q8y3KVJCeqcjV5YghY4hLkzv6lGWAn+gJaCFo47cuZIz2dthknRyhkL85NF2oZTtBy4RqSdYdMCK0LEAe6FkKwIHsAI9YgIeQG4Rok0EUUIOgozp926UvBGC32JILSF7+qiIiI7u4ko2NwZBy8uQd/BIjO0hciSQoSQ+QqRsRPTXwOuUTLuQoGwEWpwq2WUzdVRyp3r4bQ9B54bQPDvZ+6iESlEYtYqOmA0ZEc7w6iYthBxwPbJhMyK4AESM5Y+9CLDCdEitbA5s01lpdDVBWU9vwuzrAp2dK3jwI0hcqObEnFVTBXVfm9IIRLjvpBYESILQkojeICE1CMi5BXgGuQ2jbAdcfCvDew0lrxrOwfWM9xxnQuoQ0tzpJ0oRFbCAG6Zq+1ko1OzKERu01KIEDIvITJWmP6OjooqjdAJ2zun6daK6R4aFrNglPxh735ynIahMIDPEXyEHqEXQMoRcoQuOEC5APIRcoSuWEesWOYIlZDYsIlmwZ9dAgskNGBeEZEyYdpJ6+85tvM96bdj3GnKtP4aPxu33DKGk6rXau6d0RbwWLGZG0SM6MEN4tqT7KEq0HVgEHnMRhJKiaLjPcAC9uLIOyFZ2LplK8X97tfCiPqZv/XPXFMdXLXiXix7xWYYu4ga19FL6hhE9Jb13RGtjfcAgT33x/wK8BgUhhGtW774zXrcjPh0KUwCHoPmKyNbdhSSvXIy2UTSuF6Af4e98qR9CdpBJMfT6IkgvAcI6NIH4G/xEvAYFM7RxVP8AIjbYYX9CLEyETZjh3JtENkqXKuN2CtMsk+1B46X2uuu/ZyalfZVEWURRJ7rB/nB5RnJObj4imEkXkbU7PeJRp3IuT0GvPTy6nX+oMb1SnST3qkSPMk+VQEcj0GEp6oTZRNEGne+fjKEJCfGEMIwkobh2+CPYloPouIyuyDKBM7t2YwaxivAeDftfHRD47odh49JkGnH/w48yWYQ0X1OyOtPlBXvAZRdurX9IF4AHoPC2bn4i2EkDW9W0pcQq3s3v+4DBsRC7EStcMdsVhABvO+d68HolIMIcrzUJtWaz2kD3CiAKDveAyjaXboTwhCSnBRCyFB1wIkT4e+uob4BJ/9JeajXpBStchia9ZwDnZUUexDR3pIYTTOIoK8/UVa8B1By6U5Ix+VYyUkphAx15P+zJHzgh/oijOgjWKJlRB1o6cusIBJoq/L9ghPhAhyUYrB0EOGdXFot7wGUWIaQbKQYQobqQEs6SI8RX8W4fonXgLEJMzEf6hsgDIwVolWavKODyEnlcFWAJ8IO9EUhg8j/9pFv6kC0KO8BlLQMIVlIOYSg15eTrncLLAei284CsqL4Z3Nj+Dwo30XQCCLm7xIxTBnwJNuBm69TCyKaZ6PYDK8XEYz3AEoODCHJyyWE8AT2dEwb2FvAmISZ5F6qfmZflhF2uiQMfGr4nWIQQV2vVuk1WnMQ0Twt3i60bJEoCd4DKLIMIcnKKYRwN620vOUdkeBQS47suUZ0wLbfiImxBYWEevpDyo3/DCKY11bjCAIH6l8iSpb3AEQTW9G5/KoDXBuiXB2dX30Xxeg9ZCcOonf+hVp/b0GPZTyf1zaCINIxiMCDyE7YmRpFlbCiBOw0R8QgQsGht6mMqdgrQvQ04xNGAEEmxFbcqCByUgZalqUVRBoGEdi1irl6rkghbd4DECluURlbpfbhShSSEe9dPIVemmfBSzhDNdwziGBe2zUGEW4tTOq8ByAasS7vqgHXiChnRvHuxty6V1pzjz7I79pr1Quj9Hs/mmgD+lwYRPIJImymJ1XeAxCtKIig1poT5cwAGrJvrQq4FGuqUNiZayt65TuyGgfqWaXfdSkMIrg7fUQMIrQYBhEiGpSgZvM51QC2571l6ekXUQj7VA8ZsF/kqBygGvB7vcYdKU1W8fqjdpVbsvjZR2q8ByBaUY8I34yJ/rB3r6eNQ0EYQFtQCSrBJagEl5ASVIJK2BJcgktQCYZtIKSCTQXKBBIwJrtecR96nQvnnxmwsYW/ezWaeZrCf8TGyn96T6H7lLmJ9xzeCzUMlwgi54MFkfHgj7PvM3zGIIhQxeu035W7+RWOoglDpuvDe7hUOAGprf2hgf2WIfCUCCJtoduYljI8+b51B9ygG8NVCKG05AKww90fDXtQzuluFsKfGXN8LuGlYA/ImnQZ32dXqP/ktqMNmyFTQPvRgrO1/jYj5NtL6D5t8BSLnUguAA+aBS+6pdfedmBhDdrQfRnu9KHzu0vWFrz1pg9v4XtdMgaomobCoeo6I3CPDy5h+FeAyBxcoarkArDT5rxSO2MAtU0Fezra0G88MA4VhtieQ+cEAgQRymun/S23ZQFbNdzttj+u3xnqb10T+nANt/Dqmg91JBeAjFOD17qchgB70d81Id/c0gMsKbkAHOBU5JTh8wAAQBChkj0MOHQ8DwBQQHIBeOI2bXcJIQAAhSQXgCeajYYRIQQAoKDkAvAfmnCdtrFyTDIGAEAQYUW6FQcSj2sEAKgouQBkmKYcZr22n/KsMfxyAgIAUF9yAVhYN9fGJwADAOxCcgEAAABBBAAAWL3kAgAAAIIIAACweskFAICP9uvQBgAAAGHY/19zA8EgKmrnB4ARAQAA7s0BAACAVgD83uU3rYtElAAAAABJRU5ErkJggg=="/>
                    </pattern>
                    <filter id="stichting_logo_final-03" x="0" y="0" width="149" height="71" filterUnits="userSpaceOnUse">
                    <feOffset dy="3" input="SourceAlpha"/>
                    <feGaussianBlur stdDeviation="3" result="blur"/>
                    <feFlood flood-opacity="0.867"/>
                    <feComposite operator="in" in2="blur"/>
                    <feComposite in="SourceGraphic"/>
                    </filter>
                </defs>
                <g transform="matrix(1, 0, 0, 1, 0, 0)" filter="url(#stichting_logo_final-03)">
                    <rect id="stichting_logo_final-03-2" data-name="stichting_logo_final-03" width="131" height="53" rx="26.5" transform="translate(9 6)" fill="url(#pattern)"/>
                </g>
            </svg>
        </a>
        <div class="flex items-center space-x-[20px]">
            <div class="md:hidden h-[18px] flex items-center relative">
                <h1 class="w-full text-center text-16 leading-18 pb-[2px] font-tanker text-white">
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

        
            </div>
   
            <?php
            $link7 = get_field('stichting_link', 'option');
            $link7_url = isset($link7['url']) ? esc_url($link7['url']) : '';
            $link7_text = isset($link7['title']) ? esc_html($link7['title']) : '';
            $link7_target = isset($link7['target']) ? esc_attr($link7['target']) : '';
            ?>
            <?php if (get_field('stichting_link', 'option')): ?>   
            <a href="<?php echo $link7_url; ?>" class="hidden lg:flex lg:w-[94.9px] h-[27px] bg-[#8CC63F] duration-300 justify-center items-center text-19 leading-19 font-tanker font-normal text-white absolute right-[155px]" target="<?php echo $link7_target; ?>"><?php echo $link7_text; ?></a>
            <?php endif; ?>
           
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
    <div class="bg-[transparent] h-[20px]"></div>

</header>


<?php include get_template_directory() . '/componenten/hamburger-menu.php'; ?>