@extends('front.layout.app')
@section('main_content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-7 pb-7 pt-md-7 pb-md-7 ">
            <div class="row">
                <div class="col-md-12 ">
                    <h6 class="display-6">{{$department_data->title}}</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="wrapper">
        <div class="container pt-7 pb-7 pt-md-7 pb-md-7 ">
            <div class="row">
                <div class="col-md-3">
                    <div class="card">
                        <div class="card-body">
                            <ul class="nav nav-tabs nav-tabs-basic" style="display: block;">
                                <h4>GENEL BİLGİ</h4>
                                <li class="nav-item"> <a class="nav-link active" data-bs-toggle="tab" href="#tab1">Hakkımızda</a> </li>
                                <h4 class="mt-5">YÖNETİM</h4>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab2">Bölüm Başkanı</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab3">Bölüm Başkan Yardımcıları</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab4">Bölüm Sekreterliği</a> </li>
                                <h4 class="mt-5">PERSONEL</h4>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab5">Akademik</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab6">İdari</a> </li>
                                <h4 class="mt-5">ÖĞRENCİ</h4>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab7">Duyurular</a> </li>
                                <h4 class="mt-5">KURUMSAL</h4>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab8">Organizasyon Şeması</a> </li>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab9">Görev Tanımları</a> </li>
                                <h4 class="mt-5">İLETİŞİM</h4>
                                <li class="nav-item"> <a class="nav-link" data-bs-toggle="tab" href="#tab10">Bilgiler</a> </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-9">
                    <div class="card">
                        <div class="card-body">
                            <div class="tab-content mt-0 mt-md-5">
                                <div class="tab-pane fade show active" id="tab1">
                                    <p>{{$department_data->info}}</p>
                                </div>
                                <div class="tab-pane fade" id="tab2">
                                    <p>{{$department_data->head_1}}</p>
                                </div>
                                <div class="tab-pane fade" id="tab3">
                                    <p>{{$department_data->head_2}}</p>
                                </div>
                                <div class="tab-pane fade" id="tab4">
                                    <p>{{$department_data->dep_com}}</p>
                                </div>
                                <div class="tab-pane fade" id="tab5">
                                    <p>{{$department_data->personal_1}}</p>
                                </div>
                                <div class="tab-pane fade" id="tab6">
                                    <p>{{$department_data->personal_2}}</p>
                                </div>
                                <div class="tab-pane fade" id="tab7">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <ul class="list-unstyled mb-0">
                                                @foreach ($post_data as $data)
                                                    @php
                                                        $month = array("OCA","ŞUB","MAR","NİS","MAY","HAZ","TEM","AĞU","EYL","EKİ","KAS","ARA");
                                                        $date = substr($data->created_at,8,2).' '.$month[substr($data->created_at,5,2)-1];
                                                    @endphp
                                                    <li class="d-flex flex-row mb-1">
                                                        <span class="badge badge-lg bg-pale-red text-red rounded me-2 align-self-start">{{$date}}</span>
                                                        <span class="badge badge-lg bg-pale-red text-red rounded me-2 align-self-start">{{$data->rDepartment->title}}</span>
                                                        <a href="#" class="link text-red">{{$data->post_title}}</a>
                                                    </li>
                                                @endforeach
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane fade" id="tab8">
                                    <p>{{$department_data->dep_schema}}</p>
                                </div>
                                <div class="tab-pane fade" id="tab9">
                                    <p>{{$department_data->mission}}</p>
                                </div>
                                <div class="tab-pane fade" id="tab10">
                                    <div class="row gx-0">
                                        <div class="col-lg-6 align-self-stretch">
                                            <div class="map map-full rounded-top rounded-lg-start">
                                                <iframe src="{{$department_data->map}}" style="width:100%; height: 100%; border:0" allowfullscreen></iframe>
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="p-10 p-md-11 p-lg-14">
                                                <div class="d-flex flex-row">
                                                    <div>
                                                        <div class="icon text-primary fs-28 me-4 mt-n1">
                                                            <i class="uil uil-location-pin-alt"></i>
                                                        </div>
                                                    </div>
                                                    <div class="align-self-start justify-content-start">
                                                        <h5 class="mb-1">Adres</h5>
                                                        <p>{{$department_data->address}}</p>
                                                    </div>
                                                </div>
                                                <div class="d-flex flex-row">
                                                    <div>
                                                        <div class="icon text-primary fs-28 me-4 mt-n1">
                                                            <i class="uil uil-phone-volume"></i>
                                                        </div>
                                                    </div>
                                                <div>
                                                    <h5 class="mb-1">Telefon</h5>
                                                    <p>{{$department_data->phone}}</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <div>
                                                    <div class="icon text-primary fs-28 me-4 mt-n1">
                                                        <i class="uil uil-print"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="mb-1">Fax</h5>
                                                    <p>{{$department_data->fax}}</p>
                                                </div>
                                            </div>
                                            <div class="d-flex flex-row">
                                                <div>
                                                    <div class="icon text-primary fs-28 me-4 mt-n1">
                                                        <i class="uil uil-envelope"></i>
                                                    </div>
                                                </div>
                                                <div>
                                                    <h5 class="mb-1">E-mail</h5>
                                                    <p>{{$department_data->email}}</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
    </section>
@endsection
