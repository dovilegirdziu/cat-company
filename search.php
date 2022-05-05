<?php
get_header();
?>

<div class="container-fluid">
    <?php
    if (have_posts()) {

        while (have_posts()) {
            the_post();

            get_template_part('template-parts/content', 'archive');
        }
    }
    ?>

</div>

<!-- search form is inside a footer -->

<?php get_footer(); ?>