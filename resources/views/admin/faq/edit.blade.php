@extends('admin.layout.app')

@section('heading', 'Sıkça Sorulan Sorular')


@section('button')
<a href="{{ route('admin_faq_show') }}" class="btn btn-primary"><i class="fas fa-list"></i> Listeye Dön</a>

@endsection

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_faq_update',$faq_data->id) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Soru</label>
                            <input type="text" class="form-control" name="faq_title" value="{{ $faq_data->faq_title }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Cevap</label>
                            <textarea name="faq_detail" class="form-control summernote">{{ $faq_data->faq_detail }}</textarea>
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
