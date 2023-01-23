@extends('front.layout.app')
@section('main_content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-7 pb-7 pt-md-7 pb-md-7 ">
            <div class="row">
                <div class="col-md-12 ">
                    <h6 class="display-6">Rektör Yardimcilari</h6>
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
                                        <th scope="col" style="text-transform: uppercase">İsim Soyisim</th>
                                        <th scope="col" style="text-transform: uppercase">Birim</th>
                                        <th scope="col" style="text-transform: uppercase">Email</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($advisor_data as $data)
                                    <tr>
                                        <td>{{$data->advisor_fullname}}</td>
                                        <td>{{$data->advisor_detail}}</td>
                                        <td>{{$data->advisor_mail}}</td>
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
