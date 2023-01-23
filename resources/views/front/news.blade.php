@extends('front.layout.app')
@section('main_content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-7 pb-7 pt-md-7 pb-md-7 ">
            <div class="row">
                <div class="col-md-12 ">
                    <h6 class="display-6">Haberler</h6>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper">
        <div class="container pt-7 pb-7 pt-md-7 pb-md-7 ">
            <div class="row">
                <div class="col-md-12 ">
                    @foreach ($news_data as $data)
                        @php
                            $month = array("OCA","ŞUB","MAR","NİS","MAY","HAZ","TEM","AĞU","EYL","EKİ","KAS","ARA");
                            $date = substr($data->created_at,8,2).' '.$month[substr($data->created_at,5,2)-1];
                        @endphp
                        <div class="job-list">
                            <a href="{{ route('news_show',$data->id) }}" class="card4 mb-4 lift">
                                <div class="card-body p-5">
                                    <span class="row justify-content-between align-items-center">
                                        <span class="col-md-3 mb-2 mb-md-0 d-flex align-items-center text-body">
                                            <span class="avatar2 bg-primary text-white w-13 h-13 fs-17 me-3">{{$date}}</span> {{$data->title;}}
                                        </span>
                                        <span class="col-md-3 text-body d-flex align-items-center">
                                            <i class="uil uil-clock me-1"></i> {{$data->hour}}
                                        </span>
                                        <span class=" col-md-4 col-lg-3 text-body d-flex align-items-center">
                                            <i class="uil uil-location-point"></i> {{$data->location}} </span>
                                        <span class="d-none d-lg-block col-1 text-center text-body">
                                            <i class="uil uil-angle-right-b"></i>
                                        </span>
                                    </span>
                                </div>
                            </a>
                        </div>
                        @endforeach
                </div>
            </div>
        </div>
    </section>
@endsection
