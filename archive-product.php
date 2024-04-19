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

<main class="pt-[91px] lg:pt-[90.67px]">

<?php do_action('woocommerce_before_shop_loop'); ?>

<!-- SHOP CONTAINER -->
<div class="max-w-[354px] md:max-w-[725px] lg:max-w-[1168px] xl:max-w-[1326px] mx-auto pb-[85px] xl:pb-[105px]">

    <!-- SHOP HEADER -->
    <div class="w-full aspect-[16/5] bg-[#F2F2F2] mb-[0px] lg:mb-[30px] overflow-hidden">
        
           <div class="mySwiper-shop-header swiper relative z-[40]">
                <div class="swiper-wrapper w-full aspect-[16/5]">
                        <?php
                        if( have_rows('header', 'option') ):
                            while( have_rows('header', 'option') ) : the_row(); ?>
                            <?php
                            $image = get_sub_field('afbeelding', 'option');
                            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                            ?>
                            <?php
                            $link = get_sub_field('link', 'option');
                            $link_url = isset($link['url']) ? esc_url($link['url']) : '';
                            $link_text = isset($link['title']) ? esc_html($link['title']) : '';
                            $link_target = isset($link['target']) ? esc_attr($link['target']) : '';
                            ?>
                             <a href="<?php echo $link_url; ?>" class="swiper-slide w-fit" target="<?php echo $link_target; ?>"><img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="w-full h-full object-cover object-right"></a>
                            <?php
                            endwhile;
                        else :
                        endif;
                        ?>
                </div>
            </div>
    </div>

    <div class="flex justify-end">

        <?php echo do_shortcode('[fe_open_button]'); ?>
    </div>

    <!-- <button class="filter-button-shop lg:hidden">
        Filter
    </button>
    <div class="filter-shop-modal">
        <button class="filter-close p-10">Close</button>
    </div>
    <div class="filter-overlay"></div> -->


    <div class="flex justify-between">
        <!-- SIDEBAR -->
        <div class="hidden lg:block lg:w-[222px] filter">
             <?php echo do_shortcode('[fe_chips]'); ?>
            <?php echo do_shortcode('[fe_widget]'); ?>
        </div>

        <!-- PRODUCTEN -->
        <div class="w-full max-w-[354px] md:max-w-[725px] lg:max-w-[898px] xl:max-w-[1028px] grid grid-cols-2 md:grid-cols-3 gap-x-[7px] gap-y-[30px] lg:gap-x-[15px] ld:gap-y-[40px] items-start h-fit">
           <div class="col-span-2 md:col-span-3 w-full hidden justify-end lg:flex items-center">
           
              <?php if ( is_active_sidebar( 'filter-sidebar' ) ) { ?>
                    <?php dynamic_sidebar( 'filter-sidebar' ); ?>
                <?php } ?>
           </div>
           <?php
        // Aangepaste query om alle producten op te halen
        $args = array(
            'post_type' => 'product', // Het posttype van producten
            'posts_per_page' => -1,   // Toon alle producten
        );

        $products_query = new WP_Query($args);

        if ($products_query->have_posts()) :
            while ($products_query->have_posts()) : $products_query->the_post();

        // Informatie over het product ophalen
        $product = wc_get_product(get_the_ID());
        
        ?>

        <!-- PRODUCT -->
        <div class="product-item h-fit relative">
            <div class="w-full aspect-[16/13] bg-gradient-to-b from-[#FAFAFA] to-[#F2F2F2] flex justify-center overflow-hidden relative">
                <a class="w-full flex justify-center" href="<?php the_permalink(); ?>">
                    <img src="<?php echo get_the_post_thumbnail_url($product->get_id()); ?>" alt="" class="h-full w-auto mix-blend-multiply">
                  <?php
                    // Toon de labels van het product
                    $product_labels = get_the_terms( get_the_ID(), 'product_label' );
                    if ( $product_labels && ! is_wp_error( $product_labels ) ) { ?>
                       <ul class="absolute bottom-[4px] left-[4px] right-[4px] md:bottom-[6px] md:left-[6px] md:right-[6px] lg:bottom-[8px] lg:left-[8px] lg:right-[8px] h-[25px] md:h-[35px] lg:h-[45px] overflow-hidden flex space-x-[4px] md:space-x-[6px] lg:space-x-[8px] z-[1]">
                            <?php
                        foreach ( $product_labels as $product_label ) {
                            $image = get_field('afbeelding', 'product_label_' . $product_label->term_id);
                            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
                            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
                            if ($image_url) { ?>
                                <li class="w-[25px] h-[25px] md:w-[35px] md:h-[35px] lg:w-[45px] lg:h-[45px] bg-[#8CC63F] rounded-full flex items-center justify-center overflow-hidden"><img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="min-h-full min-w-full object-cover"></li>
                           <?php }
                        }
                        echo '</ul>';
                    }
                    ?>


                    <!-- NIEUW -->
                    <?php 
                    global $product;
                    // Haal de publicatiedatum van het product op
                    $publish_date = $product->get_date_created();
                    $current_date = new WC_DateTime();
                    $days_difference = $current_date->diff($publish_date)->days;
                    if ($days_difference > 19) {
                       
                    } else { ?>
                    <div class="absolute w-[43px] h-[20px] md:w-[76px] md:h-[33px] lg:w-[95px] lg:h-[41px] bg-[#8CC63F] top-0 right-0 flex items-center justify-center">
                        <p class="font-tanker text-12 leading-12 md:text-19 md:leading-19 lg:text-24 lg:leading-24 text-white">Nieuw</p>
                    </div>
                        <?php
                    }
                    ?>
                    <!-- UITVERKOCHT -->
            


                    <?php 
                    global $product;

                    // Controleer of het product een variant is
                    if ( $product->is_type( 'variable' ) ) {
                        // HTML voor varianten
                        ?>
                 
                        <?php
                    } else {
                        // Het product is geen variant
                        // Controleer voorraad
                        $stock_quantity = $product->get_stock_quantity();
                        
                        // Controleer of de voorraad minder dan één is
                        if ($stock_quantity < 1) {
                        ?>
                        <div class="absolute w-[65px] h-[20px] md:w-[105px] md:h-[33px] lg:w-[140px] lg:h-[41px] bg-[#523524] top-0 right-0 flex items-center justify-center">
                            <p class="font-tanker text-12 leading-12 md:text-19 md:leading-19 lg:text-24 lg:leading-24 text-white">Uitverkocht</p>
                        </div>
                        <?php
                        }
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
                            <div class="product-add absolute left-[0px] bottom-[0px] right-[0px] lg:left-[8px] lg:right-[8px] lg:bottom-[8px] bg-[#fff] z-[2] hidden lg:block">
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
                        <?php } else { ?>
                            <a href="/shop/?add-to-cart=<?php echo $product->get_id(); ?>" class="product-add add-fast-button hidden absolute left-[8px] right-[8px] bottom-[8px] h-[45px] bg-[#8CC63F] hover:bg-black duration-300 lg:flex justify-center items-center z-[1]">
                                <p class="font-tanker text-25 leading-25 text-white">Snel toevoegen</p>
                            </a>
                        <?php } ?>
                    </div>
                    <a href="<?php the_permalink(); ?>">
                        <h2 class="font-karlsen text-16 leading-16 md:text-20 md:leading-20 lg:text-24 lg:leading-24 text-[#2B2828] pt-[20px] pb-[10px] font-normal"><?php the_title(); ?></h2>
                        <div class="font-karlsen text-12 leading-12 md:text-16 md:leading-16 lg:text-16 lg:leading-16 text-[#2B2828] opacity-[0.5] mb-[10px] line-clamp-1 pr-2"><?php the_excerpt(); ?></div>
                        <p class="font-karlsen text-16 leading-16 md:text-18 md:leading-18 lg:text-18 lg:leading-18  font-semibold"><?php echo $product->get_price_html(); ?></p>
                    </a>
                </div>

            <?php
            endwhile;

            // Herstel de oorspronkelijke query
            wp_reset_postdata();
        else :
            echo 'Geen producten gevonden';
        endif;
        ?>
        </div>
    </div>
</div>
</main>



<?php
get_footer( 'shop' ); ?>
