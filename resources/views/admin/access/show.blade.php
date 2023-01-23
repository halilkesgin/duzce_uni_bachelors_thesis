@extends('admin.layout.app')
    @section('heading', 'Hızlı Erişim')
@section('button')
    <a href="{{ route('admin_access_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Ekle</a>
@endsection
@section('main_content')
<div class="section-body">
    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="example1">
                            <thead>
                                <tr>
                                    <th>SIRALAMA</th>
                                    <th>BAŞLIK</th>
                                    <th>LINK</th>
                                    <th>ICON</th>
                                    <th>İŞLEM</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($access_data as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->access_title }}</td>
                                    <td>{{ $row->access_link }}</td>
                                    <td>{{ $row->access_icon }}</td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('admin_access_edit',$row->id) }}" class="btn btn-success"><i class="fas fa-edit"></i> Güncelle</a>
                                        <a href="{{ route('admin_access_delete',$row->id) }}" class="btn btn-danger" onClick="return confirm('Silmek istediğinizden emin misiniz?');"><i class="fas fa-trash-alt"></i> Sil</a>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
