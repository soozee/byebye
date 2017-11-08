<div class="grid">
<figure class="effect-ruby">
@php ($currentPost = get_sub_field('page_link_title'))
<a href="{{ get_permalink($currentPost->ID) }}">
    <figcaption>
        <h3>{{ get_the_title($currentPost->ID) }}</h3>
        @if( get_sub_field('page_link_text') )
        <p>{{ the_sub_field('page_link_text') }}</p>
        @endif
    </figcaption>
    @php ($image = get_sub_field('cell_image'))
    @if( $image )
        {!! wp_get_attachment_image( $image, 'large') !!}
    @endif
</a>
</figure>
</div>
