<!-- POST CONTENT - postu paragrafai -->

<div class="container post-content mb-5">

    <img src=" <?php
                the_post_thumbnail_url('thumbnail');
                ?>" class="" alt="">

    <!-- <img src="<?php // echo get_template_directory_uri(); 
                    ?>\assets\images\photos\lickingPaw-pixabay.jpg" alt="cat looking back" class="card-img-top img-fluid" alt="post pic"> -->
    <div class="container">
        <h4 class=""><?php the_title(); ?></h4>
        <p>
            <?php the_content(); ?>
        </p>

        <p><?php the_date(); ?></p>
    </div>

</div>

<!-- galima atkomentuoti, jei norima uzdeti tagus po postais  -->
<?php
//the_tags('<span class="tag pe-5"><i class="fa-solid fa-user-tag"></i>', '</span><span class="tag pe-5"><i class="fa-solid fa-user-tag"></i>', '</span>');
?>


<!-- COMMENTS ========================================== -->

<div class="wrap py-5">

<div class="container comments">
    
    <p class="comment"><a href="#comments"><i class="fa-solid fa-comment-lines"></i> <?php comments_number(); ?> </a></p>
    <p>
        <?php comments_template(); ?>
    </p>

</div><!--container -->

</div><!-- wrap-->

<?php get_footer(); ?>