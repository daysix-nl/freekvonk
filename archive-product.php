<?php
/**
 * The Template for displaying product archives, including the main shop page which is a post type archive
 *
 * This template can be overridden by copying it to yourtheme/woocommerce/archive-product.php.
 *
 * HOWEVER, on occasion WooCommerce will need to update template files and you
 * (the theme developer) will need to copy the new files to your theme to
 * maintain compatibility. We try to do this as little as possible, but it does
 * happen. When this occurs the version of the template file will be bumped and
 * the readme will list any important changes.
 *
 * @see https://docs.woocommerce.com/document/template-structure/
 * @package WooCommerce\Templates
 * @version 3.4.0
 */


defined( 'ABSPATH' ) || exit;

get_header( 'shop' ); ?>

<main>

<!-- SHOP CONTAINER -->
<div class="max-w-[354px] md:max-w-[725px] lg:max-w-[1168px] xl:max-w-[1326px] mx-auto pb-[85px] xl:pb-[105px]">

    <!-- SHOP HEADER -->
    <div class="w-full h-[205px] md:h-[384px] xl:h-[438px] bg-black mb-[20px] lg:mb-[60px] overflow-hidden">
        <img src="/wp-content/themes/freekvonk/img/local/banner-kamili.png" alt="" class="min-w-full min-h-full object-cover object-right">
    </div>

    <div class="flex justify-between">
        <!-- SIDEBAR -->
        <div class="hidden lg:block lg:w-[222px] bg-black h-[40px]"></div>

        <!-- PRODUCTEN -->
        <div class="w-full max-w-[354px] md:max-w-[725px] lg:max-w-[898px] xl:max-w-[1028px] grid grid-cols-2 md:grid-cols-3 gap-x-[7px] gap-y-[30px] lg:gap-x-[15px] ld:gap-y-[40px] items-start">
           
            <?php
                // De standaard WordPress-loop starten
                if ( have_posts() ) :
                    while ( have_posts() ) : the_post();

                        // Informatie over het product ophalen
                        $product = wc_get_product( get_the_ID() ); ?>

         

                        <!-- PRODUCT -->
                        <div class="product-item h-fit">
                            <div class="w-full aspect-[16/13] bg-[#F9F9F9] flex justify-center overflow-hidden relative">
                                <a href="#">
                                    <img src="<?php the_post_thumbnail_url($product->get_id());?>" alt="" class="h-ful w-auto mix-blend-multiply">
                                </a>
                                <button class="product-add add-fast-button hidden absolute left-[8px] right-[8px] bottom-[8px] h-[45px] bg-[#8CC63F] lg:flex justify-center items-center z-[1]">
                                    <p class="font-tanker text-25 leading-25 text-white">Snel toevoegen</p>
                                </button>
                                <div class="add-popup absolute left-[8px] right-[8px] bottom-[8px] bg-[#fff] z-[2]">
                                    <div class="relative w-full h-full overflow-hidden p-[8px]">
                                        <?php
                                        global $product;

                                         if (!empty($variations)) {
                                            // echo '<form class="variation-form" method="post" enctype="multipart/form-data">';

                                            // foreach ($variations as $variation) {
                                            //     $variation_id = $variation['variation_id'];
                                            //     $attributes = $variation['attributes'];
                                            //     $price_html = $variation['price_html'];

                                            //     echo '<label>';
                                            //     echo '<input type="radio" name="variation_id" value="' . esc_attr($variation_id) . '">';
                                            //     // Hier kun je andere attributen weergeven, zoals kleur, maat, etc.
                                            //     echo esc_html(implode(' / ', $attributes));
                                            //     echo ' - ' . $price_html;
                                            //     echo '</label>';
                                            // }

                                            // echo '<input type="hidden" name="add-to-cart" value="' . esc_attr($product->get_id()) . '">';
                                            // echo '<input type="submit" class="single_add_to_cart_button button" value="Plaats in winkelwagen">';
                                            // echo '</form>';
                                        }
                                         else {
                                            // Als het product geen variaties heeft, toon dan de normale "Toevoegen aan winkelmand" knop
                                            echo '<form class="cart" method="post" enctype="multipart/form-data">';
                                            echo woocommerce_template_single_add_to_cart();
                                            echo '</form>';   
                                        }
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <a href="#">
                                <h2 class="font-karlsen text-16 leading-16 md:text-20 md:leading-20 lg:text-24 lg:leading-24 text-[#2B2828] pt-[15px] pb-[10px] font-normal"><?php the_title();?></h2>
                                <div class="font-karlsen text-12 leading-12 md:text-16 md:leading-16 lg:text-16 lg:leading-16 text-[#2B2828] opacity-[0.5] pb-[10px]"><?php the_excerpt();?></div>
                                <p class="font-karlsen text-16 leading-16 md:text-18 md:leading-18 lg:text-18 lg:leading-18 text-[#2B2828] font-semibold"><?php echo  $product->get_price_html();?></p>
                            </a>
                        </div>

                        


                        <?php

                    endwhile;
                else :
                    echo 'Geen producten gevonden';
                endif;
                ?>


          
        </div>

    </div>
</div>
</main>


<script>
    // Haal een lijst van alle elementen met de class "add-fast-button" op
    const addButtonList = document.querySelectorAll(".add-fast-button");

    // Loop door de lijst van knoppen en voeg de klikgebeurtenis toe aan elk van hen
    addButtonList.forEach(function(addButton) {
        addButton.addEventListener("click", function() {
            // Vind de bijbehorende "add-popup" div voor deze knop
            const addPopup = this.parentElement.querySelector(".add-popup");
            // Voeg de class "active" toe aan de gevonden "add-popup" div
            addPopup.classList.add("active");
        });
    });
</script>
<?php

get_footer( 'shop' ); ?>

