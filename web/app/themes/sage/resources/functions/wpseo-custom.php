<?php
if (!function_exists('prefix_yoast_get_some_posts')) :

    function prefix_yoast_get_some_posts()
    {
        wpseo_register_var_replacement('%%meta_with_posts%%', 'get_some_posts', 'advanced', 'Добавить заголовки постов');
    }

    add_action('wpseo_register_extra_replacements', 'prefix_yoast_get_some_posts');
endif;

if (!function_exists('get_some_posts')) :

    function get_some_posts()
    {
        $term = get_queried_object();
        $posts = get_posts([
            'post_type' => 'post',
            'post_status' => 'publish',
            'category' => $term->term_id,
            'numberposts' => 2
        ]);
        $string = '';
        foreach ($posts as $post) {
            if ($post == end($posts)) {
                $string .= $post->post_title;
            } else {
                $string .= $post->post_title . ' ';
            }
        }
        return $string;
    }
endif;
