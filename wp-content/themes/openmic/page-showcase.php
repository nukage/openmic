<?php
/*
 Template Name: Showcase
 Template Post Type: page
*/
?>
<?php get_header(); ?>

<div class="bg-overlay ">
    <section id="openmic-top" class="">
        <div class="openmic-overlay py-40">
            <div class="container mx-auto">
                <h1 class="font-black oswald text-6xl text-white text-center"><?php _e( 'ELECTRONIC OPEN SHOWCASE', 'openmic' ); ?></h1>
                <h2 class="text-4xl text-green-600 text-center"><?php _e( 'PRESENTED BY IHEARTPRODUCERS, 343 LABS & SCRATCH DJ ACADEMY', 'openmic' ); ?></h2>
                <div class="my-8 text-center oswald text-xl leading-loose ">
                    <?php echo get_field('event_details') ?>
                </div>
                <div class="text-center">
                    <a href="https://www.meetup.com/NYC-Electronic-Music-Producers/" target="_blank" class="inline-block p-4 bg-green-600 uppercase oswald font-black rounded-lg trans hover:bg-green-900 mr-4"><?php _e( 'Join Our Meetup Group', 'openmic' ); ?></a> 
                    <a href="https://www.facebook.com/groups/1419461328304642/" target="_blank" class="inline-block p-4 bg-green-600 uppercase oswald font-black rounded-lg trans hover:bg-green-900"><?php _e( 'Join Our Facebook Group', 'openmic' ); ?></a> 
                </div>
                <div class="my-20">
                    <?php echo get_field('main_text') ?>
                </div>
                <div class="wpb_wrapper">
                    <h2><?php _e( 'FREQUENTLY ASKED QUESTIONS', 'openmic' ); ?></h2>
                    <h3><?php _e( 'If this is an open showcase, can I just come the day of the event and play?', 'openmic' ); ?></h3>
                    <p><?php _e( 'Nope, you absolutely must sign up ahead of time, using the form on this site.', 'openmic' ); ?></p>
                    <h3><?php _e( 'Will I be guaranteed a slot if I sign up?', 'openmic' ); ?></h3>
                    <p><?php _e( 'Right now, we have roughly 8 slots available per event, and on average we have twice that many sign ups each month, so not everyone who signs up will be able to play.', 'openmic' ); ?></p>
                    <h3><?php _e( 'When will I know if I have a slot?', 'openmic' ); ?></h3>
                    <p><?php _e( 'We generally try to send the schedule out approximately 7 or more days before the event.', 'openmic' ); ?></p>
                    <h3><?php _e( 'Is there anything I can do to increase my chances?', 'openmic' ); ?></h3>
                    <p><?php _e( 'If you help out by promoting our events heavily on social media or volunteer to help with the meet up, it will increase the likelihood you’ll be prioritized in scheduling. Speak with an organizer for more specifics on this.', 'openmic' ); ?></p>
                    <h3><?php _e( 'Do I need to play original music?', 'openmic' ); ?></h3>
                    <p><?php _e( 'This is a showcase for artists, if you are a DJ and you don’t make original music, sorry but this event is not for you.', 'openmic' ); ?></p>
                    <h3><?php _e( 'What if I have confirmed my time slot, but something came up and I can’t play?', 'openmic' ); ?></h3>
                    <p><?php _e( 'Let us know as soon as possible. If it’s the day of the show,', 'openmic' ); ?> <strong><?php _e( 'TEXT OR CALL, DO NOT EMAIL!!!', 'openmic' ); ?></strong> <?php _e( 'One of the organizers’ phone numbers will be in the confirmation email for your slot.&nbsp; If you don’t let us know according to this standard, you won’t be able to be scheduled for any future events.&nbsp; We have had a really big problem with people not showing up for their slots so we had to put this policy in place.', 'openmic' ); ?></p>
                    <h3><?php _e( 'Can I bring particular equipment?', 'openmic' ); ?></h3>
                    <p><?php _e( 'The main consideration here is setup time, if your equipment takes more than 10 minutes to set up, it’s probably not appropriate for this event, but it’s also dependent on your ability to set up quickly. Ask an organizer for more specifics on this.', 'openmic' ); ?></p>
                    <h3><?php _e( 'Can I perform using the existing equipment at 343 Labs / Scratch DJ Academy?', 'openmic' ); ?></h3>
                    <p><?php _e( 'Since we accommodate electronic performers of all types and we need setup times to be as quick as possible, we encourage people to bring their own DJ controllers that are easy to set up. We don’t have enough space to leave DJ equipment set up throughout the event, and it’s heavy and takes more than 5 minutes to set up and break down.', 'openmic' ); ?></p>
                    <h3><?php _e( 'How long do I have to set up?', 'openmic' ); ?></h3>
                    <p><?php _e( 'Your set length includes any time you need to set up, so if your set is 20 minutes long and you need 10 minutes to set up, you will only have the remaining 10 minutes to perform. This is the only way we can keep the night moving along, sorry!', 'openmic' ); ?> <strong><?php _e( 'Practice setting up and breaking down at home, and time yourself so you know how long it takes!', 'openmic' ); ?></strong></p>
                    <h3><?php _e( 'How do I reach the organizers?', 'openmic' ); ?></h3>
                    <p><?php _e( 'Email:', 'openmic' ); ?> <a href="mailto:tom@iheartproducers.com"><?php _e( 'tom@iheartproducers.com', 'openmic' ); ?></a></p>
                    <p>&nbsp;</p>
                </div>
            </div>
        </div>
    </section>
    <section id="signup">
        <div class="signup-bg ">
            <div class="signup-overlay pt-16 pb-32">
                <h3 class="section-title   pt-24 text-red-500"><?php _e( 'SIGN UP', 'openmic' ); ?></h3>
                <div class="header-strips-1 bg-red-600"></div>
                <div class="container mx-auto flex md:flex-row flex-col max-w-5xl pb-24">
                    <?php echo get_field('contact_form_shortcode') ?>
                </div>
            </div>
        </div>
    </section>
    <!-- #bio -->
</div>                

<?php get_footer(); ?>