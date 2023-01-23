@extends('front.layout.app')

@section('main_content')
    <section class="wrapper bg-soft-primary">
        <div class="container pt-7 pb-7 pt-md-7 pb-md-7 ">
            <div class="row">
                <div class="col-md-12 ">
                    <h6 class="display-6">Sıkça Sorulan Sorular</h6>
                </div>
            </div>
        </div>
    </section>

<section class="wrapper bg-light">
    <div class="container py-14 py-md-16">
        <div class="row">
            @php $i=0; @endphp
            @foreach($faq_data as $item)
                <div class="col-md-6">
                    <div class="accordion-wrapper" id="accordion-1">
                        @php $i++; @endphp
                        <div class="card accordion-item">
                            <h2 class="card-header accordion-header" id="heading{{ $i }}">
                                <button class="accordion-button @if($loop->iteration != 1) collapsed @endif" type="button" data-bs-toggle="collapse" data-bs-target="#collapse{{ $i }}" aria-expanded="@if($loop->iteration == 1) true @else false @endif" aria-controls="collapse{{ $i }}">
                                    {{ $item->faq_title }}
                                </button>
                            </h2>
                            <div id="collapse{{ $i }}" class="accordion-collapse collapse @if($loop->iteration == 1) show @endif" aria-labelledby="heading{{ $i }}" data-bs-parent="#accordionExample">
                                <div class="accordion-body card-body">
                                    {!! $item->faq_detail !!}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</section>
@endsection
