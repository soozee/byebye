@if (!is_front_page())
    <header class="sticky-shrinknav-header">
  <h1 class="sticky-shrinknav-header-title"><a href="/">{{ bloginfo('name') }}</a></h1>
  {!! wp_nav_menu([
    'theme_location' => 'primary_navigation',
    'menu_class' => 'menu align-center sticky-shrinknav-menu',
    'container' => 'ul',
  ]) !!}
</header>
@endif

