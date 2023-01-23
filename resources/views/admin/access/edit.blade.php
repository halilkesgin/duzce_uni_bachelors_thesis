@extends('admin.layout.app')
@section('heading', 'Hızlı Erişim')
@section('button')
    <a href="{{ route('admin_access_show') }}" class="btn btn-primary"><i class="fas fa-list"></i> Listeye Dön</a>
@endsection
@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_access_update',$access_data->id) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Başlık *</label>
                            <input type="text" class="form-control" name="access_title" value="{{ $access_data->access_title }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Link *</label>
                            <input type="text" class="form-control" name="access_link" value="{{ $access_data->access_link }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Icon *</label>
                            <input type="text" class="form-control" name="access_icon" value="{{ $access_data->access_icon }}">
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
