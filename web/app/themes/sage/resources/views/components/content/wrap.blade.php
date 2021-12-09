<div class="content my-60">
  <div class="container">
    <div class="content__wrapper">
      {{--
      <div class="content__item left">
        @include('components.sidebar.wrap', ['class' => 'sidebar_content'])
      </div>
      --}}
      <div class="content__item right">
        {!! $content or '' !!}
      </div>
    </div>
  </div>
</div>
