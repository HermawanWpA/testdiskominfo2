<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Login</title>
  <link rel="stylesheet" href="{{ url('froontend/libraries/bootstrap/css/bootstrap.css') }}" />
  
  <link
    href="https://fonts.googleapis.com/css2?family=Assistant:wght@300;400;500;600;700;800&family=Playfair+Display:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
    rel="stylesheet" />
    
  <link rel="stylesheet" href="{{ url('froontend/styles/main.css') }}" />
  <link rel="stylesheet" href="{{ url('froontend/scripts/sweetalert2.min.css') }}" />
</head>
<body>
    

<main class="login-container">
    
    <div class="container">
      <div class="row page-login d-flex align-items-center">
        <div class="section-left col-12 col-md-6">
          <h1 class="mb-4">Dunia <br>Coding</h1>
          <img src="{{ url('froontend/images/images.png') }}" alt="" class="w-75 d-none d-sm-flex">
        </div>
        <div class="section-right col-12 col-md-4">
          <div class="card">
            <div class="card-body">
              <div class="text-center">
                <img src="{{ url('froontend/images/LOGO.png') }}" alt="" class="w-50 mb-4">
              </div>
              <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="form-group">
                  <label for="exampleInputEmail1">Email address</label>
                  <input type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                  @error('email')
                  <span class="invalid-feedback" role="alert">  
                      <strong>{{ __('Periksa kembali Email/Password tidak cocok.') }}</strong>
                  </span>
                  @enderror
                  <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone
                    else.</small>
                </div>
                <div class="form-group">
                  <label for="exampleInputPassword1">Password</label>
                  <input type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                  
                  @error('password')
                  <span class="invalid-feedback" role="alert">
                      <strong>{{ __('password tidak cocok.') }}</strong>
                  </span>
                 @enderror
                </div>
                <div class="form-check">
                  <input type="checkbox" class="form-check-input" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                  <label class="form-check-label" for="exampleCheck1">Remember Me</label>
                </div>
                <br>
                <button type="submit" class="btn btn-login btn-block">{{ __('Sign In') }}</button>
                <p class="text-center mt-4">
                    
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </p>
                <p class="text-center mt-2">
                        @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('register') }}">
                            {{ __('Register') }}
                        </a>
                    @endif
                </p>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="{{ url('froontend/libraries/jquery/jquery-3.6.0.min.js') }}"></script>
  <script src="{{ url('froontend/libraries/bootstrap/js/bootstrap.js') }}"></script>
<script>
// var flash = $('#flash').data('flash');
// if(flash){
//     Swal.fire({
//   icon: 'error',
//   title: 'Oops...',
//   text: 'Something went wrong!',
//   footer: '<a href="">Why do I have this issue?</a>'
// })
// }
</script>

</body>
</html>


