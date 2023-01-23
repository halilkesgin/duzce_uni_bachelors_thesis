@extends('front.layout.app')
@section('main_content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-7 pb-7 pt-md-7 pb-md-7 ">
            <div class="row">
                <div class="col-md-12 ">
                    <h6 class="display-6">Fotoğraflar</h6>
                </div>
            </div>
        </div>
    </section>
    <section class="wrapper mt-10 ">
        <div class="container pb-14 pb-md-16">
            <div class="row mt-5 gx-md-6 gy-6">
                @foreach($photos as $data)
                <div class="item col-md-4">
                    <figure class="hover-scale rounded cursor-dark">
                        <a href="{{ asset('uploads/'.$data->photo) }}" data-glightbox data-gallery="project-1">
                            <img src="{{ asset('uploads/'.$data->photo) }}" alt="{{ $data->caption }}" />
                        </a>
                    </figure>
                </div>
                @endforeach
            </div>

            <div class="row mt-5">
                <div class="col-md-12">
                    <nav class="d-flex" aria-label="pagination">
                        <ul class="pagination mb-0">
                            <li class="page-item disabled">
                                {{ $photos->links() }}
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </section>
@endsection
