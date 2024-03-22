{{-- @extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="row mb-3">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Login') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn btn-link" href="{{ route('password.request') }}">
                                        {{ __('Forgot Your Password?') }}
                                    </a>
                                @endif
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection --}}

<!DOCTYPE HTML>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap and CSS -->
    <link href="{{asset('lp/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{asset('lp/styles/style.css')}}" rel="stylesheet">

    <!--Font-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter&display=swap" rel="stylesheet">

    <title>Login</title>
</head>

<body>

    <!-- Form Login -->
    <div class="container-lg d-flex justify-content-center">
        <div class="card cardlogin">
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="card-body bodyc ">
                    <div class="titles text-center ">
                        <h2>Login</h2>
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleInputEmail1 " class="form-label loginform ">Username</label>
                        <input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" placeholder="Masukan Username " required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        {{-- <input type="email " class="form-control " id="exampleInputEmail1 " aria-describedby="emailHelp " placeholder="Masukan Username "> --}}
                    </div>
                    <div class="mb-3 ">
                        <label for="exampleInputPassword1 " class="form-label loginform ">Password</label>
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" placeholder="Masukan Password " required autocomplete="current-password">

                        @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                        {{-- <input type="password " class="form-control " id="exampleInputPassword1 " placeholder="Masukan Password "> --}}
                    </div>
                    <div class="text-center ">
                        <button type="submit " class="btn " style="margin-bottom: 10px; margin-top: 10px;padding-left: 2em;padding-right: 2em; ">Submit</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
    <!-- footer -->

    <div class="container-lg ">
        <div class="footer ">

        </div>
    </div>


</body>

<!--javascript-->
<script type=" text/javascript " src="{{asset('lp/js/bootstrap.min.js')}} "></script>
<script type=" text/javascript " src="{{asset('lp/styles/custom.js')}} "></script>

</html>