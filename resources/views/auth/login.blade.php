@extends('layouts.app')

@section('content')
<div class="container">
    <div class="post-theme">{{ __('Login') }}</div>

    <div class="create-body">
        <form method="POST" action="{{ route('login') }}">
            @csrf
            <div>
                <dl class="form-flex">
                    <dt><label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label></dt>
                    <dd>
                        <input id="email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </dd>
                </dl>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
            </div>

            <div>
                <dl class="form-flex">
                    <dt><label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label></dt>
                    <dd><input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="current-password"></dd>
                </dl>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
            </div>

            <div class="form-check">
                <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                <label class="form-check-label" for="remember">
                    {{ __('Remember Me') }}
                </label>
            </div>

            <div>
                <button type="submit" class="form-btn">
                    {{ __('Login') }}
                </button>

                @if (Route::has('password.request'))
                    <p>
                        <a class="btn-link" href="{{ route('password.request') }}">
                        {{ __('Forgot Your Password?') }}
                    </a>
                    </p>
                @endif
                
            </div>
        </form>
    </div>
</div>
@endsection
