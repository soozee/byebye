@extends('layouts.app')

@section('hero')
  @include('partials.orbit')
@endsection

@section('content')
@include('partials.foursquare')
  
 @while(have_posts()) @php(the_post())
    @include('partials.home-page-header')
   @include('partials.products')

    <hr>
    @include('partials.services')
    @include('partials.profilecards')
    

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
