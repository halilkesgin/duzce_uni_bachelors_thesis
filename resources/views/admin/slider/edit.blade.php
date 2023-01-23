@extends('admin.layout.app')
@section('heading', 'Slider')
@section('button')
    <a href="{{ route('admin_slider_show') }}" class="btn btn-primary"><i class="fas fa-list"></i> Listeye Dön</a>
@endsection
@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_slider_update',$slider_data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Varolan Slider *</label>
                            <div>
                                <img src="{{ asset('uploads/'.$slider_data->slider) }}" alt="" style="width:200px;">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Slider Değiştir *</label>
                            <div><input type="file" name="slider"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Başlık *</label>
                            <input type="text" class="form-control" name="title" value="{{ $slider_data->title }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div align="right" class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-large btn-success"><i class="fas fa-edit"></i> Güncelle</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
