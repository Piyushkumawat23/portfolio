<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="csrf-token" content="{{ csrf_token() }}">

      {{-- Load your CSS directly from public folder --}}
      <link rel="stylesheet" href="{{ asset('public/assets/admin/css/adminlte.css') }}">
      <link rel="stylesheet" href="{{ asset('public/assets/admin/css/custom.css') }}">
      
      {{-- If you have JS --}}
      <script src="{{ asset('public/assets/admin/js/app.js') }}" defer></script>
  </head>   
  <body>
      <!-- Content Section -->
      @yield('content')

      <!-- Footer -->
      <footer>
          @yield('footer')
      </footer>
  </body>
</html>
