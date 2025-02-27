@extends('template')

@section('content')
    <h1>Listado</h1>

    @foreach($posts as $post)
        <p>
            <strong>{{ $post->id }}</strong>
            <a href="{{ route('post', $post->slug) }}">
                {{ $post->title }}
                <br /> by {{$post->user->name }}
            </a>
        </p>
    @endforeach

    {{ $posts->links() }}

@endsection
