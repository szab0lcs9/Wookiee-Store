@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="display-4 mb-4">{{ __('Sign In') }}</h4>
                    @if ($errors->has('email'))
                        <div class="alert alert-danger">
                            {{ $errors->first('email') }}
                        </div>
                    @endif
                    <form action="{{ route('auth.login') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="mb-2" for="email">{{ __('Email address') }}</label>
                            <input class="form-control{{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <p class="invalid-feedback">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="mb-2" for="password">{{ __('Password') }}</label>
                            <input class="form-control{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password">
                            @if ($errors->has('password'))
                                <p class="invalid-feedback">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                        <div class="mb-4">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="remember_me" name="remember_me">
                                <label class="form-check-label" for="remember_me">
                                    {{ __('Remember me') }}</a>
                                </label>
                            </div>
                        </div>
                        <div class="d-flex justify-content-end">
                            <p>{{ __('Not a member? ') }}
                                <a href="{{ route('auth.register') }}">{{ __(' Sign Up') }}</a>
                            </p>
                        </div>
                        <div class="d-grid">
                            <button class="btn btn-outline-primary btn-lg">
                                {{ __('Sign In') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection