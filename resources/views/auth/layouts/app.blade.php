<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>@yield('title')</title>
  <link rel="shortcut icon" href="https://www.cifor-icraf.org/wp-content/uploads/2021/04/cropped-cifor-icraf-favicon-01-192x192.png" type="image/x-icon" />
  @vite(['resources/css/main.css', 'resources/css/cifor.css'])
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
</head>
<body>
  <main class="main-content mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          @yield('content')
        </div>
      </div>
    </section>
  </main>

  @include('modals.loader')

  @vite('resources/js/app.js');
  <script src="{{ asset('assets/js/soft-ui-dashboard.min.js?v=1.0.3') }}"></script>
  <!-- <script src="{{ asset('assets/js/core/popper.min.js') }}"></script> -->
  @stack('auth')
  @if(session('toastSuccess'))
  <script type="module">
    Toastify({
      text: "{{ session('toastSuccess') }}",
      duration: 3000,
      close: true,
      style: {
        background: "linear-gradient(to bottom right, var(--bs-primary), var(--bs-teal))",
        borderRadius: '16px',
      }
    }).showToast();
  </script>
  @endif
  @error('errorMessage')
  <script type="module">
    Toastify({
      text: "{{ $message }}",
      duration: 3000,
      close: true,
      style: {
        background: "linear-gradient(to bottom right, #D0009B, #ED3689)",
        borderRadius: '16px',
      }
    }).showToast();
  </script>
  @enderror
</body>
</html>