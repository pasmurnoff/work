<!doctype html>
<html class="html-login" {!! get_language_attributes() !!}>
@include('components.head.wrap')
<body @php body_class() @endphp>

<div class="body-wrap login-body">
  @php do_action('get_header') @endphp
  <div class="wrapper">
    @yield('content')
  </div>

  @php do_action('get_footer') @endphp
</div>
@php wp_footer() @endphp
</body>
</html>
