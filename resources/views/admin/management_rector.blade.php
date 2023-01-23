@extends('admin.layout.app')
@section('heading', 'Rektör')
@section('main_content')
<div class="section-body">
        <div class="row">
            <div class="col-12">
                @foreach($management_data as $row)
                <form action="{{ route('admin_management_rector_update') }}" method="post">
                    @csrf
                    <input type="hidden" name="id" value="{{ $row->id }}">
                    <div class="card">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label>İsim Soyisim *</label>
                                <input type="text" class="form-control" name="rector_fullname" value="{{ $row->rector_fullname }}">
                            </div>
                            <div class="form-group mb-3">
                                <label>Özgeçmiş *</label>
                                <textarea name="rector_detail" class="form-control summernote">{{ $row->rector_detail }}</textarea>
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
