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
                <div class="col-md-12 ">
                    <div class="card">
                        <div class="card-body">
                            <table class="table table-striped">
                                <thead>
                                    <tr>
                                        <th style="text-transform: uppercase">TOPLANTI TARİHİ</th>
                                        <th style="text-transform: uppercase">TOPLANTI SAYISI</th>
                                        <th style="text-transform: uppercase">KARAR NO</th>
                                        <th style="text-transform: uppercase">KARAR</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($decision_data as $data)
                                    <tr>
                                        <td>{{$data->decision_date}}</td>
                                        <td>{{$data->decision_number}}</td>
                                        <td>{{$data->decision_no}}</td>
                                        <td>{{$data->decision_detail}}</td>
                                        <td>
                                            <a href="{{ route('senatedecision_show',$data->id) }}" class="btn btn-sm btn-primary">Detay</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
