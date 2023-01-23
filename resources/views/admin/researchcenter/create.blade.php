@extends('admin.layout.app')

@section('heading', 'Araştırma Merkezleri')


@section('button')
<a href="{{ route('admin_researchcenter_show') }}" class="btn btn-primary"><i class="fas fa-list"></i> Listeye Dön</a>

@endsection

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_researchcenter_store') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Araştırma Merkezi Adı</label>
                            <input type="text" class="form-control" name="title">
                        </div>
                        <div class="form-group mb-3">
                            <label>Araştırma Merkezi Kısaltması</label>
                            <input type="text" class="form-control" name="short">
                        </div>
                        <div class="form-group mb-3">
                            <label>Bağlantı Linki</label>
                            <input type="text" class="form-control" name="link">
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
