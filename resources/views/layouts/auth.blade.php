<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>@yield('title', 'Auth')</title>
    {{-- Load Tailwind via Vite --}}
    {{-- @vite(['resources/css/app.css', 'resources/js/app.js']) --}}

    <!-- Leaflet CDN -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- stylesheet --}}
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/map.css') }}">
</head>

<body class="min-h-screen auth-page overflow-hidden bg-radial-gradient">
    @yield('content')

    <!-- VENDORS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>

    {{-- HELPERS --}}
    <script src="{{ asset('assets/js/bootstrap.js') }}"></script>
    <script src="{{ asset('assets/js/floatingbutton.js') }}"></script>

    {{-- LOGIC --}}
    <script src="{{ asset('assets/js/map/map.js') }}"></script>
    <script src="{{ asset('assets/js/charts/sensorChart.js') }}"></script>

    {{-- APP CALL initMap/initChart --}}
    <script src="{{ asset('assets/js/app.js') }}"></script>
</body>

</html>
