@extends('layouts.app')

@section('content')
  @component('components.content.wrap')
    @slot('content')
      <h1 class="title title_h1 text_dark mb-30">{!! App::title() !!}</h1>
      <div class="v-card">
        @while(have_posts())
          @php the_post() @endphp
          <div class="v-card__item">
            <a href="{{ get_permalink() }}">
              <h2
                class="v-card__item-title text text_middle mb-15 text_dark">{!! get_the_title() !!}@include('icon::arrow')</h2>
              <p class="text text_normal">@php echo wordCount(get_the_excerpt(), 40) @endphp</p>
            </a>
          </div>
        @endwhile
      </div>
      @include('components.pagination.wrap')
    @endslot
  @endcomponent
@endsection
