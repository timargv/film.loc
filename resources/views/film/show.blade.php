@extends('layouts.app')

{{--{{ dd($film->getFilm(299)) }}--}}

@section('poster')
    <div class="carousel-item active float-none">
        @include('include._post_head', $film)
    </div>
@stop

@section('content')
    <div class="row px-0 px-md-0 px-lg-3 px-xl-0 py-3 my-2">
        <div class="col-sm-12 col-md-4 col-lg-3 col-xl-2 mb-4 pl-sm-3">
            <div class="row pl-md-3 pl-3">
                <div class="col-6 col-sm-6 col-md-12 pl-0 mb-4">
                    <div class="card border-0 shadow-lg mr-md-0">
                        <a href=""><img src="{{ $film->poster }}" class="card-img" alt="..."></a>
                        <div class="card-body px-3 d-none">
                            <div class="card-title h6">{{ $film->title }}</div>
                            <p class="card-text"><small class="text-muted text-monospace">{{ $film->age_limit }}, </small></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-sm-6 col-md-12 pl-0">
                    <div class="card border-0 p-3">
                        <div class="rating mb-3 ">
                            <span class="pr-3"><i class="fal fa-star fa-2x"></i> {{ $film->kp_rating }}</span>
                            <span class="pr-3"><i class="fab fa-imdb fa-2x"></i> {{ $film->imdb_rating }}</span>
                        </div>

                        <div class="budget mb-3 ">
                            <span class="pr-3">Бюджет: <i class="fas fa-dollar-sign"></i> {{ $film->budget }}</span>
                        </div>
                        <div class="premiere mb-3 ">
                            <span class="pr-3">Премьера: <i class="fas fa-calendar-alt"></i> {{$film->premiere->toFormattedDateString('M d Y')}} </span>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-12 col-md-8 col-lg-6 pr-0 pr-md-3 ">
            <div class="  justify-content-start pr-md-5 mr-md-4 pr-3 pl-md-3 mb-5">
                <div class="d-flex  w-100 mb-3 pb-1">
                    <div class="align-self-center my-0 pr-3 ">
                        <div class="h5 font-weight-bold text-monospace text-black mb-0">Описание</div>
                    </div>
                    <div class="align-self-center border-top flex-fill "></div>
                </div>
                <div class="d-flex  w-100">
                    {{ $film->description }}
                </div>
            </div>

            <div class="  justify-content-start pr-md-5 mr-md-4 pr-3 pl-md-3 mb-5">
                <div class="d-flex  w-100 mb-3 pb-1">
                    <div class="align-self-center my-0 pr-3 ">
                        <div class="h5 font-weight-bold text-monospace text-black mb-0">В Ролях</div>
                    </div>
                    <div class="align-self-center border-top flex-fill"></div>
                </div>
                <div class="d-flex w-100">
                    <nav class="nav row text-center mr-3 mr-md-0">
                        @foreach($film->casts as $person)
                            <li class="nav-item col-3 col-xl-2 mb-3" data-toggle="tooltip" data-placement="top" title="{{ $person->name }}">
                                <div class="mb-2 text-center mx-auto d-flex" style="height: 65px; width: 65px">
                                    <a href="{{ route('person.show', $person) }}" class="align-self-center rounded-circle position-relative mx-auto" style="width: 65px; height:65px;overflow: hidden;">
                                        <img src="{{ $person->image }}" class="w-100 h-100 position-absolute" alt="..." style="left: 0; right: 0;">
                                    </a>
                                </div>
                                <span class="d-block text-truncate text-wrap text-muted" style="max-width: 100%;">{{ $person->name }}</span>
                            </li>
                        @endforeach

                    </nav>
                </div>
            </div>

            {{-- Продюсеры и Писательи --}}
            <div class="row">
                <div class="col-sm-12 col-md-8 col-lg-6 pr-0 pr-md-3 ">
                    <div class=" justify-content-start pr-md-5 mr-md-4 pr-3 pl-md-3 mb-5">
                        <div class="d-flex  w-100 mb-3 pb-1">
                            <div class="align-self-center my-0 pr-3 ">
                                <div class="h4 font-weight-bold text-monospace text-black mb-0">Режиссер</div>
                            </div>
                        </div>
                        <div class="d-flex w-100">
                            <nav class="text-left mr-3 mr-md-0">
                                @foreach($film->directors as $person)
                                    <li class="list-unstyled mb-3">
                                        <a href="{{ route('person.show', $person) }}" class="d-block text-truncate text-wrap text-muted" style="max-width: 100%;">{{ $person->name }}</a>
                                    </li>
                                @endforeach

                            </nav>
                        </div>
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 col-lg-6 pr-0 pr-md-3 ">
                    <div class=" justify-content-start pr-md-5 mr-md-4 pr-3 pl-md-3 mb-5">
                        <div class="d-flex  w-100 mb-3 pb-1">
                            <div class="align-self-center my-0 pr-3 ">
                                <div class="h4 font-weight-bold text-monospace text-black mb-0">Сценарий</div>
                            </div>
                        </div>
                        <div class="d-flex w-100">
                            <nav class="text-left mr-3 mr-md-0">
                                @foreach($film->scriptwriters as $person)
                                    <li class="list-unstyled mb-3">
                                        <a href="{{ route('person.show', $person) }}" class="d-block text-truncate text-wrap text-muted" style="max-width: 100%;">{{ $person->name }}</a>
                                    </li>
                                @endforeach

                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>



        <div class="col-sm-12 col-md-12 col-lg-3 col-xl-4">
            <div class="row mb-5 pl-lg-2 px-3">
                <div class="d-flex  w-100 mb-3 pb-1">
                    <div class="align-self-center my-0 pr-3 ">
                        <div class="h5 font-weight-bold text-monospace text-black mb-0">{{ __('show.Video') }}</div>
                    </div>
                    <div class="align-self-center border-top flex-fill "></div>
                </div>
                <div class="d-flex  w-100">
                    {{ $film->description }}
                </div>
            </div>

            @if($film->images)
            <div class="row mb-5 pl-lg-2 px-3">
                <div class="d-flex  w-100 mb-3 pb-1">
                    <div class="align-self-center my-0 pr-3 ">
                        <div class="h5 font-weight-bold text-monospace text-black mb-0">{{ __('show.Photo') }}</div>
                    </div>
                    <div class="align-self-center border-top flex-fill "></div>
                </div>
                <div class="d-flex  w-100">
                    <nav class="nav row pr-3">
                        @foreach($film->images as $image)
                            @if($image)
                                <li class="nav-item col-md-6 mb-3 pr-0">
                                    <img src="{{ $image }}" class="w-100 card-img" alt="..." style="" >
                                </li>
                            @endif
                        @endforeach
                    </nav>
                </div>
            </div>
            @endif
        </div>
    </div>
@endsection



