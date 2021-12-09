<?php
// Передаем переменную в js
function js_variables()
{
    $js_params = [
        'ajax_url' => admin_url('admin-ajax.php'),
    ];
    echo
    '<script type="text/javascript">window.wp_data = ',
    json_encode($js_params),
    ';</script>';
}

add_action('wp_head', 'js_variables');
