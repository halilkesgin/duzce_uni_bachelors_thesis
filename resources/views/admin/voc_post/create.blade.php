@extends('admin.layout.app')
    @section('heading', 'MYO Duyuru')
@section('button')
<a href="{{ route('admin_voc_post_show') }}"  class="btn btn-primary"><i class="fas fa-list"></i> Listeye Dön</a>

@endsection

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_voc_post_store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Başlık *</label>
                            <input type="text" class="form-control" name="post_title" value="">
                        </div>
                        <div class="form-group mb-3">
                            <label>Açıklama *</label>
                            <textarea name="post_detail" class="form-control summernote"></textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Fotoğraf *</label>
                            <div><input type="file" name="post_photo"></div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Duyuru Bölümü *</label>
                            <select name="department_id" class="form-control select2">
                                @foreach($department as $item)
                                <option value="{{ $item->id }}">{{ $item->title }} ({{ $item->rVocational->title }}) </option>
                                @endforeach
                            </select>
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
