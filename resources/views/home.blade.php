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
    <!-- ***** Preloader Start ***** -->
    <div id="js-preloader" class="js-preloader">
        <div class="preloader-inner">
            <span class="dot"></span>
            <div class="dots">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </div>
    <!-- ***** Preloader End ***** -->

    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="/" class="logo">
                            <img src="images/LogoTechnoblog.png" alt="">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Search End ***** -->

                        <!-- ***** Search End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">


                            @if (Route::has('login'))
                                @auth

                                    <li><a href="{{ route('forum.index') }}" class="active">Explorar foros</a></li>
                                    {{-- <li> <a href="{{ url('/dashboard') }}">{{ auth()->user()->name }}</a></li> --}}
                                @else
                                    <li><a href="{{ route('login') }}" class="active">Explorar foros</a></li>
                                    <li> <a href="{{ route('login') }}">Iniciar Sesión</a></li>
                                    @if (Route::has('register'))
                                        <li><a href="{{ route('register') }}">Registrarse</a></li>
                                    @endif
                                    {{-- <li><a href="streams.html"></a></li> --}}
                                @endauth

                            @endif
                        </ul>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="page-content">

                    <!-- ***** Banner Start ***** -->
                    <div class="main-banner">
                        <div class="row">
                            <div class="col-lg-7">
                                <div class="header-text">
                                    <h6>Bienvenido a TechnoBlog</h6>
                                    <h4><em>Explora</em> Nuestros foros populares</h4>
                                    <div class="main-button">
                                        <a href="/register ">Explorar ahora</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- ***** Banner End ***** -->

                    <!-- ***** Most Popular Start ***** -->
                    <div class="most-popular">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="heading-section">
                                    <h4><em>Foros</em> Más populares</h4>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-sm-6">
                                        <a href="/register">
                                            <div class="item">
                                                <img src="images/popular-01.jpg" alt="">
                                                <h4>Fortnite<br><span>Sandbox</span></h4>
                                                <ul>
                                                    <li><i class="fa fa-star"></i> 4.8</li>
                                                    <li><i class="fa fa-download"></i> 2.3M</li>
                                                </ul>
                                        </a>
                                    </div>
                                </div>
                                <div class="col-lg-3 col-sm-6">
                                    <a href="/register">
                                        <div class="item">
                                            <img src="images/popular-02.jpg" alt="">
                                            <h4>PubG<br><span>Battle S</span></h4>
                                            <ul>
                                                <li><i class="fa fa-star"></i> 4.8</li>
                                                <li><i class="fa fa-download"></i> 2.3M</li>
                                            </ul>
                                    </a>
                                </div>
                            </div>
                            <div class="col-lg-3 col-sm-6">
                                <a href="/register">
                                    <div class="item">
                                        <img src="images/popular-03.jpg" alt="">
                                        <h4>Dota2<br><span>Steam-X</span></h4>
                                        <ul>
                                            <li><i class="fa fa-star"></i> 4.8</li>
                                            <li><i class="fa fa-download"></i> 2.3M</li>
                                        </ul>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-3 col-sm-6">
                            <a href="/register">
                                <div class="item ">
                                    <img src="images/popular-02.jpg" alt="">
                                    <h4>Mini Craft<br><span>Legendary</span></h4>
                                    <ul>
                                        <li><i class="fa fa-star"></i> 4.8</li>
                                        <li><i class="fa fa-download"></i> 2.3M</li>
                                    </ul>
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <a href="/register">
                            <div class="item">
                                <img src="images/popular-01.jpg" alt="">
                                <h4>Eagles Fly<br><span>Matrix Games</span></h4>
                                <ul>
                                    <li><i class="fa fa-star"></i> 4.8</li>
                                    <li><i class="fa fa-download"></i> 2.3M</li>
                                </ul>
                        </a>
                    </div>
                </div>

                <div class="col-lg-3 col-sm-6">
                    <a href="/register">
                        <div class="item">
                            <img src="images/popular-04.jpg" alt="">
                            <h4>CS-GO<br><span>Legendary</span></h4>
                            <ul>
                                <li><i class="fa fa-star"></i> 4.8</li>
                                <li><i class="fa fa-download"></i> 2.3M</li>
                            </ul>
                    </a>
                </div>
            </div>

            <div class="col-lg-3 col-sm-6">
                <a href="/register">
                    <div class="item">
                        <img src="images/popular-07.jpg" alt="">
                        <h4>Warface<br><span>Max 3D</span></h4>
                        <ul>
                            <li><i class="fa fa-star"></i> 4.8</li>
                            <li><i class="fa fa-download"></i> 2.3M</li>
                        </ul>
                </a>
            </div>
        </div>
        <div class="col-lg-3 col-sm-6">
            <a href="/register">
                <div class="item">
                    <img src="images/popular-08.jpg" alt="">
                    <h4>Warcraft<br><span>Legend</span></h4>
                    <ul>
                        <li><i class="fa fa-star"></i> 4.8</li>
                        <li><i class="fa fa-download"></i> 2.3M</li>
                    </ul>
            </a>
        </div>
    </div>
    <div class="col-lg-12">
        <div class="main-button">
            <a href="/register">Descubrir temas populares</a>
        </div>
    </div>
    </div>
    </div>
    </div>
    </div>
    <!-- ***** Most Popular End ***** -->

    <!-- ***** Gaming Library Start ***** -->
    <div class="gaming-library">
        <div class="col-lg-12">
            <div class="heading-section">
                <h4><em>Nuestra librería</em> de tu interés</h4>
            </div>
            <div class="item">
                <ul>
                    <li><img src="images/game-01.jpg" alt="" class="templatemo-item"></li>
                    <li>
                        <h4>Dota 2</h4><span>Sandbox</span>
                    </li>
                    <li>
                        <h4>Date Added</h4><span>24/08/2036</span>
                    </li>
                    <li>
                        <h4>Hours Played</h4><span>634 H 22 Mins</span>
                    </li>
                    <li>
                        <h4>Currently</h4><span>Downloaded</span>
                    </li>
                    <li>
                        <div class="main-border-button "><a href="/register">Ver foro</a></div>
                    </li>
                </ul>
            </div>
            <div class="item">
                <ul>
                    <li><img src="images/game-02.jpg" alt="" class="templatemo-item"></li>
                    <li>
                        <h4>Fortnite</h4><span>Sandbox</span>
                    </li>
                    <li>
                        <h4>Date Added</h4><span>22/06/2036</span>
                    </li>
                    <li>
                        <h4>Hours Played</h4><span>740 H 52 Mins</span>
                    </li>
                    <li>
                        <h4>Currently</h4><span>Downloaded</span>
                    </li>
                    <li>
                        <div class="main-border-button"><a href="/register">Ver foro</a></div>
                    </li>
                </ul>
            </div>
            <div class="item last-item">
                <ul>
                    <li><img src="images/game-03.jpg" alt="" class="templatemo-item"></li>
                    <li>
                        <h4>CS-GO</h4><span>Sandbox</span>
                    </li>
                    <li>
                        <h4>Date Added</h4><span>21/04/2036</span>
                    </li>
                    <li>
                        <h4>Hours Played</h4><span>892 H 14 Mins</span>
                    </li>
                    <li>
                        <h4>Currently</h4><span>Downloaded</span>
                    </li>
                    <li>
                        <div class="main-border-button "><a href="/register">Ver foro</a></div>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-lg-12">
            <div class="main-button">
                <a href="/register">Explorar gustos</a>
            </div>
        </div>
    </div>
    <!-- ***** Gaming Library End ***** -->
    </div>
    </div>
    </div>
    </div>

    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <p>Copyright © 2036 <a href="#">Cyborg Gaming</a> Company. All rights reserved.

                        <br>Design: <a href="https://templatemo.com" target="_blank"
                            title="free CSS templates">TemplateMo</a> Distributed By <a href="https://themewagon.com"
                            target="_blank">ThemeWagon</a>
                    </p>
                </div>
            </div>
        </div>
    </footer>


    <!-- Scripts -->
    <!-- Bootstrap core JavaScript -->
    <script src="{{ asset('vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <script src="{{ asset('js/isotope.min.js') }}"></script>
    <script src="{{ asset('js/owl-carousel.js') }}"></script>
    <script src="{{ asset('js/tabs.js') }}"></script>
    <script src="{{ asset('js/popup.js') }}"></script>
    <script src="{{ asset('js/custom.js') }}"></script>


</body>

</html>
