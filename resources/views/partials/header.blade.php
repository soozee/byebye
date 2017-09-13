<header class="banner">
  <div class="container">

    <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
    <nav class="nav-primary">
      
    </nav>
  </div>
</header>


<div class="top-bar">
      <div class="top-bar-left">
      	@if (has_nav_menu('primary_navigation'))
	        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav']) !!}
	      @endif
      </div>
      <div class="top-bar-right">
        <ul class="menu">
          <li><a href="#">Three</a></li>
          <li><a href="#">Four</a></li>
          <li><a href="#">Five</a></li>
          <li><a href="#">Six</a></li>
        </ul>
      </div>
    </div>