<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>@yield('title', 'MADI Solutions')</title>
  <meta name="description" content="@yield('description', 'Empresa líder en diseño, construcción residencial, comercial e industrial con más de 10 años de experiencia.')">

  {{-- Fonts --}}
  <link rel="icon" href="{{ asset('favicon.png') }}" type="image/png">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Barlow:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300&family=Barlow+Condensed:wght@300;400;500;600;700&display=swap" rel="stylesheet">

  {{-- Bootstrap Icons --}}
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.11.3/font/bootstrap-icons.min.css">

  {{-- Main CSS --}}
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">

  @stack('styles')
</head>
<body>

  {{-- Sidebar Navigation --}}
  @include('components.sidebar')

  <main>
    @yield('content')
  </main>

  {{-- Footer --}}
  @include('components.footer')

  {{-- Scroll Top --}}
  <a href="#hero" id="scroll-top"><i class="bi bi-arrow-up"></i></a>

  {{-- Main JS --}}
  <script src="{{ asset('js/app.js') }}"></script>

  @stack('scripts')
</body>
</html>
