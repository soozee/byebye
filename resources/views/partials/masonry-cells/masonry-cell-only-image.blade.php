<div class="grid">
<figure class="effect-ruby">
<a href="{{ get_permalink($currentPost->ID) }}">
    <figcaption>
        @if( get_sub_field('page_link_text') )
        <p>{{ the_sub_field('page_link_text') }}</p>
        @endif
    </figcaption>
    @php ($image = get_sub_field('plain_image'))
    @if( $image )
        {!! wp_get_attachment_image( $image, 'large') !!}
    @endif
</a>
</figure>
</div>
