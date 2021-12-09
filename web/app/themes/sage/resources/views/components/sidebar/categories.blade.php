@php
  $terms = get_terms([
    'taxonomy' => 'category',
    'orderby' => 'order',
	  'order' => 'ASC',
    'hide_empty' => false,
    ]);
@endphp
@if($terms)
  <div class="categories">
    @foreach($terms as $term)
      @php
        $catHref = get_term_link($term);
        $title = $term->name;
        $text = $term->description;
        $count = $term->count;
        $list = get_posts([
                'post_type' => 'post',
                'category' => $term->term_id,
                'numberposts' => '-1',
            ]);
        global $post;
      @endphp

      @php
        $currentTerm = get_queried_object_id();
        $termId = $term->term_id;
        $postTermId = '';
        if(is_single()) {
            $postId = get_the_ID();
            $postTermId = get_the_category($postId)[0]->term_id;
            }
      @endphp
      <div class="categories__item {{ $currentTerm === $termId || $termId === $postTermId ? 'open' : '' }}">
        <h3 class="categories__title text text_regular {{ $currentTerm === $termId ? 'active' : '' }}"><a href="{{ get_term_link($term) }}">{!! $title or '' !!}</a></h3>
        <ul class="categories__list">
          @foreach($list as $post)
            @php
              setup_postdata($post);
              $slug = get_post()->post_name;
            @endphp
            <li class="categories__list-item {{ is_single($slug) ? 'active' : ''  }}">
              <a href="{{ get_permalink() }}">{!! get_the_title() !!}</a>
            </li>
          @endforeach
          @php wp_reset_postdata() @endphp
        </ul>
      </div>
    @endforeach
  </div>
@endif
