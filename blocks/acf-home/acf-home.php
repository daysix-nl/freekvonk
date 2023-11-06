<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="#" style="width:100%; height:auto;">
    <?php
else: ?>
<?php
$image = get_field('default_afbeelding');
$image_url = isset($image['url']) ? esc_url($image['url']) : '';
$image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
?>
<?php
$link1 = get_field('link_kolom_1');
$link1_url = isset($link1['url']) ? esc_url($link1['url']) : '';
$link1_text = isset($link1['title']) ? esc_html($link1['title']) : '';
$link1_target = isset($link1['target']) ? esc_attr($link1['target']) : '';
?>
<?php
$link2 = get_field('link_kolom_2');
$link2_url = isset($link2['url']) ? esc_url($link2['url']) : '';
$link2_text = isset($link2['title']) ? esc_html($link2['title']) : '';
$link2_target = isset($link2['target']) ? esc_attr($link2['target']) : '';
?>
<?php
$link3 = get_field('link_kolom_3');
$link3_url = isset($link3['url']) ? esc_url($link3['url']) : '';
$link3_text = isset($link3['title']) ? esc_html($link3['title']) : '';
$link3_target = isset($link3['target']) ? esc_attr($link3['target']) : '';
?>
<?php
$link4 = get_field('link_kolom_4');
$link4_url = isset($link4['url']) ? esc_url($link4['url']) : '';
$link4_text = isset($link4['title']) ? esc_html($link4['title']) : '';
$link4_target = isset($link4['target']) ? esc_attr($link4['target']) : '';
?>
<?php
$link5 = get_field('link_kolom_5');
$link5_url = isset($link5['url']) ? esc_url($link5['url']) : '';
$link5_text = isset($link5['title']) ? esc_html($link5['title']) : '';
$link5_target = isset($link5['target']) ? esc_attr($link5['target']) : '';
?>
<?php
$link6 = get_field('link_kolom_6');
$link6_url = isset($link6['url']) ? esc_url($link6['url']) : '';
$link6_text = isset($link6['title']) ? esc_html($link6['title']) : '';
$link6_target = isset($link6['target']) ? esc_attr($link6['target']) : '';
?>
<?php
$image1 = get_field('afbeelding_kolom_1');
$image1_url = isset($image1['url']) ? esc_url($image1['url']) : '';
$image1_alt = isset($image1['alt']) ? esc_attr($image1['alt']) : '';
?>
<?php
$image2 = get_field('afbeelding_kolom_2');
$image2_url = isset($image2['url']) ? esc_url($image2['url']) : '';
$image2_alt = isset($image2['alt']) ? esc_attr($image2['alt']) : '';
?>
<?php
$image3 = get_field('afbeelding_kolom_3');
$image3_url = isset($image3['url']) ? esc_url($image3['url']) : '';
$image3_alt = isset($image3['alt']) ? esc_attr($image3['alt']) : '';
?>
<?php
$image4 = get_field('afbeelding_kolom_4');
$image4_url = isset($image4['url']) ? esc_url($image4['url']) : '';
$image4_alt = isset($image4['alt']) ? esc_attr($image4['alt']) : '';
?>
<?php
$image5 = get_field('afbeelding_kolom_5');
$image5_url = isset($image5['url']) ? esc_url($image5['url']) : '';
$image5_alt = isset($image5['alt']) ? esc_attr($image5['alt']) : '';
?>
<?php
$image6 = get_field('afbeelding_kolom_6');
$image6_url = isset($image6['url']) ? esc_url($image6['url']) : '';
$image6_alt = isset($image6['alt']) ? esc_attr($image6['alt']) : '';
?>


