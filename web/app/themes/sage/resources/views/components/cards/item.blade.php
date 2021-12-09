<div class="card">
  <h2 class="card__title text text_large mb-15">
    <a href="{{$catHref or ''}}">{!! $title or '' !!}</a>
  </h2>
  <p class="text card__text mb-15">
    {!! $text or '' !!}
  </p>
  @php global $post; @endphp
  <ul class="card__list mb-15">
    @foreach($list as $post)
      @php setup_postdata($post) @endphp
      <li class="card__item mb-10">
        <a class="card__item-link" href="{{ get_permalink() }}">@include('icon::list'){!! get_the_title() !!}</a>
      </li>
    @endforeach
    @php wp_reset_postdata(); @endphp
  </ul>
  @if($count > 3)
    <a class="card__more" href="{{$catHref or ''}}">Смотреть все@include('icon::arrow')</a>
  @endif
</div>
