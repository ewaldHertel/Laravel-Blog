<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <link rel="stylesheet" href="https://cdn.rawgit.com/konpa/devicon/df6431e323547add1b4cf45992913f15286456d3/devicon.min.css">

    <!--== font-awesome ==-->
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!--== magnific-popup ==-->
    <link href="{{ asset('css/magnific-popup.css') }}" rel="stylesheet">

    <!--== owl carousel ==-->
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet">

    <!--== animate css ==-->
    <link href="{{ asset('css/animate.min.css') }}" rel="stylesheet">

    @yield('style')

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" data-offset="51">
    <div class="frontend" id="app">

        @yield('content')
    </div>
    @include('partials._footer')
    <!-- Scripts -->
    <script src="{{ asset('js/jquery.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('js/smartresize.js') }}"></script>
    <script src="{{ asset('js/jquery.easing.min.js') }}"></script>
    <script src="{{ asset('js/typed.js') }}"></script>
    <script src="{{ asset('js/jquery.sticky.js') }}"></script>
    <script src="{{ asset('js/validator.min.js') }}"></script>
    <script src="{{ asset('js/plugins.js') }}"></script>
    <script src="http://maps.google.com/maps/api/js?key=AIzaSyBU7FfEjCd_uulWTLyyP9sK0Td7sMrWHNo"></script>
    <script src="{{ asset('js/jquery-parallax.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
    <script>
    function init_map() {
      // Koordinaten
      var var_location = new google.maps.LatLng(51.031891, 7.848221);
      // Einstellungen
      var var_mapoptions = {
        center: var_location,
        zoom: 14
      };
      // Markierung
      var var_marker = new google.maps.Marker({
        position: var_location,
        map: var_map,
        title:"Ewald Hertel Fotografie"});
      // Anzeige der Karte
      var var_map = new google.maps.Map(document.getElementById("map-container"), var_mapoptions);
      var_marker.setMap(var_map);
    }
    google.maps.event.addDomListener(window, 'load', init_map);
    </script>
</body>
</html>
