<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href=" {{ asset('images/logo_login.png') }}">
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
            color: #f5e7e7;
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
                <h2 class="font-semibold text-xl text-gray-100 leading-tight">
                    {{ __('Aquí podrás ver los foros más recientes') }}
                </h2>
            </x-slot>
            <div class="bg-gray-500 overflow-hidden shadow-xl sm:rounded-lg ">
                <ul class="space-y-0 bg-repeat-space">

                    @if ($personal == true)
                        <x-button>
                            <a href="{{ route('forum.create') }}">Crear un foro</a>
                        </x-button>
                    @endif

                    @foreach ($forums as $forum)
                        <hr>
                        
                        <li class=" ">
                            <figure>
                                <img id=imagen src="{{ $forum->imageUrl }}" alt="{{ $forum->title }}">
                            </figure>
                        </li>
                        <div>

                            <h1 id=titulo class="font-semibold">{{ $forum->title }}</h1>

                            <hr class="mt-1 mb-2">
                            <span
                                class="bg-blue-100 text-blue-800 text-xs font-medium mr-2 px-2.5 py-0.5 rounded dark:bg-gray-700 dark:text-gray-100">Autor:
                                {{ $forum->user->name }}</span>
                            
                            <x-label>
                                <br/>
                                {{ $forum->description }}
                                
                            </x-label>
                            <br/>
                            <x-button>
                                <a href="{{ route('forum.show', $forum) }}">Leer este foro</a>
                            </x-button>

                            @if ($personal == true)
                                <x-button>
                                    <a href="{{ route('forum.edit', $forum) }}">Editar este foro</a>
                                </x-button>
                                
                                <form action="{{ route('forum.destroy', $forum) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <x-button type='submit'>
                                        Eliminar este foro
                                    </x-button>
                                </form>
                                
                            @endif

                        </div>
                    @endforeach
                </ul>

            </div>

        </div>

    </div>
    <style>
        .contenedor  {
          display: inline-block;
          width: auto;
          border: 1px solid black;
          padding: 10px;
        }
      </style>
      
      
</x-app-layout>
