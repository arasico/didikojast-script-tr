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
                    <div class=" btn-black-register my-2  my-sm-0">Anasayfa <i class="fa fa-home" aria-hidden="true"></i>
                    </div>
                </a>
            </form>
        </div>


    </nav>


</header>

<main>


    <div class="container  register-continer" style="background-color: #fff; padding: 20px; border-radius: 10px;">


        <div class="tab   row">
            <button id="tabRegister" class="tablinks col" onclick="openTab(event, 'register')"> Üye Ol <i
                        class="fa fa-2x fa-user"
                        aria-hidden="true"></i></button>
            <button id="tablogin" class="tablinks col" onclick="openTab(event, 'login')"> Giriş Yap <i
                        class="fa fa-2x fa-key" aria-hidden="true"></i></button>

        </div>

        <form method="POST" action="{{url('register')}}">
            {!! csrf_field() !!}
            <div dir="rtl" id="register" class="tabcontent  text-right">
                @if(Session::get('success')!=null)
                    <div id="sucMessageRegister" style="display: none;" class="text-center">
                        <img src="{{asset('web/img/icon-sucsses.png')}}" alt="Smiley face" height="150" width="150">
                        <h4 class="text-center" style="padding-top: 20px;">Üyelik işleminiz başarılı bir şekilde tamamlandı.</h4>
                        <p class="text-center" style="padding-top: 10px;">
                            Lütfen hesabınızı aktif etmek için e-mail hesabınıza gidiniz.
                            مراجعه
                            نمائید. </p>
                        <div class="col-lg-12">
                            <a href="{{url('login')}}">
                                <div class=" arasico-btn-cancel col-lg-12">Geri</div>
                            </a>
                        </div>
                    </div>
                @endif
                @if($errors->any())
                    <div class="alert alt green">
                        <p>{{$errors->first()}}</p>
                        <a href="#" class="icon-close alert-close "></a>
                    </div>
                @endif
                <div id="registerPanel">
                    <p style="padding-top: 10px;">Üye olmak için aşağıdaki bölümleri doldurun.</p>

                    <div class="input-group arasico-margin-botton">
                        <input name="name" required type="text" class="col-lg arasico-input-box"
                               placeholder="Ad-Soyad">
                    </div>

                    <div class="input-group arasico-margin-botton">
                        <input name="phone" required type="text" class="col-lg arasico-input-box"
                               placeholder="Cep telefonu">
                    </div>

                    <div class="input-group arasico-margin-botton">

                        <input name="email" required type="text" class="col-lg arasico-input-box"
                               placeholder="E-mail">

                    </div>

                    <div class="input-group arasico-margin-botton">
                        <input required name="password" type="password" class="col-lg arasico-input-box"
                               placeholder="Şifre">
                    </div>

                    <div class="row">

                        <div class="col-lg-12">
                            <button type="submit" class="arasico-btn-green-submit col-lg-12"> Üye Ol</button>
                        </div>
                    </div>

                </div>


            </div>
        </form>
        <form action="{{url('login')}}" method="post">
            {{ csrf_field() }}
            @if(Session::get('error')!=null)
                <div class="alert alt green">
                    <p>{{Session::get('error')}}</p>
                    <a href="#" class="icon-close alert-close "></a>
                </div>
            @endif
            <div dir="rtl" id="login" class="tabcontent text-right">

                <p style="padding-top: 40px;">Giriş için lütfen üyelik bilgilerinizi giriniz.</p>

                <div class="input-group arasico-margin-botton">

                    <input type="text" class="col-lg arasico-input-box" placeholder="E-mail/Cep telefonu"
                           aria-label="Username" aria-describedby="basic-addon1" name="email" value="{{ old('email') }}"
                           required autofocus>

                </div>

                <div class="input-group arasico-margin-botton">

                    <input type="password" class="col-lg arasico-input-box" placeholder="Şifre"
                           aria-label="Username"
                           aria-describedby="basic-addon1" name="password" required>

                </div>

                <div class="row">
                    <div class="col-7">
                        <a href="#" onclick="openTab(event, 'forget')"><p style="padding-top: 12px;">
                            Şifremi Unuttum!
                            </p></a>
                    </div>
                    <div class="col-5">
                        <button type="submit" class=" arasico-btn-green-submit ">Giriş Yap</button>
                    </div>
                </div>


            </div>
        </form>
        <div dir="rtl" id="forget" class="tabcontent text-right">

            <div id="forgetpassword">
                <h4 style="padding-top: 40px;">Şifrenizi mi Unuttunuz ?</h4>
                <p style="padding-top: 10px;">Yeni şifre almak için lütfen e-mailinizi yazın.</p>

                <form action="{{url('forgetPassword')}}" method="post">
                    {{ csrf_field() }}
                    @if(Session::get('error')!=null)
                        <div class="alert alt green">
                            <p>{{Session::get('error')}}</p>
                            <a href="#" class="icon-close alert-close "></a>
                        </div>
                    @endif
                    <div class="input-group arasico-margin-botton">

                        <input id="txtEmail" name="email" type="email" style="margin-top: 40px;"
                               class="col-lg arasico-input-box"
                               placeholder="E-mail ">

                    </div>


                    <div class="row">

                        <div class="col-lg-12">
                            <button type="submit" class=" arasico-btn-green-submit col-lg-12">Yeni şifremi e-mailime gönder.
                            </button>
                        </div>
                    </div>
                </form>

            </div>

            <!-- Succsess message for send forget password -->
            <div id="sucMessage" style="display: none;" class="text-center">

                <img src="{{asset('web/img/icon-sucsses.png')}}" alt="Smiley face" height="150" width="150">
                <h4 class="text-center" style="padding-top: 20px;">Yeni şifreniz e-mailinize gönderilmiştir.</h4>
                <p class="text-center" style="padding-top: 10px;">Yeni şifrenizi görmek için lütfen e-mail hesabınıza gidin.
                    نمائید. </p>
                <div class="col-lg-12">
                    <a href="#" onclick="openTab(event, 'login')">
                        <div class=" arasico-btn-cancel col-lg-12">Geri</div>
                    </a>
                </div>
            </div>


        </div>


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


    function openTab(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }


    @if (isset($status))
    @if ($status=="login")
    document.getElementById("login").style.display = "block";
    document.getElementById("tablogin").className += " active";
    @elseif($status=="register")
    document.getElementById("register").style.display = "block";
    document.getElementById("registerPanel").style.display = "block";
    document.getElementById("tabRegister").className += " active";
    @elseif($status=="forgetPassword")
    document.getElementById("forget").style.display = "block";
    document.getElementById("forgetpassword").style.display = "block";
    @elseif($status=="forgetPasswordSucMessage")
    document.getElementById("forget").style.display = "block";
    document.getElementById("forgetpassword").style.display = "none";
    document.getElementById("sucMessage").style.display = "block";
    @endif
    @else
    document.getElementById("login").style.display = "block";
    document.getElementById("tablogin").className += " active";
    @endif

</script>


</body>
</html>
