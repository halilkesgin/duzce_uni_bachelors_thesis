@extends('front.layout.app')

@section('main_content')

<section class="wrapper bg-light">
    <div class="swiper-container swiper-thumbs-container swiper-fullscreen nav-dark" data-margin="0" data-autoplay="true" data-autoplaytime="7000" data-nav="true" data-dots="false" data-items="1" data-thumbs="true">
        @foreach ($slider_data as $data)
            <div class="swiper">
                <div class="swiper-wrapper">
                    <div class="swiper-slide bg-overlay bg-dark bg-image" data-image-src="{{ asset('uploads/'.$data->slider) }}"></div>
                </div>
            </div>
            <div class="swiper swiper-thumbs">
                <div class="swiper-wrapper">
                </div>
            </div>
            <div class="swiper-static">
                <div class="container h-100 d-flex align-items-center justify-content-center">
                    <div class="row">
                        <div class="col-lg-8 mx-auto mt-n10 text-center">
                            <h2 class="display-1 fs-60 text-white mb-0 animate__animated animate__zoomIn animate__delay-2s">{{$data->title}}</h2>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</section>

<section class="wrapper bg-soft-primary">
    <div class="container pt-5 pb-5 pt-md-5 pb-md-5">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs nav-pills">
                    @foreach($access_data as $data)
                    <li class="nav-item mx-auto">
                        <a class="nav-link" href="{{ $data->access_link }}">
                            <i style="font-size: 1.5rem" class="{{ $data->access_icon }}"></i>
                            <span>{{ $data->access_title }}</span>
                        </a>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</section>

<div class="container mt-14 mb-14">
    <div class="row">
        <div class="col-md-4">
            <h5>Duyurular</h5>
            <div class="card card-border-start border-danger">
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        @foreach ($announcement_data as $data)
                            @php
                                $month = array("OCA","ŞUB","MAR","NİS","MAY","HAZ","TEM","AĞU","EYL","EKİ","KAS","ARA");
                                $date = substr($data->created_at,8,2).' '.$month[substr($data->created_at,5,2)-1];
                            @endphp
                            <li class="d-flex flex-row mb-1">
                                <span class="badge badge-lg bg-pale-red text-red rounded me-2 align-self-start">{{$date}}</span>
                                <a href="{{ route('announcement_show',$data->id) }}" class="link text-red">{{$data->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row">
                <div align="right" class="col-md-12 mt-5">
                    <a href="{{route('announcement')}}">Tüm Duyurular</a>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <h5>Haberler</h5>
            <div class="card card-border-start border-primary">
                <div class="card-body">
                    <ul class="list-unstyled mb-0">
                        @foreach ($news_data as $data)
                            @php
                                $month = array("OCA","ŞUB","MAR","NİS","MAY","HAZ","TEM","AĞU","EYL","EKİ","KAS","ARA");
                                $date = substr($data->created_at,8,2).' '.$month[substr($data->created_at,5,2)-1];
                            @endphp
                            <li class="d-flex flex-row mb-1">
                                <span class="badge badge-lg bg-pale-blue text-blue rounded me-2 align-self-start">{{$date}}</span>
                                <a href="{{ route('news_show',$data->id) }}" class="link text-blue">{{$data->title}}</a>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
            <div class="row">
                <div align="right" class="col-md-12 mt-5">
                    <a href="{{route('news')}}">Tüm Haberler</a>
                </div>
            </div>
        </div>
    </div>
</div>

<section class="wrapper bg-soft-primary">
    <div class="container pt-10 pb-12 pt-md-14 pb-md-16">
        <div class="row">
            <div class="col-md-12">
                <h5>Etkinlikler</h5>
                <div class="card card-border-top border-success">
                    <div class="card-body">
                        <ul class="list-unstyled mb-0">
                            @foreach ($event_data as $data)
                                @php
                                    $month = array("OCA","ŞUB","MAR","NİS","MAY","HAZ","TEM","AĞU","EYL","EKİ","KAS","ARA");
                                    $date = substr($data->created_at,8,2).' '.$month[substr($data->created_at,5,2)-1];
                                @endphp
                                <li class="d-flex flex-row mb-1">
                                    <span class="badge badge-lg bg-pale-green text-green rounded me-2 align-self-start">{{$date}}</span>
                                    <a href="{{ route('event_show',$data->id) }}" class="link text-green">{{$data->title;}}</a>
                                </li>
                            @endforeach
                        </ul>

                    </div>
                </div>
                <div class="row">
                    <div align="right" class="col-md-12 mt-5">
                        <a href="{{route('event')}}">Tüm Etkinlikler</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wrapper">
    <div class="container pt-10 pb-12 pt-md-14 pb-md-16">
        <div class="row">
            <div class="col-md-9">
                <div class="row gx-md-5 gy-5 align-items-center">
                    <div class="col-md-6">
                        <div class="row gx-md-5 gy-5">
                            <div class="col-md-10 offset-md-2">
                                <figure class="rounded">
                                    <img src="{{asset('uploads/photo_1673993691.jpg')}}" srcset="{{ asset('uploads/'.$photo_data[1]) }} 2x" alt="">
                                </figure>
                            </div>
                            <div class="col-md-12">
                                <figure class="rounded">
                                    <img src="{{asset('uploads/photo_1673993752.jpg')}}" srcset="./assets/img/photos/ab2@2x.jpg 2x" alt="">
                                </figure>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <figure class="rounded">
                            <img src="{{asset('uploads/photo_1673993767.jpg')}}" srcset="./assets/img/photos/ab3@2x.jpg 2x" alt="">
                        </figure>
                    </div>
                </div>
            </div>
            <div class="col-md-1"></div>
            <div class="col-md-2">
                <div class="row mt-10 mb-10">
                    <div class="col-md-12 mx-auto">
                        <div class="progressbar semi-circle blue" data-value="{{$total_faculty}}"></div>
                        <h4 class="text-center">FAKÜLTE</h4>
                    </div>
                </div>
                <div class="row mt-10 mb-10">
                    <div class="col-md-12 mx-auto">
                        <div class="progressbar semi-circle red" data-value="{{$total_department}}"></div>
                        <h4 class="text-center">LİSANS PROGRAMI</h4>
                    </div>
                </div>
                <div class="row mt-10 mb-10">
                    <div class="col-md-12 mx-auto">
                        <div class="progressbar semi-circle green" data-value="{{$total_vocational}}"></div>
                        <h4 class="text-center">MESLEK YÜKSEKOKULU</h4>
                    </div>
                </div>
                <div class="row mt-10 mb-10">
                    <div class="col-md-12 mx-auto">
                        <div class="progressbar semi-circle yellow" data-value="{{$total_program}}"></div>
                        <h4 class="text-center">PROGRAM</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="wrapper bg-soft-primary">
    <div class="container">
        <div class="row">
            <div class="col-xl-10 mx-auto">
                <div class="card-body p-9 p-xl-10">
                    <div class="row align-items-center counter-wrapper gy-4 text-center">
                        <div class="col-6 col-lg-3">
                            <h3 class="counter counter-lg ">27.000+</h3>
                            <p>Öğrenci</p>
                        </div>
                        <div class="col-6 col-lg-3">
                            <h3 class="counter counter-lg">1.200+</h3>
                            <p>Akademik Personel</p>
                        </div>
                        <div class="col-6 col-lg-3">
                            <h3 class="counter counter-lg ">900+</h3>
                            <p>İdari Personel</p>
                        </div>
                        <div class="col-6 col-lg-3">
                            <h3 class="counter counter-lg">500+</h3>
                            <p>Proje</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
