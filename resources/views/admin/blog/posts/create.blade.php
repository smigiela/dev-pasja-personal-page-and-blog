<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Dodaj nowy post
        </h2>
    </x-slot>

    <div class="py-12 center">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="sm:px-6 lg:px-8">
                <div class="flex gap-4 overflow-hidden sm:rounded-lg">
                    <div class="sm:w-3/4 md:w-3/4 lg:w-3/4 2xl:w-3/4 w-full bg-white">
                        <form action="{{route('posts.store')}}" method="POST">
                            @method('POST')
                            @csrf
                            <div class="shadow sm:rounded-md sm:overflow-hidden">
                                <div class="px-4 py-5 bg-white space-y-6 sm:p-6">
                                    <div class="grid grid-cols-2 gap-6">
                                        <div class="col-span-2 sm:col-span-2">
                                            <x-jet-label for="title" class="block text-sm font-medium text-gray-700">
                                                Nazwa
                                            </x-jet-label>
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <x-jet-input type="text" name="title" id="title"
                                                             value="{{old('title')}}"
                                                             class="focus:ring-indigo-500 focus:border-indigo-500 flex-1
                                                           block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                                </x-jet-input>
                                            </div>
                                        </div>
                                        <div class="col-span-2 sm:col-span-2">
                                            <x-jet-label for="category_id" class="block text-sm font-medium text-gray-700">
                                                Kategoria
                                            </x-jet-label>
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <select name="category_id" id="category_id" class="focus:ring-indigo-500
                                                    focus:border-indigo-500 flex-1 block w-full rounded-none
                                                    rounded-r-md sm:text-sm border-gray-300">
                                                    <option selected disabled>Wybierz kategori??</option>
                                                    @forelse($categories as $category)
                                                        <option value="{{$category->id}}">{{$category->name}}</option>
                                                    @empty
                                                        Nie ma nic do pokazania
                                                    @endforelse
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-span-2 sm:col-span-2">
                                            <x-jet-label for="description"
                                                         class="block text-sm font-medium text-gray-700">
                                                Opis
                                            </x-jet-label>
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <x-jet-input type="text" name="description" id="description"
                                                             value="{{old('description')}}"
                                                             class="focus:ring-indigo-500 focus:border-indigo-500 flex-1
                                                                 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                                </x-jet-input>
                                            </div>
                                        </div>
                                        <div class="col-span-2 sm:col-span-2">
                                            <x-jet-label for="keywords" class="block text-sm font-medium text-gray-700">
                                                S??owa kluczowe
                                            </x-jet-label>
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <x-jet-input type="text" name="keywords" id="keywords"
                                                             value="{{old('keywords')}}"
                                                             class="focus:ring-indigo-500 focus:border-indigo-500 flex-1
                                                                 block w-full rounded-none rounded-r-md sm:text-sm border-gray-300">
                                                </x-jet-input>
                                            </div>
                                        </div>
                                        <div class="col-span-2 sm:col-span-2">
                                            <div x-data="app()" x-init="initFlatpickr">
                                                <input name="published_at" id="published_at" value="{{old('published_at')}}" placeholder="Data publikacji" x-ref="picker" class="focus:ring-indigo-500 focus:border-indigo-500 flex-1
                                                block w-full rounded-none rounded-r-md sm:text-sm border-gray-300" />
                                            </div>
                                        </div>
                                        <div class="col-span-2 sm:col-span-2">
                                            <x-jet-label for="body" class="block text-sm font-medium text-gray-700">
                                                Tre????
                                            </x-jet-label>
                                            <div class="mt-1 flex rounded-md shadow-sm">
                                                <textarea type="text" name="body" id="published_at"
                                                             class="focus:ring-indigo-500 focus:border-indigo-500 flex-1
                                                                 block w-full rounded-none rounded-r-md
                                                                 sm:text-sm border-gray-300">
                                                    {{old('body')}}
                                                </textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <x-jet-validation-errors></x-jet-validation-errors>
                                </div>
                                <div class="px-4 py-3 text-right sm:px-6">
                                    <button type="submit"
                                            class="inline-flex justify-center py-2 px-4 border border-transparent shadow-sm text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                        Zapisz
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
    @section('scripts')
        <script>
            function app() {
                return {
                    initFlatpickr() {
                        const fp = flatpickr(this.$refs.picker, {
                            locale: "pl",
                            minDate: "2020-01",
                            maxDate: "2022-01",
                            enableTime: true,
                            time_24hr: true,
                            minTime: "00:00",
                            maxTime: "23:59",
                            // dateFormat: "d.m.Y H:i",
                            dateFormat: "Y-m-d H:i:s",
                            disableMobile: "true",
                            static: false,
                        });
                    }
                }
            }
        </script>
    @endsection
</x-app-layout>
