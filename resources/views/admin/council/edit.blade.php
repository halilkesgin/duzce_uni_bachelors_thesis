@extends('admin.layout.app')
@section('heading', 'Yönetim Kurulu')
@section('button')
    <a href="{{ route('admin_council_show') }}" class="btn btn-primary"><i class="fas fa-list"></i> Listeye Dön</a>
@endsection
@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_council_update',$council_data->id) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>İsim Soyisim *</label>
                            <input type="text" class="form-control" name="council_fullname" value="{{ $council_data->council_fullname }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Birim *</label>
                            <input type="text" class="form-control" name="council_detail" value="{{ $council_data->council_detail }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Email *</label>
                            <input type="text" class="form-control" name="council_mail" value="{{ $council_data->council_mail }}">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div align="right" class="col-md-12">
            <div class="form-group">
                <button type="submit" class="btn btn-large btn-success"><i class="fas fa-edit"></i> Güncelle</button>
            </div>
        </div>
    </form>
</div>
@endsection
