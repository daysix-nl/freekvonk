<?php
/**
 * Template name: Afrekenen
 */


 get_header(); ?>

 
 
 
<main class="pt-[115px] bg-[#EFE7DE] min-h-screen pb-[50px] xl:pb-[80px]">

    <div class="container mt-[45px] freek-checkout">
        <div class="lg:flex lg:justify-between">
            <div class="w-full lg:max-w-[680px]">
                <?php echo do_shortcode( '[woocommerce_checkout]' ); ?>
            </div>
            <div class="w-full lg:max-w-[448px] hidden lg:block">
            <?php include get_template_directory() . '/componenten/side-cart-checkout.php'; ?>
            </div>
        </div>
    </div>


</main>




<?php get_footer(); ?>



