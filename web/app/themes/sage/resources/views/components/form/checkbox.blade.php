<div class="form__item mb-20 {{ $class or '' }}">
  <label class="checkbox">
    <span class="checkbox__content">
      <input name="{{ $name or '' }}" type="checkbox" id="{{ $id or '' }}" value="{{ $value or '' }}"/>
      <span class="checkbox__box"></span>
    </span>
    <span class="checkbox__text text {{ $textClass or '' }}">{{ $text or '' }}</span>
  </label>
</div>
