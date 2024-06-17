@extends('template')

@section('content')
    <div class="bg-gray-900 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
        <span class="text-xs uupercase text-gray-700 bg-gray-400 rounded-full px-2 py-1">Programacion</span>
        <h1 class="text-3xl text-white mt-4">Blog</h1>
        <p class="text-md text-gray-400 mt-2">Proyecto de desarrollo web con Laravel</p>

        <img src="{{ asset('images/dev.png') }}" alt="dev logo" class="absolute -right-20 -bottom-20 opacity-20">
    </div>

    <div class="px-4">
        <h1 class="text-2xl mb-8 text-gray-900">Contenido técnico</h1>
            <div class="grid grid-cols-1 gap-4 mb-4">
                @foreach($posts as $post)
                    <a href="{{ route('post', $post->slug) }}" class="bg-gray-100 rounded-lg px-6 py-4">
                        <p class="text-xs flex items-center gap-2">
                            <span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1">Tutorial</span>
                            <span> {{ $post->created_at->format('d/m/Y') }}</span>
                        </p>

                        <h2 class="text-lg text-gray-900 mt-2"> {{$post->title}} </h2>

                        <div class="text-sm text-gray-900 opacity-75 flex items-center gap-1">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="h-4 w-4">
                                <path fill-rule="evenodd" d="M7.5 6a4.5 4.5 0 1 1 9 0 4.5 4.5 0 0 1-9 0ZM3.751 20.105a8.25 8.25 0 0 1 16.498 0 .75.75 0 0 1-.437.695A18.683 18.683 0 0 1 12 22.5c-2.786 0-5.433-.608-7.812-1.7a.75.75 0 0 1-.437-.695Z" clip-rule="evenodd" />
                            </svg>

                            {{ $post->user->name }}
                        </div>
                    </a>
                @endforeach
            </div>
    </div>

    {{ $posts->links() }}
@endsection
