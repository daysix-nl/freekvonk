<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="https://freekvonk.attentionseekers.studio/wp-content/themes/freekvonk/img/preview/verhalen.png" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- VERHALEN -->
<section id="<?php echo get_field('section_id');?>" class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?> verhalen-section team-block list-b-none">
    <div class="container grid grid-cols-1 lg:grid-cols-3  lg:gap-[15px] gap-2 z-10 relative">
        <?php
            $loop = new WP_Query( array(
                'post_type' => 'verhaal',
                'posts_per_page' => -1,
                'orderby' => 'date',
                'order' => 'DESC'
            )
            );
            $post_count = $loop->post_count; // Aantal berichten in de queryloop
            $show_load_more_button = $post_count > 6;
            ?>
        <?php while ( $loop->have_posts() ) : $loop->the_post(); $post_id = get_the_ID(); ?>
        <?php
        $thumbnail_id = get_post_thumbnail_id(get_the_ID());
        $thumbnail_info = wp_get_attachment_image_src($thumbnail_id, 'full');
        $image_url = isset($thumbnail_info[0]) ? esc_url($thumbnail_info[0]) : '';
        $image_alt = get_post_meta($thumbnail_id, '_wp_attachment_image_alt', true);
        ?>
        <a href="<?php the_permalink();?>" class="w-full col-span-1 relative overflow-hidden max-h-[314px] h-full md:max-h-[371px] lg:max-h-[auto] xl:max-h-[auto] aspect-square post">
            <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full w-full object-cover object-center hover-blur duration-200">
            <div class="absolute left-[25px] hover-content duration-200 overflow-hidden w-[90%]">
                <h4 class="text-18 leading-18 lg:text-22 lg:leading-22 font-karlsen text-white uppercase tracking-wider pb-1"><?php echo get_field('subtitel', $post_id);?></h4>
                <div class="flex space-x-3">
                    <h3 class="text-40 leading-37 lg:text-50 lg:leading-46 font-tanker text-white w-full"><?php the_title();?></h3>
                    <div class="w-[40px] flex items-end justify-end pr-2 pb-[3px] ml-auto">
                        <svg class="h-[15px] lg:h-[31px]" width="auto" height="100%" viewBox="0 0 17.5283931 14.7362632" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                <g id="Group" stroke="#FFFFFF" stroke-width="2">
                                    <line x1="9.10107819" y1="3.23581491" x2="18.5600782" y2="4.15981491" id="Line_36" transform="translate(13.8306, 3.6978) rotate(45) translate(-13.8306, -3.6978)"></line>
                                    <line x1="9.09955515" y1="11.5004482" x2="18.5585551" y2="10.5764482" id="Line_37" transform="translate(13.8291, 11.0384) rotate(135) translate(-13.8291, -11.0384)"></line>
                                    <line x1="15.459" y1="7.36887006" x2="0" y2="7.36887006" id="Line_70"></line>
                                </g>
                            </g>
                        </svg>
                    </div>
                </div>
            </div>
        </a>
        <?php endwhile; wp_reset_query(); ?>
    </div>
     <?php if ($show_load_more_button) : ?>
     <div class="flex justify-center pt-4">
        <button class="w-[163px] h-[45px] lg:w-[240px] lg:h-[58.5px] bg-black hover:bg-[#8CC63F] duration-300 flex justify-center items-center text-19 leading-19 lg:text-25 lg:leading-25 font-tanker font-normal text-white button-posts">Laad meer</button>
    </div>
    <?php endif; ?>  
</section>
<?php endif; ?>
