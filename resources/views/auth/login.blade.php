<!DOCTYPE html>
<html lang="en">


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Login Admin Anuttara Resto</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{ url('otika') }}/assets/css/app.min.css">
  <link rel="stylesheet" href="{{ url('otika') }}/assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{ url('otika') }}/assets/css/style.css">
  <link rel="stylesheet" href="{{ url('otika') }}/assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{ url('otika') }}/assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='{{ url('img/hitam_transparan.png') }}' />
</head>

<body>
  <div class="loader"></div>
    <div id="app">
      <section class="section">
        <div class="container mt-5">
          <div class="row">
            <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
              <div class="card card-primary">
                <div class="card-header">
                  <h4>Login</h4>
                </div>
                <div class="card-body">
                    {{-- <x-guest-layout> --}}
                        <!-- Session Status -->
                        <x-auth-session-status class="mb-4" :status="session('status')" />

                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <!-- Email Address -->
                            <div class="form-group">
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required
                                    autofocus />
                                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                            </div>

                            <!-- Password -->
                            <div class="mt-4 form-group">
                                <x-input-label for="password" :value="__('Password')" />

                                <x-text-input id="password" class="block mt-1 w-full form-control" type="password" name="password" required
                                    autocomplete="current-password" />

                                <x-input-error :messages="$errors->get('password')" class="mt-2" />
                            </div>

                            <!-- Remember Me -->
                            <div class="block mt-4">
                                <label for="remember_me" class="inline-flex items-center">
                                    <input id="remember_me" type="checkbox"
                                        class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                                    <span class="ml-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                                </label>
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                {{-- @if (Route::has('password.request'))
                                    <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                                        href="{{ route('password.request') }}">
                                        {{ __('Forgot your password?') }}
                                    </a>
                                @endif --}}

                                <x-primary-button class="btn btn-primary btn-lg btn-block">
                                    {{ __('Log in') }}
                                </x-primary-button>
                            </div>
                        </form>
                    {{-- </x-guest-layout> --}}

                </div>

              </div>
              {{-- <div class="mt-5 text-muted text-center">
                Don't have an account? <a href="{{ url('otika') }}/auth-register.html">Create One</a>
              </div> --}}
            </div>
          </div>
        </div>
      </section>
    </div>
  <!-- General JS Scripts -->
  <script src="{{ url('otika') }}/assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="{{ url('otika') }}/assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="{{ url('otika') }}/assets/js/custom.js"></script>
</body>


<!-- auth-login.html  21 Nov 2019 03:49:32 GMT -->
</html>
