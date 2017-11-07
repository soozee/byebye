<div class="top-bar">
  <a class="brand" href="{{ home_url('/') }}">{{ get_bloginfo('name', 'display') }}</a>
      <div class="top-bar-left">
      	@if (has_nav_menu('primary_navigation'))
	        {!! wp_nav_menu([
	        	'theme_location' => 'primary_navigation',
	          'menu_class' => 'menu'
	        ]) !!}
	      @endif
      </div>
      <div class="top-bar-right">
        <ul class="menu">
          <li><a href="#"><i class="phone"></i></a></li>
          <li><a href="#"><i class="fa-commenting"></i></a></li>
          <li><a href="#"><i class="fa-id-badge"></i></a></li>
          <li><a href="#"><i class="fa-facebook-square"></i></a></li>
        </ul>
      </div>
    </div>
