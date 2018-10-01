<html lang="fa-IR">
<head>

    <link rel='shortcut icon' type='image/x-icon' href="{{asset('favicon.ico')}}"/>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <title> Tittle sample </title>

    <!-- Bootstrap file directly  -->
    <link rel="stylesheet" href="{{asset('web/bootstrap-4.0.0-beta.2/dist/css/bootstrap.min.css')}}"
          integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <!-- project CSS file directly  -->
    <link rel="stylesheet" href="{{asset('web/css/style.css')}}">

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body class="arasico-backgoround-color-defualt arasico-background-image-vector arasico-font-face ">
<header>

    <nav class="navbar   navbar-light bg-transparent">
        <a class="navbar-brand" href="{{url('')}}"> <img src="{{asset('web/img/logo-didikojast-fff.svg')}}"
                                                         alt="Smiley face"
                                                         height="82" width="150"></a>
        {{--<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">--}}
        {{--<form class="form-inline my-2 my-lg-0 left">--}}

        {{--<a href="#">--}}
        {{--<div class=" btn-black-register my-2 my-sm-0" >خانه <i class="fa fa-home" aria-hidden="true"></i></div>--}}
        {{--</a>--}}
        {{--</form>--}}
        {{--</button>--}}
        <div id="menuBeforLogin" class="  navbar-menu" id="navbarSupportedContent">

            <form class="form-inline my-2 my-lg-0 left">

                <a href="{{url('')}}">
                    <div class=" btn-black-register my-2  my-sm-0">خانه <i class="fa fa-home" aria-hidden="true"></i>
                    </div>
                </a>
            </form>
        </div>


    </nav>


</header>

<main>


    <div class="container  register-continer" style="background-color: #fff; padding: 20px; border-radius: 10px;">

        <form action="{{url('changeForgetPassword')}}" method="post" id="confirmPassword">
            {{ csrf_field() }}
            @if ($errors->any())
                <div class="alert alt green">
                    @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                    @endforeach
                    <a href="#" class="icon-close alert-close "></a>
                </div>
            @endif
            <input type="text" class="col-lg arasico-input-box" hidden readonly
                   name="remember_token" value="{{$user->remember_token}}">

            <p dir="rtl" style="padding-top: 40px; text-align: right;">Lüfen yeni şifrenizi giriniz.</p>

            <div class="input-group arasico-margin-botton">

                <input type="password" class="col-lg arasico-input-box" placeholder="Şifre"
                       name="password"
                       required autofocus>
            </div>

            <div class="input-group arasico-margin-botton">

                <input type="password" class="col-lg arasico-input-box" placeholder="Şifre(Tekrar)"
                       name="password_confirmation" required autofocus>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-gereen-see-more btn-lg col-4">Kaydet</button>

            </div>


        </form>


        <form action="" id="sucsess" class="text-center " style="display: none;">
            <img src="{{asset('web/img/icon-sucsses.png')}}" alt="Smiley face" height="150" width="150">
            <h4 dir="rtl" class="text-center" style="padding-top: 20px;">Yeni şifreniz başarılı bir şekilde oluşturulmuştur.</h4>

            <button type="button" onclick="location.href='{{url('login')}}'" class="btn btn-gereen-see-more btn-lg">Giriş Yap

            </button>

        </form>

    </div>


</main>


<footer>

</footer>


<!-- Bootstrap file directly  -------------------------------------------------------------------------------------------------------------------------------------------------------->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js"
        integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh"
        crossorigin="anonymous"></script>
<script src="{{asset('web/bootstrap-4.0.0-beta.2/dist/js/bootstrap.min.js')}}"
        integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ"
        crossorigin="anonymous"></script>
<!-- Bootstrap file directly  ------------------------------------------------------------------------------------------------------------------------------------------------------>


<script>

    @if(isset($status))
    document.getElementById("confirmPassword").style.display = "none";
    document.getElementById("sucsess").style.display = "block";
    @endif

</script>


</body>
</html>
