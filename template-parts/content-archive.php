<div class="post">
    <div class="media">


        <div class="container blog-posts">
            <img src=" <?php
                        the_post_thumbnail_url('thumbnail');
                        ?>" class="img-fluid" alt="">
            <div class="post-text">
                <h4 class="blog-post-title">
                    <a href=" 
                <?php the_permalink(); ?> ">
                        <?php the_title(); ?>
                    </a>
                </h4>
                <p class="">
                    <?php
                    the_excerpt();
                    ?>
                </p>
                <p class="">
                    <?php
                    the_date();
                    ?>
                </p>
                <a href=" <?php
                            the_permalink();
                            ?> " class="more-link">
                    Read more &rarr;</a>
            </div>

        </div>
    </div>


</div>
</div>