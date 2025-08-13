<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Laravel 12</title>
  @vite('resources/css/app.css')
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('assets/css/soft-ui-dashboard.css?v=1.0.3') }}" rel="stylesheet" />
</head>
<body>
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-75">
        <div class="container">
          <div class="row">
            <div class="col-xl-4 col-lg-5 col-md-6 d-flex flex-column mx-auto">
              <div class="card card-plain mt-8">
                <div class="card-header pb-0 text-left bg-transparent">
                  <h3 class="font-weight-bolder text-info text-gradient">Welcome back</h3>
                  <p class="mb-0">Create a new acount<br></p>
                  <p class="mb-0">OR Sign in with these credentials:</p>
                  <p class="mb-0">Email <b>admin@softui.com</b></p>
                  <p class="mb-0">Password <b>secret</b></p>
                </div>
                <div class="card-body">
                  <form role="form" method="POST" action="/dashboard">
                    @csrf
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
                    <div class="form-check form-switch">
                      <input class="form-check-input" type="checkbox" id="rememberMe" checked="">
                      <label class="form-check-label" for="rememberMe">Remember me</label>
                    </div>
                    <div class="text-center">
                      <button type="submit" class="btn bg-gradient-info w-100 mt-4 mb-0">Sign in</button>
                    </div>
                  </form>
                  </div>
                  <div class="card-footer text-center pt-0 px-lg-2 px-1">
                    <small class="text-muted">Forgot you password? Reset you password 
                      <a href="/login/forgot-password" class="text-info text-gradient font-weight-bold">here</a>
                    </small>
                    <p class="mb-4 text-sm mx-auto">
                        Don't have an account?
                        <a href="register" class="text-info text-gradient font-weight-bold">Sign up</a>
                    </p>
                  </div>
                </div>
              </div>
              <div class="col-md-6">
                <div class="oblique position-absolute top-0 h-100 d-md-block d-none me-n8">
                  <div class="oblique-image bg-cover position-absolute fixed-top ms-auto h-100 z-index-0 ms-n6" style="background-image:url('../assets/img/banner-login.jpg')"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>
    </main>

    <script src="../assets/js/soft-ui-dashboard.min.js?v=1.0.3"></script>
    <script src="../assets/js/core/popper.min.js"></script>
  </body>
</html>