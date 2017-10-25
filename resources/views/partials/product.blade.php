<div class="cell mais">
    <a href="{{ the_permalink() }}">
        <img class="thumbnail" src="{{ the_post_thumbnail_url() }}">
    </a>
    <h5>{{ the_title() }}</h5>
    <p>{{ the_field('price') }}</p>
    <a href="{{ the_permalink() }}" class="button small expanded hollow">Buy</a>
</div>
