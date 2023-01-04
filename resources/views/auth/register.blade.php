<!DOCTYPE html>
<html lang="en">

<!-- auth-register.html  21 Nov 2019 04:05:01 GMT -->
<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Register Anuttara Resto</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="{{('otika/assets/css/app.min.css')}}"">
  <link rel="stylesheet" href="{{('otika/assets/bundles/jquery-selectric/selectric.css')}}"">
  <!-- Template CSS -->
  <link rel="stylesheet" href="{{('otika/assets/css/style.css')}}"">
  <link rel="stylesheet" href="{{('otika/assets/css/components.css')}}"">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="{{('otika/assets/css/custom.css')}}"">
  <link rel='shortcut icon' type='image/x-icon' href='{{ url('img/hitam_transparan.png') }}' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Register</h4>
              </div>
              <div class="card-body">
                {{-- <x-guest-layout> --}}
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <!-- Name -->
                        <div class="form-group ">
                            <x-input-label for="name" :value="__('Name')" />
                            <x-text-input id="name" class="block mt-1 w-full form-control" type="text" name="name" :value="old('name')" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="form-group mt-4">
                            <x-input-label for="email" :value="__('Email')" />
                            <x-text-input id="email" class="block mt-1 w-full form-control" type="email" name="email" :value="old('email')" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="form-group mt-4">
                            <x-input-label for="password" :value="__('Password')" />

                            <x-text-input id="password" class="block mt-1 w-full form-control"
                                            type="password"
                                            name="password"
                                            required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="form-group mt-4">
                            <x-input-label for="password_confirmation" :value="__('Confirm Password')" />

                            <x-text-input id="password_confirmation" class="block mt-1 w-full form-control"
                                            type="password"
                                            name="password_confirmation" required />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <div class="flex items-center justify-end mt-4">
                            {{-- <a class="underline text-sm text-gray-600 hover:text-gray-900 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="{{ route('login') }}">
                                {{ __('Already registered?') }}
                            </a> --}}

                            <x-primary-button class="btn btn-primary btn-lg btn-block">
                                {{ __('Register') }}
                            </x-primary-button>
                        </div>
                    </form>
                {{-- </x-guest-layout> --}}

              </div>
              <div class="mb-4 text-muted text-center">
                Already Registered? <a href="{{route('login')}}">Login</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <!-- General JS Scripts -->
  <script src="{{('otika/assets/js/app.min.js')}}""></script>
  <!-- JS Libraies -->
  <script src="{{('otika/assets/bundles/jquery-pwstrength/jquery.pwstrength.min.js')}}""></script>
  <script src="{{('otika/assets/bundles/jquery-selectric/jquery.selectric.min.js')}}""></script>
  <!-- Page Specific JS File -->
  <script src="{{('otika/assets/js/page/auth-register.js')}}""></script>
  <!-- Template JS File -->
  <script src="{{('otika/assets/js/scripts.js')}}""></script>
  <!-- Custom JS File -->
  <script src="{{('otika/assets/js/custom.js')}}""></script>
</body>

<!-- auth-register.html  21 Nov 2019 04:05:02 GMT -->
</html>
