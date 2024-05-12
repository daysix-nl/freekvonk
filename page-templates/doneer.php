<?php
/**
 * Template name: Doneer
 */


 get_header('stichting-wit'); ?>
 <main class="bg-[#EFE7DE]">
    <div class="container pt-[45px] pb-[50px] xl:pb-[80px] w-full">
        <div class="bg-white py-[50px] no-title doneer">
            <h1 class="text-22 leading-22 lg:text-32 lg:leading-22 font-semibold mb-2 px-3 ">Vul je gegevens in</h1>
            <?php echo do_shortcode('[gravityform id="3" title="false" description="false" ajax="true"]'); ?>
        </div>
    </div>
 </main>
<?php get_footer('stichting'); ?>


