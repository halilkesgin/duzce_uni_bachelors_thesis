@extends('admin.layout.app')

@section('heading', 'Sosyal Medyalar')

@section('button')
<a href="{{ route('admin_social_item_show') }}" class="btn btn-primary"><i class="fas fa-list"></i> Listeye Dön</a>

@endsection

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_social_item_update',$social_item_data->id) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Icon Preview</label>
                            <div>
                                <i class="{{ $social_item_data->icon }}" style="font-size:30px;"></i>
                            </div>
                        </div>
                        <div class="form-group mb-3">
                            <label>Icon *</label>
                            <input type="text" class="form-control" name="icon" value="{{ $social_item_data->icon }}">
                        </div>
                        <div class="form-group mb-3">
                            <label>URL *</label>
                            <input type="text" class="form-control" name="url" value="{{ $social_item_data->url }}">
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
