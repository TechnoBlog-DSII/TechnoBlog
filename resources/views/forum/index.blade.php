<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Aquí podrás ver los foros más recientes') }}
                </h2>
            </x-slot>
            <ul>

                @foreach ($forums as $forum)
                    <li class="grid grid-cols-2">
                        <figure>
                            <img src="{{ $forum->image }}" alt="">
                        </figure>

                        <div>
                            <h1 class="text-xl font semibold">
                                {{ $forum->title }}
                            </h1>
                            <p class="text-sm text-gray-600">
                                {{ $forum->description }}
                            </p>

                            <button>
                                <a href="{{ route('forum.show', $forum) }}">Leer este foro</a>
                            </button>
                        </div>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>

</x-app-layout>
