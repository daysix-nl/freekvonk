<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="/wp-content/themes/freekvonk/img/preview/nieuws-slider-2.png" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- NIEUWS SLIDER 1 -->
<section id="<?php the_field('section_id');?>" class="<?php the_field('achtergrond');?> <?php the_field('padding_top');?> <?php the_field('padding_bottom');?>">
    <div class="container grid gap-[25px]">

   
        <?php
            $loop = new WP_Query( array(
                'post_type' => 'nieuws',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'ASC'
            )
            );
            $post_count = 0;


            ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); 
            // Overslaan van de eerste 5 berichten
            if ($post_count < 8) {
                $post_count++;
                continue;
            }
        ?>
        <?php
        $thumbnail_id = get_post_thumbnail_id(get_the_ID());
        $thumbnail_info = wp_get_attachment_image_src($thumbnail_id, 'full');
        $image_url = isset($thumbnail_info[0]) ? esc_url($thumbnail_info[0]) : '';
        $image_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
        ?>


        <a href="<?php the_permalink();?>" class="w-full bg-white p-[15px] md:p-[30px]">
            <div class="flex flex-col md:flex-row justify-between items-center">
                <div class="w-full h-[175px] md:w-[147px] md:h-[136px] lg:h-[179px] lg:w-[303px] xl:w-[335px]">
                    <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full w-full object-cover object-center">
                </div>
                <div class="md:w-[333px] lg:w-[610px] mt-[15px] md:mt-[unset]">
                    <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker font-normal text-black md:line-clamp-1 px-[10px] md:px-[unset]"><?php the_title();?></h3>
                    <div class="flex items-end justify-between px-[10px] pb-[10px] md:px-[unset] md:pb-[unset]">
                        <div class="w-[calc(100%-30px)]">
                            <p class="text-14 leading-26 lg:text-18 lg:leading-[32px] font-karlsen font-normal text-black tracking-wider my-[10px] uppercase"><?php echo get_the_date('j F Y');?></p>
                            <p class="text-14 leading-26 lg:text-16 lg:leading-[32px] font-karlsen font-normal text-black md:mt-[15px] lg:mt-[30px] line-clamp-3 md:line-clamp-2"><?php the_field('teaser_tekst', $post_id);?></p>
                        </div>
                        <div class="w-[17.5px] h-[14.68px] md:hidden">
                            <svg width="100%" height="auto" viewBox="0 0 35.7842742 30.9232742" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                    <g id="Group" stroke="#000000" stroke-width="3">
                                        <line x1="0" y1="15.461" x2="33.419" y2="15.461" id="Line_35"></line>
                                        <line x1="18.0929757" y1="6.75829844" x2="38.0139757" y2="8.70329844" id="Line_36" transform="translate(28.0535, 7.7308) rotate(45) translate(-28.0535, -7.7308)"></line>
                                        <line x1="18.0927016" y1="24.1649757" x2="38.0137016" y2="22.2199757" id="Line_37" transform="translate(28.0532, 23.1925) rotate(135) translate(-28.0532, -23.1925)"></line>
                                    </g>
                                </g>
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="w-[17.5px] lg:w-[35px] h-full md:flex justify-center hidden ">
                    <svg width="100%" height="auto" viewBox="0 0 35.7842742 30.9232742" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                        <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                            <g id="Group" stroke="#000000" stroke-width="3">
                                <line x1="0" y1="15.461" x2="33.419" y2="15.461" id="Line_35"></line>
                                <line x1="18.0929757" y1="6.75829844" x2="38.0139757" y2="8.70329844" id="Line_36" transform="translate(28.0535, 7.7308) rotate(45) translate(-28.0535, -7.7308)"></line>
                                <line x1="18.0927016" y1="24.1649757" x2="38.0137016" y2="22.2199757" id="Line_37" transform="translate(28.0532, 23.1925) rotate(135) translate(-28.0532, -23.1925)"></line>
                            </g>
                        </g>
                    </svg>
                </div>
            </div>
        </a>



        <?php endwhile; wp_reset_query(); ?>
                
                
    </div>

</section>
<?php endif; ?>
