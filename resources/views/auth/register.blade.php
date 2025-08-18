<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Register - Laravel 12</title>
  @vite(['resources/css/main.css', 'resources/css/cifor.css'])
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
</head>
<body>
  <main class="main-content mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info cifor-text-gradient">Register</h3>
                  <p class="mb-0">Create a new acount<br></p>
                  <!-- <p class="mb-0">OR Sign in with these credentials:</p> -->
                  <!-- <p class="mb-0">Email <b>admin@softui.com</b></p>
                  <p class="mb-0">Password <b>secret</b></p> -->
                  @error('errorMessage')
                  <p class="mb-0 @error('errorMessage') is-invalid @enderror">{{ $message }}</p>
                  @endif
                </div>
                <div class="card-body">
                  <form role="form" method="POST" action="{{ route('doRegister') }}">
                    @csrf
                    <label>Full Name</label>
                    <div class="mb-3">
                      <input type="text" class="form-control" name="name" id="name" placeholder="Name" value="admin@softui.com" aria-label="Name" aria-describedby="name-addon">
                      @error('name')
                          <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="admin@softui.com" aria-label="Email" aria-describedby="email-addon">
                      @error('email')
                          <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="secret" aria-label="Password" aria-describedby="password-addon">
                      @error('password')
                          <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn cifor-gradient-primary w-100 mt-4 mb-0 text-white">Sign Up</button>
                    </div>
                  </form>
                  </div>
                  <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <p class="mb-4 text-sm mx-auto">
                        Already have an account
                        <a href="{{ route('login') }}" class="text-info cifor-text-gradient font-weight-bold">Sign In</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                  <div class="bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image: url('{{ asset('assets/img/banner-login.png')}}'); background-position: right; background-size: cover; transform: skewX(10deg) !important;"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    @include('modals.loader')

    @vite('resources/js/app.js');
    <script src="{{ asset('assets/js/soft-ui-dashboard.min.js?v=1.0.3') }}"></script>
    <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
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