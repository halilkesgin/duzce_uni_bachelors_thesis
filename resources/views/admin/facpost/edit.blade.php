@extends('admin.layout.app')

@section('heading', 'Duyurular')

@section('button')
<a href="{{ route('admin_facpost_show') }}" class="btn btn-primary"><i class="fas fa-list"></i> Listeye Dön</a>

@endsection

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_facpost_update',$post_single->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Başlık *</label>
                            <input type="text" class="form-control" name="post_title" value="{{ $post_single->post_title }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Açıklama</label>
                            <textarea name="post_detail" class="form-control summernote">{{ $post_single->post_detail }}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Fotoğraf</label>
                            <div>
                                <img src="{{ asset('uploads/'.$post_single->post_photo) }}" alt="" style="width:300px;">
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Fotoğraf Yükle *</label>
                            <div><input type="file" name="post_photo"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Bölüm *</label>
                            <select name="department_id" class="form-control select2">
                                @foreach($department as $item)
                                <option value="{{ $item->id }}" @if($item->id == $post_single->department_id) selected @endif>{{ $item->title }} ({{ $item->rFaculty->title }})</option>
                                @endforeach
                            </select>
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
