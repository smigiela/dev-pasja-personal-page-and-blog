<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Post: {{ $post->name }}
        </h2>
    </x-slot>
    <div class="container mx-auto"> <!-- ... -->
        <div class="max-w-xl h-96 py-4 px-8 bg-white shadow-lg rounded-lg my-20">

            <div>
                <h2 class="text-gray-800 text-3xl font-semibold">{{ $post->title }}</h2>
                <p class="mt-2 text-gray-600">Kategoria: {{ $post->category->name }}</p>
                <p class="mt-2 text-gray-600">Opis: {{ $post->description }}</p>
                <p class="mt-2 text-gray-600">Słowa kluczowe: {{ $post->keywords }}</p>
                <p class="mt-2 text-gray-600">Data publikacji: {{ $post->published_at }}</p>
                <div class="mt-2 text-gray-600">Treść: {{ $post->body }}</div>
            </div>
            <div class="mt-10 flex">
                <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
                   href="{{route('posts.edit', $post)}}">Edytuj</a>
                <form action="{{route('posts.destroy', $post)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-transparent hover:bg-red-500 text-red-700 font-semibold
                    hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Usuń</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
