<?php
/* login url */
// add_filter('login_url', 'my_login_linkchanger');
// function my_login_linkchanger($link)
// {
//     return home_url('/login');
// }

/* Redirect when login failed */
// add_action('wp_login_failed', 'my_front_end_login_fail');
// function my_front_end_login_fail($username)
// {
//     $referrer = $_SERVER['HTTP_REFERER'];

//     if (!empty($referrer) && !strstr($referrer, 'wp-login') && !strstr($referrer, 'wp-admin')) {
//         wp_redirect(add_query_arg('login', 'failed', $referrer));  // редиркетим и добавим параметр запроса ?login=failed
//         exit;
//     }
// }
