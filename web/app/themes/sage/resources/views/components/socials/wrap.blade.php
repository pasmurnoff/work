@php
  $facebook = get_field('facebook', get_option( 'page_on_front' ));
  $youtube = get_field('youtube', get_option( 'page_on_front' ));
  $telegram = get_field('telegram', get_option( 'page_on_front' ));
  $vk = get_field('vk', get_option( 'page_on_front' ));
  $ok = get_field('ok', get_option( 'page_on_front' ));
  $instagram = get_field('instagram', get_option( 'page_on_front' ));
  $twitter = get_field('twitter', get_option( 'page_on_front' ));
  $mail = get_field('mail', get_option( 'page_on_front' ));
@endphp

<ul class="socials {{ $class or '' }}">
  @if($facebook)
    @include('components.socials.item', ['class' => 'facebook', 'title' => 'Facebook', 'faClass' => 'fab fa-facebook-f', 'href' => $facebook])
  @endif

  @if($youtube)
    @include('components.socials.item', ['class' => 'youtube', 'title' => 'Youtube', 'faClass' => 'fab fa-youtube', 'href' => $youtube])
  @endif


  @if($telegram)
    @include('components.socials.item', ['class' => 'telegram', 'title' => 'Telegram', 'faClass' => 'fab fa-telegram-plane', 'href' => $telegram])
  @endif

  @if($vk)
    @include('components.socials.item', ['class' => 'vk', 'title' => 'Vkontakte', 'faClass' => 'fab fa-vk', 'href' => $vk])
  @endif

  @if($ok)
    @include('components.socials.item', ['class' => 'ok', 'title' => 'Odnoklassniki', 'faClass' => 'fab fa-odnoklassniki', 'href' => $ok])
  @endif

  @if($instagram)
    @include('components.socials.item', ['class' => 'instagram', 'title' => 'Instagram', 'faClass' => 'fab fa-instagram', 'href' => $instagram])
  @endif

  @if($twitter)
    @include('components.socials.item', ['class' => 'twitter', 'title' => 'Twitter', 'faClass' => 'fab fa-twitter', 'href' => $twitter])
  @endif

  @if($mail)
    @include('components.socials.item', ['class' => 'mail', 'title' => 'Email', 'faClass' => 'far fa-envelope', 'href' => 'mailto:' . $mail])
  @endif
</ul>