<section class="h-[calc(100dvh-33px)] flex items-center bg-[#0A1F161A]">
    <div class="grid grid-cols-1 lg:grid-cols-3 h-[calc(70dvh-33px)] md:h-[calc(100dvh-200px)] lg:h-[calc(100dvh-33px)] w-full pt-[62px] lg:pt-[unset] min-h-[550px]">
        <a href="<?php echo $link1_url; ?>" id="home-item-1" class="col-span-1 w-full h-full lg:hover:bg-[#78B893]/60 flex items-center justify-center lg:block lg:relative" onmouseover="activateBackground(1)">
            <h2 class="text-55 leading-48 md:text-80 md:leading-66 lg:text-80 lg:leading-78 xl:text-80 xl:leading-78 font-tanker font-normal text-white lg:absolute lg:bottom-[65px] lg:left-[40px] xl:bottom-[40px] xl:left-[40px] lg:max-w-[300px] text-center lg:text-left" target="<?php echo $link1_target; ?>"><?php echo $link1_text; ?></h2>
        </a>
        <a href="<?php echo $link2_url; ?>" id="home-item-2" class="col-span-1 w-full h-full lg:hover:bg-[#78B893]/60 flex items-center justify-center lg:block lg:relative" onmouseover="activateBackground(2)">
            <h2 class="text-55 leading-48 md:text-80 md:leading-66 lg:text-80 lg:leading-78 xl:text-80 xl:leading-78 font-tanker font-normal text-white lg:absolute lg:bottom-[65px] lg:left-[40px] xl:bottom-[40px] xl:left-[40px] lg:max-w-[300px] text-center lg:text-left" target="<?php echo $link2_target; ?>"><?php echo $link2_text; ?></h2>
        </a>
        <a href="<?php echo $link3_url; ?>" id="home-item-3" class="col-span-1 w-full h-full lg:hover:bg-[#78B893]/60 flex items-center justify-center lg:block lg:relative" onmouseover="activateBackground(3)">
            <h2 class="text-55 leading-48 md:text-80 md:leading-66 lg:text-80 lg:leading-78 xl:text-80 xl:leading-78 font-tanker font-normal text-white lg:absolute lg:bottom-[65px] lg:left-[40px] xl:bottom-[40px] xl:left-[40px] lg:max-w-[300px] text-center lg:text-left" target="<?php echo $link3_target; ?>"><?php echo $link3_text; ?></h2>
        </a>
        <a href="<?php echo $link4_url; ?>" id="home-item-4" class="col-span-1 w-full h-full lg:hover:bg-[#78B893]/60 flex items-center justify-center lg:block lg:relative" onmouseover="activateBackground(4)">
            <h2 class="text-55 leading-48 md:text-80 md:leading-66 lg:text-80 lg:leading-78 xl:text-80 xl:leading-78 font-tanker font-normal text-white lg:absolute lg:bottom-[65px] lg:left-[40px] xl:bottom-[40px] xl:left-[40px] lg:max-w-[333px] text-center lg:text-left" target="<?php echo $link4_target; ?>"><?php echo $link4_text; ?></h2>
        </a>
        <a href="<?php echo $link5_url; ?>" id="home-item-5" class="col-span-1 w-full h-full lg:hover:bg-[#78B893]/60 flex items-center justify-center lg:block lg:relative" onmouseover="activateBackground(5)">
            <h2 class="text-55 leading-48 md:text-80 md:leading-66 lg:text-80 lg:leading-78 xl:text-80 xl:leading-78 font-tanker font-normal text-white lg:absolute lg:bottom-[65px] lg:left-[40px] xl:bottom-[40px] xl:left-[40px] lg:max-w-[300px] text-center lg:text-left" target="<?php echo $link5_target; ?>"><?php echo $link5_text; ?></h2>
        </a>
        <a href="<?php echo $link6_url; ?>" id="home-item-6" class="col-span-1 w-full h-full lg:hover:bg-[#78B893]/60 flex items-center justify-center lg:block lg:relative" onmouseover="activateBackground(6)">
            <h2 class="text-55 leading-48 md:text-80 md:leading-66 lg:text-80 lg:leading-78 xl:text-80 xl:leading-78 font-tanker font-normal text-white lg:absolute lg:bottom-[65px] lg:left-[40px] xl:bottom-[40px] xl:left-[40px] lg:max-w-[300px] text-center lg:text-left" target="<?php echo $link6_target; ?>"><?php echo $link6_text; ?></h2>
        </a>
    </div>
</section>
<!-- ACHTERGRONDEN -->

<div class="bg-black absolute w-full h-full bg-cover top-0 left-0 right-0 bottom-0 z-[-1]" id="background-1">
    <img src="<?php echo $image1_url; ?>" alt="<?php echo $image2_alt; ?>" class="w-full h-full object-cover object-center">
    <video class="w-full h-full object-cover absolute top-0 right-0 -z-10 block lg:hidden" autoplay="" loop="" muted="" playsinline="">
        <source src="<?php the_field('video_mobiel_blok_1');?>#t=0.001" type="video/mp4">
    </video>
     <video class="w-full h-full object-cover absolute top-0 right-0 -z-10 hidden lg:block" autoplay="" loop="" muted="" playsinline="">
        <source src="<?php the_field('video_blok_1');?>#t=0.001" type="video/mp4">
    </video>
</div>

<div class="bg-black absolute w-full h-full bg-cover top-0 left-0 right-0 bottom-0 z-[-1]" id="background-2" style="opacity: 0;">
    <img src="<?php echo $image2_url; ?>" alt="<?php echo $image2_alt; ?>" class="w-full h-full object-cover object-center">
    <video class="w-full h-full object-cover absolute top-0 right-0 -z-10 block lg:hidden" autoplay="" loop="" muted="" playsinline="">
        <source src="<?php the_field('video_mobiel_blok_2');?>#t=0.001" type="video/mp4">
    </video>
     <video class="w-full h-full object-cover absolute top-0 right-0 -z-10 hidden lg:block" autoplay="" loop="" muted="" playsinline="">
        <source src="<?php the_field('video_blok_2');?>#t=0.001" type="video/mp4">
    </video>
</div>

