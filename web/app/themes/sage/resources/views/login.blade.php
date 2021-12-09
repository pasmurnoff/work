{{--
Template Name: Страница авторизации
--}}

@extends('layouts.login')
@section('content')
  <div class="content py-50">
    <div class="container">
      @include('components.logo.wrap', ['logoClass' => 'logo-login'])
      <div class="v-card_login">
        @if(isset($_GET['login']) && $_GET['login'] === 'failed')
          <div class="v-card mb-30">
            <p class="text text__error text_sm text_center pa-20">Неправильное имя пользователя или пароль, попробуйте
              еще
              раз</p>
          </div>
        @endif
        <div class="v-card v-card_spacing">
          <h1 class="title title_h1 text_dark mb-30">Авторизация</h1>
          <p class="text text_regular text_normal">Войдите в личный кабинет</p>
          @include('components.form.wrap-login')
        </div>
      </div>
    </div>
  </div>
@endsection
