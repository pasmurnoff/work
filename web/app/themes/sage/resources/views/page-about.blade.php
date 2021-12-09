{{--
Template Name: О нас
--}}

@extends('layouts.app')
@section('content')
  <div class="content my-70">
    <div class="container">
      <div class="about-section">
        <h1 class="title title_h1 text_dark mb-30 about-section__title">{!! get_the_title() !!}</h1>
        <div class="about-section__content">
          {!! apply_filters('the_content', get_the_content()) !!}
        </div>
      </div>
    </div>
  </div>
@endsection
