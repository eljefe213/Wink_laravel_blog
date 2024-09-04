@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Articles de blog</h1>

        @foreach ($posts as $post)
            <article>
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->excerpt }}</p>
                <a href="{{ route('blog.show', $post->slug) }}">Lire la suite</a>
            </article>
        @endforeach

        <!-- Lien de pagination -->
        <div class="pagination">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
