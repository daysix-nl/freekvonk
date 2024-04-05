<?php
if (isset($block['data']['preview_image_help'])): ?>
    <img src="https://freekvonk.attentionseekers.studio/wp-content/themes/freekvonk/img/preview/spreekbeurt.png" style="width:100%; height:auto;">
    <?php
else: ?>
<!-- SPREEKBEURT -->
<section id="<?php echo get_field('section_id');?>" class="<?php echo get_field('achtergrond');?> <?php echo get_field('padding_top');?> <?php echo get_field('padding_bottom');?>">
    <div class="container grid grid-cols-1 lg:grid-cols-2 gap-[40px] lg:gap-[10px]">
        <?php
        if( have_rows('spreekbeurt') ):
            while( have_rows('spreekbeurt') ) : the_row(); ?>
            <?php
            $image = get_sub_field('afbeelding');
            $image_url = isset($image['url']) ? esc_url($image['url']) : '';
            $image_alt = isset($image['alt']) ? esc_attr($image['alt']) : '';
            ?>
            <div class="w-full bg-white">
                <div class="aspect-[16/12] w-full overflow-hidden p-[10px] md:p-[50px]">
                    <img src="<?php echo $image_url; ?>" alt="<?php echo $image_alt; ?>" class="h-full w-full object-cover object-center">
                </div>
                <div class="flex flex-col md:flex-row justify-between items-center pl-[10px] pr-[10px] pb-[20px] md:pl-[30px] md:pr-[30px] md:pb-[30px]">
                    <div class="w-full">
                        <h3 class="text-16 md:text-24 font-karlsen font-normal text-[#2B2828]"><?php echo get_sub_field('titel');?></h3>
                        <p class="text-12 md:text-18 font-karlsen font-normal text-[#2B2828] opacity-[0.5]"><?php echo get_sub_field('subtitel');?></p>
                    </div>
                    <a href="<?php echo get_sub_field('bestand');?>" class="w-full bg-[#8CC63F] hover:bg-black duration-300 h-[45px] lg:h-[51px] flex items-center justify-between pl-[25px] pr-[15px] font-tanker md:text-19 lg:text-22 text-white font-normal mt-[15px] md:mt-[unset md:ml-[15px]" target="_blank">Download 
                        <svg width="auto" height="100%" viewBox="0 0 14.961 19.596" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" class="h-[16.03px] w-[12.56px] md:h-[19.1px] md:w-[14.96px]">
                            <g id="Page-1" stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" stroke-linecap="round">
                                <g id="Group" stroke="#FFFFFF" stroke-width="2">
                                    <line x1="0.0005" y1="7.4805" x2="14.9615" y2="7.4805" id="Line_35" transform="translate(7.481, 7.4805) rotate(90) translate(-7.481, -7.4805)"></line>
                                    <line x1="8.8817842e-16" y1="19.096" x2="14.961" y2="19.096" id="Line_67"></line>
                                    <line x1="6.48006586" y1="12.1235441" x2="15.3980659" y2="12.9945441" id="Line_36" transform="translate(10.9391, 12.559) rotate(135) translate(-10.9391, -12.559)"></line>
                                    <line x1="-0.441044134" y1="12.9945659" x2="8.47695587" y2="12.1235659" id="Line_37" transform="translate(4.018, 12.5591) rotate(-135) translate(-4.018, -12.5591)"></line>
                                </g>
                            </g>
                        </svg>
                    </a>
                </div>
            </div>
            <?php
            endwhile;
        else :
        endif;
        ?> 
    </div>
</section>
<?php endif; ?>
