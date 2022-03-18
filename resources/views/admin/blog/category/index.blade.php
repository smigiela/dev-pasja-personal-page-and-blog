<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            <div class="flex">
                <div>Kategorie</div>
                <div class="ml-6"><a href="{{route('categories.create')}}" class="px-3 py-2 bg-green-400 text-white rounded ">Dodaj</a></div>
            </div>
        </h2>
    </x-slot>

    <section class="container mx-auto p-6 font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                    <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class="px-4 py-3">Nazwa</th>
                        <th class="px-4 py-3">Slug</th>
                        <th class="px-4 py-3">Opis</th>
                        <th class="px-4 py-3"></th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @forelse($categories as $category)
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border">
                                <div class="flex items-center text-blue-700 font-semibold text-sm">
                                    <a href="{{route('categories.edit', $category)}}">{{$category->name}}</a>
                                </div>
                            </td>
                            <td class="px-4 py-3 text-xs border">
                                {{$category->description ?? ''}}
                            </td>
                            <td class="px-4 py-3 text-xs border">
                                {{$category->keywords ?? ''}}
                            </td>
                            <td class="px-4 py-3 text-xs border">
                                <form action="{{route('categories.destroy', $category)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="bg-red-400 text-white text-sm px-2 py-1 rounded">Usuń</button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        Nie ma nic do pokazania
                    @endforelse

                    </tbody>
                </table>
            </div>
        </div>
    </section>
</x-app-layout>
