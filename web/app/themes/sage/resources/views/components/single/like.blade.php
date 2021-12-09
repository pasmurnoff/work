@php
  $count = (int)get_post_meta(get_the_ID(),'usersLikes', true);
@endphp
@if($count)
  <div class="like-count">
    @include('icon::like') <span class="count text text_light">{{ $count }}</span>
  </div>
@endif
