@extends('front.layout.app')
@section('main_content')
<section class="wrapper bg-soft-primary">
    <div class="container pt-7 pb-7 pt-md-7 pb-md-7 ">
        <div class="row">
            <div class="col-md-12 ">
                <h6 class="display-6">İletişim</h6>
            </div>
        </div>
    </div>
</section>

<div class="row">
    <div class="col-md-12">
        <div class="container">
            <div class="my-10">
                <h4 class="text-center display-4 mb-3">Görüş ve Önerileriniz İçin İletişime Geçebilirsiniz</h4>
            </div>
        </div>
    </div>
</div>

<section class="wrapper ">
    <div class="container pt-7 pb-7 pt-md-7 pb-md-7 ">
        <div class="row">
            <div class="col-lg-4">
                <div class="d-flex flex-row">
                    <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i> </div>
                    </div>
                    <div>
                        <h5 class="mb-1">Adres</h5>
                        <address>{{$settings_data->adress}}</address>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                    </div>
                    <div>
                        <h5 class="mb-1">Telefon</h5>
                        <p>{{$settings_data->phone_1}} <br />{{$settings_data->phone_2}}</p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-print"></i> </div>
                    </div>
                    <div>
                        <h5 class="mb-1">Fax</h5>
                        <p>{{$settings_data->fax_1}} <br />{{$settings_data->fax_2}}</p>
                    </div>
                </div>
                <div class="d-flex flex-row">
                    <div>
                        <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-envelope"></i> </div>
                    </div>
                    <div>
                        <h5 class="mb-1">E-mail</h5>
                        <p class="mb-0"><a href="mailto:{{$settings_data->email}}" class="link-body">{{$settings_data->email}}</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 col-md-12 mt-5">
                <form action="#" method="#" class="form_contact_ajax">
                    @csrf
                    <div class="row">
                        <div class="col-md-6 mt-2">
                            <div class="contact-form">
                                <label for="" class="form-label">İsim Soyisim</label>
                                <input type="text" class="form-control" name="name">
                                <span class="text-danger error-text name_error"></span>
                            </div>
                        </div>
                        <div class="col-md-6 mt-2">
                            <div class="contact-form">
                                <label for="" class="form-label">Email</label>
                            <input type="text" class="form-control" name="email">
                            <span class="text-danger error-text email_error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-2">
                            <div class="contact-form">
                                <label for="" class="form-label">Mesajınız</label>
                                <textarea class="form-control" name="message" rows="3"></textarea>
                                <span class="text-danger error-text message_error"></span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div align="right" class="col-md-12 mt-5">
                            <div class="contact-form">
                                <button type="#" class="btn rounded-pill btn-send btn-primary bg-website">Mesaj Gönder</button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-light">
    <div class="map">
        <iframe src="{{$settings_data->map_google}}" style="width:100%; height: 500px; border:0" allowfullscreen></iframe>
    </div>
</section>

<script>
    (function($){
        $(".form_contact_ajax").on('submit', function(e){
            e.preventDefault();
            $('#loader').show();
            var form = this;
            $.ajax({
                url:$(form).attr('action'),
                method:$(form).attr('method'),
                data:new FormData(form),
                processData:false,
                dataType:'json',
                contentType:false,
                beforeSend:function(){
                    $(form).find('span.error-text').text('');
                },
                success:function(data)
                {
                    $('#loader').hide();
                    if(data.code == 0)
                    {
                        $.each(data.error_message, function(prefix, val) {
                            $(form).find('span.'+prefix+'_error').text(val[0]);
                        });
                    }
                    else if(data.code == 1)
                    {
                        $(form)[0].reset();
                        iziToast.success({
                            title: '',
                            position: 'topRight',
                            message: data.success_message,
                        });
                    }

                }
            });
        });
    })(jQuery);
</script>
<div id="loader"></div>


@endsection
