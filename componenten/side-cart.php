<div id="sidecart-menu" class="sidecart-hidden fixed top-[33px] right-0 bottom-0 w-full lg:w-[596px] bg-white z-[99999] overflow-y-auto">
    <div class="flex items-center justify-between pt-6 w-full max-w-[354px] md:max-w-[603px] lg:max-w-[518px] lg:ml-[47px] mx-auto pl-0 md:pl-3 lg:pl-0">
        <div class="flex items-center">
            <svg class="h-[27px] md:h-[36px] w-[22.85px]" id="shopping-bag" xmlns="http://www.w3.org/2000/svg" width="100%" height="auto" viewBox="0 0 30.791 36.378">
            <g id="Group_7" data-name="Group 7" transform="translate(0 0)">
                <g id="ngicon" transform="translate(0 0)">
                <path id="Path_3" data-name="Path 3" d="M421.632,284.373h-2.357a3.106,3.106,0,0,0-3.1,2.884l-1.521,21.294a3.1,3.1,0,0,0,3.1,3.326h24.581a3.1,3.1,0,0,0,3.1-3.326l-1.521-21.294a3.106,3.106,0,0,0-3.1-2.884h-2.341v-.444a8.429,8.429,0,0,0-8.429-8.429,8.284,8.284,0,0,0-8.429,8.429c.006.147.012.3.017.444Zm16.841,2.662v6.655a1.331,1.331,0,0,1-2.662,0v-6.655H424.277v6.655a1.331,1.331,0,0,1-2.662,0s.115-3.11.077-6.655h-2.418a.443.443,0,0,0-.442.412l-1.522,21.294a.444.444,0,0,0,.443.476h24.581a.444.444,0,0,0,.443-.476l-1.522-21.294a.443.443,0,0,0-.442-.412Zm-2.662-2.662v-.444a5.767,5.767,0,1,0-11.534,0v.444Z" transform="translate(-414.648 -275.5)" fill-rule="evenodd"/>
                </g>
            </g>
            </svg>
            <h3 class="font-karlsen text-22 leading-22 md:text-32 md:leading-32 text-[#38241B] font-semibold ml-[15px] md:ml-[34px]">Jouw winkelwagen</h3>
        </div>
        <button id="sidecart-close" class="z-[9999]">
            <svg xmlns="http://www.w3.org/2000/svg" width="19.799" height="19.799" viewBox="0 0 19.799 19.799">
            <g id="Group_743" data-name="Group 743" transform="translate(-1156.12 871.156) rotate(-45)">
                <line id="Line_55" data-name="Line 55" y2="26" transform="translate(1433.5 202.5)" fill="none" stroke="#000" stroke-width="2"/>
                <line id="Line_56" data-name="Line 56" y2="26" transform="translate(1446.5 215.5) rotate(90)" fill="none" stroke="#000" stroke-width="2"/>
            </g>
            </svg>
        </button>
        
    </div>
   
    <div class="w-full max-w-[354px] md:max-w-[603px] lg:max-w-[518px] lg:ml-[47px] mx-auto">
        <hr class="border-[#B5BBB8] border-1 my-2">
        <div class="flex items-start pl-0 md:pl-3 lg:pl-0">
            <svg class="mt-[2px] w-[13.697px]" xmlns="http://www.w3.org/2000/svg" width="13.697" height="9.781" viewBox="0 0 13.697 9.781">
                <path id="Path_202" data-name="Path 202" d="M8331.749,406.758l-7.468,7.367-3.4-3.4" transform="translate(-8319.466 -405.343)" fill="none" stroke="#8cc63f" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"/>
            </svg>
             <p class="text-[#B5BBB8] text-16 leading-16 font-karlsen w-full ml-2">Voor 22:00 besteld = vandaag verzonden</p>
        </div>
        <hr class="border-[#B5BBB8] border-1 mt-2">
        <div class="h-full">
            <div class="grid gap-2 my-[25px]">
                <!-- WINKELWAGEN ITEM -->
                <?php
                // Haal de inhoud van de winkelwagen op
                $cart = WC()->cart->get_cart();

                if (!empty($cart)) {
                    foreach ($cart as $cart_item_key => $cart_item) {
                        $product = $cart_item['data'];
                        $product_id = $product->is_type('variation') ? $product->get_parent_id() : $product->get_id();

                        // Haal de productafbeelding op
                        $product_image = wp_get_attachment_image_src(get_post_thumbnail_id($product_id), 'full'); ?>
                        <div class="flex w-full justify-between pl-0 md:pl-3 lg:pl-0">
                                <!-- AFBEELDING -->
                                <a href="<?php the_permalink($product->get_id());?>" class="bg-gradient-to-b from-[#FAFAFA] to-[#F2F2F2] w-[146px] h-[146px] md:w-[190px] md:h-[190px]">
                                    <?php
                                    if ($product_image) {
                                    echo '<img class="h-full w-auto mix-blend-multiply" src="' . esc_url($product_image[0]) . '" alt="' . esc_attr($product->get_name()) . '"/>';
                                    }
                                    ?>
                                </a>
                                <!-- INFORMATIE -->
                                <div class="w-full max-w-[183px] md:max-w-[345px] lg:max-w-[299px] h-[146px] md:h-[190px]">
                                    <div class="flex flex-col justify-between h-full"> 
                                        <div class="">
                                            <div class="flex justify-between">
                                                <a href="<?php the_permalink($product->get_id());?>" class="font-karlsen text-16 leading-16 md:text-24 md:leading-24 lg:text-24 lg:leading-24 text-[#2B2828] max-w-[227px] font-semibold md:font-normal"><?php echo esc_html($product->get_name()); ?></a>
                                                <?php echo '<a class="remove-item" href="' . esc_url(WC()->cart->get_remove_url($cart_item_key)) . '">
                                                <svg class="w-[29px] h-[29px] md:w-[36px] md:h-[36px] ml-[15px]" width="100%" height="auto" viewBox="0 0 36 36" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                                    <defs>
                                                        <rect id="path-hprcwq4s5d-1" x="0" y="0" width="14.792" height="18.609"></rect>
                                                    </defs>
                                                    <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                        <g id="Group">
                                                            <g id="Rectangle_377">
                                                                <rect id="Rectangle" fill-rule="nonzero" x="0" y="0" width="36" height="36"></rect>
                                                                <rect id="Rectangle" stroke="#B5BBB8" x="0.5" y="0.5" width="35" height="35"></rect>
                                                            </g>
                                                            <g id="Group_380-Clipped" transform="translate(10.604, 8.195)">
                                                                <mask id="mask-hprcwq4s5d-2" fill="white">
                                                                    <use xlink:href="#path-hprcwq4s5d-1"></use>
                                                                </mask>
                                                                <g id="Rectangle_123"></g>
                                                                <g id="Group_380" mask="url(#mask-hprcwq4s5d-2)" fill="#B5BBB8" fill-rule="nonzero">
                                                                    <g transform="translate(0.0268, -0)" id="Path_205">
                                                                        <path d="M14.0492465,2.86300955 L10.9492465,2.86300955 L10.9492465,1.67000955 C10.9487169,1.22622032 10.7717771,0.800847448 10.4574083,0.487604072 C10.1430395,0.174360696 9.71703476,-0.00105246773 9.2732465,4.75132112e-06 L5.4602465,4.75132112e-06 C4.53838783,0.00111158952 3.79134854,0.748150881 3.7902465,1.67000955 L3.7902465,2.86300955 L0.689246496,2.86300955 C0.304489826,2.87739611 0,3.193484 0,3.57850955 C0,3.96353509 0.304489826,4.27962298 0.689246496,4.29400955 L0.973246496,4.29400955 L1.7642465,16.1590095 C1.85871945,17.5361773 3.00184551,18.6059477 4.3822465,18.6090095 L10.3542465,18.6090095 C11.7350328,18.606472 12.8787462,17.5365606 12.9732465,16.1590095 L13.7642465,4.29400955 L14.0492465,4.29400955 C14.3112499,4.3038062 14.5576545,4.16961583 14.6915662,3.94420643 C14.8254779,3.71879704 14.8254779,3.43822205 14.6915662,3.21281266 C14.5576545,2.98740326 14.3112499,2.85321289 14.0492465,2.86300955 Z M5.2222465,1.67000955 C5.2222465,1.53801349 5.32925044,1.43100955 5.4612465,1.43100955 L9.2732465,1.43100955 C9.40524255,1.43100955 9.5122465,1.53801349 9.5122465,1.67000955 L9.5122465,2.86300955 L5.2212465,2.86300955 L5.2212465,1.67000955 L5.2222465,1.67000955 Z M6.1732465,13.1220095 C6.15885993,13.5067662 5.84277204,13.811256 5.4577465,13.811256 C5.07272095,13.811256 4.75663306,13.5067662 4.7422465,13.1220095 L4.7422465,8.35000955 C4.75663306,7.96525288 5.07272095,7.66076305 5.4577465,7.66076305 C5.84277204,7.66076305 6.15885993,7.96525288 6.1732465,8.35000955 L6.1732465,13.1220095 Z M9.9902465,13.1220095 C9.97585993,13.5067662 9.65977204,13.811256 9.2747465,13.811256 C8.88972095,13.811256 8.57363306,13.5067662 8.5592465,13.1220095 L8.5592465,8.35000955 C8.54944984,8.08800618 8.68364021,7.8416015 8.90904961,7.70768981 C9.134459,7.57377812 9.41503399,7.57377812 9.64044338,7.70768981 C9.86585278,7.8416015 10.0000432,8.08800618 9.9902465,8.35000955 L9.9902465,13.1220095 Z"></path>
                                                                    </g>
                                                                </g>
                                                            </g>
                                                        </g>
                                                    </g>
                                                </svg></a>';?>
                                            </div>
                                            <?php echo '<p class="product-excerpt pt-3 font-karlsen text-12 leading-12 md:text-16 md:leading-16 lg:text-16 lg:leading-16 text-[#2B2828] opacity-[0.5] line-clamp-1">' . esc_html($product->get_short_description()) . '</p>';?>
                                        </div>  

                                        <div class="flex justify-between items-end">
                                            <div class="flex items-end">
                                                <?php 
                                                    echo '<select class="custom-quantity-input font-karlsen text-11 leading-11 p-[3px] border-[1px] border-[#2B2828] text-[#2B2828] mr-1 min-w-[41px]" data-cart-item-key="' . esc_attr($cart_item_key) . '">';
                                                    for ($i = $product->get_min_purchase_quantity(); $i <= $product->get_max_purchase_quantity(); $i++) {
                                                        echo '<option value="' . $i . '"' . selected($cart_item['quantity'], $i, false) . '>' . $i . '</option>';
                                                    }
                                                    echo '</select>';
                                                ?>
                                                <?php
                                                $product = wc_get_product($cart_item['product_id']);
                                                if ($product->is_type('variable')) {
                                                    // Dit is een variabel product, voer hier de code uit voor variabele producten.
                                                    echo '<span class="product-variation font-karlsen text-12 leading-12 md:text-16 md:leading-16 lg:text-16 lg:leading-16 text-[#2B2828]">' . wc_get_formatted_variation($cart_item['variation']) . '</span>';
                                                } else {
                                                }
                                                ?>
                                            </div>
                                            <!-- <?php echo '<span class="product-price font-karlsen text-16 leading-16 md:text-24 md:leading-24 lg:text-24 lg:leading-24 text-[#2B2828] font-semibold">' . wc_price($product->get_price() * $cart_item['quantity']) . '</span>';?> -->
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <hr class="border-[#B5BBB8] border-1 mt-[20px] mb-[10px]">
                        <?php
                        // echo '<div class="mini-cart-item">';

                        // // Variatie details
                        // echo '<span class="product-variation">Variatie: ' . wc_get_formatted_variation($cart_item['variation']) . '</span>';

                        // // Product excerpt (samenvatting)
                        // echo '<p class="product-excerpt">' . esc_html($product->get_short_description()) . '</p>';

                        // // Prijs
                        // echo '<span class="product-price">' . wc_price($product->get_price() * $cart_item['quantity']) . '</span>';

                        // // Verwijderknop
                        // echo '<a class="remove-item" href="' . esc_url(WC()->cart->get_remove_url($cart_item_key)) . '">Verwijder</a>';

                        // // Optie om de hoeveelheid van het item te wijzigen
                        // echo '<input type="number" class="item-quantity" name="quantity" value="' . esc_attr($cart_item['quantity']) . '" data-cart-key="' . esc_attr($cart_item_key) . '" min="1">';

                        // echo '</div>';
                    }
                } else {
                    echo 'Je winkelwagen is leeg.';
                }
                ?>
                <?php
                if (WC()->cart->get_cart_contents_count() > 0) { ?>
                 <?php foreach ( WC()->cart->get_coupons() as $code => $coupon ) : ?>
                    <div class="flex justify-between pl-0 md:pl-3 lg:pl-0">
                    <h4 class="font-karlsen text-16 leading-16 font-normal md:text-25 md:leading-25 text-[#2B2828]">Kortings- of giftcard </h4>
                    <p class="font-karlsen text-16 leading-16 font-normal md:text-25 md:leading-25 text-[#2B2828]">
                        <?php wc_cart_totals_coupon_html( $coupon ); ?>
                    </p>
                </div>
                <?php endforeach; ?>
                <div class="flex justify-between pl-0 md:pl-3 lg:pl-0">
                    <h4 class="font-karlsen text-16 leading-16 md:text-25 md:leading-25 font-semibold text-[#2B2828]">Subtotaal</h4>
                    <p class="font-karlsen text-16 leading-16 md:text-25 md:leading-25 font-semibold text-[#2B2828]">
                        <?php $total = WC()->cart->get_cart_total();
                        echo '' . $total;
                        ?>
                    </p>
                </div>
                <div class="flex justify-between pl-0 md:pl-3 lg:pl-0">
                    <h4 class="font-karlsen text-16 leading-16 md:text-25 md:leading-25 font-normal text-[#2B2828]">Bezorgkosten</h4>
                    <p class="font-karlsen text-16 leading-16 md:text-25 md:leading-25 font-normal text-[#2B2828]">
                        <?php
                        $verzendkosten = WC()->cart->shipping_total;

                        if ($verzendkosten >= 1) {
                            echo '' . wc_price($verzendkosten);
                        } else {
                            echo '<span class="text-[#8CC63F]">Gratis</span>';
                        }
                        ?>
                    </p>
                </div>
                <hr class="border-[#B5BBB8] border-1 mt-[10px] mb-[10px]">
                <div class="flex justify-between pl-0 md:pl-3 lg:pl-0">
                    <h4 class="font-karlsen text-16 leading-16 md:text-25 md:leading-25 font-semibold text-[#2B2828]">Totaal</h4>
                    <p class="font-karlsen text-16 leading-16 md:text-25 md:leading-25 font-semibold text-[#2B2828]">
                        <?php
                        $total_bedrag = WC()->cart->total;
                        echo '' . wc_price($total_bedrag);
                        ?>
                    </p>
                </div>

                <hr class="border-[#B5BBB8] border-1 mt-[10px] mb-[10px]">
                <?php $checkout_url = wc_get_checkout_url();?>
                <a href="<?php echo esc_url($checkout_url);?>" class="h-[45px] bg-[#8CC63F] hover:bg-black duration-300 flex justify-center items-center w-full">
                    <p class="font-tanker text-25 leading-25 text-white">Afrekenen</p>
                </a>
                <p class="font-karlsen text-12 leading-12 md:text-16 md:leading-16 lg:text-16 lg:leading-16 text-[#2B2828] opacity-[0.5] text-center">Bekijk je bezorg opties in de volgende stap</p>
                    
                <hr class="border-[#000000] border-1 mt-[10px] mb-[10px]">
                <div class="flex justify-between">
                    <p class="font-karlsen text-16 leading-16 text-[#2B2828]">Betaal veilig met</p>
                    <div class="w-[156px] md:w-[224px]">
                        <img class="w-full" src="/wp-content/themes/freekvonk/img/local/logos-pay.png" alt="Betaal opties" class="w-full h-auto">
                    </div>
                <?php
                } else {
                }
                ?>
                </div>
            </div>
        </div>
    </div>

</div>

<div class="sidecart-overlay"></div>




