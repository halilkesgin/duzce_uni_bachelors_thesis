@php
    $settings_data = \App\Models\Setting::where('id',1)->first();
@endphp

<div class="bg-primary text-white fw-bold fs-15 mb-2">
    <div class="container py-2 d-md-flex flex-md-row">
        <div class="d-flex flex-row align-items-center">
            <div class="text-white fs-22 mt-1 me-2"> </div>
            <p class="mb-0">{{$settings_data->slogan}}</p>
        </div>
        <div class="d-flex flex-row align-items-center ms-auto">
            <div class="icon text-white fs-22 mt-1 me-2"></div>
            <p class="mb-0"><a href="#" class="link-white hover">Personel</a></p>
        </div>
        <div class="d-flex flex-row align-items-center">
            <div class="icon text-white fs-22 mt-1 me-2"></i></div>
            <p class="mb-0"><a href="#" class="link-white hover">Öğrenci</a></p>
        </div>
        <div class="d-flex flex-row align-items-center">
            <div class="icon text-white fs-22 mt-1 me-2"> </div>
            <p class="mb-0"><a href="#" class="link-white hover">Hastane</a></p>
        </div>
        <div class="d-flex flex-row align-items-center">
            <div class="icon text-white fs-22 mt-1 me-2"> </div>
            <p class="mb-0"><a href="#" class="link-white hover">Teknopark</a></p>
        </div>
        <div class="d-flex flex-row align-items-center">
            <div class="icon text-white fs-22 mt-1 me-2"></i></div>
            <p class="mb-0"><a href="{{route('faq')}}" class="link-white hover">S.S.S.</a></p>
        </div>
        <div class="d-flex flex-row align-items-center">
            <div class="icon text-white fs-22 mt-1 me-5"> </div>
            <p class="mb-0"><a href="{{route('admin_login')}}" class="link-white hover"><i class="uil uil-arrow-right"></i> Giriş Yap</a></p>
        </div>
    </div>
</div>
