@php
  $terms = get_terms([
    'taxonomy' => 'category',
    'orderby'    => 'order',
	  'order'      => 'ASC',
    ]);
@endphp
@if($terms)
  <div class="categories-output mt-50">
    <div class="container">
      <div class="categories-output__wrapper">
        @foreach($terms as $term)
          @php
            $catHref = get_term_link($term);
            $title = $term->name;
            $text = $term->description;
            $count = $term->count;
            $list = get_posts([
                    'post_type' => 'post',
                     'category' => $term->term_id,
                     'numberposts' => 5,
                     'post_status' => 'publish',
                ]);
          @endphp
          @include('components.cards.item')
        @endforeach
      </div>
    </div>
  </div>
@endif
