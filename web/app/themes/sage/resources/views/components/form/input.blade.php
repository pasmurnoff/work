<div class="form__item mb-20">
  <input class="input"
         id="{{ $id or '' }}"
         placeholder="{{ $placeholder or '' }}"
         type="{{ $type or '' }}"
         @if(isset($required)) required @endif
         name="{{ $name or '' }}">
</div>
