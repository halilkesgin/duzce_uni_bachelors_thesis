@php
    $settings_data = \App\Models\Setting::where('id',1)->first();
@endphp

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$settings_data->title}} - {{$settings_data->slogan}}</title>
    <link rel="shortcut icon" href="{{ asset('uploads/'.$global_setting_data->favicon) }}">
    @include('front.layout.styles')
</head>
<body>
    <div class="content-wrapper">
        <header class="wrapper bg-light">
            @include('front.layout.header')
            @include('front.layout.nav')
        </header>
        @yield('main_content')
    </div>
    @include('front.layout.footer')
    <div class="progress-wrap">
        <svg class="progress-circle svg-content" width="100%" height="100%" viewBox="-1 -1 102 102">
            <path d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98" />
        </svg>
    </div>
    @include('front.layout.scripts')
</body>
</html>
