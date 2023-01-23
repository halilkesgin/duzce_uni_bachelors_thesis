@extends('admin.layout.app')
@section('heading', 'Fakülteler')
@section('button')
<a href="{{ route('admin_faculty_show') }}" class="btn btn-primary"><i class="fas fa-list"></i> Listeye Dön</a>
@endsection

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_faculty_update',$faculty_data->id) }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-6">
                <h6>Genel Bilgi</h6>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Fakülte Adı</label>
                            <input type="text" class="form-control" name="title" value="{{$faculty_data->title}}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Hakkında</label>
                            <textarea name="info" class="form-control summernote">{{$faculty_data->info}}</textarea>
                        </div>
                    </div>
                </div>
                <h6>Personel</h6>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Akademik</label>
                            <textarea name="personal_1" class="form-control summernote">{{$faculty_data->personal_1}}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>İdari</label>
                            <textarea name="personal_2" class="form-control summernote">{{$faculty_data->personal_2}}</textarea>
                        </div>
                    </div>
                </div>
                <h6>Kurumsal</h6>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Organizasyon Şeması</label>
                            <textarea name="fac_schema" class="form-control summernote">{{$faculty_data->fac_schema}}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Görev Tanımları</label>
                            <textarea name="mission" class="form-control summernote">{{$faculty_data->mission}}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h6>Yönetim</h6>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Dekan</label>
                            <input type="text" class="form-control" name="dean" value="{{$faculty_data->dean}}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Dekan Yardımcıları</label>
                            <textarea name="fac_com" class="form-control summernote">{{$faculty_data->mission}}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Yönetim Kurulu Üyeleri</label>
                            <textarea name="fac_man" class="form-control summernote">{{$faculty_data->mission}}</textarea>
                        </div>
                    </div>
                </div>
                <h6>Kararlar</h6>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Fakülte Kurulu Kararları</label>
                            <textarea name="fac_desc1" class="form-control summernote">{{$faculty_data->fac_desc1}}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Yönetim Kurulu Kararları</label>
                            <textarea name="fac_desc2" class="form-control summernote">{{$faculty_data->fac_desc2}}</textarea>
                        </div>
                    </div>
                </div>
                <h6>İletişim</h6>
                <div class="card">
                    <div class="card-body">
                        <div class="form-group mb-3">
                            <label>Adress</label>
                            <textarea name="address" class="form-control summernote">{{$faculty_data->address}}</textarea>
                        </div>
                        <div class="form-group mb-3">
                            <label>Telefon</label>
                            <input type="text" class="form-control" name="phone" value="{{$faculty_data->phone}}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Faks</label>
                            <input type="text" class="form-control" name="fax" value="{{$faculty_data->fax}}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Email</label>
                            <input type="text" class="form-control" name="email" value="{{$faculty_data->email}}">
                        </div>
                        <div class="form-group mb-3">
                            <label>Map Bağlantı Linki</label>
                            <input type="text" class="form-control" name="map" value="{{$faculty_data->map}}">
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
