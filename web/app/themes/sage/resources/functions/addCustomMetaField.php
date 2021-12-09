<?php
add_action('add_meta_boxes', 'myplugin_add_custom_box');
function myplugin_add_custom_box()
{
    $screens = ['post'];
    add_meta_box('myplugin_sectionid', 'Рейтинг статьи', 'myplugin_meta_box_callback', $screens);
}


function myplugin_meta_box_callback($post, $meta)
{
    $screens = $meta['args'];

    wp_nonce_field(plugin_basename(__FILE__), 'myplugin_noncename');

    $likes = (int)get_post_meta($post->ID, 'usersLikes', true);
    $dislikes = (int)get_post_meta($post->ID, 'usersDislikes', true);

    echo '<label for="myplugin_like_field">Статья показалась полезной</label> ';
    echo '<div id="myplugin_like_field">' . $likes . '</div>';
    echo '<label for="myplugin_dislike_field">Статья не показалась полезной</label> ';
    echo '<div id="myplugin_dislike_field">' . $dislikes . '</div>';
}
