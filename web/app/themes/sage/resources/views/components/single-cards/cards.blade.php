@php
  $posts_chunk = array_chunk($posts, 5);
@endphp

<div class="single-cards__wrap">
  @foreach($posts_chunk as $posts)
    <div class="single-cards__item">
      @foreach($posts as $post)
        <div class="single-cards__item-inner">
          <a href="{{ get_permalink($post->ID) }}" class="single-cards__item-link">@include('icon::list') {!! $post->post_title !!}</a>
        </div>
      @endforeach
    </div>
  @endforeach
</div>
