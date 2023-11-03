<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- HEADER 1 -->
<section class="<?php the_field('achtergrond');?> pb-[30px] md:pb-[50px] lg:pb-[80px]">
    <div class="container hidden md:grid pt-[80px]  justify-center">
        <div class="w-fit">
            <h1 class="w-full text-center md:text-80 md:leading-100 font-tanker font-normal text-color"><?php the_title();?></h1>        
            <div class="w-full max-w-[300px] mx-auto">
                <div class="w-full lottie-title text-center"></div>
            </div>
        </div>
    </div>
    <?php if (get_field('submenu')): ?>   
    <div class="pt-[0px] md:pt-[unset]">
        <div class="swiper mySwiper-navigatie md:hidden">
            <div class="swiper-wrapper">
                <?php
                if( have_rows('submenu') ):
                    while( have_rows('submenu') ) : the_row(); ?>
                    <div class="swiper-slide flex justify-center items-center"><a href="#<?php the_sub_field('id_submenu');?>" class="md:text-25 md:leading-26 font-tanker text-color underline-effect"><?php the_sub_field('titel_submenu');?></a></div>
                    <?php
                    endwhile;
                else :
                endif;
                ?>

            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
        <div class="hidden md:flex md:space-x-[30px] lg:space-x-[30px] xl:space-x-[65px] mx-auto w-fit md:mt-[30px]">
            <?php
            if( have_rows('submenu') ):
                while( have_rows('submenu') ) : the_row(); ?>
                <a href="#<?php the_sub_field('id_submenu');?>" class=" md:text-25 md:leading-26 font-tanker text-color underline-effect"><?php the_sub_field('titel_submenu');?></a>
                <?php
                endwhile;
            else : 
            endif;
            ?>
        </div>
    </div> 
    <?php else: ?>
        <div class="container mt-[50px]">
            <a href="javascript:window.history.back()" class="tet-16 font-karlsen font-normal text-color">Terug</a>
        </div>
    <?php endif; ?>
</section>
<?php endif; ?>