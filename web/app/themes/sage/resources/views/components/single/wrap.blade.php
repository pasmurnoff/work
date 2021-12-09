@php
  $likeCount= (int)get_post_meta(get_the_ID(),'usersLikes', true);
@endphp

<div class="single">
  <div class="single-wrapper">
    <div class="v-card v-card_spacing">
      <div class="single__title-wrap mb-30 {{ $likeCount ? 'single__title-likes' : '' }}">
        <h1 class="title title_h1 text_dark single__title">{!! get_the_title() !!}</h1>
        @include('components.single.like')
      </div>
 {{--     <div class="single__img my-30">
        <img src="{{ App::getImageUrlFromPost('', 'large') }}" alt="">
      </div>--}}
      <div class="single__content">
        @php the_content() @endphp
      </div>
      @include('components.single.like-dislike')
    </div>
  </div>
</div>

@include('components.single-cards.wrap')
@include('components.watched.wrap')
