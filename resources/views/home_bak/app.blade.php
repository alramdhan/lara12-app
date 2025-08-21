<!DOCTYPE html>
<html lang="en">
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
    <link rel="shortcut icon" href="https://www.cifor-icraf.org/wp-content/uploads/2021/04/cropped-cifor-icraf-favicon-01-192x192.png" type="image/x-icon" />
    @vite('resources/css/cifor.css')
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/nucleo-icons.css') }}"> -->
    <!-- <link rel="stylesheet" href="{{ asset('assets/css/nucleo-svg.css') }}"> -->
  </head>
  <body>
  @include('layouts.sidebar')
  <main class="main-content relative max-height-vh-100 h-full mt-1">
    @include('layouts.navbar')
    <div class="container-fluid py-4">
      @yield('content')
      @include('layouts.footer')
    </div>
  </main>

  @vite('resources/js/app.js')
  @stack('dashboard')
  <script src="../assets/js/core/popper.min.js"></script>
  <!-- <script src="../assets/js/core/bootstrap.min.js"></script> -->
  <script src="../assets/js/plugins/perfect-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/smooth-scrollbar.min.js"></script>
  <script src="../assets/js/plugins/fullcalendar.min.js"></script>
  <script src="../assets/js/plugins/chartjs.min.js"></script>
  @stack('navbar')
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }

    const iconNavbarSidenav = document.getElementById('iconNavbarSidenav');
    const iconSidenav = document.getElementById('iconSidenav');
    const sidenav = document.getElementById('sidenav-main');
    let body = document.getElementsByTagName('body')[0];
    let className = 'g-sidenav-pinned';

    if (iconNavbarSidenav) {
      iconNavbarSidenav.addEventListener("click", toggleSidenav);
    }

    if (iconSidenav) {
      iconSidenav.addEventListener("click", toggleSidenav);
    }

    function toggleSidenav() {
      if (body.classList.contains(className)) {
        body.classList.remove(className);
        setTimeout(function() {
          sidenav.classList.remove('bg-white');
        }, 100);
        sidenav.classList.remove('bg-transparent');
      } else {
        body.classList.add(className);
        sidenav.classList.add('bg-white');
        sidenav.classList.remove('bg-transparent');
        iconSidenav.classList.remove('d-none');
      }
    }

  </script>
  <!-- Control Center for Soft Dashboard: parallax effects, scripts for the example pages etc -->
  <!-- <script src="{{ asset('assets/js/soft-ui-dashboard.min.js?v=1.0.3') }}"></script> -->
</body>
</html>