@extends('admin.layout.app')
@section('heading', 'Rektör Yardımcıları')
@section('button')
    <a href="{{ route('admin_advisor_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Ekle</a>
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
                                    <th>İSİM SOYİSİM</th>
                                    <th>BİRİM</th>
                                    <th>EMAIL</th>
                                    <th>İŞLEM</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($advisor_data as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>{{ $row->advisor_fullname }}</td>
                                    <td>{{ $row->advisor_detail }}</td>
                                    <td>{{ $row->advisor_mail }}</td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('admin_advisor_edit',$row->id) }}" class="btn btn-success"><i class="fas fa-edit"></i> Güncelle</a>
                                        <a href="{{ route('admin_advisor_delete',$row->id) }}" class="btn btn-danger" onClick="return confirm('Silmek istediğinizden emin misiniz?');"><i class="fas fa-trash-alt"></i> Sil</a>
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
