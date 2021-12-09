<?php
add_filter('excerpt_more', function ($more) {
    global $post;
    return '';
});