<div class="bg-black absolute w-full h-full bg-cover top-0 left-0 right-0 bottom-0 z-[-1] flex items-center justify-center" id="background-3" style="opacity: 0;">
    <img src="<?php echo $image3_url; ?>" alt="<?php echo $image3_alt; ?>" class="w-full h-full object-cover object-center">
    <video class="w-full h-full object-cover absolute top-0 right-0 -z-10 block lg:hidden" autoplay="" loop="" muted="" playsinline="">
        <source src="<?php the_field('video_mobiel_blok_3');?>#t=0.001" type="video/mp4">
    </video>
     <video class="w-full h-full object-cover absolute top-0 right-0 -z-10 hidden lg:block" autoplay="" loop="" muted="" playsinline="">
        <source src="<?php the_field('video_blok_3');?>#t=0.001" type="video/mp4">
    </video>
</div>

<div class="bg-black absolute w-full h-full bg-cover top-0 left-0 right-0 bottom-0 z-[-1]" id="background-4" style="opacity: 0;">
    <img src="<?php echo $image4_url; ?>" alt="<?php echo $image4_alt; ?>" class="w-full h-full object-cover object-center">
    <video class="w-full h-full object-cover absolute top-0 right-0 -z-10 block lg:hidden" autoplay="" loop="" muted="" playsinline="">
        <source src="<?php the_field('video_mobiel_blok_4');?>#t=0.001" type="video/mp4">
    </video>
     <video class="w-full h-full object-cover absolute top-0 right-0 -z-10 hidden lg:block" autoplay="" loop="" muted="" playsinline="">
        <source src="<?php the_field('video_blok_4');?>#t=0.001" type="video/mp4">
    </video>
</div>


<div class="bg-black absolute w-full h-full bg-cover top-0 left-0 right-0 bottom-0 z-[-1]" id="background-5" style="opacity: 0;">
    <img src="<?php echo $image5_url; ?>" alt="<?php echo $image5_alt; ?>" class="w-full h-full object-cover object-center">
    <video class="w-full h-full object-cover absolute top-0 right-0 -z-10 block lg:hidden" autoplay="" loop="" muted="" playsinline="">
        <source src="<?php the_field('video_mobiel_blok_5');?>#t=0.001" type="video/mp4">
    </video>
     <video class="w-full h-full object-cover absolute top-0 right-0 -z-10 hidden lg:block" autoplay="" loop="" muted="" playsinline="">
        <source src="<?php the_field('video_blok_5');?>#t=0.001" type="video/mp4">
    </video>
</div>


<div class="bg-black absolute w-full h-full bg-cover top-0 left-0 right-0 bottom-0 z-[-1]" id="background-6" style="opacity: 0;">
    <img src="<?php echo $image6_url; ?>" alt="<?php echo $image6_alt; ?>" class="w-full h-full object-cover object-center">
    <video class="w-full h-full object-cover absolute top-0 right-0 -z-10 block lg:hidden" autoplay="" loop="" muted="" playsinline="">
        <source src="<?php the_field('video_mobiel_blok_6');?>#t=0.001" type="video/mp4">
    </video>
     <video class="w-full h-full object-cover absolute top-0 right-0 -z-10 hidden lg:block" autoplay="" loop="" muted="" playsinline="">
        <source src="<?php the_field('video_blok_6');?>#t=0.001" type="video/mp4">
    </video>
</div>


<!-- DEFAULT -->
<?php if (get_field('default_afbeelding')): ?>   
<div class="bg-black absolute w-full h-full bg-cover top-0 left-0 right-0 bottom-0 z-[-1]" id="background-x" style="opacity: 1;">
    <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-full h-full object-cover object-center">
</div>
 <?php endif; ?>
 <?php if (get_field('default_video')): ?>   
<div class="bg-black absolute w-full h-full bg-cover top-0 left-0 right-0 bottom-0 z-[-1]" id="background-x" style="opacity: 1;">
    <video class="w-full h-full object-cover absolute top-0 right-0 -z-10 block lg:hidden" autoplay="" loop="" muted="" playsinline="">
        <source src="<?php the_field('default_video_mobiel');?>#t=0.001" type="video/mp4">
    </video>
     <video class="w-full h-full object-cover absolute top-0 right-0 -z-10 hidden lg:block" autoplay="" loop="" muted="" playsinline="">
        <source src="<?php the_field('default_video');?>#t=0.001" type="video/mp4">
    </video>
</div>
<?php endif; ?>


<script>
// Functie om de standaard achtergrond in te stellen (background-1)
function setDefaultBackground() {
    for (let i = 2; i <= 6; i++) {
        document.getElementById(`background-${i}`).style.opacity = 0;
    }
}
// Functie om een achtergrond te activeren
function activateBackground(backgroundNumber) {
    setDefaultBackground(); // Eerst de standaard achtergrond instellen
    document.getElementById(`background-${backgroundNumber}`).style.opacity = 1; // Daarna de gewenste achtergrond activeren
}
</script>
<?php endif; ?>