@php
if (is_single()) {
  $post_id = get_the_ID();
  if (isset($_COOKIE['watched'])) {
    $watchedProducts = [];
    foreach ($_COOKIE['watched'] as $watchedId) {
      array_push($watchedProducts, $watchedId);
      if (count($watchedProducts) == 20 && (!in_array($post_id, $watchedProducts))) {
        setcookie('watched[' . $watchedProducts[0] . ']', $watchedProducts[0], time() - 31556926, '/');
      }
    }
  }
  setcookie('watched[' . $post_id . ']', $post_id, time() + 31556926, '/');
}
@endphp
