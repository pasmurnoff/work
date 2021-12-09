<?php
function send_mail()
{
    $subject = 'Вопрос с сайта support.vexel.com ';
    $headers = array('Content-Type: text/html; charset=UTF-8');
    $to = 'mail@vexel.com';
    $html = '';

    foreach ($_POST as $key => $value) {
        if (!empty($_POST[$key]))
            if (is_array($value)) {
                $html .= '<span>' . $key . '</span>' . ': ';
                foreach ($value as $item) {
                    if ($item == end($value)) {
                        $html .= '<span>' . $item . '</span><br>';
                    } else {
                        $html .= '<span>' . $item . '</span>, ';
                    }
                }
            } else {
                $html .= '<span>' . $key . '</span>' . ': ' . '<span>' . $value . '</span><br>';
            }
    }

    wp_mail($to, $subject, $html, $headers);
    die();
}

function htm_mail_name($email)
{
    return 'Support Vexel';
}

add_filter('wp_mail_from_name', 'htm_mail_name');


function htm_mail_from($email)
{
    return 'mail@vexel.com';
}

add_filter('wp_mail_from', 'htm_mail_from');

add_action("wp_ajax_send_mail", "send_mail");
add_action("wp_ajax_nopriv_send_mail", "send_mail");

