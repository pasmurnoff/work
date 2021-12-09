@include('components.watched.setcookie')
<!doctype html>
<html {!! get_language_attributes() !!}>
@include('components.head.wrap')
<body @php body_class() @endphp>

<div class="body-wrap">
  @php do_action('get_header') @endphp
  {{-- @include('components.attention.wrap') --}}
  @include('components.header.wrap')
  <div class="overlay"></div>
  @include('components.sidebar.wrap', ['class' => 'sidebar_aside'])

  <div class="wrapper">
    @yield('content')
  </div>

  @php do_action('get_footer') @endphp
  @include('components.footer.wrap')
</div>

@php wp_footer() @endphp
</body>
</html>
