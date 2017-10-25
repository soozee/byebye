@extends('layouts.app')
@section('content')
 @while(have_posts()) @php(the_post())
    @include('partials.julia')
    <hr>
    <script src="js/masonry.js"></script>
    <script src="https://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="http://dhbhdrzi4tiry.cloudfront.net/cdn/sites/foundation.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>

    @include('partials.content-page')

  @endwhile
@endsection
