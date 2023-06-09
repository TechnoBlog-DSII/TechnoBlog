<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">

    <link rel="shortcut icon" href=" {{ asset('images/logo_login.png') }}">
    <title>TechnoBlog - Foro de tecnología</title>

    <link href="{{ asset('/vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">

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
    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-slot name="header">
                <h2 class="font-semibold text-xl text-gray-200 leading-tight">
                    {{ __('Aquí podrás crear un foro para que se vea en la página principal') }}
                </h2>
            </x-slot>
            
            <x-button>
                <a href="{{ route('forum.index', ['personal' => true]) }}">Volver a mis foros</a>
            </x-button>
            <br>
            <div class="bg-gray-500 overflow-hidden shadow-xl sm:rounded-lg">

                <form action="{{ route('forum.update', $forum) }}" method="POST" enctype="multipart/form-data">
                    @csrf

                    @method('PUT')

                    <x-validation-errors class="mb-4" />

                    <div>
                        <label for='title' style="font-size: 200%" class="ml-4">
                            Título del foro
                        </label>

                        <input type="text" name="title" value="{{ old('title', $forum->title) }}" id="title"
                            class="form-control mb-2 ml-2 bg-gray-400" placeholder="Título del foro" required />

                        <x-input-error for="title" />
                    </div>

                    <hr>

                    <div class="mb-6 relative">

                        <figure>
                            <img name='imgPreview' id=imgPreview src="{{ old('imgPreview', $forum->imageUrl) }}"
                                class="aspect-[16/9] w-full object-cover object-center" alt="{{ $forum->title }}">
                        </figure>

                        <div class="absolute top-8 right-8">
                            <label class="flex items-center px-4 py-2 bg-white rounded-lg cursor-pointer">

                                <i class="fa-solid fa-camera mr-2 ml-2"></i>
                                Actualizar imagen
                                <input type="file" name="image" id="" accept="image/*"
                                    onchange="previewImage(event, '#imgPreview')" class="hidden" />
                            </label>
                        </div>

                    </div>
                    <hr>

                    <div>
                        <label for="category_id" style="font-size: 200%" class="ml-4">Categoria</label>

                        <select name="category_id" id="category_id" class="form-control mb-2 ml-4 bg-gray-400" required>
                            <option value="">-- Seleccione una categoría --</option>
                            @foreach ($categories as $category)
                                <option value="{{ $category->id }}" @selected(old('category_id', $forum->category_id) == $category->id)>{{ $category->name }}
                                </option>
                            @endforeach
                        </select>

                    </div>

                    <hr>

                    <div>
                        <label for='description'style="font-size: 200%" class="ml-4">
                            Descripción del foro
                        </label>

                        <textarea name="description" id="description" class="form-control mb-2 ml-4 bg-gray-400" placeholder="Descripción del foro" required>{{ old('description', $forum->description) }}</textarea>

                        <x-input-error for="description" />
                    </div>

                    <hr>

                    <div class="mb-4 mt-4 h-max">
                        <label for='content' class="mb-4 mt-4 ml-4  "style="font-size: 200%" >
                            Contenido del foro
                        </label>

                        <textarea name="content" id="editor" class="form-control mb-2 ml-4 bg-gray-400" placeholder="Contenido del foro" required>{{ old('content', $forum->content) }}</textarea>


                        <x-input-error for="content" />

                    </div>

                    <hr>
                    <br>
                    <div style="display: flex; justify-content: space-around; margin:auto; align-items: baseline; align-content:center">
                    <button type="submit" class="inline-flex items-center centrado px-4 py-4 bg-gray-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-400 focus:bg-gray-700 active:bg-cyan-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">Actualizar foro</button>
                    </div>


                </form>


            </div>
        </div>
    </div>

</x-app-layout>

<script src="https://cdn.ckeditor.com/ckeditor5/38.0.1/classic/ckeditor.js">
</script>

<script>
    
    ClassicEditor
        .create(document.querySelector('#editor'))
        
        .catch(error => {
            console.error(error);
        });

    function previewImage(event, querySelector) {

        //Recuperamos el input que desencadeno la acción
        const input = event.target;

        //Recuperamos la etiqueta img donde cargaremos la imagen
        $imgPreview = document.querySelector(querySelector);

        // Verificamos si existe una imagen seleccionada
        if (!input.files.length) return

        //Recuperamos el archivo subido
        file = input.files[0];

        //Creamos la url
        objectURL = URL.createObjectURL(file);

        //Modificamos el atributo src de la etiqueta img
        $imgPreview.src = objectURL;

    }
</script>
