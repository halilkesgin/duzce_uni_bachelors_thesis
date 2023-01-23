@php
    $faculty_menu = \App\Models\Faculty::orderBy('id','desc')->get();
    $vocational_menu = \App\Models\Vocational::orderBy('id','desc')->get();
    $settings_data = \App\Models\Setting::where('id',1)->first();
    $socials_data = \App\Models\SocialItem::get();
@endphp

<nav class="navbar navbar-expand-lg center-nav transparent navbar-light">
    <div class="container flex-lg-row flex-nowrap align-items-center">
        <div class="navbar-brand w-100">
            <a href="{{route('home')}}">
                <img src="{{ asset('uploads/'.$global_setting_data->logo) }}" style="width: 134px;" srcset="./assets/img/logo@2x.png 2x" alt="" />
            </a>
        </div>
        <div class="navbar-collapse offcanvas offcanvas-nav offcanvas-start">
            <div class="offcanvas-header d-lg-none">
                <h3 class="text-white fs-30 mb-0">{{$settings_data->title}}</h3>
                <button type="button" class="btn-close btn-close-white" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body ms-lg-auto d-flex flex-column h-100">
                <ul class="navbar-nav">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Üniversitemiz</a>
                        <div class="dropdown-menu dropdown-lg">
                            <div class="dropdown-lg-content">
                                <div>
                                    <h6 class="dropdown-header">Kurumsal</h6>
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="{{ route('about') }}">Misyon ve Vizyon</a></li>
                                        <li><a class="dropdown-item" href="{{ route('history') }}">Tarihçe</a></li>
                                        <li><a class="dropdown-item" href="{{ route('photo_gallery') }}">Fotoğraflar</a></li>
                                        <li><a class="dropdown-item" href="{{ route('video_gallery') }}">Videolar</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <h6 class="dropdown-header">Yönetim</h6>
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="{{route('rector')}}">Rektör</a></li>
                                        <li><a class="dropdown-item" href="{{route('advisor')}}">Rektör Yardımcıları</a></li>
                                        <li><a class="dropdown-item" href="{{route('secretary')}}">Genel Sekreter</a></li>
                                        <li><a class="dropdown-item" href="{{route('senate')}}">Senato</a></li>
                                        <li><a class="dropdown-item" href="{{route('council')}}">Yönetim Kurulu</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <h6 class="dropdown-header">Mevzuat</h6>
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="{{route('senatedecision')}}">Senato Kararları</a></li>
                                        <li><a class="dropdown-item" href="{{route('plan')}}">Stratejik Plan</a></li>
                                        <li><a class="dropdown-item" href="{{route('quality_policy')}}">Kalite Politikası</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Akademik</a>
                        <div class="dropdown-menu dropdown-lg">
                            <div class="dropdown-lg-content">
                                <div>
                                    <h6 class="dropdown-header">Fakülteler</h6>
                                    <ul class="list-unstyled">
                                        @foreach ($faculty_menu as $data)
                                            <li><a class="dropdown-item" href="{{ route('faculty_show',$data->id) }}">{{$data->title}}</a></li>
                                        @endforeach

                                    </ul>
                                </div>
                                <div>
                                    <h6 class="dropdown-header">Meslek YüksekOkulları</h6>
                                    <ul class="list-unstyled">
                                        @foreach ($vocational_menu as $data)
                                            <li><a class="dropdown-item" href="{{ route('vocational_show',$data->id) }}">{{$data->title}}</a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">İdari</a>
                        <div class="dropdown-menu dropdown-lg">
                            <div class="dropdown-lg-content">
                                <div>
                                    <h6 class="dropdown-header">Daire Başkanlıkları</h6>
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="#">Bilgi İşlem Daire Başkanlığı</a></li>
                                        <li><a class="dropdown-item" href="#">Kütüphane ve Daire Başkanlığı</a></li>
                                        <li><a class="dropdown-item" href="#">Öğrenci İşleri Daire Başkanlığı</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Araştırma</a>
                        <div class="dropdown-menu dropdown-lg">
                            <div class="dropdown-lg-content">
                                <div>
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="{{route('research')}}">Araştırma Merkezleri</a></li>
                                        <li><a class="dropdown-item" href="https://cdn.duzce.edu.tr/File/GetFile/d834bcb6-f351-49f7-98d2-b8b1dba20280"  target="_blank">Laboratuvar Envanteri</a></li>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Öğrenci</a>
                        <div class="dropdown-menu dropdown-lg">
                            <div class="dropdown-lg-content">
                                <div>
                                    <h6 class="dropdown-header">Akademik Takvim</h6>
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="#">2022-2023 Yılı Akademik Takvimi</a></li>
                                    </ul>
                                </div>
                                <div>
                                    <h6 class="dropdown-header">İlgili Bağlantılar</h6>
                                    <ul class="list-unstyled">
                                        <li><a class="dropdown-item" href="#">Öğrenci İşleri Daire Başkanlığı</a></li>
                                        <li><a class="dropdown-item" href="#">Öğrenci Bilgi Sistemi</a></li>
                                        <li><a class="dropdown-item" href="#">Öğrenci Toplulukları</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('news',$data->id) }}">DÜ Haberler</a>
                    </li>
                    <li class="nav-item ">
                        <a class="nav-link " href="{{ route('announcement',$data->id) }}">DÜ Duyurular</a>
                    </li>
                </ul>
                <div class="offcanvas-footer d-lg-none">
                    <div>
                        <a href="mailto:{{$settings_data->email}}" class="link-inverse">{{$settings_data->email}}</a>
                        <br /> {{$settings_data->phone_1}} <br />
                        <nav class="nav social social-white mt-4">
                            @foreach ($socials_data as $data)
                                <a href="{{$data->url}}"><i class="{{ $data->icon }}"></i></a>
                            @endforeach
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="navbar-other w-100 d-flex ms-auto">
            <ul class="navbar-nav flex-row align-items-center ms-auto">
                <li class="nav-item d-none d-md-block">
                    <a href="{{route('contact')}}" class="btn btn-sm btn-primary rounded-pill">İletişim</a>
                </li>
                <li class="nav-item d-lg-none">
                    <button class="hamburger offcanvas-nav-btn"><span></span></button>
                </li>
            </ul>
        </div>
    </div>
</nav>
