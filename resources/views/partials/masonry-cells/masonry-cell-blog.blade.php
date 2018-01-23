<div class="grid">
<figure class="effect-ruby">
    @php($mostRecentPost = get_posts(['numberposts' => 1, 'post_type' => 'post']))
    @foreach ($mostRecentPost as $recent)
  <a href="{{ get_permalink($recent->ID) }}">
    <figcaption>
        <h3>{{ get_the_title($recent->ID) }}</h3>
        @if( get_sub_field('page_link_text') )
        <p>{{ the_sub_field('page_link_text') }}</p>
        @endif
    </figcaption>
  </a>
  <a href="{{ get_permalink($recent->ID) }}">
    {!! get_the_post_thumbnail($recent->ID) !!}
  </a>
@endforeach
@php(wp_reset_query())
</figure>
</div>
