@extends('layouts.app')

@section('content')
  @while(have_posts()) @php the_post() @endphp
    <div class="container my-60">
      <div class="single">
        <div class="single-wrapper">
          <div class="v-card v-card_spacing">

            <div class="single__title-wrap mb-30">
              <h1 class="title title_h1 text_dark single__title">{!! get_the_title() !!}</h1>
            </div>

            <div class="single__content">
              @php the_content() @endphp
            </div>

          </div>
        </div>
      </div>
    </div>
  @endwhile
@endsection
