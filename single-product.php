<?php 
/**
 * The single post template file
 * 
 * @package Day Six theme
 */

defined( 'ABSPATH' ) || exit;

global $product;


get_header( 'shop' ); ?>

<?php while ( have_posts() ) : ?>
<?php the_post(); ?>
<?php
do_action( 'woocommerce_before_single_product' );
if ( post_password_required() ) {
	echo get_the_password_form(); // WPCS: XSS ok.
	return;
} ?>

<main>
    <div id="single-product" class="max-w-[354px] md:max-w-[725px] lg:max-w-[1168px] xl:max-w-[1326px] mx-auto">

    <!-- TITEL -->
    <section class="hidden md:grid pt-[80px]">
        <p class="w-full text-center md:text-80 md:leading-100 font-tanker text-black">Shop</p>        
        <div class="w-full max-w-[300px] mx-auto">
            <div class="w-full lottie-title text-center"></div>
        </div>
    </section>
     <!-- SUBMENU -->
    <section class="pt-[0px] md:pt-[30px]">
        <!-- MOBIEL SUBMENU -->
        <a href="/shop" class="tet-16 font-karlsen text-[#2B2828]">Terug</a>
    </section> 

    <!-- PRODUCT -->
    <div class="w-full flex flex-col lg:flex-row justify-between mt-[50px]">
        <div class="w-full max-w-[354px] md:max-w-[725px] lg:max-w-[758px] xl:max-w-[872px]">
            <!-- PRODUCT AFBEELDING -->
                <?php
                global $product;
                if ($product->get_gallery_image_ids()) { ?>
                    <div class="hidden lg:grid grid-cols-2 gap-[15px]">
                        <!-- PRODUCT AFBEELDING -->
                        <div class="aspect-square w-full bg-gradient-to-b from-[#FAFAFA] to-[#F2F2F2] overflow-hidden">
                            <img src="<?php the_post_thumbnail_url($product->get_id());?>" alt="" class="h-ful w-auto mix-blend-multiply">
                        </div>
                        <!-- PRODUCT GALERIJ -->
                        <?php
                            global $product;
                            if ( $product->get_gallery_image_ids() ) {
                                $gallery_image_ids = $product->get_gallery_image_ids(); 
                                foreach ( $gallery_image_ids as $image_id ) { 
                                    $image_url = wp_get_attachment_url($image_id); ?>
                                    <div class="aspect-square w-full bg-gradient-to-b from-[#FAFAFA] to-[#F2F2F2] overflow-hidden">
                                        <img src="<?php echo esc_url($image_url);?>" alt="" class="h-ful w-auto mix-blend-multiply">
                                    </div>
                                <?php
                                }
                            }
                        ?>
                    </div>

                    <div class="lg:hidden w-full pb-3">
                          <div class="swiper mySwiper-shop relative">
                                <div class="swiper-wrapper">
                                    <div class="swiper-slide aspect-[16/12] w-full bg-gradient-to-b from-[#FAFAFA] to-[#F2F2F2] flex justify-center">
                                        <img src="<?php the_post_thumbnail_url($product->get_id());?>" alt="" class="h-ful w-auto mix-blend-multiply">
                                    </div>
                                    <?php
                                        global $product;
                                        if ( $product->get_gallery_image_ids() ) {
                                            $gallery_image_ids = $product->get_gallery_image_ids(); 
                                            foreach ( $gallery_image_ids as $image_id ) { 
                                                $image_url = wp_get_attachment_url($image_id); ?>
                                                <div class="swiper-slide aspect-[16/12] w-full bg-gradient-to-b from-[#FAFAFA] to-[#F2F2F2] flex justify-center">
                                                    <img src="<?php echo esc_url($image_url);?>" alt="" class="h-ful w-auto mix-blend-multiply">
                                                </div>
                                            <?php
                                            }
                                        }
                                    ?>
                                </div>
                                <div class="swiper-button-next-shop"></div>
                                <div class="swiper-button-prev-shop"></div>
                            </div>
                    </div>
                <?php
                } else { ?>
                <div class="grid grid-cols-1">
                    <!-- PRODUCT AFBEELDING -->
                    <div class="aspect-[16/12] w-full bg-gradient-to-b from-[#FAFAFA] to-[#F2F2F2] overflow-hidden flex justify-center">
                        <img src="<?php the_post_thumbnail_url($product->get_id());?>" alt="" class="h-ful w-auto mix-blend-multiply">
                    </div>
                </div>
                    <?php
                }
                ?>
            
        </div>

        <div class="w-full max-w-[354px] md:max-w-[725px] lg:max-w-[351px] xl:max-w-[392px]">
            <!-- PRODUCT TITEL EN PRIJS -->
            <div class="flex justify-between">
                <div class="max-w-[276px]">
                    <h1 class="font-tanker text-40 leading-36 text-[#0A1F16]"><?php the_title();?></h1>
                </div>
                <div class="ml-[30px] text-right">
                    <p class="font-karlsen font-semibold text-25 leading-25 text-[#2B2828]"><?php echo $product->get_price_html(); ?></p>
                </div>
            </div>
            
            <!-- PRODUCT TOEVOEGEN -->
            <div class="pt-3">
                 <?php
                    global $product;
                    if ($product->is_type('variable')) { ?>
                        <div class="product-add-single">
                            <?php woocommerce_template_single_add_to_cart(); ?>
                        </div>
                    <?php
                    } else { ?>
                        <div class="simple">
                            <?php woocommerce_template_single_add_to_cart(); ?>
                        </div>
                    <?php
                    }
                    ?>
            </div>
            <!-- INFORMATIE -->
            <div class="w-full grid gap-[15px] mt-4">
                <!-- USP'S -->
                <div class="flex items-start">
                    <svg class="mt-[2px w-[13.697px]" xmlns="http://www.w3.org/2000/svg" width="13.697" height="9.781" viewBox="0 0 13.697 9.781">
                        <path id="Path_202" data-name="Path 202" d="M8331.749,406.758l-7.468,7.367-3.4-3.4" transform="translate(-8319.466 -405.343)" fill="none" stroke="#8cc63f" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </svg>
                    <p class="text-[#B5BBB8] text-16 leading-16 font-karlsen w-full ml-2">Standaard levering inclusief track & trace</p>
                </div>
                <div class="flex items-start">
                    <svg class="mt-[2px] w-[13.697px]" xmlns="http://www.w3.org/2000/svg" width="13.697" height="9.781" viewBox="0 0 13.697 9.781">
                        <path id="Path_202" data-name="Path 202" d="M8331.749,406.758l-7.468,7.367-3.4-3.4" transform="translate(-8319.466 -405.343)" fill="none" stroke="#8cc63f" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
                    </svg>
                    <p class="text-[#B5BBB8] text-16 leading-16 font-karlsen w-full ml-2">Voor 22:00 besteld = vandaag verzonden</p>
                </div>
            </div>
            <!-- PRODUCT BESCHRIJVING -->
            <div class="border-accordion mt-4"></div>
            <div class="accordion-item"> 
                <button class="accordion text-16 leading-32 font-karlsen font-normal text-[#2B2828] py-[25px] flex">Beschrijving</button>
                <div class="panel">
                    <div class="px-1.5 flex flex-col pb-4">
                        <div class="text-16 leading-30 font-karlsen text-black w-fit text-editor">
                            <?php
                            $content = get_the_content(); // De content ophalen

                            if (empty($content)) {
                                // Als de content leeg is
                                echo 'Er is geen beschrijving beschikbaar voor dit artikel.';
                            } else {
                                // Als de content niet leeg is
                                the_content(); // Toon de content
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
            <?php
            if( have_rows('informatie') ):
                while( have_rows('informatie') ) : the_row(); ?>
                <div class="accordion-item"> 
                    <button class="accordion text-16 leading-32 font-karlsen font-normal text-black py-[25px] flex"><?php the_sub_field('titel');?></button>
                    <div class="panel">
                        <div class="px-1.5 flex flex-col pb-4">
                            <div class="text-16 leading-30 font-karlsen text-black w-fit text-editor"><?php the_sub_field('tekst');?></div>
                        </div>
                    </div>
                </div>
                <?php
                endwhile;
            else :
            endif;
            ?>
        </div>
    </div>

    <!-- GERELATEERDE PRODUCTEN -->
    <div class="w-full mt-6">
        <h2 class="text-24 leading-22 font-karlsen font-semibold text-[#38241B] pb-3">Gerelateerde producten</h2>
        <div class="grid grid-cols-2 lg:grid-cols-4 gap-x-[7px] gap-y-[30px] lg:gap-x-[15px]">
            <?php
            global $post;

            // Haal de huidige productcategorieën op
            $terms = wp_get_post_terms($post->ID, 'product_cat');
            $category_ids = array();

            foreach ($terms as $term) {
                $category_ids[] = $term->term_id;
            }

            // Huidige product uitsluiten
            $current_product_id = $post->ID;

            // De query voor gerelateerde producten
            $args = array(
                'post_type' => 'product',
                'posts_per_page' => 4, // Aantal gerelateerde producten om weer te geven
                'post__not_in' => array($current_product_id), // Uitsluiten van het huidige product
                'orderby' => 'rand', // Willekeurige volgorde (je kunt wijzigen naar andere orderby-opties)
                'tax_query' => array(
                    array(
                        'taxonomy' => 'product_cat',
                        'field' => 'id',
                        'terms' => $category_ids,
                        'operator' => 'IN',
                    ),
                ),
            );

            $related_products = new WP_Query($args);

            if ($related_products->have_posts()) :
                while ($related_products->have_posts()) : $related_products->the_post();  // Informatie over het product ophalen
                        $product = wc_get_product( get_the_ID() ); ?>
                        <!-- PRODUCT -->
                        <div class="product-item h-fit relative">
                            <div class="w-full aspect-[16/13] bg-gradient-to-b from-[#FAFAFA] to-[#F2F2F2] flex justify-center overflow-hidden lg:relative">
                                <a class="w-full flex justify-center" href="<?php the_permalink();?>">
                                    <img src="<?php the_post_thumbnail_url($product->get_id());?>" alt="" class="h-ful w-auto mix-blend-multiply">
                                     <!-- NIEUW -->
                                    <?php 
                                    global $product;
                                    // Haal de publicatiedatum van het product op
                                    $publish_date = $product->get_date_created();
                                    $current_date = new WC_DateTime();
                                    $days_difference = $current_date->diff($publish_date)->days;
                                    if ($days_difference > 2) {
                                    
                                    } else { ?>
                                    <div class="absolute w-[43px] h-[20px] md:w-[76px] md:h-[33px] lg:w-[95px] lg:h-[41px] bg-[#8CC63F] top-0 right-0 flex items-center justify-center">
                                        <p class="font-tanker text-12 leading-12 md:text-19 md:leading-19 lg:text-24 lg:leading-24 text-white">Nieuw</p>
                                    </div>
                                        <?php
                                    }
                                    ?>
                                    <!-- SALE -->
                                    <?php
                                    if ( $product->is_on_sale() ) { ?>
                                    <div class="absolute w-[43px] h-[20px] md:w-[76px] md:h-[33px] lg:w-[95px] lg:h-[41px] bg-[#C69C6D] top-0 right-0 flex items-center justify-center">
                                        <p class="font-tanker text-12 leading-12 md:text-19 md:leading-19 lg:text-24 lg:leading-24 text-white">
                                            <?php
                                                global $product;
                                                if ( $product->is_on_sale() ) {
                                                    $regular_price = $product->get_regular_price();
                                                    $sale_price = $product->get_sale_price();
                                                    
                                                    $discount_percentage = 100 - ( ( $sale_price / $regular_price ) * 100 );
                                                    
                                                    echo '' . round( $discount_percentage, 0 ) . '%';
                                                } else {
                                                }
                                                ?>
                                        </p>
                                    </div>
                                        <?php
                                    } else {
                                    }
                                    ?>
                                </a>
                                <?php
                                global $product;

                                if ($product->is_type('variable')) { ?>
                                    <div class="product-add absolute left-[0px] bottom-[0px] right-[0px] lg:left-[8px] lg:right-[8px] lg:bottom-[8px] bg-[#fff] z-[2]">
                                    <div class="relative w-full h-full overflow-hidden p-[8px]">
                                        <?php
                                       global $product;
                                        if ($product->is_type('variable')) {
                                            woocommerce_template_single_add_to_cart();
                                        } else {
                                            echo '<form class="cart" method="post" enctype="multipart/form-data">';
                                            echo woocommerce_template_single_add_to_cart();
                                            echo '</form>';
                                        }
                                        ?>
                                    </div>
                                </div>
                                    <?php
                                } else { ?>

                                    <a href="/shop/?add-to-cart=<?php echo $product->get_id();?>" class="product-add add-fast-button hidden absolute left-[8px] right-[8px] bottom-[8px] h-[45px] bg-[#8CC63F] lg:flex justify-center items-center z-[1]">
                                    <p class="font-tanker text-25 leading-25 text-white">Snel toevoegen</p>
                                    </a>
                                    <?php
                                }
                                ?>
                            </div>
                            <a href="<?php the_permalink();?>">
                                <h2 class="font-karlsen text-16 leading-16 md:text-20 md:leading-20 lg:text-24 lg:leading-24 text-[#2B2828] pt-[20px] pb-[10px] font-normal"><?php the_title();?></h2>
                                <div class="font-karlsen text-12 leading-12 md:text-16 md:leading-16 lg:text-16 lg:leading-16 text-[#2B2828] opacity-[0.5] mb-[10px] line-clamp-1 pr-2"><?php the_excerpt();?></div>
                                <p class="font-karlsen text-16 leading-16 md:text-18 md:leading-18 lg:text-18 lg:leading-18 text-[#2B2828] font-semibold"><?php echo  $product->get_price_html();?></p>
                            </a>
                        </div>
                    
                <?php endwhile;
            endif;

            wp_reset_postdata();
            ?>

        </div>
    </div>

    <!-- RECENT BEKEKEN PRODUCTEN -->
    <div class="w-full mt-6">
        
        
            <?php
            global $post;

            // Haal het ID van het huidige product op
            $current_product_id = $post->ID;

            // Haal de recent bekeken producten op
            $recently_viewed = get_transient('wcj_viewed_products');

            if (!empty($recently_viewed) && is_array($recently_viewed)) {
                // Verwijder het huidige product uit de lijst
                $recently_viewed = array_diff($recently_viewed, array($current_product_id));

                // Als er nog steeds recent bekeken producten zijn na uitsluiting
                if (!empty($recently_viewed)) {
                    $args = array(
                        'post_type' => 'product',
                        'posts_per_page' => 4, // Aantal recent bekeken producten om weer te geven
                        'post__in' => $recently_viewed, // Toon alleen recent bekeken producten
                    );

                    $recently_viewed_products = new WP_Query($args);

                    if ($recently_viewed_products->have_posts()) : 
                        echo '<h2 class="text-24 leading-22 font-karlsen font-semibold text-[#38241B] pb-3">Recent bekeken</h2>';
                        echo '<div class="grid grid-cols-2 lg:grid-cols-4 gap-x-[7px] gap-y-[30px] lg:gap-x-[15px] pb-[60px]">';
          
                        while ($recently_viewed_products->have_posts()) : $recently_viewed_products->the_post(); 
                            
                            $product = wc_get_product( get_the_ID() ); ?>
                        <!-- PRODUCT -->
                        <div class="product-item h-fit">
                            <div class="w-full aspect-[16/13] bg-gradient-to-b from-[#FAFAFA] to-[#F2F2F2] flex justify-center overflow-hidden lg:relative">
                                <a class="w-full flex justify-center" href="<?php the_permalink();?>">
                                    <img src="<?php the_post_thumbnail_url($product->get_id());?>" alt="" class="h-ful w-auto mix-blend-multiply">
                                     <!-- NIEUW -->
                                    <?php 
                                    global $product;
                                    // Haal de publicatiedatum van het product op
                                    $publish_date = $product->get_date_created();
                                    $current_date = new WC_DateTime();
                                    $days_difference = $current_date->diff($publish_date)->days;
                                    if ($days_difference > 2) {
                                    
                                    } else { ?>
                                    <div class="absolute w-[43px] h-[20px] md:w-[76px] md:h-[33px] lg:w-[95px] lg:h-[41px] bg-[#8CC63F] top-0 right-0 flex items-center justify-center">
                                        <p class="font-tanker text-12 leading-12 md:text-19 md:leading-19 lg:text-24 lg:leading-24 text-white">Nieuw</p>
                                    </div>
                                        <?php
                                    }
                                    ?>
                                    <!-- SALE -->
                                    <?php
                                    if ( $product->is_on_sale() ) { ?>
                                    <div class="absolute w-[43px] h-[20px] md:w-[76px] md:h-[33px] lg:w-[95px] lg:h-[41px] bg-[#C69C6D] top-0 right-0 flex items-center justify-center">
                                        <p class="font-tanker text-12 leading-12 md:text-19 md:leading-19 lg:text-24 lg:leading-24 text-white">
                                            <?php
                                                global $product;
                                                if ( $product->is_on_sale() ) {
                                                    $regular_price = $product->get_regular_price();
                                                    $sale_price = $product->get_sale_price();
                                                    
                                                    $discount_percentage = 100 - ( ( $sale_price / $regular_price ) * 100 );
                                                    
                                                    echo '' . round( $discount_percentage, 0 ) . '%';
                                                } else {
                                                }
                                                ?>
                                        </p>
                                    </div>
                                        <?php
                                    }
                                    ?>
                                </a>
                                <?php
                                global $product;

                                if ($product->is_type('variable')) { ?>
                                    <div class="product-add absolute left-[0px] bottom-[0px] right-[0px] lg:left-[8px] lg:right-[8px] lg:bottom-[8px] bg-[#fff] z-[2]">
                                    <div class="relative w-full h-full overflow-hidden p-[8px]">
                                        <?php
                                       global $product;
                                        if ($product->is_type('variable')) {
                                            woocommerce_template_single_add_to_cart();
                                        } else {
                                            echo '<form class="cart" method="post" enctype="multipart/form-data">';
                                            echo woocommerce_template_single_add_to_cart();
                                            echo '</form>';
                                        }
                                        ?>
                                    </div>
                                </div>
                                    <?php
                                } else { ?>

                                    <a href="/shop/?add-to-cart=<?php echo $product->get_id();?>" class="product-add add-fast-button hidden absolute left-[8px] right-[8px] bottom-[8px] h-[45px] bg-[#8CC63F] lg:flex justify-center items-center z-[1]">
                                    <p class="font-tanker text-25 leading-25 text-white">Snel toevoegen</p>
                                    </a>
                                    <?php
                                }
                                ?>
                            </div>
                            <a href="<?php the_permalink();?>">
                                <h2 class="font-karlsen text-16 leading-16 md:text-20 md:leading-20 lg:text-24 lg:leading-24 text-[#2B2828] pt-[20px] pb-[10px] font-normal"><?php the_title();?></h2>
                                <div class="font-karlsen text-12 leading-12 md:text-16 md:leading-16 lg:text-16 lg:leading-16 text-[#2B2828] opacity-[0.5] mb-[10px] line-clamp-1 pr-2"><?php the_excerpt();?></div>
                                <p class="font-karlsen text-16 leading-16 md:text-18 md:leading-18 lg:text-18 lg:leading-18 text-[#2B2828] font-semibold"><?php echo  $product->get_price_html();?></p>
                            </a>
                        </div>
                        
                        
                        <?php 
                    endwhile;
                    echo '</div>';
                            else:
                             
                            endif;

                            wp_reset_postdata();
                        }
                    } else {
                        
                    }
                    ?>


        </div>
    </div>

    </div>

</main>


<?php do_action( 'woocommerce_after_single_product' ); ?>
<?php endwhile; // end of the loop. ?>

<script>
    document.addEventListener('DOMContentLoaded', function() {
    var addToCartButton = document.querySelector('.single_add_to_cart_button');
    if (addToCartButton) {
        addToCartButton.addEventListener('click', function() {
            var variationSelects = document.querySelectorAll('.variations select');
            variationSelects.forEach(function(select) {
                select.value = '';  // Leeg maken van de selectie
            });
        });
    }
});
</script>




<?php
get_footer( 'shop' );

/* Omit closing PHP tag at the end of PHP files to avoid "headers already sent" issues. */
