@extends('layout.main')

@section('content')
    <div class="row">
        <div class="col-md-6 col-lg-5 mx-auto">
            <div class="card">
                <div class="card-body">
                    <h4 class="display-4 mb-4">{{ __('Registration') }}</h4>
                    <form action="{{ route('auth.register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <label class="mb-2" for="email">{{ __('Email address') }}</label>
                            <input class="form-control{{ $errors->has('email') ? 'is-invalid' : '' }}" type="text" name="email" value="{{ old('email') }}">
                            @if ($errors->has('email'))
                                <p class="invalid-feedback">{{ $errors->first('email') }}</p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="mb-2" for="name">{{ __('Full name') }}</label>
                            <input class="form-control{{ $errors->has('name') ? 'is-invalid' : '' }}" type="text" name="name" value="{{ old('name') }}">
                            @if ($errors->has('name'))
                                <p class="invalid-feedback">{{ $errors->first('name') }}</p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="mb-2" for="password">{{ __('Password') }}</label>
                            <input class="form-control{{ $errors->has('password') ? 'is-invalid' : '' }}" type="password" name="password">
                            @if ($errors->has('password'))
                                <p class="invalid-feedback">{{ $errors->first('password') }}</p>
                            @endif
                        </div>
                        <div class="mb-3">
                            <label class="mb-2" for="password_confirmation">{{ __('Re-type password') }}</label>
                            <input class="form-control{{ $errors->has('password_confirmation') ? 'is-invalid' : '' }}" type="password" name="password_confirmation">
                            @if ($errors->has('password_confirmation'))
                                <p class="invalid-feedback">{{ $errors->first('password_confirmation') }}</p>
                            @endif
                        </div>
                        <div class="mb-5">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" value="1" id="terms" name="terms">
                                <label class="form-check-label{{ $errors->has('terms') ? 'is-invalid' : '' }}" for="terms">
                                    {{ __('I agree to') }} <a href="#">{{ __('Terms and Conditions') }}</a>
                                </label>
                                @if ($errors->has('terms'))
                                    <p class="invalid-feedback">{{ $errors->first('terms') }}</p>
                                @endif
                            </div>
                        </div>
                        <div class="mt-5 d-grid">
                            <button class="btn btn-outline-primary btn-lg">
                                {{ __('Sign Up') }}
                            </button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection