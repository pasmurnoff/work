{{--
Template Name: Задать вопрос
--}}

@extends('layouts.app')

@section('content')
  <div class="content my-70">
    <div class="container">
      <div class="v-card v-card_spacing">
        <h1 class="title title_h1 text_dark mb-30">{!! get_the_title() !!}</h1>
        <p class="text text_regular text_normal">Задайте свой вопрос нашей службе поддержки и мы свяжемся с вами в
          ближайшее время</p>
        @include('components.form.wrap')
      </div>
    </div>
  </div>
@endsection
