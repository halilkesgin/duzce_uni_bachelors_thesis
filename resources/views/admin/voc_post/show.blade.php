@extends('admin.layout.app')

@section('heading', 'MYO Duyuru')

@section('button')
    <a href="{{ route('admin_voc_post_create') }}" class="btn btn-primary"><i class="fas fa-plus"></i> Ekle</a>
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
                                    <th>FOTOĞRAF</th>
                                    <th>BAŞLIK</th>
                                    <th>BÖLÜM</th>
                                    <th>MESLEK YÜKSEKOKUL</th>
                                    <th>İŞLEM</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($posts as $row)
                                <tr>
                                    <td>{{ $loop->iteration }}</td>
                                    <td>
                                        <img src="{{ asset('uploads/'.$row->post_photo) }}" alt="" style="width:200px;">
                                    </td>
                                    <td>{{ $row->post_title }}</td>
                                    <td>{{ $row->rDepartment->title }}</td>
                                    <td>{{ $row->rDepartment->rVocational->title }}</td>
                                    <td class="pt_10 pb_10">
                                        <a href="{{ route('admin_voc_post_edit',$row->id) }}" class="btn btn-success"><i class="fas fa-edit"></i> Güncelle</a>
                                        <a href="{{ route('admin_voc_post_delete',$row->id) }}" class="btn btn-danger" onClick="return confirm('Silmek istediğinizden emin misiniz?');"><i class="fas fa-trash-alt"></i> Sil</a>
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
