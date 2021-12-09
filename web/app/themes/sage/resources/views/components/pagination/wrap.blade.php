@php
  $icon_left  = \App\template('icon::pagination.left');
  $icon_right = \App\template('icon::pagination.right');
  $paginations = paginate_links([
    'next_text' => __('<div class="btn-next">' . $icon_right . '</div>'),
    'prev_text' => __('<div class="btn-prev">' . $icon_left . '</div>'),
    'type'      => 'array',
    'end_size'  => 1,
    'mid_size'  => 1,
    'prev_next' => true,
  ]);
@endphp
@if($paginations)
  <div class="pagination">
    <div class="pagination__wrap">
      @foreach($paginations as $paginate)
        <div class="pagination__item {{ strpos($paginate, 'dots') ? 'pagination__item-dots' : 'pagination__item-number' }} {{ strpos($paginate, 'current') ? 'pagination__item-active' : '' }}">{!! $paginate !!}</div>
      @endforeach
    </div>
  </div>
@endif
