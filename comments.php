<!-- sidebar -->
<hr>



<div class="container-fluid">
    <div class="row">
        <div class="col ">
    <div class="comments-wrapper">
        <div class="comments" id="comments">
            <div class="comments-header">
                <h2 class="comment-reply-title mt-5 mb-5">
                    <?php
                    if (!have_comments()) {
                        echo "Leave a Reply";
                    } else {
                        echo get_comments_number() . " Comments";
                    }
                    ?>
                </h2>



            </div>
            <div class="comments-inner">
                <?php
                wp_list_comments(
                    array(
                        'avatar-size' => 100,
                        'style' => 'div'
                    )
                );
                ?>
            </div>
            <hr class="mt-5">
            <div class="container com">

                <?php

                if (comments_open()) {
                    comment_form(
                        array(
                            'class_form' => '',
                            'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title"',
                            'title_reply_after' => '</h2>'
                        )
                    );
                }


                ?>

            </div>

            <hr>
        </div>
    </div>
</div>
</div>
</div>