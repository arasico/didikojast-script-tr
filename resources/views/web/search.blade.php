@extends('web.master.master')
@section('title'){{'Search Result'}}@endsection
@section('content')
    <div class="container-fluid arasico-backcolor-ffffff" dir="rtl">
        <form id="form-search" method="get" action="{{url('search')}}">
            <div class="container row  arasico-div-center">
                <div class="col-lg ">
                    <div class="btn-find-lose-search-page col-lg-12 ">Kayıp Listesi</div>
                </div>


                <div class="col-lg ">
                    <div class="btn-find-lose-search-page col-lg-12">Bulunanlar Listesi</div>
                </div>


            </div>
            <div class="container row  arasico-div-center box-bar-search ">
                <div class="col-lg-6 ">
                    <input type="text" class="col arasico-input-box" placeholder="Anahtar kelimeler..."
                           name="key" value="@if(isset($request['key'])){{$request['key']}}@endif"
                           aria-label="Username" aria-describedby="basic-addon1">

                </div>


                <div class="col-lg-4 ">
                    <select name="state"
                            class="js-example-placeholder-single col-lg col-sm col-md js-states form-control text-right">
                        @foreach($stateInfo as $value)
                            <option @if(isset($request['state'])) @if($request['state']== $value->title){{"selected"}}@endif @endif value="{{$value->title}}">{{$value->title}}</option>
                        @endforeach
                        {{----}}
                        {{--<optgroup label="Alaskan/Hawaiian Time Zone">--}}
                        {{--<option value="AK">Alaska</option>--}}
                        {{--<option value="HI">Hawaii</option>--}}
                        {{--</optgroup>--}}
                    </select>
                </div>
                <div class="col-lg-2 text-right">
                    <div onclick="document.forms['form-search'].submit();" class=" arasico-btn-green-submit  col-sm-12">
                        <i class="fa fa-search   " aria-hidden="true"></i>
                    </div>

                </div>


            </div>
        </form>
    </div>

    <div class="container-fluid arasico-backcolor-ffffff arasico-div-center" style="padding-top: 50px;" dir="rtl">
        <div class="container arasico-backcolor-ffffff">

            <!-- search resualt box item   -->
            @foreach($advertisementInfo as $value)
                <a href="{{url('advertisement/'.$value->url)}}" style="text-decoration: none;">
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
                                <div class="col-lg-8 text-right arasico-padding-5px"><span
                                            class="arasico-tittle-text-item">{{$value->title}}</span>
                                </div>
                                <div class="col-lg-4 arasico-padding-5px"><span><i class="fa fa-clock-o"
                                                                                   style="color: #dadada;"
                                                                                   aria-hidden="true"></i></span> <span
                                            style="color: #333;">{{jDate::forge(date('Y/m/d', (integer)$value->publish_at))->format('%d/%B/%Y')}}</span>
                                </div>
                            </div>

                            <div class="row">
                       <span class="arasico-text-style-search-resualt">
                           {{$value->description}}
                       </span>
                            </div>
                            <div class="row arasico-date-style-text">
                                @if($value->type=="lost")
                                    <span> Kayıp tarihi : </span>
                                @elseif($value->type=="found")
                                    <span> Bulunma tarihi : </span>
                                @endif
                                <span> {{jDate::forge(date('Y/m/d', (integer)$value->publish_at))->format('%d/%B/%Y')}} </span>
                            </div>

                            <div class="row ">
                                <div class="col-lg-7"></div>
                                <div class="col-lg-4 btn-gereen-see-more"
                                     style="position: absolute; left: 0; bottom: 0;">Görüntüle
                                </div>
                            </div>
                        </div>


                    </div>
                </a>
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
                        {{$advertisementInfo->appends(\Request::capture()->except('page'))->render()}}
                    </div>
                </div>

            </nav>
        </div>


        <div style="padding-bottom: 30px;"></div>
    </div>



@endsection