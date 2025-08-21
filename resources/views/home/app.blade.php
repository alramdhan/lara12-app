<!DOCTYPE html>
<html lang="en" data-pc-preset="preset-1" data-pc-sidebar-caption="true" data-pc-direction="ltr" dir="ltr" data-pc-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="description"
      content=""
    />
    <meta
      name="keywords"
      content=""
    />
    <meta name="author" content="Dika Alfarell" />
    <title>@yield('title')</title>
    @vite('resources/js/app.js')
    <link rel="shortcut icon" href="https://www.cifor-icraf.org/wp-content/uploads/2021/04/cropped-cifor-icraf-favicon-01-192x192.png" type="image/x-icon" />
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <link rel="stylesheet" href="{{ asset('assets/fonts/material.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/cifor.css') }}" id="main-style-link">
  </head>
  <body>
  @include('layouts.sidebar')
  @include('layouts.navbar')
  <div class="pc-container">
    @yield('content')
  </div>
  @include('layouts.footer')

  <div class="floting-button fixed bottom-[50px] right-[30px] z-[1030]">
  </div>

  <script src="{{ asset('assets/js/plugins/simplebar.min.js') }}"></script>
  <script src="{{ asset('assets/js/plugins/popper.min.js') }}"></script>
  <script src="{{ asset('assets/js/component.js') }}"></script>
  <script src="{{ asset('assets/js/theme.js') }}"></script>
  <script src="{{ asset('assets/js/script.js') }}"></script>
  @stack('dashboard')
  <script>
    layout_theme_sidebar_change('dark');
  </script>
</body>
</html>