@extends('admin.layout.app')

@section('heading', 'MYO Bölümler')

@section('button')
<a href="{{ route('admin_voc_department_show') }}" class="btn btn-primary"><i class="fas fa-list"></i> Listeye Dön</a>
@endsection

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_voc_department_update',$department_single->id) }}" method="post">
        @csrf
        <div class="row">
            <div class="col-6">
                <h6>Genel Bilgi</h6>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Bölüm Adı</label>
                            <input type="text" class="form-control" name="title" value="{{$department_single->title}}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Hakkında</label>
                            <textarea name="info" class="form-control summernote">{{$department_single->info}}</textarea>

                        </div>
                        <div class="form-group mb-3">
                            <label>Meslek Yüksekokul</label>
                            <select name="vocational_id" class="form-control">
                                @foreach($vocational as $row)
                                    <option value="{{ $row->id }}" @if($department_single->vocational_id == $row->id) selected @endif>{{ $row->title }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>
                </div>
                <h6>Personel</h6>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Akademik</label>
                            <textarea name="head_1" class="form-control summernote">{{$department_single->head_1}}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>İdari</label>
                            <textarea name="head_2" class="form-control summernote">{{$department_single->head_2}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h6>İletişim</h6>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Adress</label>
                            <textarea name="address" class="form-control summernote">{{$department_single->address}}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Telefon</label>
                            <input type="text" class="form-control" name="phone" value="{{$department_single->phone}}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Faks</label>
                            <input type="text" class="form-control" name="fax" value="{{$department_single->fax}}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="{{$department_single->email}}">
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
