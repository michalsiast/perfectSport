<!doctype html>
<html lang="{{app()->getLocale()}}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    {!! SEOMeta::generate() !!}

    <link rel="apple-touch-icon" sizes="57x57" href="{{asset('image/favicon/apple-icon-57x57.png')}}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{asset('image/favicon/apple-icon-60x60.png')}}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{asset('image/favicon/apple-icon-72x72.png')}}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{asset('image/favicon/apple-icon-76x76.png')}}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{asset('image/favicon/apple-icon-114x114.png')}}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{asset('image/favicon/apple-icon-120x120.png')}}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{asset('image/favicon/apple-icon-144x144.png')}}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{asset('image/favicon/apple-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('image/favicon/apple-icon-180x180.png')}}">
    <link rel="icon" type="image/png" sizes="192x192" href="{{asset('image/favicon/android-icon-192x192.png')}}">
    <link rel="icon" type="image/png" sizes="32x32" href="{{asset('image/favicon/favicon-32x32.png')}}">
    <link rel="icon" type="image/png" sizes="96x96" href="{{asset('image/favicon/favicon-96x96.png')}}">
    <link rel="icon" type="image/png" sizes="16x16" href="{{asset('image/favicon/favicon-16x16.png')}}">
    <link rel="manifest" href="{{asset('image/favicon//manifest.json')}}">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">


{{--    <link href="{{asset('css/vendors/bootstrap.css')}}" rel="stylesheet">--}}

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/aos.css')}}">
    <link rel="stylesheet" href="{{asset('css/fontawesome.css')}}">
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <link rel="stylesheet" href="{{asset('css/mobile.css')}}">
    <link rel="stylesheet" href="{{asset('css/owlcarousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/sidebar.css')}}">
    <link rel="stylesheet" href="{{asset('css/slick-slider.css')}}">
    <link rel="stylesheet" href="{{asset('css/nice-select.css')}}">
    <link rel="stylesheet" href="{{asset('css/main_2.css')}}">

    <script src="{{asset('js/jquery-3-6-0.min.js')}}"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <link href="{{asset('css/main.css')}}?version=1" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.min.css" integrity="sha512-Ne9/ZPNVK3w3pBBX6xE86bNG295dJl4CHttrCp3WmxO+8NQ2Vn8FltNr6UsysA1vm7NE6hfCszbXe3D6FUNFsA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{asset('css/magnific-popup.css')}}">
    <script>
        const BASE_URL = '{{url()->to('/')}}/';
        const CSRF_TOKEN = '{{csrf_token()}}';
        const SITE_LANG = '{{app()->getLocale()}}';
    </script>

    @stack('scrips.head.bottom')
</head>
<body class="homepage4-body">

<!--===== PRELOADER STARTS =======-->
<div id="preloader">
    <div id="ctn-preloader" class="ctn-preloader">
        <div class="animation-preloader">
            <div class="spinner"></div>
            <div class="txt-loading">
              <span data-text-preloader="P" class="letters-loading">
                  P
              </span>
                <span data-text-preloader="O" class="letters-loading">
                 O
              </span>
                <span data-text-preloader="O" class="letters-loading">
                  O
              </span>
                <span data-text-preloader="L" class="letters-loading">
                  L
              </span>
                <span data-text-preloader="W" class="letters-loading">
                  W
              </span>
                <span data-text-preloader="A" class="letters-loading">
                  A
              </span>
                <span data-text-preloader="S" class="letters-loading">
                 S
              </span>
                <span data-text-preloader="H" class="letters-loading">
                  H
              </span>
            </div>
        </div>
        <div class="loader">
            <div class="row">
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-left">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
                <div class="col-3 loader-section section-right">
                    <div class="bg"></div>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== PRELOADER ENDS =======-->

<!--===== PROGRESS STARTS=======-->
<div class="paginacontainer">
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"/>
        </svg>
    </div>
</div>
<!--===== PROGRESS ENDS=======-->

<!--=====HEADER START=======-->
<header>
    <div class="header-area homepage4 header header-sticky d-none d-lg-block " id="header">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="header-elements">
                        <div class="site-logo">
                            <a href="/"><img src="{{asset('images/logo.png')}}" alt=""></a>
                        </div>
                        <div class="main-menu">
                            <ul>
                                @include('default.nav_item.main', ['name' => 'main'])
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<!--=====HEADER END =======-->

