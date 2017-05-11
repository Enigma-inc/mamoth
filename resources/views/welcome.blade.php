@extends('layouts.master-welcome')
@section('loader')
    @include('loader')
@endsection
@section('content')
@endsection

@section('scripts')
      <script type="text/javascript">
        $(window).on('load', function() {
            $("#loading").fadeOut(500);
        });
    </script>
@endsection