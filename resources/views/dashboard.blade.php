<!DOCTYPE html>
<html lang="es">

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

</head>


<body>

    <x-app-layout>

        {{-- <div class="py-12"> --}}
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="page-content">
                    <div class="main-banner">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="header-text">
                                    <h6>Bienvenido a TechnoBlog</h6>
                                    <h4>
                                        <em>Explora</em> Nuestros foros más recientes
                                    </h4>
                                    <div class="main-button">
                                        <a href="/forum">Explorar Foros</a>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="mt-4">
                        <x-label>
                            Bienvenido a TechnoBlog, más abajo podrás ver nuestra información
                        </x-label>
                    </div>

                    <div class="mt-4">
                        <div class="row">
                            <div class="col-lg-8">
                                <x-label class="table-header-group">

                                    ¡Bienvenidos a TechnoBlog Fotos!

                                    En TechnoBlog, estamos encantados de presentarte una plataforma en la que podrás
                                    explorar, compartir y disfrutar de fascinantes foros relacionadas con el mundo de la
                                    tecnología. Si eres un apasionado de la tecnología, has llegado al lugar perfecto.

                                    Nuestro objetivo es crear una comunidad vibrante y dinámica donde los entusiastas de
                                    la tecnología puedan conectarse, compartir sus mejores instantáneas y participar en
                                    interesantes debates a través de nuestros foros especializados. Ya seas un tecnólogo
                                    profesional o simplemente disfrutes capturando momentos tecnológicos, aquí
                                    encontrarás un espacio para mostrar tu talento y descubrir el de otros usuarios.

                                    En TechnoBlog , la creatividad y la inspiración fluyen libremente. Nuestros usuarios
                                    tienen la posibilidad de cargar y compartir sus propias fotos, desde imágenes
                                    impresionantes de gadgets y dispositivos hasta capturas de pantalla de increíbles
                                    juegos y aplicaciones. Además, puedes explorar nuestras categorías temáticas para
                                    encontrar imágenes relacionadas con tus intereses específicos.

                                    Pero eso no es todo: nuestra plataforma también cuenta con una sección de foros
                                    interactivos, donde puedes sumergirte en discusiones apasionantes sobre los últimos
                                    avances tecnológicos, intercambiar consejos y trucos fotográficos, y conectarte con
                                    personas que comparten tus mismas inquietudes e intereses. Aquí encontrarás un
                                    espacio abierto para debatir, aprender y ampliar tus conocimientos en un entorno
                                    amigable.


                                </x-label>
                            </div>
                            <div class="col-lg-4 semi ">

                                <h2>Sé tú mismo</h2>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        {{-- </div> --}}

    </x-app-layout>

</body>
<style>
    .semi {
        background-image: url(../images/profile.jpg);
        background-position: center center;
        background-size: cover;
        min-height: 380px;
        border-radius: 23px;
        padding: 80px 60px;
    }
</style>
