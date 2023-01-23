@extends('admin.layout.app')

@section('heading', 'Ayarlar')

@section('main_content')
<div class="section-body">
    <form action="{{ route('admin_setting_update') }}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                            <a class="nav-link active" id="v-1-tab" data-bs-toggle="pill" type="button" data-bs-target="#v-1"
                                role="tab" aria-controls="v-1" aria-selected="true">
                                Üniversite Adı ve Slogan
                            </a>
                            <a class="nav-link" id="v-2-tab" data-bs-toggle="pill" type="button" data-bs-target="#v-2"
                                role="tab" aria-controls="v-2" aria-selected="false">
                                Logo ve Favicon
                            </a>
                            <a class="nav-link" id="v-3-tab" data-bs-toggle="pill" type="button" data-bs-target="#v-3"
                                role="tab" aria-controls="v-3" aria-selected="false">
                                İletişim
                            </a>
                            <a class="nav-link" id="v-4-tab" data-bs-toggle="pill" type="button" data-bs-target="#v-4"
                                role="tab" aria-controls="v-4" aria-selected="false">
                                Sosyal Medya
                            </a>
                            <a class="nav-link" id="v-5-tab" data-bs-toggle="pill" type="button" data-bs-target="#v-5"
                                role="tab" aria-controls="v-5" aria-selected="false">
                                Navigasyon
                            </a>
                            <a class="nav-link" id="v-6-tab" data-bs-toggle="pill" type="button" data-bs-target="#v-6"
                                role="tab" aria-controls="v-6" aria-selected="false">
                                Site Tag Bilgileri
                            </a>

                            <a class="nav-link" id="v-7-tab" data-bs-toggle="pill" type="button" data-bs-target="#v-7"
                                role="tab" aria-controls="v-7" aria-selected="false">
                                Copyright
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="card">
                    <div class="card-body">
                        <div class="tab-content" id="v-pills-tabContent">
                            <div class="pt_0 tab-pane fade show active" id="v-1" role="tabpanel" aria-labelledby="v-1-tab">
                                <div class="form-group mb-3">
                                    <label>Üniversite Adı</label>
                                    <input type="text" name="title" class="form-control" value="{{ $setting_data->title }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Slogan</label>
                                    <input type="text" name="slogan" class="form-control" value="{{ $setting_data->slogan }}">
                                </div>
                            </div>
                            <div class="pt_0 tab-pane fade" id="v-2" role="tabpanel" aria-labelledby="v-2-tab">
                                <div class="form-group mb-3">
                                    <label>Logo</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$setting_data->logo) }}" alt=""
                                            style="height:80px;">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Logo Değiştir</label>
                                    <div>
                                        <input type="file" name="logo">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Favicon</label>
                                    <div>
                                        <img src="{{ asset('uploads/'.$setting_data->favicon) }}" alt=""
                                            style="height:30px;">
                                    </div>
                                </div>
                                <div class="form-group mb-3">
                                    <label>Favicon Değiştir</label>
                                    <div>
                                        <input type="file" name="favicon">
                                    </div>
                                </div>
                            </div>
                            <div class="pt_0 tab-pane fade" id="v-3" role="tabpanel" aria-labelledby="v-3-tab">
                                <div class="form-group mb-3">
                                    <label>Telefon 1 *</label>
                                    <input type="text" name="phone_1" class="form-control" value="{{ $setting_data->phone_1 }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Telefon 2</label>
                                    <input type="text" name="phone_2" class="form-control" value="{{ $setting_data->phone_2 }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Fax 1 *</label>
                                    <input type="text" name="fax_1" class="form-control" value="{{ $setting_data->fax_1 }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Fax 2</label>
                                    <input type="text" name="fax_2" class="form-control" value="{{ $setting_data->fax_2 }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Adres</label>
                                    <input type="text" name="adress" class="form-control" value="{{ $setting_data->adress }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Email</label>
                                    <input type="text" name="email" class="form-control" value="{{ $setting_data->email }}">
                                </div>
                            </div>
                            <div class="pt_0 tab-pane fade" id="v-4" role="tabpanel" aria-labelledby="v-4-tab">
                                <div class="form-group mb-3">
                                    <label>Facebook</label>
                                    <input type="text" name="facebook" class="form-control" value="{{ $setting_data->facebook }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Instagram</label>
                                    <input type="text" name="instagram" class="form-control" value="{{ $setting_data->instagram }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Twitter</label>
                                    <input type="text" name="twitter" class="form-control" value="{{ $setting_data->twitter }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label>LinkedIn</label>
                                    <input type="text" name="linkedin" class="form-control" value="{{ $setting_data->linkedin }}">
                                </div>
                            </div>
                            <div class="pt_0 tab-pane fade" id="v-5" role="tabpanel" aria-labelledby="v-5-tab">
                                <div class="form-group mb-3">
                                    <label>Google Map</label>
                                    <input type="text" name="map_google" class="form-control" value="{{ $setting_data->map_google }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Lat</label>
                                    <input type="text" name="map_lat" class="form-control" value="{{ $setting_data->map_lat }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Long</label>
                                    <input type="text" name="map_long" class="form-control" value="{{ $setting_data->map_long }}">
                                </div>
                            </div>
                            <div class="pt_0 tab-pane fade" id="v-6" role="tabpanel" aria-labelledby="v-6-tab">
                                <div class="form-group mb-3">
                                    <label>Site Tag Line</label>
                                    <input type="text" name="site_tag_line" class="form-control" value="{{ $setting_data->site_tag_line }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Site Meta Tags</label>
                                    <input type="text" name="site_meta_tags" class="form-control" value="{{ $setting_data->site_meta_tags }}">
                                </div>
                                <div class="form-group mb-3">
                                    <label>Site Meta Description</label>
                                    <input type="text" name="site_meta_description" class="form-control" value="{{ $setting_data->site_meta_description }}">
                                </div>
                            </div>
                            <div class="pt_0 tab-pane fade" id="v-7" role="tabpanel" aria-labelledby="v-6-tab">
                                <div class="form-group mb-3">
                                    <label>Copyright</label>
                                    <input type="text" name="copyright" class="form-control" value="{{ $setting_data->copyright }}">
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div align="right" class="col-md-12">
                <button type="submit" class="btn btn-primary">Güncelle</button>
            </div>
        </div>
    </form>
</div>
@endsection
