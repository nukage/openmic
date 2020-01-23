<?php
/*
 Template Name: Thank You
 Template Post Type: page
*/
?>
<?php get_header(); ?>

<div class="bg-overlay ">
    <section id="signup">
        <div class="signup-bg ">
            <div class="signup-overlay pt-16 pb-32">
                <h3 class="section-title   pt-24 text-red-500"><?php _e( 'THANK YOU', 'openmic' ); ?></h3>
                <div class="header-strips-1 bg-red-600"></div>
                <div class="container mx-auto  leading-loose max-w-3xl pb-24">
                    <?php _e( 'We have received your submission, thank you for signing up to play. Due to there being a very limited number of slots, not everyone who signs up will have a chance to play, but we try to allow first timers to play if they haven’t played before. We will usually announce the schedule about a week ahead of the event, so you will receive an email if you have been selected to play. Make sure to follow us online:', 'openmic' ); ?>
                    <div class="text-center mt-6">
                        <a href="https://www.meetup.com/NYC-Electronic-Music-Producers/" target="_blank" class="inline-block p-4 bg-green-600 uppercase oswald font-black rounded-lg trans hover:bg-green-900 mr-4"><?php _e( 'Join Our Meetup Group', 'openmic' ); ?></a> 
                        <a href="https://www.facebook.com/groups/1419461328304642/" target="_blank" class="inline-block p-4 bg-green-600 uppercase oswald font-black rounded-lg trans hover:bg-green-900"><?php _e( 'Join Our Facebook Group', 'openmic' ); ?></a> 
                    </div>
                </div>
            </div>                             
        </div>
    </section>
    <!-- #bio -->
</div>                

<?php get_footer(); ?>