
<div class="masonry grid-x small-up-1 medium-up-2 large-up-3">
  @if (have_rows('masonry_options', 'option'))
    @while( have_rows('masonry_options', 'option'))
      @php(the_row())
      <div class="cell">
        @php ($fieldType = get_sub_field('cell_type'))
        @include('partials.masonry-cells.masonry-cell-'.$fieldType)
      </div>
    @endwhile
  @endif
</div>
