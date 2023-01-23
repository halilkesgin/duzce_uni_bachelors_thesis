@extends('front.layout.app')
@section('main_content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-7 pb-7 pt-md-7 pb-md-7 ">
            <div class="row">
                <div class="col-md-12 ">
                    <h6 class="display-6">Senato Kararları</h6>
                </div>
            </div>
        </div>
    </section>

    <section class="wrapper">
        <div class="container pt-7 pb-7 pt-md-7 pb-md-7 ">
            <div class="row">
                <div class="col-md-4 ">
                    <div class="card">
                        <div class="card-body">
                            <h6>Toplantı Tarihi</h6>
                            <p>{{$decision_data->decision_date}}</p>
                            <h6>Toplantı Sayısı</h6>
                            <p>{{$decision_data->decision_number}}</p>
                            <h6>Karar Sayısı</h6>
                            <p>{{$decision_data->decision_no}}</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="card">
                        <div class="card-body">
                            <h6>Karar</h6>
                            <p>{{$decision_data->decision_detail}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
