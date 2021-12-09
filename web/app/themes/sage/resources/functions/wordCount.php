<?php
function wordCount($string, $limit)
{

    $words = explode(' ', $string);
    if (count($words) > $limit) {
        return implode(' ', array_slice($words, 0, $limit)) . '...';
    } else {
        return $string;
    }

}

