<?php
/* Template Name: PostComents */

?>

<div class="comments-wrapper">
    <div class="comments" id="comments">
        <div class="comments-header">

            <h4 class="comment-reply-title">

                <?php
                if (!have_comments()) {
                    echo "<br>";
                } else {
                    echo "Comments " . get_comments_number();
                }
                ?>

            </h4>

            <div class="comments-inner">

                <?php
                wp_list_comments(
                    array(
                        'avatar_size' => 70,
                        'style' => 'div',
                    )
                );
                ?>

            </div> <!-- .comments-inner -->

        </div> <!-- .comments-header -->

        <?php
        if (comments_open()) {
            comment_form(
                array(
                    'class_form' => '',
                    'title_reply_before' => '<h4 id="reply-title" class="comment-reply-title">',
                    'title_reply_after' => '</h4>',
                )
            );
        }
        ?>

    </div>
</div>