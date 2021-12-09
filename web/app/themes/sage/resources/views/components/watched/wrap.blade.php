@if(!empty($_COOKIE['watched']))
  @php
    $watched = $_COOKIE['watched'];
    unset($watched[get_the_ID()]);
    if ($watched) {
      $posts = get_posts( [
          'numberposts' => 20,
          'include'     => $watched,
          'exclude'     => get_the_ID(),
      ]);
    }
  @endphp
  @if(!empty($posts))
    <div class="single-cards">
      <div class="single-cards__title">
          <div class="single-cards__title-inner">Вы смотрели</div>
      </div>
      @include('components.single-cards.cards', ['posts' => $posts])
    </div>
  @endif
@endif
