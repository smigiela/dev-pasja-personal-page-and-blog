<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Kategorie
        </h2>
    </x-slot>

    <section class="container mx-auto p-6 font-mono">
        <div class="w-full mb-8 overflow-hidden rounded-lg shadow-lg">
            <div class="w-full overflow-x-auto">
                <table class="w-full">
                    <thead>
                    <tr class="text-md font-semibold tracking-wide text-left text-gray-900 bg-gray-100 uppercase border-b border-gray-600">
                        <th class="px-4 py-3">Tytuł</th>
                        <th class="px-4 py-3">Kategoria</th>
                        <th class="px-4 py-3">Opis</th>
                        <th class="px-4 py-3">Treść</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white">
                    @forelse($posts as $post)
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 border">
                                <div class="flex items-center text-sm">
                                    {{$post->title}}
                                </div>
                            </td>
                            <td class="px-4 py-3 text-ms font-semibold border">{{$post->category->name}}</td>
                            <td class="px-4 py-3 text-xs border">
                                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> {{$post->description}} </span>
                            </td>
                            <td class="px-4 py-3 text-xs border">
                                <span class="px-2 py-1 font-semibold leading-tight text-green-700 bg-green-100 rounded-sm"> {{$post->keywords ?? ''}} </span>
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
