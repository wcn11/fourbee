@extends('layouts.app')

@section('content')
  <div class="limiter">
    <div class="container-login100">
      <div class="wrap-login100">
        <form class="login100-form validate-form" action="{{route('login')}}" method="post">
            @csrf
          <span class="login100-form-title mb-5">
            <span>Login</span> Fourbee
            <img src="{{ asset('favicon.ico') }}" class="img-fluid" />
          </span>
          <div class="wrap-input100 validate-input m-b-35" data-validate="Enter email">
            <input class="input100" type="text" name="email" onchange="removePlace(this)"/>
            <span class="focus-input100 focus-email" data-placeholder="Email"></span>
          </div>

          <div class="wrap-input100 validate-input m-b-50" data-validate="Enter password">
            <input class="input100" type="password" name="password" onchange="removePlace(this)"/>
            <span class="focus-input100 focus-password" data-placeholder="Password"></span>
          </div>

          <div class="container-login100-form-btn">
            <button class="login100-form-btn" type="submit">Login</button>
          </div>
        </form>
      </div>
    </div>
  </div>

{{-- <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Login') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
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

                        <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
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
</div> --}}
@endsection

@section('scriptjs')
<script>
    function removePlace(el){

        let tag = el.attributes.name.value
        let element = document.querySelector('.focus-' + tag)

        if(el.textLength === 0){
            element.setAttribute('data-placeholder', tag)
        }
            element.setAttribute('data-placeholder', '')
    }
</script>

@endsection