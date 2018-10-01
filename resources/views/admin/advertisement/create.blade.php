@extends('admin.master.master')
@section('title'){{'ثبت آگهی'}}@endsection
@section('content')
    <form method="POST" action="{{url('dashboard/advertisement')}}@if(isset($editValue))/{{$editValue->id}}@endif"
          files="true" enctype="multipart/form-data">
        {!! csrf_field() !!}
        @if(isset($editValue))
            <input type="hidden" name="_method" value="PATCH">
        @endif
        <div class="row">

            <div dir="rtl" class="col-lg-12 text-right">
                <div class="card">
                    <div class="card-header text-right">
                        <i class="fa fa-edit "></i>آپلود گالری
                    </div>
                    <div class="card-body">

                        <div class="form-group">
                            <form action="" method="post" enctype="multipart/form-data">
                                <input type="file" name="files">
                            </form>
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
                        </div>

                    </div>
                </div>
            </div>


            <div dir="rtl" class="col-lg-12 text-right">
                <div class="card">
                    <div class="card-header text-left">
                        Add New Sdvertisement<i class="fa fa-edit "></i>

                    </div>
                    <div class="card-body">
                        @if(Session::get('success')!=null)

                            <div dir="rtl"
                                 class="alert arasico-border-radius-5 alt green  card text-white bg-success text-center ">
                                <div class="col-1"><a href="#"
                                                      class="icon-close alert-close arasico-color-404040 "></a>
                                </div>
                                <div class="col-11"><h5>{{Session::get('success')}}</h5></div>
                            </div>

                        @endif
                    <!-- message and validator -->
                        @if($errors->any())
                            <div dir="rtl"
                                 class="alert  arasico-border-radius-5 card text-white bg-danger text-center ">
                                <div class="col-1"><a href="#"
                                                      class="icon-close alert-close arasico-color-404040  "></a>
                                </div>
                                <div class="col-11"><h5>{{$errors->first()}}</h5></div>
                            </div>
                        @endif
                        <div class="form-group">
                            <label for="name">نام و نام خانوادگی</label>
                            <input type="text" class="form-control" id="name"
                                   name="name" required
                                   value="{{old('name')}}@if(isset($editValue)){{$editValue->name}}@endif"
                                   placeholder="لطفا نام و نام خانوادگی را وارد کنید">
                        </div>
                        <div class="form-group">
                            <label for="tell">شماره تماس</label>
                            <input type="text" class="form-control"
                                   id="tell" name="tell"
                                   value="{{old('tell')}}@if(isset($editValue)){{$editValue->tell}}@endif"
                                   placeholder="برای مثال 02122512345">
                            <span class="help-block ">شماره تماس را به همراه کد شهر وارد نمائید"</span>
                        </div>
                        <div class="form-group">
                            <label for="phone">شماره همراه</label>
                            <input type="text" class="form-control"
                                   id="phone" name="phone"
                                   value="{{old('phone')}}@if(isset($editValue)){{$editValue->phone}}@endif"
                                   placeholder="لطفا شماره همراه را وارد نمائید. . . ">

                        </div>
                        <div class="form-group">
                            <label for="company">پست الکترونیک</label>
                            <input type="email" class="form-control"
                                   id="email" name="email"
                                   value="{{old('email')}}@if(isset($editValue)){{$editValue->email}}@endif"
                                   placeholder="درصورت موجود،پست الکترونیک را وارد نمائید">

                        </div>
                        <hr/>
                        <div class="col-lg-12 text-right">
                            <div class="card ">
                                <div class="card-header">
                                    <label>لطفا نوع آگهی را انتخاب کنید</label>
                                </div>
                                <div class="card-body">
                                    <div class="control-group row" id="toastTypeGroup">
                                        <div class="radio   col-md-3 col-sm">
                                            <label>
                                                <input type="radio" name="type"
                                                       @if(old('type')){{"checked"}}@elseif(isset($editValue))@if($editValue->type=="lost"){{"checked"}} @endif @endif value="lost">
                                                گمشده
                                            </label>
                                        </div>

                                        <div class="radio   col-md-3 col-sm">
                                            <label>
                                                <input type="radio" name="type"
                                                       @if(old('type')){{"checked"}}@elseif(isset($editValue))@if($editValue->type=="found"){{"checked"}} @endif @endif  value="found">
                                                پیدا شده
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="title">عنوان اشیا گمشده</label>
                            <input type="text" required class="form-control"
                                   id="title" name="title"
                                   value="{{old('title')}}@if(isset($editValue)){{$editValue->title}}@endif"
                                   placeholder="لطفا عنوان کالای گمشده را وارد نمائید. . .">
                            <span class="help-block ">برای مثال،کارت پایان خدمت گمشده"</span>
                        </div>
                        <fieldset class="form-group" data-select2-id="9">
                            <label for="category_id">انتخاب گروه</label>
                            <select id="category_id" name="category_id"
                                    class="form-control select2-single select2-hidden-accessible"
                                    aria-hidden="true">
                                @foreach($categoryInfo as $value)
                                    <option @if(old('category_id')){{"selected"}}@elseif(isset($editValue))@if($editValue->category_id==$value->id){{"selected"}} @endif @endif   value="{{$value->id}}">{{$value->title}}</option>
                                @endforeach
                            </select>

                        </fieldset>
                        <fieldset class="form-group" data-select2-id="9">
                            <label for="state">انتخاب شهر</label>
                            <select id="state" class="form-control select2-single select2-hidden-accessible"
                                    name="state" aria-hidden="true">
                                @foreach($stateInfo as $value)
                                    <option @if(old('state')){{"selected"}}@elseif(isset($editValue))@if($editValue->state==$value->title){{"selected"}} @endif @endif value="{{$value->title}}">{{$value->title}}</option>
                                @endforeach
                            </select>
                        </fieldset>
                        <div class="form-group">
                            <label for="address">نشانی کامل</label>
                            <input type="text" class="form-control"
                                   id="address" name="address"
                                   value="{{old('address')}}@if(isset($editValue)){{$editValue->address}}@endif"
                                   placeholder="نشانی مورد نظر را وارد نمائید.">
                            <span class="help-block ">برای مثال،سعادت آباد، خیابان فاطمیه، کوچه آریا</span>
                        </div>
                        <div class="form-group">
                            <label for="company">تاریخ دقیقی</label>
                            <div class="form-group row">

                                <label class="  col-form-label" for="year">سال</label>
                                <div class="col-md-2" style="padding: 0 5px;">
                                    <select id="year" name="year" class="form-control">
                                        @for($i=1390;$i<1400;$i++)
                                            <option @if(isset($editValue)) @if($editValue->year==$i) {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%Y')==$i) {{'selected'}} @endif value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>

                                <label class="  col-form-label" for="month">ماه</label>
                                <div class="col-md-2" style="padding: 0 5px;">
                                    <select id="month" name="month" class="form-control">
                                        <option @if(isset($editValue)) @if($editValue->month=='فروردین') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='فروردین') {{'selected'}} @endif value="1">
                                            فروردین
                                        </option>
                                        <option @if(isset($editValue)) @if($editValue->month=='اردیبهشت') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='اردیبهشت') {{'selected'}} @endif value="2">
                                            اردیبهشت
                                        </option>
                                        <option @if(isset($editValue)) @if($editValue->month=='خرداد') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='خرداد') {{'selected'}} @endif value="3">
                                            خرداد
                                        </option>
                                        <option @if(isset($editValue)) @if($editValue->month=='تیر') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='تیر') {{'selected'}} @endif value="4">
                                            تیر
                                        </option>
                                        <option @if(isset($editValue)) @if($editValue->month=='مهرداد') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='مهرداد') {{'selected'}} @endif value="5">
                                            مهرداد
                                        </option>
                                        <option @if(isset($editValue)) @if($editValue->month=='شهریور') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='شهریور') {{'selected'}} @endif value="6">
                                            شهریور
                                        </option>
                                        <option @if(isset($editValue)) @if($editValue->month=='مهر') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='مهر') {{'selected'}} @endif value="7">
                                            مهر
                                        </option>
                                        <option @if(isset($editValue)) @if($editValue->month=='آبان') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='آبان') {{'selected'}} @endif value="8">
                                            آبان
                                        </option>
                                        <option @if(isset($editValue)) @if($editValue->month=='آذر') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='آذر') {{'selected'}} @endif value="9">
                                            آذر
                                        </option>
                                        <option @if(isset($editValue)) @if($editValue->month=='دی') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='دی') {{'selected'}} @endif value="10">
                                            دی
                                        </option>
                                        <option @if(isset($editValue)) @if($editValue->month=='بهمن') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='بهمن') {{'selected'}} @endif value="11">
                                            بهمن
                                        </option>
                                        <option @if(isset($editValue)) @if($editValue->month=='اسفند') {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%B')=='اسفند') {{'selected'}} @endif value="12">
                                            اسفند
                                        </option>
                                    </select>
                                </div>
                                <label class="  col-form-label" for="day">روز</label>
                                <div class="col-md-2" style="padding: 0 5px;">
                                    <select id="day" name="day" class="form-control">
                                        @for($i=1;$i<=31;$i++)
                                            <option @if(isset($editValue)) @if($editValue->day==$i) {{'selected'}} @endif @else(jDate::forge(date('Y'))->format('%d')==$i) {{'selected'}} @endif value="{{$i}}">{{$i}}</option>
                                        @endfor
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="form-group">
                            <label for="description">توضیحات و اطلاعات بیشتر</label>
                            <input type="text" class="form-control"
                                   id="description" name="description"
                                   value="{{old('description')}}@if(isset($editValue)){{$editValue->description}}@endif"
                                   placeholder="اطلاعات بیشتر را وارد نمائید">
                            <span class="help-block ">اطلاعات بیشتر نظیر:رنگ، مدل، سایز، شاخصه های منحصر بفرد</span>
                        </div>
                        <div dir="ltr" class="form-actions text-left">
                            <a href="{{url('dashboard/advertisement')}}" class="btn btn-secondary">انصراف</a>
                            <button type="submit" class="btn btn-primary">ذخیره</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
    <!--/.col-->
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
                            url: '{{url('/dashboard/advertisement/delete-gallery')}}',
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