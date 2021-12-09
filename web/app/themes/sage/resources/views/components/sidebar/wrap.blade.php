<div class="sidebar {{ $class or '' }}">
  <div class="sidebar__wrapper">
    <div class="sidebar__item mb-15 pb-15">
      @include('components.search-form.wrap', ['class' => 'sidebar-search'])
    </div>
    <div class="sidebar__item sidebar__item-menu mb-15 pb-15">
      {!! bem_menu('primary_navigation', 'sidebar-menu') !!}
    </div>
    <div class="sidebar__item pb-15">
      @include('components.sidebar.categories')
    </div>

    <div class="sidebar__item py-15 sidebar__button">
      <a class="px-15 text button button_light button_middle button_block" href="https://thefiniko.com/registration/">Регистрация</a>
    </div>
  </div>

</div>
