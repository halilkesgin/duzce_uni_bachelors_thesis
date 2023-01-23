@extends('admin.layout.app')
@section('heading', 'Genel Sekreter')
@section('button')
    <a href="{{ route('admin_secretary_show') }}" class="btn btn-primary"><i class="fas fa-list"></i> Listeye Dön</a>
@endsection
@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_secretary_store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>İsim Soyisim *</label>
                            <input type="text" class="form-control" name="secretary_fullname">
                        </div>
                        <div class="form-group mb-3">
                            <label>Birim *</label>
                            <input type="text" class="form-control" name="secretary_detail">
                        </div>
                        <div class="form-group mb-3">
                            <label>Email *</label>
                            <input type="text" class="form-control" name="secretary_mail">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div align="right" class="col-md-12">
                <div class="form-group">
                    <button type="submit" class="btn btn-large btn-success"><i class="fas fa-plus"></i> Oluştur</button>
                </div>
            </div>
        </div>
    </form>
</div>
@endsection
