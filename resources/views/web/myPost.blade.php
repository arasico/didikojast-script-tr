@extends('web.master.master')
@section('title'){{'My Post'}}@endsection
@section('content')


    {{--<div class="container-fluid arasico-backcolor-ffffff" dir="ltl">--}}

    {{--<div class="container row  arasico-div-center">--}}
    {{--<div class="col-lg ">--}}
    {{--<div class="btn-find-lose-search-page col-lg-12 ">لیست گمشده ها</div>--}}
    {{--</div>--}}


    {{--<div class="col-lg ">--}}
    {{--<div class="btn-find-lose-search-page col-lg-12">لیست پیدا شده ها</div>--}}
    {{--</div>--}}


    {{--</div>--}}

    {{--</div>--}}


    <div class="container-fluid arasico-backcolor-ffffff arasico-div-center" style="padding-top: 50px;" dir="ltl">
        <div class="container arasico-backcolor-ffffff">
            <!-- search resualt box item   -->
            @foreach($advertisementInfo as $value)
                <div style="text-decoration: none;">
                    <div class="box-item-search-resualt row">

                        <div class="col-lg-4 col-sm-12 col-md-3">
                            @if($value->gallery!=null)
                                <?php
                                $image = asset('/files/advertisement/' . $value->id . '/' . $value->gallery->image);
                                ?>
                            @else
                                <?php
                                $image = asset('web/img/no-image.jpg');
                                ?>
                            @endif
                            <img class="arasico-img-style-search-resualt"
                                 src="{{$image}}" width="340" height="246"
                                 alt="Smiley face">
                        </div>
                        <div class="col-lg  col-sm-12 col-md-7">

                            <div class="row">
                                <div class="col-lg-8 text-left arasico-padding-5px"><span
                                            class="arasico-tittle-text-item">{{$value->title}}</span>
                                </div>
                                <div class="col-lg-4 arasico-padding-5px"><span><i class="fa fa-clock-o"
                                                                                   style="color: #dadada;"
                                                                                   aria-hidden="true"></i></span> <span
                                            style="color: #333;">{{jDate::forge(date('Y/m/d', (integer)$value->create_at))->format('%d %B %Y')}}</span>
                                </div>
                            </div>

                            <div class="row">
                       <span class="arasico-text-style-search-resualt">
                           {{$value->description}}
                       </span>
                            </div>
                            <div class="row arasico-date-style-text">
                                @if($value->type=="lost")
                                    <span> Kaybettiğiniz tarih : </span>
                                @elseif($value->type=="found")
                                    <span> Bulunan tarih : </span>
                                @endif
                                <span> {{jDate::forge(date('Y/m/d', (integer)$value->publish_at))->format('%d/%B/%Y')}} </span>
                            </div>

                            <div class="row ">
                                <div class="col-lg-12">
                                    {{--Edit post --}}
                                    <a href="{{url('profile/my-post/'.$value->id)}}" style="color:inherit">
                                        <button type="button" data-toggle="tooltip" title="Düzenle"
                                                class="btn btn-secondary btn-lg"><i class="fa fa-edit"
                                                                                    aria-hidden="true"></i></button>
                                    </a>
                                    {{--Delete post --}}
                                    <a onclick="deleteFunction(this.id);" id="{{$value->id}}" style="color:inherit">
                                        <button type="button" data-toggle="tooltip" title="Sil"
                                                class="btn btn-danger btn-lg"><i class="fa fa-trash"
                                                                                 aria-hidden="true"></i></button>
                                    </a>
                                    {{--See more--}}
                                    <a href="{{url('advertisement/'.$value->url)}}" style="color:inherit">
                                        <button type="submit" data-toggle="tooltip" title="Görüntüle"
                                                class="btn   back-color-00b686  btn-lg "><i class="fa fa-eye "
                                                                                            aria-hidden="true"></i>
                                        </button>
                                    </a>
                                    <form id="form-delete-post-{{$value->id}}"
                                          action="{{url('profile/my-post/'.$value->id)}}"
                                          method="post">
                                        {!! csrf_field() !!}
                                        <input type="hidden" name="_method" value="DELETE">
                                    </form>
                                </div>
                            </div>
                        </div>


                    </div>
                </div>
            @endforeach
        </div>
        <div dir="ltr" class="text-center">
            <nav aria-label="...">
                <style>
                    .pagination ul li {
                        display: inline-block;
                    }

                    .pagination ul li a {
                        float: left;
                        padding: 8px 16px;
                        text-decoration: none;
                        color: #0056b3;
                    }

                    .pagination ul li span {
                        color: #0056b3;
                        float: left;
                        padding: 8px 16px;
                        text-decoration: none;
                    }

                    .pagination ul li.active span {
                        background-color: #007bff;
                        border-color: #007bff;
                        color: white;
                    }

                    .pagination ul li.active {
                        background-color: #007bff;
                        border-color: #007bff;
                        color: white;
                    }

                    .pagination ul li.active a {
                        color: white;
                    }

                    .pagination ul li a:hover:not(.active) {
                        background-color: #ddd;
                    }
                </style>
                <div style="display: flex;" class="justify-content-center">
                    <div class="pagination">
                        {{ $advertisementInfo->links() }}
                    </div>
                </div>

            </nav>
        </div>
        <div style="padding-bottom: 30px;"></div>
    </div>



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

        document.getElementById("login").style.display = "block";
        document.getElementById("tablogin").className += " active";

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


        //forgetpassword button enter -----------------

        function sendForgetPassword() {


            document.getElementById("forgetpassword").style.display = "none";
            document.getElementById("sucMessage").style.display = "block";


        }

        //sucsses register  ------------------------

        function sucRegister() {

            document.getElementById("registerPanel").style.display = "none";
            document.getElementById("sucMessageRegister").style.display = "block";
        }

    </script>

    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script>
        function deleteFunction(id) {
            swal({
                text: "Bu ilanı silmek istiyor musunuz ?",
                icon: 'info',
                buttons: ["Hayır", "Evet"],
            }).then(function (value) {
                if (value) {
                    document.forms["form-delete-post-" + id].submit();
                }
            });
        }
    </script>
@endsection