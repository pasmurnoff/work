<footer class="footer py-50">
  <div class="container">
    <div class="footer__wrapper">

      {{--
      @if(!is_page('login'))
        <div class="footer__item">
          <div class="v-card pa-30 mb-70">
            @component('components.banner.wrap', ['btnTitle' => 'Задать вопрос', 'href' => '/zadat-vopros/'])
              @slot('title')
                Нужна помощь?
              @endslot
              @slot('text')
                Свяжитесь с нами и мы ответим на Все ваши вопросы и найдем решение
              @endslot
            @endcomponent
          </div>
        </div>
      @endif
      --}}

      <div class="footer__item mb-50">
        {!! bem_menu('footer_navigation', 'footer-menu') !!}
      </div>
      @php
        /*
        <div class="footer__item mb-50">
          @include('components.socials.wrap', ['socials_footer'])
        </div>
        */
      @endphp
      <div class="footer__item mb-50">
        <div class="privacy text text_light text_center">
          © {{ date('Y') }} Служба поддержки «Vexel»
        </div>
      </div>
    </div>
  </div>
</footer>
@if (is_ssl())
  @include('components.counters.wrap')
@endif
