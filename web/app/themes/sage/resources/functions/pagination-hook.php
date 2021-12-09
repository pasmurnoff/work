<?php
function remove_page_from_query_string($query_string)
{
    if (!empty($query_string['name']) && $query_string['name'] == 'page' && isset($query_string['page'])) {
        unset($query_string['name']);
        $query_string['paged'] = $query_string['page'];
    }
    return $query_string;
}
add_filter('request', 'remove_page_from_query_string');
