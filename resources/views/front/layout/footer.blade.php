@php
    $settings_data = \App\Models\Setting::where('id',1)->first();
    $socials_data = \App\Models\SocialItem::get();
@endphp
<footer class="bg-dark text-white">
    <div class="container pt-8 pt-md-10 pb-7">
        <div class="row gx-lg-0 gy-6">
            <div class="col-lg-4">
                <div class="widget">
                    <img class="mb-4" style="width:134px; filter: brightness(0) invert(1);" src="{{ asset('uploads/'.$global_setting_data->logo) }}" srcset="{{ asset('uploads/'.$global_setting_data->logo) }}" alt="" />
                    <p class="lead mb-0">{{$settings_data->slogan}}</p>
                </div>
            </div>
            <div class="col-lg-3 offset-lg-2">
                <div class="widget">
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-phone-volume"></i> </div>
                        </div>
                        <div>
                            <h5 class="mb-1 text-white">Telefon</h5>
                            <p class="mb-0">{{$settings_data->phone_1}}</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="widget">
                    <div class="d-flex flex-row">
                        <div>
                            <div class="icon text-primary fs-28 me-4 mt-n1"> <i class="uil uil-location-pin-alt"></i>
                            </div>
                        </div>
                        <div class="align-self-start justify-content-start">
                            <h5 class="mb-1 text-white">Adres</h5>
                            <address>{{$settings_data->adress}}</address>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr class="mt-13 mt-md-14 mb-7" />
        <div class="d-md-flex align-items-center justify-content-between">
            <p class="mb-2 mb-lg-0">© {{$settings_data->copyright}}</p>
            <nav class="nav social mb-0 text-md-end" text-white>
                @foreach ($socials_data as $data)
                    <a href="{{$data->url}}"><i class="{{ $data->icon }}"></i></a>
                @endforeach

            </nav>
        </div>
    </div>
</footer>
