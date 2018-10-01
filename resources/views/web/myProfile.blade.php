@extends('web.master.master')
@section('title'){{'My Profile'}}@endsection
@section('content')

    <div class="container-fluid arasico-backcolor-ffffff arasico-div-center" style="padding-top: 50px;" dir="ltl">
        <div class="container arasico-backcolor-ffffff">

        @if(Session::get('success')!=null)

            <!-- Message box Succses after insert ads -->
                <div id="messageBox" class=" add-ads-message-suc arasico-div-center" style="display: block !important;">
                    <div class="row">
                        <div class="col-lg-2 col-md-12 text-center  ">
                            <img src="{{asset('web/img/icon-sucsses.png')}}" alt="Smiley face" height="150" width="150">
                        </div>
                        <div class="col-lg-10 col-md-12 text-right ">

                            <h4 style="padding-top: 2rem;">
                                <span style="color: #da2121;">Değerli Kullanıcı</span><span>Bilgileriniz başarılı bir şekilde kaydedilmiştir.</span>
                            </h4>
                        </div>
                    </div>


                </div>
            @else
                @if($errors->any())
                    <div dir="rtl"
                         class="alert  arasico-border-radius-5 card text-white bg-danger text-center ">
                        <div class="col-1"><a href="#"
                                              class="icon-close alert-close arasico-color-404040  "></a>
                        </div>
                        <div class="col-11"><h5>{{$errors->first()}}</h5></div>
                    </div>
                @endif
            <!-- insert ads box -->
                <div id="insertBox" class="row">
                    <form method="POST" action="{{url('profile')}}/{{$editValue->id}}"
                          class="col-lg-8 col-md-12 arasico-div-center">
                        {!! csrf_field() !!}
                        @if(isset($editValue))
                            <input type="hidden" name="_method" value="PATCH">
                        @endif
                        <div class="row">
                            <div class="img-profile-box arasico-div-center">
                                <i class="fa fa-user-o fa-4x" aria-hidden="true"></i>
                            </div>
                        </div>

                        <div class="input-group arasico-margin-botton" style="margin-top: 20px;">
                            <input required type="text" class="col arasico-input-box" placeholder="Ad-Soyad"
                                   name="name" value="{{$editValue->name}}" aria-label="Username"
                                   aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group arasico-margin-botton" style="margin-top: 20px;">
                            <input required type="text" class="col arasico-input-box" placeholder="Cep telefonu"
                                   name="phone" value="{{$editValue->phone}}" aria-label="Username"
                                   aria-describedby="basic-addon1">
                        </div>
                        <div class="input-group arasico-margin-botton" style="margin-top: 20px;">
                            <input required type="text" class="col  arasico-input-box" placeholder="e-mail"
                                   name="email" value="{{$editValue->email}}" aria-label="Username"
                                   aria-describedby="basic-addon1">
                        </div>
                        <hr width="100%">
                        <div class="text-right">
                            <h5>Şifre Değiştir</h5>
                            <h6 style="color: #737070; line-height: 1.5;">
                                Şifrenizi değiştirmek için lütfen yeni şifrenizi giriniz.
                            </h6>
                        </div>
                        <div class="input-group arasico-margin-botton" style="margin-top: 20px;">

                            <input name="oldPassword" type="password" class="col  arasico-input-box"
                                   placeholder="*************">
                        </div>

                        <div class="input-group arasico-margin-botton" style="margin-top: 20px;">

                            <input name="newPassword" type="password" class="col  arasico-input-box"
                                   placeholder="Yeni Şifre">
                        </div>
                        <div class="input-group arasico-margin-botton" style="margin-top: 20px;">

                            <input name="newPassword2" type="password" class="col  arasico-input-box"
                                   placeholder="Yeni Şifre(Tekrar)">
                        </div>

                            <div class="text-center">
                                <button class="btn  btn-save-ads col-6" type="submit">Kaydet</button>
                                <button class="btn   btn-cancel-ads col-3" onclick="location.href='{{url('')}}'" type="submit">     İptal</button>

                            </div>

                    </form>


                </div>
            @endif


        </div>


    </div>
@endsection