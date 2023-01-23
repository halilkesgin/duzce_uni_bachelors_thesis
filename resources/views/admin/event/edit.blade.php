@extends('admin.layout.app')
@section('heading', 'Etkinlikler')

@section('button')
<a href="{{ route('admin_event_show') }}" class="btn btn-primary"><i class="fas fa-list"></i> Listeye Dön</a>
@endsection

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_event_update',$event_data->id) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Etkinlik Adı *</label>
                            <input type="text" class="form-control" name="title" value="{{ $event_data->title }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Lokasyon *</label>
                            <input type="text" class="form-control" name="location" value="{{ $event_data->location }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Tarih *</label>
                            <input type="text" class="form-control" name="date" value="{{ $event_data->date }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Saat *</label>
                            <input type="text" class="form-control" name="hour" value="{{ $event_data->hour }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Açıklama *</label>
                            <textarea name="detail" class="form-control summernote">{{ $event_data->detail }}</textarea>
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
