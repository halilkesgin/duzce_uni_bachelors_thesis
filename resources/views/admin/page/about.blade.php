@extends('admin.layout.app')
@section('heading', 'Misyon ve Vizyon')
@section('main_content')
<div class="section-body">
        <div class="row">
            <div class="col-12">
                @foreach($page_data as $row)
                <form action="{{ route('admin_page_about_update') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $row->id }}">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label>Başlık *</label>
                                <input type="text" class="form-control" name="about_title" value="{{ $row->about_title }}">
                            </div>
                            <div class="form-group mb-3">
                                <label>Açıklama *</label>
                                <textarea name="about_detail" class="form-control summernote">{{ $row->about_detail }}</textarea>
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
                @endforeach
            </div>
        </div>
    </div>
@endsection
