@extends('layouts.login')

@section('content')
    <section id="register">
        <div class="container"
            style="background: url({{ asset('/img/Laravel-logo.png') }}) left 80% no-repeat ,url({{ asset('/img/Laravel-logo.png') }}) right 10% no-repeat;">
            <div class="form">
                <div class="form-title">{{ __('Registrace') }}</div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf
                    <div class="form-row">
                        <label for="name">{{ __('Jméno') }}</label>
                        <div class="name-input">
                            <input id=" name" type="text" class="form-control @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="email">{{ __('E-Mail') }}</label>
                        <div class="email-input">
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
                        <label for="password">{{ __('Heslo') }}</label>
                        <div class="password-input">
                            <input id=" password" type="password"
                                class="form-control @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="form-row">
                        <label for="password-confirm">{{ __('Heslo znovu') }}</label>
                        <div class="password-confirm-input">
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                required autocomplete="new-password">
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="submit-btn">
                            <button type=" submit" class="btn">
                                {{ __('Registrovat') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
