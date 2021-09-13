@extends('layouts.app')

@section('content')
    <section id="blog">
        <div class="container"
            style="background: url({{ asset('/img/Laravel-logo.png') }}) left 80% no-repeat ,url({{ asset('/img/Laravel-logo.png') }}) right 10% no-repeat;">
            <div class="blog-content">
                @foreach ($posts as $post)
                    <div class="post">
                        <a href="/blog/{{ $post->slug }}">
                            <h2>{{ $post->title }}</h2>
                        </a>
                        <p>
                            {{ \Illuminate\Support\Str::limit($post->description, 150, $end = '...') }}
                        </p>
                        <div class="author">
                            <p>Autor: {{ App\Http\Controllers\PostController::retrieve_author($post->user_id) }}</p>
                            <p> {{ date('d-m-Y', strtotime($post->updated_at)) }}</p>
                        </div>
                        <div class="permission">
                            @if (isset(Auth::user()->id) && Auth::user()->id == $post->user_id)
                                <a href=" /blog/{{ $post->slug }}/edit" class="edit">
                                    <i class="fas fa-pen"></i>
                                </a>
                            @endif
                            @can('all')
                                <form action="/blog/{{ $post->slug }}" method="POST">
                                    @csrf
                                    @method('delete')
                                    <button class="fas fa-trash-alt delete" type=" submit">
                                    </button>
                                </form>
                            @endcan
                        </div>
                    </div>
                @endforeach
                <div class="pagination">
                    {{ $posts->links('pagination::bootstrap-4') }}
                </div>
            </div>
        </div>
    </section>
@endsection
