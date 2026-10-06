<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>@yield('title', 'Dashboard')</title>

    {{-- Load Tailwind via Vite --}}
    {{-- @vite(['resources/css/app.css', 'resources/css/map.css', 'resources/js/app.js']) --}}

    <!-- Leaflet CDN -->
    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <script src="https://cdn.tailwindcss.com"></script>

    {{-- stylesheet --}}
    <link rel="stylesheet" href="{{ asset('assets/css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/map.css') }}">
</head>

<body class="relative min-h-screen">

    <!-- Glass Overlay -->
    <div class="fixed inset-0 bg-white/60 backdrop-blur-none z-0 pointer-events-none"></div>


    {{-- Sidebar --}}
    @include('components.sidebar')

    {{-- Navbar --}}
    @include('components.navbar')

    <!-- Main Content -->
    <main class="relative z-10 lg:ml-64 p-6">
        @yield('content')
    </main>
    <x-floatingbutton title="Tambah Data" class="bg-black z-50 lg:hidden"></x-floatingbutton>

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
