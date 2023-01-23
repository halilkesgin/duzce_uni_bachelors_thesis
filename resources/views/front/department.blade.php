@extends('front.layout.app')
@section('main_content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-7 pb-7 pt-md-7 pb-md-7 ">
            <div class="row">
                <div class="col-md-12 ">
                    <h6 class="display-6">Bölümler</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="wrapper">
        <div class="container pt-7 pb-7 pt-md-7 pb-md-7 ">
            <div class="row">
                @foreach ($department_data as $data)
                    <div class="col-md-6 mt-5">
                        <div class="card card-border-start border-primary">
                            <div class="card-body">
                                <a href="{{ route('department_show',$data->id) }}"><h4 class="my-auto">{{$data->title}}</h4></a>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection
