<?php
add_action('wp_ajax_like_dislike', 'like_dislike');
add_action('wp_ajax_nopriv_like_dislike', 'like_dislike');

function like_dislike()
{
    $postId = $_POST['postId'];
    $mark = $_POST['mark'];
    $likeMeta = 'usersLikes';
    $dislikeMeta = 'usersDislikes';

    if ($mark === 'like') {
        $count = (int)get_post_meta($postId, $likeMeta, true);
        if (!update_post_meta($postId, $likeMeta, ($count + 1))) {
            add_post_meta($postId, $likeMeta, 1, true);
        }
    } else if ($mark === 'dislike') {
        $count = (int)get_post_meta($postId, $dislikeMeta, true);

        if (!update_post_meta($postId, $dislikeMeta, ($count + 1))) {
            add_post_meta($postId, $dislikeMeta, 1, true);
        }
    }

    ?>
    <div class="thank text_normal">
        Спасибо за ответ! Ваше мнение очень важно для нас.
    </div>
    <?php
    die();
}

