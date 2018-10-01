@extends('web.master.master')
@section('title'){{'Add Ads'}}@endsection
@section('content')

    <div class="container-fluid arasico-backcolor-ffffff arasico-div-center" style="padding-top: 50px;" dir="ltl">
        <div class="container arasico-backcolor-ffffff">
        @if(Session::get('success')!=null)

            <!-- Message box Succses after insert ads -->
                <div id="messageBox" class=" add-ads-message-suc arasico-div-center" style="display: block!important;">
                    <div class="row">
                        <div class="col-lg-2 col-md-12 text-center  ">
                            <img src="{{asset('web/img/icon-sucsses.png')}}" alt="Smiley face" height="150" width="150">
                        </div>
                        <div class="col-lg-10 col-md-12 text-right ">

                            <h4 style="padding-top: 2rem;">
                                <span style="color: #da2121;">Değerli Kullanıcılar</span><span>İlanınız başarılı bir şekilde kaydedilmiştir</span>
                            </h4>
                            <h5>
                                <span style="color: #2e2d2d;">Vermiş olduğunuz ilan Yönetici tarafından kontrol edildikten sonra sitemizde paylaşılacaktır. </span>
                            </h5>
                        </div>
                    </div>
                    <div dir="ltr" class="row ">
                        <div style="cursor: pointer;" onclick="location.href='{{url('advertisement')}}'"
                             class="col-3  btn-back-green-defualt">
                            Geri
                        </div>
                    </div>

                </div>

            @else
                @if($errors->any())
                    <div dir="ltl"
                         class="alert  arasico-border-radius-5 card text-white bg-danger text-center ">
                        <div class="col-1"><a href="#"
                                              class="icon-close alert-close arasico-color-404040  "></a>
                        </div>
                        <div class="col-11"><h5>{{$errors->first()}}</h5></div>
                    </div>
                @endif
            <!-- insert ads box -->
                <div id="insertBox" class="row">
                    <form method="POST" action="{{url('advertisement')}}@if(isset($editValue))/{{$editValue->id}}@endif"
                          files="true"
                          enctype="multipart/form-data"
                          class="col-lg-8 col-md-12 arasico-div-center">
                        {!! csrf_field() !!}
                        @if(isset($editValue))
                            <input type="hidden" name="_method" value="PATCH">
                        @endif
                        <div class="row">
                            <div class="col-lg-6 col-sm-12">
                                <div class="arasico-radio-searching">
                                    <p>
                                        <input @if(old('type')){{"checked"}}@elseif(isset($editValue))@if($editValue->type=="found"){{"checked"}} @endif @endif type="radio"
                                               id="found" value="found" name="type">
                                        <label class="lbl-radio-text" for="found">Buldum</label>
                                    </p>
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12">
                                <div class="arasico-radio-searching">
                                    <p>
                                        <input @if(old('type')){{"checked"}}@elseif(isset($editValue))@if($editValue->type=="lost"){{"checked"}} @endif @endif type="radio"
                                               id="lost" value="lost" name="type">
                                                    <label class="lbl-radio-text" for="lost">Kaybettim</label>
                                    </p>
                                </div>
                            </div>
                        </div>

                        <div class="input-group arasico-margin-botton" style="margin-top: 20px;">
                            <input type="file" name="files">
                        </div>
                        @if(isset($galleryInfo))
                            <div class="fileuploader fileuploader-theme-thumbnails">
                                <div class="fileuploader-items">
                                    <ul class="fileuploader-items-list">
                                        @foreach($galleryInfo as $key=>$value)
                                            <li id="panel-image-{{$value->id}}"
                                                class="fileuploader-item media-item file-type-image file-ext-jpg">
                                                <div class="fileuploader-item-inner">
                                                    <div class="thumbnail-holder">
                                                        <div class="fileuploader-item-image"><img
                                                                    @if($value->status==2)
                                                                    src="{{$value->image}}"
                                                                    @else
                                                                    src="{{asset('files/advertisement/'.$editValue->id.'/'.$value->image)}}"
                                                                    @endif
                                                                    draggable="false"></div>
                                                    </div>
                                                    <div class="actions-holder"><a id="{{$value->id}}"
                                                                                   onclick="deleteGallery(this.id);"
                                                                                   class="fileuploader-action fileuploader-action-remove"
                                                                                   title="Remove"><i
                                                                    class="remove"></i></a></div>
                                                    <div class="progress-holder"></div>
                                                </div>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        @endif
                        <div class="input-group arasico-margin-botton" style="margin-top: 20px;">

                            <input type="text" required id="title" name="title"
                                   value="{{old('title')}}@if(isset($editValue)){{$editValue->title}}@endif"
                                   class="col arasico-input-box" placeholder="Ne buldunuz ?">
                        </div>

                        <div class="arasico-margin-botton">

                            <select id="category_id" name="category_id"
                                    class="js-example-placeholder-single   col-lg col-sm col-md js-states form-control text-right">
                                @foreach($categoryInfo as $value)
                                    <option @if(old('category_id')){{"selected"}}@elseif(isset($editValue))@if($editValue->category_id==$value->id){{"selected"}} @endif @endif   value="{{$value->id}}">{{$value->title}}</option>
                                @endforeach
                            </select>
                        </div>


                        <div dir="ltl" class="arasico-margin-botton">
                            <select id="state" name="state"
                                    class="js-example-placeholder-single col-lg col-sm col-md js-states   form-control text-right">
                                @foreach($stateInfo as $value)
                                    <option @if(old('state')){{"selected"}}@elseif(isset($editValue))@if($editValue->state==$value->title){{"selected"}} @endif @endif value="{{$value->title}}">{{$value->title}}</option>
                                @endforeach
                            </select>
                        </div>

                        <div class="input-group arasico-margin-botton" style="margin-top: 20px;">
                            <input type="text" required id="address" name="address"
                                   value="{{old('address')}}@if(isset($editValue)){{$editValue->address}}@endif"
                                   class="col arasico-input-box" placeholder="Adres">
                        </div>

                        <div class="input-group arasico-margin-botton" style="margin-top: 20px;">

                            <div class="col  text-right" style="padding-top: 10px; color: #d4d7d6;">Kaybettiğiniz tarih</div>
                            <div class="col">
                                <select id="year" name="year" class="arasico-input-box">
                                    @for($i=1390;$i<1400;$i++)
                                        <option @if(isset($editValue)) @if($editValue->year==$i) {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%Y')==$i) {{'selected'}} @endif value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="col">
                                <select id="month" name="month" class="  arasico-input-box    ">
                                    <option @if(isset($editValue)) @if($editValue->month=='فروردین') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='فروردین') {{'selected'}} @endif value="1">
                                        Ocak
                                    </option>
                                    <option @if(isset($editValue)) @if($editValue->month=='اردیبهشت') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='اردیبهشت') {{'selected'}} @endif value="2">
                                        Şubat
                                    </option>
                                    <option @if(isset($editValue)) @if($editValue->month=='خرداد') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='خرداد') {{'selected'}} @endif value="3">
                                        Mart
                                    </option>
                                    <option @if(isset($editValue)) @if($editValue->month=='تیر') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='تیر') {{'selected'}} @endif value="4">
                                        Nisan
                                    </option>
                                    <option @if(isset($editValue)) @if($editValue->month=='مهرداد') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='مهرداد') {{'selected'}} @endif value="5">
                                        Mayıs
                                    </option>
                                    <option @if(isset($editValue)) @if($editValue->month=='شهریور') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='شهریور') {{'selected'}} @endif value="6">
                                        Haziran
                                    </option>
                                    <option @if(isset($editValue)) @if($editValue->month=='مهر') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='مهر') {{'selected'}} @endif value="7">
                                        Temmuz
                                    </option>
                                    <option @if(isset($editValue)) @if($editValue->month=='آبان') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='آبان') {{'selected'}} @endif value="8">
                                        Ağustos
                                    </option>
                                    <option @if(isset($editValue)) @if($editValue->month=='آذر') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='آذر') {{'selected'}} @endif value="9">
                                        Eylül
                                    </option>
                                    <option @if(isset($editValue)) @if($editValue->month=='دی') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='دی') {{'selected'}} @endif value="10">
                                        Ekim
                                    </option>
                                    <option @if(isset($editValue)) @if($editValue->month=='بهمن') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='بهمن') {{'selected'}} @endif value="11">
                                        Kasım
                                    </option>
                                    <option @if(isset($editValue)) @if($editValue->month=='اسفند') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='اسفند') {{'selected'}} @endif value="12">
                                        Aralık
                                    </option>
                                </select>
                            </div>
                            <div class="col">
                                <select id="day" name="day" class="  arasico-input-box    ">
                                    @for($i=1;$i<=31;$i++)
                                        <option @if(isset($editValue)) @if($editValue->day==$i) {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%d')==$i) {{'selected'}} @endif value="{{$i}}">{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                        </div>
                        <div class="input-group arasico-margin-botton" style="margin-top: 20px;">

                        <textarea id="description" name="description" class="  arasico-input-box "
                                  placeholder="İlan ile ilgili daha detaylı bilgi verin"
                                  rows="3">{{old('description')}}@if(isset($editValue)){{$editValue->description}}@endif</textarea>
                        </div>


                        <div class="text-center">
                            <button class="btn  btn-save-ads col-lg-6 col-sm-12" type="submit"> Kaydet ve Paylaş
                            </button>
                            <button class="btn   btn-cancel-ads col-lg-3 col-sm-12"
                                    onclick="location.href='{{url('')}}'" type="submit"> İptal
                            </button>

                        </div>


                    </form>


                </div>

            @endif


        </div>


    </div>
@endsection

@section('css')
    <link href="{{asset('uploader/jquery.fileuploader.css')}}" media="all" rel="stylesheet">
    <link href="{{asset('uploader/thumbnails/css/jquery.fileuploader-theme-thumbnails.css')}}" media="all"
          rel="stylesheet">
@endsection
@section('script')
    <script src="{{asset('uploader/jquery.fileuploader.min.js')}}" type="text/javascript"></script>
    <script src="{{asset('uploader/thumbnails/js/custom.js')}}" type="text/javascript"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    @if(isset($editValue))
        <script>
            function deleteGallery(id) {
                swal({
                    text: "کاربر گرامی ، آبا می خواهید تصویر مورد نظر را حذف نماید؟",
                    icon: 'info',
                    buttons: ["خیر", "بلی"],
                }).then(function (value) {
                    if (value) {
                        var Data = {
                            id: id,
                            advertisement_id: '{{$editValue->id}}'
                        };
                        $.ajax({
                            type: 'POST',
                            dataType: 'json',
                            headers: {
                                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                            },
                            url: '{{url('/profile/my-post/delete-gallery')}}',
                            data: Data,
                            success: function (response) {
                                if (response) {
                                    $('#panel-image-' + id).hide();
                                    swal({
                                        text: "کاربر گرامی ، عملیات با موفقیت انجام شد.",
                                        icon: "success",
                                        button: "باشد",
                                    });
                                }
                            }
                        });
                    }
                });
            }
        </script>
    @endif
@endsection