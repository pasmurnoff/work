<header class="header">
  <div class="header__top">
    <div class="container">
      <div class="header__top-wrapper">
        <div class="header__top-left">
          @include('components.logo.wrap')
        </div>
        <div class="header__top-right">
          {!! bem_menu('primary_navigation', 'header-menu') !!}
          <div class="ml-30 header__burger toggleElement" data-body="body-wrap">
            <div class="burger"></div>
          </div>
        </div>
      </div>
    </div>
  </div>

  @if (!is_front_page() && function_exists('yoast_breadcrumb'))
    <div class="breadcrumbs-container">
      <div class="container">
        {!! yoast_breadcrumb('<p class="breadcrumbs">', '</p>') !!}
      </div>
    </div>
    @include('components.header.bottom', ['title' => ''])
  @else
    @include('components.header.bottom', [
        'title' => 'Как мы можем помочь вам?',
        'class' => 'pb-50',
        'wrap_class' => 'mt-50 pt-30'
    ])
  @endif

</header>
