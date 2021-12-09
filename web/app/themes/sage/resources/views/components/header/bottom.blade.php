<div class="header__bottom {{ $class or '' }}">
  <div class="container">
    <div class="header__bottom-wrapper {{ $wrap_class or '' }}">
      @if(!empty($title))
        <div class="title text_bold text_dark title_h1 text_center">{!! $title !!}</div>
      @endif
      <div class="my-50 header__search">
        @include('components.search-form.wrap')
        <ul class="search__list"></ul>
      </div>
    </div>
  </div>
</div>
