<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href="images/logo_login.png">
    <title>TechnoBlog - Foro de tecnología</title>

    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-cyborg-gaming.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <style>
        #titulo {
            margin-top: 2%;
            color: #311e1e;
            font-size: 200%;
        }

        #imagen {
            border-radius: 8px;
            aspect-ratio: 16/9;
            object-fit: cover;
        }
    </style>
</head>


<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                    {{ __('Aquí podrás ver los foros más recientes') }}
                </h2>
            </x-slot>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                <ul class="space-y-8">

                    @foreach ($forums as $forum)
                        <li class="grid grid-cols-2 gap-4">
                            <figure>
                                <img id=imagen src="{{ $forum->image }}" alt="{{ $forum->title }}">
                            </figure>

                            <div>

                                <h1 id=titulo class="font-semibold">{{ $forum->title }}</h1>

                                <hr class="mt-1 mb-2">

                                <span
                                    class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">Autor:
                                    {{ $forum->user->name }}</span>

                                <x-label>
                                    {{ $forum->description }}
                                </x-label>

                                <x-button>
                                    <a href="{{ route('forum.show', $forum) }}">Leer este foro</a>
                                </x-button>
                            </div>

                        </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>

</x-app-layout>
