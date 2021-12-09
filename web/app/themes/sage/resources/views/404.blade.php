@extends('layouts.app')

@section('content')
  @if (!have_posts())
    <div class="container page-404 mt-50">
      <h1 class="title title_404 text_center mb-20">404</h1>
      <p class="text text_large mb-30 text_center">К сожалению страница не найдена</p>
      <div class="text mb-30 text_center">Попробуйте перейти на главную страницу или воспользоваться поиском</div>
      <a class="button button_theme px-20 py-10 text text_medium button_center" href="{{ get_home_url() }}"><i class="fas fa-arrow-alt-circle-left mr-5"></i>Вернуться на главную</a>
      <div class="header__search my-50">
        @include('components.search-form.wrap')
        <ul class="search__list"></ul>
      </div>
    </div>
  @endif
@endsection
