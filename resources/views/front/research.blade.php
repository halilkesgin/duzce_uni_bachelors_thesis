@extends('front.layout.app')
@section('main_content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-7 pb-7 pt-md-7 pb-md-7 ">
            <div class="row">
                <div class="col-md-12 ">
                    <h6 class="display-6">Araştırma Merkezleri</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="wrapper">
        <div class="container pt-7 pb-7 pt-md-7 pb-md-7 ">
            <div class="row">
                <div class="col-md-12 ">
                    <ul class="icon-list bullet-bg bullet-soft-primary mt-7 mb-8">
                        @foreach ($research_data as $data)
                        <li><a href="{{$data->link}}">[ {{$data->short}} ] - {{$data->title}}</a></li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </section>
@endsection
