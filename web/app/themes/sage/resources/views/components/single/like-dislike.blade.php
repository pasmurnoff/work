@if(!isset($_COOKIE['PostMark-' . get_the_ID()]))
  <div class="like pt-50 mt-50">
    <p class="text text_normal">Это помогло устранить проблему?</p>
    <div class="marks">
      <div class="mark mark_like" data-post="{{ get_the_ID() }}" data-like="like">@include('icon::like')</div>
      <div class="mark mark_dislike" data-post="{{ get_the_ID() }}"
           data-like="dislike">@include('icon::dislike')</div>
    </div>
  </div>
@endif
