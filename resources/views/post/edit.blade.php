@extends('layouts.app')

@section('content')


    <section id="post-form">
        <div class="container"
            style="background: url({{ asset('/img/Laravel-logo.png') }}) left 80% no-repeat ,url({{ asset('/img/Laravel-logo.png') }}) right 10% no-repeat;">
            @if ($errors->any())
                <div class="w-4/5 m-auto">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li class="w-1/5 mb-4 text-gray-50 bg-red-700 rounded-2xl py-4">
                                {{ $error }}
                            </li>
                        @endforeach
                    </ul>
                </div>
            @endif

            <div class="form">
                <div class="form-title">{{ __('Úprava příspěvku') }}</div>
                <form action="/blog/{{ $post->slug }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class=" form-row">
                        <label for="title">{{ __('Titulek') }}</label>
                        <div class="title">
                            <input type="text" name="title" class="form-control" value="{{ $post->title }}">
                        </div>
                    </div>
                    <div class="
                                form-row">
                        <label for="text">{{ __('Obsah') }}</label>
                        <div class="text">
                            <textarea name="description" class="form-control">{{ $post->description }}</textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="submit">
                            <button type="submit" class="btn">
                                {{ __('Upravit příspěvek') }}
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
@endsection
