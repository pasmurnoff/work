<form method="post" class="form pt-30 {{ $class or '' }}">
  <div class="form__wrapper">
    @include('components.form.input', ['name' => 'Имя', 'required' => '', 'placeholder' => 'Имя', 'type' => 'text'])
    @include('components.form.input', ['name' => 'Email', 'required' => '', 'placeholder' => 'Email', 'type' => 'email'])
    @include('components.form.input', ['name' => 'Тема', 'required' => '', 'placeholder' => 'Тема вопроса', 'type' => 'text'])
    @include('components.form.textarea', ['name' => 'Вопрос', 'placeholder' => 'Задайте ваш вопрос'])
    <button type="submit" class="button button_theme button_large px-30 text text_white text_middle">Задать вопрос</button>
  </div>
</form>
