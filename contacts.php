<?php
/* Template Name: Contacts */

get_header();
?>

<section class="contacts container py-5">
    <h1>Contacts</h1>
    <p>Our customer service professionals are working 24/7 to answer your questions and help with your inquiries. Don't wait - contact us meow!
    </p>
</section>
<section class="container d-flex justify-content-end p-5">
    <div class="location d-flex flex-column text-end p-5">
        <h4>Location</h4>
        <a href="google.com/maps/location">9 Lifes, Catnipfield,</a>
        <a href="google.com/maps/location">Rabbits Hole</a>
    </div>
    <div class="manager d-flex flex-column text-end p-5">
        <h4>Manager</h4>
        <a href="tel:+56393047" class="call">+56 393 047</a>
        <a href="mailto:info@company.com">info@cats.com</a>
    </div>
    <div class="ceo d-flex flex-column text-end p-5">
        <h4>CEO</h4>
        <a href="tel:+56393047" class="call">+56 393 047</a>
        <a href="mailto:info@company.com">info@cats.com</a>
    </div>
</section>

<div class="text-start img-wrapper my-5">
    <img src="<?php echo get_template_directory_uri(); ?>\assets\images\photos\typingPaw-aleksandr-cvetanov.jpg" alt="bottom image" class="img-fluid py-5">
</div>


<!-- CONTACT FORM -->

<div class="contact-form container">
    <h2>Write Us Here</h2>
    <!-- paima postus is wp page -->
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div id="content" role="main">
                <!-- paima forma (post) is pg BE postu -->
                <?php the_content(); ?>

            </div><!-- #content -->

        <?php endwhile;
    else : ?>
        <p>
            <?php
            _e('Contact form is not available at the moment. Please, try again later');
            ?>
        </p>
    <?php endif; ?>
</div>


<?php get_footer(); ?>