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
                    {{ __('Aquí podrás crear un foro para que se vea en la página principal') }}
                </h2>
            </x-slot>
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">

                <form action="{{ route('forum.store') }}" method="POST">
                    @csrf

                    <x-validation-errors class="mb-4" />

                    <div>
                        <label for='title'>
                            Título del foro
                        </label>

                        <input type="text" name="title" value="{{ old('title') }}" id="title"
                            class="form-control mb-2" placeholder="Título del foro" required />

                        <x-input-error for="title" />
                    </div>

                    <hr>

                    <div>
                        <label for="category_id">Categoria</label>

                        <select name="category_id" id="category_id" class="form-control mb-2" required>
                            <option value="">-- Seleccione una categoría --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected(old('category_id'))>{{ $category->name }}
                                </option>
                            @endforeach
                        </select>

                    </div>

                    <hr>

                    <div>
                        <label for='description'>
                            Descripción del foro
                        </label>

                        <textarea name="description" id="description" class="form-control mb-2" placeholder="Descripción del foro" required>{{ old('description') }}</textarea>

                        <x-input-error for="description" />
                    </div>

                    <hr>

                    <div>
                        <label for='content'>
                            Contenido del foro
                        </label>

                        <textarea name="content" id="content" class="form-control mb-2" placeholder="Contenido del foro" required>{{ old('content') }}</textarea>

                        <x-input-error for="content" />
                    </div>

                    <hr>


                    {{-- <div>
                        <label for='image'>
                            Imagen del foro
                        </label>

                        <input type="text" name="image" id="image" class="form-control mb-2"
                            placeholder="Imagen del foro" required />
                    </div> --}}

                    <button type="submit" class="btn btn-primary">Crear foro</button>



                </form>


            </div>
        </div>
    </div>

</x-app-layout>
