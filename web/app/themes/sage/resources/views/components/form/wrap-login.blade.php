<form method="post" name="login-form" id="login-form" action="{{ esc_url( site_url( 'wp-login.php', 'login_post' ) ) }}"
      class="form pt-30 form-login login">
  <div class="form__wrapper">
    @include('components.form.input',
        [
            'class' => 'login-username',
            'name' => 'log',
            'required' => '',
            'placeholder' => 'Имя пользователя',
            'id' => 'user_login'
            ])

    @include('components.form.input',
        [
            'class' => 'login-password',
            'name' => 'pwd',
            'type' =>'password',
            'id' => 'user_pass',
            'required' => '',
            'placeholder' => 'Введите пароль'
            ])
    @include('components.form.checkbox',
        [
            'name' => 'rememberme',
            'id' => 'rememberme',
            'text' => 'Запомнить меня',
            'value' => 'forever',
            'textClass' => 'text_normal text_regular ml-15'
]
        )

    <div class="form__bottom">
      <button type="submit"
              class="button button_theme button_large px-30 mb-10 text text_white text_middle"
              name="wp-submit"
              value="Войти"
              id="wp-submit">Войти
      </button>
    </div>
  </div>
</form>
