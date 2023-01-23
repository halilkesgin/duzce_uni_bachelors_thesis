@extends('admin.layout.app')
@section('heading', 'Senato Kararları')
@section('button')
    <a href="{{ route('admin_senate_decision_show') }}" class="btn btn-primary"><i class="fas fa-list"></i> Listeye Dön</a>
@endsection
@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_senate_decision_update',$senatedecision_data->id) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Toplantı Tarihi *</label>
                            <input type="text" class="form-control" name="decision_date" value="{{ $senatedecision_data->decision_date }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Toplantı Sayısı *</label>
                            <input type="text" class="form-control" name="decision_number" value="{{ $senatedecision_data->decision_number }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Karar Sayısı *</label>
                            <input type="text" class="form-control" name="decision_no" value="{{ $senatedecision_data->decision_no }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Karar *</label>
                            <textarea name="decision_detail" class="form-control summernote">{{ $senatedecision_data->decision_detail }}</textarea>
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
