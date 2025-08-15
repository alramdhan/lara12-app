<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Laravel 12</title>
  @vite(['resources/css/app.css', 'resources/css/main.css'])
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <style>
    .cifor-gradient-primary {
      /* background: #ff0020; */
      background: linear-gradient(90deg, #2A7B9B, #57C785);
      color: white;
    }
    .is-invalid {
      color: red;
    }
  </style>
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
                  <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                  <p class="mb-0">Create a new acount<br></p>
                  <!-- <p class="mb-0">OR Sign in with these credentials:</p> -->
                  <!-- <p class="mb-0">Email <b>admin@softui.com</b></p>
                  <p class="mb-0">Password <b>secret</b></p> -->
                  

                  @error('errorMessage')
                  <p class="mb-0 @error('errorMessage') is-invalid @enderror">{{ $message }}</p>
                  @endif
                </div>
                <div class="card-body">
                  <form role="form" method="POST" action="{{ route('doAuthentication') }}">
                    @csrf
                    <label>Email</label>
                    <div class="mb-3">
                      <input type="email" class="form-control" name="email" id="email" placeholder="Email" value="{{ old('email') }}" aria-label="Email" aria-describedby="email-addon">
                      @error('email')
                          <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <label>Password</label>
                    <div class="mb-3">
                      <input type="password" class="form-control" name="password" id="password" placeholder="Password" value="{{ old('password') }}" aria-label="Password" aria-describedby="password-addon">
                      @error('password')
                          <p class="text-danger text-xs mt-2">{{ $message }}</p>
                      @enderror
                    </div>
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn cifor-gradient-primary w-100 mt-4 mb-0">Sign in</button>
                    </div>
                  </form>
                  </div>
                  <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <small class="text-muted">Forgot you password? Reset you password 
                      <a href="#" id="forgot" class="text-info text-gradient font-weight-bold">here</a>
                    </small>
                    <p class="mb-4 text-sm mx-auto">
                        Don't have an account?
                        <a href="{{ route('register') }}" class="text-info text-gradient font-weight-bold">Sign up</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                  <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/banner-login.png')"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <!-- Toast -->
    <!-- <div class="max-w-xs bg-gray-100 border border-gray-200 text-sm text-gray-800 rounded-lg dark:bg-white/10 dark:border-white/20 dark:text-white" role="alert" tabindex="-1" aria-labelledby="hs-toast-soft-color-dark-label">
      <div id="hs-toast-soft-color-dark-label" class="flex p-4">
        Hello, world! This is a toast message.

        <div class="ms-auto">
          <button type="button" class="inline-flex shrink-0 justify-center items-center size-5 rounded-lg text-gray-800 opacity-50 hover:opacity-100 focus:outline-hidden focus:opacity-100 dark:text-white" aria-label="Close">
            <span class="sr-only">Close</span>
            <svg class="shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
              <path d="M18 6 6 18"></path>
              <path d="m6 6 12 12"></path>
            </svg>
          </button>
        </div>
      </div>
    </div> -->
    <!-- End Toast -->

    @vite('resources/js/app.js');
    <script src="{{ asset('assets/js/soft-ui-dashboard.min.js?v=1.0.3') }}"></script>
    <!-- <script src="{{ asset('assets/js/core/popper.min.js') }}"></script> -->
    @if(session('toastSuccess'))
    <script type="module">
      Toastify({
        text: "{{ session('toastSuccess') }}",
        duration: 3000,
        close: true,
        style: {
          background: "linear-gradient(to bottom right, #00D09B99, #3DD6C999)"
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
          background: "linear-gradient(to bottom right, #D0009B99, #ED368999)"
        }
      }).showToast();
    </script>
    @enderror
  </body>
</html>