@extends('layouts.master-welcome')
@section('loader')
    @include('loader')
@endsection
@section('content')
@endsection

@section('scripts')
      <script type="text/javascript">
        $(window).on('load', function() {
            $("#loading").fadeOut(12000);
        });

         document.addEventListener('DOMContentLoaded', function(){

         new Typed(".message", {
           // stringsElement: "message",
           strings: ['','', "Welcome","Rea U Amohela"],
           typeSpeed: 100,
           // backDelay: 500,
            loop: false,
            //contentType: 'html', // or text
   
        });

    });
        </script>
@endsection