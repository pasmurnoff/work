<?php

namespace App\Controllers;

use Sober\Controller\Controller;

class App extends Controller
{
    public static function title()
    {
        if (is_home()) {
            if ($home = get_option('page_for_posts', true)) {
                return get_the_title($home);
            }
            return __('Latest Posts', 'sage');
        }
        if (is_archive()) {
            return get_the_archive_title();
        }
        if (is_search()) {
            return sprintf(__('Результаты поиска по: %s', 'sage'), get_search_query());
        }
        if (is_404()) {
            return __('Not Found', 'sage');
        }
        return get_the_title();
    }

    public static function getImageUrlFromPost($post, $size = '')
    {
        global $post, $posts;

        if (has_post_thumbnail($post)) {
            return get_the_post_thumbnail_url($post, $size);
        } else {
            $first_img = '';
            ob_start();
            ob_end_clean();
            $output = preg_match_all('/<img[^>]+src="([^">]+)"/', $post->post_content, $matches);
            $first_img = isset($matches[1][0]) ? $matches[1][0] : '';

            if (empty($first_img)) {
                $first_img = get_theme_file_uri() . '/resources/assets/images/thumbnails/thumbnail.jpg';
            }

            return $first_img;
        }
    }
}
