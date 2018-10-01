<html lang="fa-IR">
<head>

    <link rel='shortcut icon' type='image/x-icon' href="{{asset('favicon.ico')}}"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>


    <!-- Bootstrap file directly  -->
    <link rel="stylesheet" href="{{asset('web/bootstrap-4.0.0-beta.2/dist/css/bootstrap.min.css')}}"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- project CSS file directly  -->
    <link rel="stylesheet" href="{{asset('web/css/style.css')}}">

    <!-- project javasscript dropzoon file directly  -->
    <script src="{{asset('web/js/dropzone.js')}}"></script>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- selection  -->
    <link href="{{asset('web/css/select2.min.css')}}" rel="stylesheet"/>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('web/css/style.css') }}" rel="stylesheet">
    @yield('css')

</head>
<body class="arasico-backgoround-color-defualt  arasico-font-face ">
<header class="arasico-background-image-vector">

    <nav class="navbar   navbar-light bg-transparent">
        <a class="navbar-brand  " href="{{url('')}}"> <img src="{{asset('web/img/logo-didikojast-fff.svg')}}"
                                                         alt="Smiley face"
                                                         height="" width="100" ></a>
        {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
        {{--<form class="form-inline my-2 my-lg-0 left">--}}

        {{--<a href="#">--}}
        {{--<div class=" btn-black-register my-2 my-sm-0" >خانه <i class="fa fa-home" aria-hidden="true"></i></div>--}}
        {{--</a>--}}
        {{--</form>--}}
        {{--</button>--}}
        @if(\Auth::check())
            <div id="menuAfterLogin" class="  navbar-menu" id="navbarSupportedContent">

                <div class="dropdown" style="float:right;">

                    <button class="dropbtn"><i class="fa fa-angle-down" style="padding: 10px 10px;"
                                               aria-hidden="true"></i>
                        <span style="padding-top: 10px;">{{\Auth::user()->name}}</span>
                        <div class="avator-didi "></div>
                    </button>
                    <div class="dropdown-content">
                        <a href="{{url('advertisement')}}"> Anasayfa <i class="fa fa-home" aria-hidden="true"></i></a>
                        <a href="{{url('advertisement')}}">Yeni İlan Ver <i class="fa fa-bullhorn"
                                                                           aria-hidden="true"></i></a>
                        <a href="{{url('profile')}}">Profilim <i class="fa fa-user-o" aria-hidden="true"></i></a>
                        <a href="{{url('profile/my-post')}}">İlanlarım <i class="fa fa-bell-o" aria-hidden="true"></i></a>
                        <a href="{{url('logout')}}"> Çıkış <i class="fa fa-power-off" aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>

        @else
            <div id="menuBeforLogin" class="  navbar-menu" id="navbarSupportedContent">

                <form class="form-inline my-2 my-lg-0 left">

                    <a href="{{url('login')}}">
                        <div class=" btn-black-register my-2  my-sm-0">Giriş Yap / Yeni Üyelik</div>
                    </a>
                </form>
            </div>

        @endif
    </nav>


    <div dir="ltl" class=" container text-center   index-up-part">


    </div>


</header>

<main>

    @yield('content')

</main>


<footer>
    <div class="container-fluid footer-box">
        <a href="http://www.didikojast.ir"> <img style="margin-top: 50px;"
                                                 src="{{asset('web/img/logo-didikojast-fff.svg')}}" alt="Smiley face"
                                                 height="82" width="150"></a>

        <p style="font-size: 1em; color: #bebebe; padding-top: 60px;" dir="rtl">ساخته شده با <span
                    style="color: #f12149;"><i class="fa fa-heart" aria-hidden="true"></i></span> در ایران</p>
    </div>

</footer>


<!-- Bootstrap file directly  -------------------------------------------------------------------------------------------------------------------------------------------------------->
<script src="{{ asset('admin/js/jquery.min.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src="{{asset('web/bootstrap-4.0.0-beta.2/dist/js/bootstrap.min.js')}}"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
<!-- Bootstrap file directly  ------------------------------------------------------------------------------------------------------------------------------------------------------>


<script>

    function search() {
        alert("Search is true");

    }


</script>
<!-- -------------------------------------------- -->
<!-- Select City js and Funcation from select 2 -->
<!-- -------------------------------------------- -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
<script>

    $(".js-example-placeholder-single").select2({
        placeholder: "انتخاب شهر",
        allowClear: false
    });


</script>
@yield('script')

</body>
</html>


