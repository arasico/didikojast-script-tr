@extends('web.master.master')
@section('title'){{'view Search Result'}}@endsection
@section('content')
    <div class="container-fluid arasico-backcolor-ffffff " dir="rtl">
        {{--{{dd($advertisementInfo)}}--}}
        <div class=" container row arasico-div-center">
            <div class="col-lg-11 col-md-11 col-sm-11  col-xs-11 col-10" style="background-color: #fff;">
                <div class="d-flex flex-row  ">
                    <div class="p-2"><i class="fa fa-1x fa-home" style="font-size: 1.3em;" aria-hidden="true"></i></div>
                    <div class="p-2">گمشده ها<span style="padding-right:10px; color: #05956f;">/</span></div>
                    <div class="p-2">لوازم خانگی</div>

                </div>
            </div>

            <!-- back panel -->
            <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1 col-2" style="background-color: #fff;">
                <a href="{{url('search')}}" style="text-decoration: none; cursor: pointer; ">
                    <div class="back-view-search-resualt-box"><i class="fa fa-angle-left" aria-hidden="true"></i></div>
                </a>
            </div>

        </div>


        <!-- view search resualt panel -->
        <div class="container row search-resualt-view-box text-right arasico-div-center ">

            <div class="col-lg-10  col-md-9 col-sm-8 col-xs-7 col-8 arasico-tittle-text-item">{{$advertisementInfo->title}}</div>
            <div class="col-lg-2 col-md-3 col-sm-4 col-xs-2 col-3 text-center"><i class="fa fa-clock-o"
                                                                                  style="color: #dadada;"
                                                                                  aria-hidden="true"></i></span> <span
                        style="color: #333;">{{jDate::forge(date('Y/m/d', (integer)$advertisementInfo->create_at))->format('%d %B %Y')}}</span>
            </div>
            <div class="col-lg-6 arasico-text-style-search-resualt ">
                <p>{{$advertisementInfo->description}}</p>
            </div>
            <div class="col-lg-6  ">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        @if(count($advertisementInfo->galleries)!=0)
                            @foreach($advertisementInfo->galleries as $key=> $value)
                                @if($key==0)
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}"
                                        class="active"></li>
                                @else
                                    <li data-target="#carouselExampleIndicators" data-slide-to="{{$key}}"></li>
                                @endif
                            @endforeach
                        @else
                            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                        @endif


                    </ol>
                    <div class="carousel-inner">
                        @if(count($advertisementInfo->galleries)!=0)
                            @foreach($advertisementInfo->galleries as $key=> $value)
                                @if($key==0)
                                    <div class="carousel-item active">
                                        <img class="d-block w-100"
                                             src="{{asset('/files/advertisement/' . $advertisementInfo->id . '/' . $value->image)}}"
                                             alt="didikojast.ir">
                                    </div>
                                @else
                                    <div class="carousel-item">
                                        <img class="d-block w-100"
                                             src="{{asset('/files/advertisement/' . $advertisementInfo->id . '/' . $value->image)}}"
                                             alt="didikojast.ir">
                                    </div>
                                @endif


                            @endforeach
                        @else
                            <div class="carousel-item active">
                                <img class="d-block w-100" src="{{asset('web/img/no-image.jpg')}}" alt="didikojast.ir">
                            </div>
                        @endif
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

            </div>


            <div class="col-lg-12">
                <div class="row arasico-date-style-text">
                    @if($advertisementInfo->type=="lost")
                        <span> Kayıp tarihi : </span>
                    @elseif($advertisementInfo->type=="found")
                        <span> Bulunma tarihi : </span>
                    @endif
                    <span> {{jDate::forge(date('Y/m/d', (integer)$advertisementInfo->publish_at))->format('%d/%B/%Y')}} </span>
                </div>
            </div>
            <div class="col-lg-4" style="padding-top: 50px;">
                <div id="myBtn" class="col-lg-11 btn-gereen-see-more btn-margin">İrtibat Bilgileri</div>
            </div>


        </div>


    </div>



    <!-- The Modal after login -->
    <div id="myModal" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>

            <div class="circle-avatar-popup">
                <i class="fa fa-user-o fa-2x avatar-style-popup" aria-hidden="true"></i>
            </div>

            <p style="padding-top: 10px;">{{$advertisementInfo->name}}</p>

            <p> <span>{{$advertisementInfo->email}}</span> : <span>e-mail </span></p>
            <hr width="300">
            <p><span>Cep telefonu :</span> <span>{{$advertisementInfo->phone}}</span></p>

        </div>

    </div>

    <!-- The Modal Befor login login -->
    <div id="myModalbeforlogin" class="modal">

        <!-- Modal content -->
        <div class="modal-content">
            <span class="close">&times;</span>

            <div class="circle-avatar-popup">
                <i class="fa fa-exclamation-triangle fa-2x avatar-style-popup" aria-hidden="true"></i>


            </div>
            <p dir="ltl" style="padding-top: 10px;"> Daha fazla bilgi görmek için giriş yapınız.</p>


            <hr width="300">
            <div class="container row arasico-div-center text-center">
                <div class="col-lg-6" style="padding-top: 50px;">
                    <div onclick="location.href='{{url('login')}}'"
                         class="col-lg-11 btn-gereen-see-more btn-margin">Giriş Yap
                    </div>
                </div>
                <div class="col-lg-6" style="padding-top: 50px;">
                    <div onclick="location.href='{{url('login')}}'"
                         class="col-lg-11 btn-gereen-see-more btn-margin">Üye Ol
                    </div>
                </div>

            </div>


        </div>

    </div>

@endsection
@section('script')
    <script>
        $('#myCarousel').on('slide.bs.carousel', function () {
            // do something…
        });
    </script>


    <script>
        // Get the modal
        var modal = document.getElementById('myModal');

        // Get the modal befor ogin
        var modalbeforlogin = document.getElementById('myModalbeforlogin');

        // Get the button that opens the modal
        var btn = document.getElementById("myBtn");

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // Get the <span> element that closes the modal
        var spantwo = document.getElementsByClassName("close")[1];

        // When the user clicks the button, open the modal
        btn.onclick = function () {
            @if(\Auth::check())
                modal.style.display = "block";
            @else
                modalbeforlogin.style.display = "block";
            @endif
        }

        // When the user clicks on <span> (x), close the modal
        span.onclick = function () {
            modal.style.display = "none";
        }

        // When the user clicks on <span> (x), close the modal
        spantwo.onclick = function () {

            modalbeforlogin.style.display = "none";
        }

        // When the user clicks anywhere outside of the modal, close it
        window.onclick = function (event) {
            if (event.target == modal || event.target == modalbeforlogin) {
                modal.style.display = "none";
                modalbeforlogin.style.display = "none";
            }
        }


        $(document).keyup(function (e) {
            if (e.keyCode == 27) {
                modal.style.display = "none";
                modalbeforlogin.style.display = "none";
            }
        });
    </script>



@endsection


