<form role="search" method="get" id="searchform" class="search-form"
      action="<?php echo esc_url(home_url('/')); ?>">
  <label class="screen-reader-text" for="s"><?php _x('Search for:', 'label'); ?></label>
  <input class="search-form__input" type="text" value="<?php echo get_search_query(); ?>"
         placeholder="Задайте ваш вопрос"
         data-result="search__list"
         name="s" id="s"
         autocomplete="off"
  />
  <button class="search-form__submit" type="submit" id="searchsubmit"
          value="<?php echo esc_attr_x('Задайте ваш вопрос', 'submit button'); ?>">@include('icon::search')</button>
</form>
