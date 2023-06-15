<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href=" {{ asset('images/logo_login.png') }}">
    <title>TechnoBlog - Foro de tecnología</title>

    <link href="../vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('css/fontawesome.css') }}">
    <link rel="stylesheet" href="{{ asset('css/templatemo-cyborg-gaming.css') }}">
    <link rel="stylesheet" href="{{ asset('css/owl.css') }}">
    <link rel="stylesheet" href="{{ asset('css/animate.css') }}">
    <link rel="stylesheet" href="https://unpkg.com/swiper@7/swiper-bundle.min.css" />

    <style>
        #titulo {
            margin-top: 2%;
            color: #ffffff;
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
                <h2 class="font-semibold text-xl text-gray-200 leading-tight">
                    {{ __('¡Disfruta leyendo este grandioso foro!') }}
                </h2>
            </x-slot>

            <x-button>
                <a href="{{ route('forum.index') }}">Volver a los foros</a>
            </x-button>

            <div class="bg-gray-500 overflow-hidden shadow-xl sm:rounded-lg text-center">

                <label for="title" class="titulo">{{ $forum->title }}</label>

                <hr>

                <label for="category" class="blanco">Categoria:
                    {{ App\Models\Category::where('id', $forum->category_id)->first()->name }}</label>

                <hr>

                <img src="{{ $forum->imageUrl }}" alt="">

                <hr>

                <label for="description" class="blanco">{{ $forum->description }}</label>

                <hr>
                <div class="texto">
                    {!!$forum->content !!}
                </div>

                <hr>

                <label for="user" class="autor">Autor de este foro:
                    {{ App\Models\User::where('id', $forum->user_id)->first()->name }}</label>

            </div>
        </div>
    </div>
    <style>
        .blanco {
          color: white;
        }
        .titulo{
            color: white;
            font-size: 200%;
            text-align: center;
        }
        .autor{
            color: white;
            font-size: 150%;
            text-align: center;
        }
        .texto{
            color: white;
            font-size: 125%;
            text-align: center;
        }
      </style>
</x-app-layout>
