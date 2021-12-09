<div class="banner {{ $class or '' }}">
  <div class="banner__wrapper py-10">
    <div class="banner__item">
      <h3 class="title title_h3 mb-20 text_dark">{!! $title or '' !!}</h3>
      <p class="banner__text text text_regular text_normal">{!! $text or '' !!}</p>
    </div>
    <div class="banner__item">
      <a class="button button_large button_theme text text_regular px-30"
         href="{{ $href or '' }}">{{ $btnTitle or '' }}</a>
    </div>
  </div>
</div>
