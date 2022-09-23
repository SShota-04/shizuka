@extends('layouts.app')

@section('content')
<div class="container">
    <div class="create-body">
        <div class="post-theme">{{ __('Register') }}</div>

        <div class="card-body">
            <form method="POST" action="{{ route('register') }}">
                @csrf
                <div>
                    <dl class="form-flex">
                        <dt><label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label></dt>
                        <dd><input id="name" type="text" class="form-input @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus></dd>
                    </dl>
                        @error('name')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>
                

                <div>
                    <dl class="form-flex">
                        <dt>
                            <label for="email" class="col-md-4 col-form-label text-md-end">{{ __('Email Address') }}</label>
                        </dt>
                        <dd>
                            <input id="email" type="email" class="form-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        </dd>
                    </di>
                        @error('email')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    
                </div>

                <div>
                <dl class="form-flex">
                    <dt>
                        <label for="password" class="col-md-4 col-form-label text-md-end">{{ __('Password') }}</label>
                    </dt>
                    <dd>
                        <input id="password" type="password" class="form-input @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                    </dd>
                </dl>
                        @error('password')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                </div>

                <div>
                <dl class="form-flex">
                    <dt>
                        <label for="password-confirm" class="col-md-4 col-form-label text-md-end">{{ __('Confirm Password') }}</label>
                    </dt>
                    <dd>
                        <input id="password-confirm" type="password" class="form-input" name="password_confirmation" required autocomplete="new-password">
                    </dd>
                </div>

                <div>
                    <button type="submit" class="form-btn">
                        {{ __('Register') }}
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
