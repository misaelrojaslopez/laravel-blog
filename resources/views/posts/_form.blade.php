@csrf

<label class="upperase text-gray-200 text-xs">Titulo</label>
@error('title')
<span class="text-xs text-red-600">{{$message}}</span>
@endError
<input
    type="text"
    name="title"
    class="bg-transparent rounded border-gray-200 w-full mb-4"
    value="{{ old('title', $post->title) }}"
>

<label class="upperase text-gray-200 text-xs">Slug</label>
@error('slug')
<span class="text-xs text-red-600">{{$message}}</span>
@endError
<input
    type="text"
    name="slug"
    class="bg-transparent rounded border-gray-200 w-full mb-4"
    value="{{ old('slug', $post->slug) }}"
>

<label class="upperase text-gray-200 text-xs">Contenido</label>
@error('body')
<span class="text-xs text-red-600">{{$message}}</span>
@endError
<textarea name="body" rows="5" class="bg-transparent rounded border-gray-200 w-full mb-4">
    {{ old('body', $post->body) }}
</textarea>

<div class="flex justify-between items-center">
    <a href="{{ route('posts.index') }}" class="text-indigo-600">Volver</a>

    <input type="submit" value="Enviar" class="bg-gray-500 text-white rounded px-4 py-2">
</div>