<!--===== MOBILE HEADER STARTS =======-->
<div class="mobile-header mobile-haeder4 d-block d-lg-none">
    <div class="container-fluid">
        <div class="col-12">
            <div class="mobile-header-elements">
                <div class="mobile-logo">
                    <a href="/"><img src="{{asset('images/logo.png')}}" alt=""></a>
                </div>
                <div class="mobile-nav-icon dots-menu">
                    <i class="fa-solid fa-bars"></i>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="mobile-sidebar mobile-sidebar4">
    <div class="logosicon-area">
        <div class="logos">
            <a href="/"><img src="{{asset('images/logo.png')}}" alt=""></a>
        </div>
        <div class="menu-close">
            <i class="fa-solid fa-xmark"></i>
        </div>
    </div>
    <div class="mobile-nav mobile-nav1">
        <ul class="mobile-nav-list nav-list1">
            @include('default.nav_item.main', ['name' => 'main'])
        </ul>

        <div class="allmobilesection">
            <div class="single-footer">
                <h3>Dane kontaktowe</h3>
                <div class="footer1-contact-info">
                    <div class="contact-info-single">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-phone-volume"></i>
                        </div>
                        <div class="contact-info-text">
                            <a href="tel:{{str_replace(' ', '', getConstField('phone'))}}">{{getConstField('phone')}}</a>
                            <a href="tel:{{str_replace(' ', '', getConstField('phone2'))}}">{{getConstField('phone2')}}</a>
                        </div>
                    </div>

                    <div class="contact-info-single">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-envelope"></i>
                        </div>
                        <div class="contact-info-text">
                            <a href="mailto:{{getConstField('email')}}">{{getConstField('email')}}</a>
                        </div>
                    </div>

                    <div class="contact-info-single">
                        <div class="contact-info-icon">
                            <i class="fa-solid fa-location-dot"></i>
                        </div>
                        <div class="contact-info-text">
                            <a href="{{getConstField('google_map')}}">
                                {{getConstField('company_address')}}<br>
                                {{getConstField('company_post_code')}} {{getConstField('company_city')}}
                            </a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
{{--@include('default._helpers.lang_nav')--}}

@yield('content')

<div class="footer4-section-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="copyright-area text-center">
                    <p><?php echo date("Y") ?> &copy; Wszelkie prawa zastrzeżone. Strona stworzona przez: <a href="https://palmax.com.pl">Palmax</a></p>
                </div>
            </div>
        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
<script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/simplelightbox/2.10.3/simple-lightbox.jquery.min.js" integrity="sha512-iJCzEG+s9LeaFYGzCbDInUbnF03KbE1QV1LM983AW5EHLxrWQTQaZvQfAQgLFgfgoyozb1fhzhe/0jjyZPYbmQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><script src="{{asset('js/frontend.js')}}"></script>
<script src="{{asset('js/main.min.js')}}"></script>
<script src="{{asset('js/jquery.magnific-popup.min.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/fontawesome.js')}}"></script>
<script src="{{asset('js/aos.js')}}"></script>
<script src="{{asset('js/counter.js')}}"></script>
<script src="{{asset('js/sidebar.js')}}"></script>
<script src="{{asset('js/magnific-popup.js')}}"></script>
<script src="{{asset('js/mobilemenu.js')}}"></script>
<script src="{{asset('js/owlcarousel.min.js')}}"></script>
<script src="{{asset('js/nice-select.js')}}"></script>
<script src="{{asset('js/waypoints.js')}}"></script>
<script src="{{asset('js/gsap.min.js')}}"></script>
<script src="{{asset('js/ScrollTrigger.min.js')}}"></script>
<script src="{{asset('js/Splitetext.js')}}"></script>
<script src="{{asset('js/ripples.js')}}"></script>
<script src="{{asset('js/slick-slider.js')}}"></script>
<script src="{{asset('js/circle-progress.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>

@stack('scripts.body.bottom')
</body>
</html>
