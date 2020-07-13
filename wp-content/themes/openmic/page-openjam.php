<?php
/*
 Template Name: openjam
 Template Post Type: page
*/
?>
<?php get_header(); ?>

<div class="bg-overlay ">
    <section id="openmic-top" class="">
        <div class="signup-overlay py-40">
            <div class="container mx-auto">
                <div class="    lg:flex mb-10  ">
                    <div class=" lg:w-1/2 w-full    ">
                        <h1 class="font-black oswald text-6xl text-white text-center "><?php _e( 'VIRTUAL JAM SESSION', 'openmic' ); ?> </h1>
                        <h2 class="text-4xl text-green-600 text-center"><?php _e( 'PRESENTED BY IHEARTPRODUCERS', 'openmic' ); ?></h2>
                        <div class="my-8 text-center oswald text-xl leading-loose ">
                            <?php echo get_field('event_details') ?>
                        </div>
                    </div>
                    <div class="lg:w-1/2 w-full">
                        <iframe class="mb-10 lg:mb-0 m-auto" width="560" height="315" src="https://www.youtube.com/embed/Hb28O2ywiKo" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    </div>
                </div>
                <div class="text-center">
                    <a href="https://discord.gg/Sb5ZvHc" target="_blank" class="inline-block p-4 bg-green-600 uppercase oswald font-black rounded-lg trans hover:bg-green-900 mr-4"><?php _e( '1) Join', 'openmic' ); ?> <?php _e( 'Our Discord Server', 'openmic' ); ?></a>
                    <a href="https://www.endlesss.fm/" target="_blank" class="inline-block p-4 bg-green-600 uppercase oswald font-black rounded-lg trans hover:bg-green-900"><?php _e( '2) Download Endlesss', 'openmic' ); ?></a>
                </div>
                <div class="my-20 text-xl">
                    <?php echo get_field('main_text') ?>
                </div>
                <div class="wpb_wrapper lg:w-3/4  m-auto ">
                    <?php echo get_field('faq_text') ?>
                </div>
            </div>
        </div>
    </section>
    <!-- #bio -->
</div>                

<?php get_footer(); ?>