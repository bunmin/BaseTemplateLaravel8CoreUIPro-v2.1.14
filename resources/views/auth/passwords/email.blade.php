@extends('layouts.authapp')

@section('title', __('Reset Password'))

@section('content')
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-8">
          <div class="card-group">
            <div class="card p-4">
                <form method="POST" action="{{ route('password.email') }}">
                    @csrf
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif

                        <h1>{{ __('Reset Password') }}</h1>
                        {{-- <p class="text-muted">{{ __('Sign In to your account') }}</p> --}}
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

                        <div class="row">
                            <div class="col-6">
                                <button class="btn btn-primary" type="submit">{{ __('Send Link') }}</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="card text-white bg-primary py-5 d-md-down-none" style="width:44%">
              <div class="card-body text-center">
                <div>
                    <h2>{{ __('Sign In') }}</h2>
                    {{-- <p>{{ __(".") }}</p> --}}
                    <a class="btn btn-primary active mt-3" href="{{ route('login') }}">
                        {{ __('Login!') }}
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
