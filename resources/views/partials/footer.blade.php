@if (!is_front_page())
<footer>
    <div class="grid-x grid-margin-x">
        <div class="large-6 cell">{!! wp_nav_menu(['theme_location' => 'footer_menu']) !!}</div>
        <div class="auto cell footer-right">{!! do_shortcode('[social-icons]') !!}</div>
    </div>
    <p class="copyright"><i class="fa fa-copyright fa-1x" aria-hidden="true"></i> Copyright {{ bloginfo('name') }} {{ date('Y')}}</p>
</footer>
@endif
