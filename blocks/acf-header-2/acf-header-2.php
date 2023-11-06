<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$image = get_field('afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>

<!-- HEADER 2 -->
<section class="<?php the_field('achtergrond');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?> relative overflow-hidden z-[2]">
        <div class="container hidden md:grid pt-[80px]">
            <h1 class="w-full text-center md:text-80 md:leading-100 font-tanker font-normal text-color"><?php the_title();?></h1>        
            <div class="w-full max-w-[300px] mx-auto">
                <div class="w-full lottie-title text-center"></div>
            </div>
        </div>
        <?php if (get_field('submenu')): ?>   
        <div class="pt-[0px] md:pt-[unset]">
            <div class="swiper mySwiper-navigatie hidden">
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
            <div class="container mt-[50px] hidden md:block">
                <a href="javascript:window.history.back()" class="tet-16 font-karlsen font-normal text-color">Terug</a>
            </div>
        <?php endif; ?>
        <section>
            <div class="container mt-[324px] md:mt-[50px] lg:mt-[80px] pb-[30px] md:pb-[50px] lg:pb-[80px]">
                <div class="max-w-[390px] md:max-w-[426px] lg:max-w-[604px]">
                    <h2 class="text-18 leading-18 lg:text-24 lg:leading-22 font-karlsen text-color font-normal uppercase mb-[15px] tracking-wider"><?php the_field('subtitel');?></h2>
                    <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-color"><?php the_field('titel');?></h3>
                    <div class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen font-normal text-color mt-[30px] text-editor"><?php the_field('tekst');?></div>
                    <?php if (get_field('buttons')): ?>   
                    <div class="grid grid-cols-2 w-[341px] lg:w-[500px] mt-[30px]">
                        <?php
                        if( have_rows('buttons') ):
                            while( have_rows('buttons') ) : the_row(); ?>
                            <?php
                            $link = get_sub_field('link');
                            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                            ?>
                            <a href="<?php echo $link_url; ?>" class="w-[163px] h-[45px] lg:w-[240px] lg:h-[58.5px] bg-[#8CC63F] duration-300 flex justify-center items-center text-19 leading-19 lg:text-25 lg:leading-25 font-tanker font-normal text-white <?php the_sub_field('glow');?>" target="<?php echo $link_target; ?>"><?php echo $link_text; ?></a>
                            <?php
                            endwhile;
                        else :
                        endif;
                        ?>
                    </div>
                <?php endif; ?>
                </div>
            </div>
        </section>
        <div class="absolute top-0 left-0 right-0 bottom-[200px] md:bottom-0 z-[-1]">
            <div class="relative h-full">
                <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-full h-full object-cover object-right-top bg-[#2B2828]">
                <div class="h-[80px] bg-gradient-to-b from-[#000] to-transparent w-full absolute top-[0px] left-0 right-0"></div>
                <div class="h-[180px] bg-gradient-to-b from-transparent to-[#000] w-full absolute left-0 right-0 bottom-[30px] md:bottom-[50px] lg:bottom-[80px]"></div>
                <div class="h-[30px] md:h-[50px] lg:h-[80px] bg-gradient-to-b bg-[#000] absolute left-0 right-0 bottom-0"></div>
            </div>
        </div>
</section>
<?php endif; ?>