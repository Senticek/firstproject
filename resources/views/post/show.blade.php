@extends('layouts.app')

@section('content')
    <section id="content">
        <div class="container"
            style="background: url({{ asset('/img/Laravel-logo.png') }}) left 80% no-repeat ,url({{ asset('/img/Laravel-logo.png') }}) right 10% no-repeat;">
            <div class="post-content">
                <div class="post">
                    <h2>
                        {{ $post->title }}
                    </h2>
                    <p>
                        {{ $post->description }}
                    </p>
                    <div class="author">
                        <p>Autor: {{ App\Http\Controllers\PostController::retrieve_author($post->user_id) }}</p>
                        <p> {{ date('d-m-Y', strtotime($post->updated_at)) }}</p>
                    </div>
                    <div class="permission">
                        @if ($post->user_id == $id)
                            <a href=" /blog/{{ $post->slug }}/edit" class="edit">
                                <i class="fas fa-pen"></i>
                            </a>
                        @endif
                        @can('all')
                            <form action="/blog/{{ $post->slug }}" method="POST">
                                @csrf
                                @method('delete')
                                <button class="fas fa-trash-alt delete" type="submit">
                                </button>
                            </form>
                        @endcan
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
