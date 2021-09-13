@extends('layouts.app')

@section('content')
    <section id="home">
        <div class="container"
            style="background: url({{ asset('/img/Laravel-logo.png') }}) left 80% no-repeat ,url({{ asset('/img/Laravel-logo.png') }}) right 10% no-repeat;">
            <div class="front-page">
                <div class="main-text">
                    <p>Vítej na testovacím blogu o laravelu</p>
                </div>
                @auth
                    <div class="logged">
                        <div class="buttons">
                            <a href="/blog" class="reg-in">blog</a>
                        </div>
                    </div>
                @else
                    <div class="not-logged">
                        <div class="must-log">
                            <p>Pro pokračování se přihlaste</p>
                        </div>
                        <div class="buttons">
                            <a href="/login" class="log-in">Přihlásit se</a>
                            <a href="/register" class="reg-in">Registrovat se</a>
                        </div>
                    </div>
                @endauth
            </div>
        </div>
    </section>
@endsection
