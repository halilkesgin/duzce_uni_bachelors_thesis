@extends('front.layout.app')
@section('main_content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-7 pb-7 pt-md-7 pb-md-7 ">
            <div class="row">
                <div class="col-md-12 ">
                    <h6 class="display-6">Etkinlikler</h6>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper">
        <div class="container pt-7 pb-7 pt-md-7 pb-md-7 ">
            <div class="row">
                <div class="col-md-8 ">
                    <div class="row">
                        <div class="card card-border-top border-danger">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-3">
                                        <h6><i class="uil uil-clock me-1"></i> {{$announcement_data->date}}</h6>
                                    </div>
                                    <div class="col-md-3">
                                        <h6><i class="uil uil-text-fields"></i> {{$announcement_data->title}}</h6>
                                    </div>
                                    <div class="col-md-2">
                                        <h6><i class="uil uil-clock"></i> {{$announcement_data->hour}}</h6>
                                    </div>
                                    <div class="col-md-4">
                                        <h6><i class="uil uil-location-point"></i> {{$announcement_data->location}}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="card ">
                            <div class="card-body">
                                <p>{{$announcement_data->detail}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card card-border-top border-danger">
                        <div class="card-body">
                            <h6>Diğer Duyurular</h6>
                            @foreach ($other_data as $data)
                                @php
                                    $month = array("OCA","ŞUB","MAR","NİS","MAY","HAZ","TEM","AĞU","EYL","EKİ","KAS","ARA");
                                    $date = substr($data->created_at,8,2).' '.$month[substr($data->created_at,5,2)-1];
                                @endphp
                                <li class="d-flex flex-row mb-1">
                                    <span class="badge badge-lg bg-pale-red text-red rounded me-2 align-self-start">{{$date}}</span>
                                    <a href="{{ route('announcement_show',$data->id) }}" class="link text-red">{{$data->title;}}</a>
                                </li>
                            @endforeach
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div align="right" class="col-md">
                            <a href="{{route('announcement')}}">Tümünü Gör</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>
@endsection
