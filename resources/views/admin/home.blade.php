@extends('admin.layout.app')

@section('heading', 'Dashboard')

@section('main_content')
<div class="row">
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-danger">
                <i class="fas fa-newspaper"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Haber Sayısı</h4>
                </div>
                <div class="card-body">
                    {{$total_news}}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-info">
                <i class="fas fa-camera"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Duyuru</h4>
                </div>
                <div class="card-body">
                    {{ $total_announcement }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-warning">
                <i class="fas fa-video"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Etkinlik</h4>
                </div>
                <div class="card-body">
                    {{ $total_event }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fas fa-question-circle"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Sıkça Sorulan Sorular</h4>
                </div>
                <div class="card-body">
                    {{ $total_faq }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-success">
                <i class="fab fa-bandcamp"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Fakülte Sayısı</h4>
                </div>
                <div class="card-body">
                    {{ $total_faculty }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fab fa-atlassian"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Bölüm Sayısı</h4>
                </div>
                <div class="card-body">
                    {{ $total_department }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fab fa-atlassian"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Araştırma Merkezi Sayısı</h4>
                </div>
                <div class="card-body">
                    {{ $total_research }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fab fa-atlassian"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Slider</h4>
                </div>
                <div class="card-body">
                    {{ $total_slider }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fab fa-atlassian"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Fotoğraf Sayısı</h4>
                </div>
                <div class="card-body">
                    {{ $total_photo }}
                </div>
            </div>
        </div>
    </div>
    <div class="col-lg-3 col-md-6 col-sm-6 col-12">
        <div class="card card-statistic-1">
            <div class="card-icon bg-primary">
                <i class="fab fa-atlassian"></i>
            </div>
            <div class="card-wrap">
                <div class="card-header">
                    <h4>Video Sayısı</h4>
                </div>
                <div class="card-body">
                    {{ $total_video }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
