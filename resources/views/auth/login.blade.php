@extends('layouts.authapp')

@section('title', __('Login'))

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="card-body">
                        <h1>{{ __('Login') }}</h1>
                        <p class="text-muted">{{ __('Sign In to your account') }}</p>
                        <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i class="icon-user"></i>
                            </span>
                        </div>
                            <input class="form-control @error('email') is-invalid @enderror" type="text" placeholder="{{ __('E-Mail Address') }}" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="input-group mb-4">
                        <div class="input-group-prepend">
                            <span class="input-group-text">
                            <i class="icon-lock"></i>
                            </span>
                        </div>
                            <input class="form-control @error('password') is-invalid @enderror" type="password" placeholder="{{ __('Password') }}" name="password" required autocomplete="current-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="row">
                        <div class="col-6">
                            <button class="btn btn-primary px-4" type="submit">{{ __('Login') }}</button>
                        </div>
                        <div class="col-6 text-right">
                            <a class="btn btn-link px-0" href="{{ route('password.request') }}">
                                {{ __('Forgot Your Password?') }}
                            </a>
                        </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                    <h2>{{ __('Sign up') }}</h2>
                    <p>{{ __("If you don't have the account, let's come here right now!.") }}</p>
                    <a class="btn btn-primary active mt-3" href="{{ route('register') }}">
                        {{ __('Register Now!') }}
                    </a>
                    <a class="btn btn-danger mt-3" href="{{ route('index') }}">
                        {{ __('Cancel') }}
                    </a>
                  {{-- <button class="btn btn-primary active mt-3" type="button">{{ __('Register Now!') }}</button> --}}
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
@endsection
