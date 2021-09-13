@extends('layouts.login')

@section('content')
    <section id="login">
        <div class="container"
            style="background: url({{ asset('/img/Laravel-logo.png') }}) left 80% no-repeat ,url({{ asset('/img/Laravel-logo.png') }}) right 10% no-repeat;">
            <div class="form">
                <div class="form-title">{{ __('Login') }}</div>
                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="form-row">
                        <label for="email">{{ __('E-Mail Address') }}</label>
                        <div class="email">
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="password">{{ __('Password') }}</label>
                        <div class="password">
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                                name="password" required autocomplete="current-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                {{ old('Zapamatováno') ? 'checked' : '' }}>

                            <label class="form-check-label" for="remember">
                                {{ __('Zapamatovat si mě') }}
                            </label>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="submit">
                            <button type="submit" class="btn">
                                {{ __('Login') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
