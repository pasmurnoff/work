@php
  $category = get_the_category();
  if ($category) {
    $this_post_id = get_the_ID();
    $posts = get_posts( [
      'numberposts' => 20,
      'category'    => $category[0]->cat_ID,
      'exclude'     => $this_post_id,
    ]);
    $cat_link = get_category_link( $category[0]->cat_ID );
  }
@endphp
@if($posts)
  <div class="single-cards">
    <div class="single-cards__title">
      <div class="single-cards__title-item">
        <a href="{{ $cat_link }}" class="single-cards__title-inner">{{ $category[0]->cat_name }}</a>
      </div>
    </div>

    @include('components.single-cards.cards', ['posts' => $posts])

    <a href="{{ $cat_link }}" class="single-cards__more">Смотреть все @include('icon::arrow')</a>
  </div>
@endif
