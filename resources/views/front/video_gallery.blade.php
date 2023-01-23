@extends('front.layout.app')
@section('main_content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-7 pb-7 pt-md-7 pb-md-7 ">
            <div class="row">
                <div class="col-md-12 ">
                    <h6 class="display-6">Videolar</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="wrapper mt-10 ">
        <div class="container pb-14 pb-md-16">
            <div class="row mt-5 gx-md-6 gy-6">
                @foreach($videos as $data)
                    <div class="col-md-6 text-left">
                        <h6>{{ $data->caption }}</h6>
                        <div class="player" data-plyr-provider="youtube" data-plyr-embed-id="{{$data->video_id}}"></div>
                    </div>
                @endforeach
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <nav class="d-flex" aria-label="pagination">
                        <ul class="pagination mb-0">
                            <li class="page-item disabled">
                                {{ $videos->links() }}
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
