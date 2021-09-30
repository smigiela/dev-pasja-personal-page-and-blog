<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kategoria: {{ $category->name }}
        </h2>
    </x-slot>
    <div class="container mx-auto"> <!-- ... -->
        <div class="max-w-xl h-96 py-4 px-8 bg-white shadow-lg rounded-lg my-20">
            <div class="flex justify-center md:justify-end -mt-16">
                <div class="w-20 h-20 object-cover rounded-full border-2 border-indigo-500 bg-indigo-300 text-center pt-6">Postów: <br />5</div>
            </div>
            <div>
                <h2 class="text-gray-800 text-3xl font-semibold">{{ $category->name }}</h2>
                <p class="mt-2 text-gray-600">Opis: {{ $category->description }}</p>
                <p class="mt-2 text-gray-600">Słowa kluczowe: {{ $category->keywords }}</p>
                @if(! $category->parent_id == null)
                    <p class="mt-2 text-gray-600">Kategoria nadrzędna: {{ $category->parent->name }}</p>
                @else
                    <p class="mt-2 text-gray-600">Ilość kategorii podrzędnych: {{ $category->subcategories_count }}</p>
                @endif
            </div>
            <div class="mt-10 flex">
                <a class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded"
                   href="{{route('categories.edit', $category)}}">Edytuj</a>
                <form action="{{route('categories.destroy', $category)}}" method="post">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="bg-transparent hover:bg-red-500 text-red-700 font-semibold
                    hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">Usuń</button>
                </form>
            </div>
        </div>
    </div>
</x-app-layout>
