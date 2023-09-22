<?php
/**
 * Template name: Home
 */


 get_header(); ?>

<main class="pt-[33px]">
    <section class="h-[calc(100dvh-33px)] flex items-center bg-[#0A1F161A]">
        <div class="grid grid-cols-1 lg:grid-cols-3 h-[calc(70dvh-33px)] md:h-[calc(100dvh-200px)] lg:h-[calc(100dvh-33px)] w-full">
            <a href="/over-freek" id="home-item-1" class="col-span-1 w-full h-full hover:bg-[#78B893]/60 flex items-center justify-center lg:block lg:relative" onmouseover="activateBackground(1)">
                <h2 class="text-55 leading-48 md:text-80 md:leading-66 lg:text-80 lg:leading-78 xl:text-80 xl:leading-78 font-tanker text-white lg:absolute lg:bottom-[65px] lg:left-[40px] xl:bottom-[40px] xl:left-[40px] lg:max-w-[300px] text-center lg:text-left">Over Freek</h2>
            </a>
            <a href="/freek-vonk-live" id="home-item-2" class="col-span-1 w-full h-full hover:bg-[#78B893]/60 flex items-center justify-center lg:block lg:relative" onmouseover="activateBackground(2)">
                <h2 class="text-55 leading-48 md:text-80 md:leading-66 lg:text-80 lg:leading-78 xl:text-80 xl:leading-78 font-tanker text-white lg:absolute lg:bottom-[65px] lg:left-[40px] xl:bottom-[40px] xl:left-[40px] lg:max-w-[300px] text-center lg:text-left">Freek Vonk Live</h2>
            </a>
            <a href="/studio-freek" id="home-item-3" class="col-span-1 w-full h-full hover:bg-[#78B893]/60 flex items-center justify-center lg:block lg:relative" onmouseover="activateBackground(3)">
                <h2 class="text-55 leading-48 md:text-80 md:leading-66 lg:text-80 lg:leading-78 xl:text-80 xl:leading-78 font-tanker text-white lg:absolute lg:bottom-[65px] lg:left-[40px] xl:bottom-[40px] xl:left-[40px] lg:max-w-[300px] text-center lg:text-left">Studio Freek</h2>
            </a>
            <a href="/stichting-no-wildlife-crime" id="home-item-4" class="col-span-1 w-full h-full hover:bg-[#78B893]/60 flex items-center justify-center lg:block lg:relative" onmouseover="activateBackground(4)">
                <h2 class="text-55 leading-48 md:text-80 md:leading-66 lg:text-80 lg:leading-78 xl:text-80 xl:leading-78 font-tanker text-white lg:absolute lg:bottom-[65px] lg:left-[40px] xl:bottom-[40px] xl:left-[40px] lg:max-w-[333px] text-center lg:text-left">Stichting No Wildlife</h2>
            </a>
            <a href="/nieuws" id="home-item-5" class="col-span-1 w-full h-full hover:bg-[#78B893]/60 flex items-center justify-center lg:block lg:relative" onmouseover="activateBackground(5)">
                <h2 class="text-55 leading-48 md:text-80 md:leading-66 lg:text-80 lg:leading-78 xl:text-80 xl:leading-78 font-tanker text-white lg:absolute lg:bottom-[65px] lg:left-[40px] xl:bottom-[40px] xl:left-[40px] lg:max-w-[300px] text-center lg:text-left">Nieuws</h2>
            </a>
            <a href="/shop" id="home-item-6" class="col-span-1 w-full h-full hover:bg-[#78B893]/60 flex items-center justify-center lg:block lg:relative" onmouseover="activateBackground(6)">
                <h2 class="text-55 leading-48 md:text-80 md:leading-66 lg:text-80 lg:leading-78 xl:text-80 xl:leading-78 font-tanker text-white lg:absolute lg:bottom-[65px] lg:left-[40px] xl:bottom-[40px] xl:left-[40px] lg:max-w-[300px] text-center lg:text-left">Shop</h2>
            </a>
        </div>
    </section>
    <!-- ACHTERGRONDEN -->
    <div class="bg-green-800 absolute w-full h-full bg-cover top-0 left-0 right-0 bottom-0 z-[-1]" id="background-1">
        <img src="/wp-content/themes/freekvonk/img/local/Freek-gier.png" alt="" class="w-full h-full object-cover object-center">
    </div>
    <div class="bg-black absolute w-full h-full bg-cover top-0 left-0 right-0 bottom-0 z-[-1]" id="background-2" style="opacity: 0;">
        <img src="https://www.freekvonk.nl/wp-content/uploads/2018/06/Home_BG3.jpg" alt="" class="w-full h-full object-cover object-center">
    </div>
    <div class="bg-[#f3f3f3] absolute w-full h-full bg-cover top-0 left-0 right-0 bottom-0 z-[-1] flex items-center justify-center" id="background-3" style="opacity: 0;">
        <img src="https://www.freekvonk.nl/wp-content/uploads/2020/05/DSC2768-b3.jpg" alt="" class="w-full h-full object-cover object-center">
    </div>
    <div class="bg-[#f3f3f3] absolute w-full h-full bg-cover top-0 left-0 right-0 bottom-0 z-[-1]" id="background-4" style="opacity: 0;">
        <video class="w-full h-full object-cover absolute top-0 right-0 -z-10" autoplay="" loop="" muted="" playsinline="">
            <source src="https://martinsebike.com/wp-content/uploads/2023/02/martins-hero.mp4#t=0.001" type="video/mp4">
        </video>
    </div>
    <div class="bg-[#f3f3f3] absolute w-full h-full bg-cover top-0 left-0 right-0 bottom-0 z-[-1]" id="background-5" style="opacity: 0;">
        <img src="https://www.freekvonk.nl/wp-content/uploads/2020/05/DSC7394.jpg" alt="" class="w-full h-full object-cover object-center">
    </div>
    <div class="bg-[#f3f3f3] absolute w-full h-full bg-cover top-0 left-0 right-0 bottom-0 z-[-1]" id="background-6" style="opacity: 0;">
        <img src="https://www.freekvonk.nl/wp-content/uploads/2020/05/DSC1609-1-2.jpg" alt="" class="w-full h-full object-cover object-center">
    </div>
</main>

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

// Roep de standaard achtergrondfunctie aan bij het laden van de pagina
// window.onload = function() {
//     setDefaultBackground();
// };
</script>


<?php get_footer(); ?>



