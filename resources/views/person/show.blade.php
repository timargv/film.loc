@extends('layouts.app')


@section('content')

    <div class="row px-0 px-md-0 px-lg-3 px-xl-0 py-3 my-2">
        <div class="col-sm-4 col-md-4 col-lg-3 col-xl-2 mb-4 pl-sm-3">
            <div class="row pl-md-3 pl-3">
                <div class="col-6 col-md-12 pl-0 mb-4">
                    <div class="card border-0 shadow-lg mr-md-0">
                        <a href=""><img src="{{ $person->image }}" class="card-img" alt="..."></a>
                        <div class="card-body px-3 d-none">
                            <div class="card-title h6">{{ $person->name }}</div>
                            <p class="card-text"><small class="text-muted text-monospace">, </small></p>
                        </div>
                    </div>
                </div>
                <div class="col-6 col-md-12 pl-0 d-none">
                    <div class="card border-0 p-3">
                        <div class="mb-3">
                            Name: {{ $person->name }}
                        </div>
                        <div class="mb-3">
                            Name Original: {{ $person->name }}
                        </div>
                        <div class="mb-3">
                            Рост: {{ $person->stature }}
                        </div>
                        <div class="mb-3">
                            Дата рождения: {{ $person->date }}
                        </div>
                        <div class="mb-3">
                            Место рождения: {{ $person->birthplace }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-sm-9 col-md-8 col-lg-6 pr-0 pr-md-3 ">
            <div class="  justify-content-start pr-md-5 mr-md-4 pr-3 pl-md-3 mb-5">
                <div class="d-flex  w-100 mb-3 pb-1">
                    <div class="align-self-center my-0 pr-3 ">
                        <div class="h5 font-weight-bold text-monospace text-black mb-0">{{ $person->name }}</div>
                        <div class="card-subtitle text-muted small pt-2">{{ $person->name_original }}</div>
                    </div>
                    <div class="align-self-center border-top flex-fill d-none"></div>
                    <div class="align-self-end pl-3 card-subtitle text-muted small d-none">{{ $person->name_original }}</div>

                </div>
                <div class="d-flex  w-100">
                    <div class="card border-0 p-3 w-100">

                        <div class="mb-3">
                            Рост: {{ $person->stature }}
                        </div>
                        <div class="mb-3">
                            Дата рождения:
                            {{$person->date->toFormattedDateString('M d Y')}}
                        </div>
                        <div class="mb-3">
                            Место рождения: {{ $person->birthplace }}

                        </div>
                    </div>
                </div>
            </div>

            <div class="justify-content-start pr-md-5 mr-md-4 pr-3 pl-md-3 mb-5">
                <div class="d-flex  w-100 mb-3 pb-1">
                    <div class="align-self-center my-0 pr-3 ">
                        <div class="h5 font-weight-bold text-monospace text-black mb-0">В Ролях</div>
                    </div>
                    <div class="align-self-center border-top flex-fill"></div>
                </div>
                <div class="d-flex w-100">
                    <div class="row pr-0 pr-3">
                        @foreach($person->film_casts as $film)
                            <div class="col-6 col-sm-3  col-xl-4 mb-4 pr-0">
                                <div class="card border-0 shadow-sm">
                                    <a href="{{ route('film.show', $film) }}"><img src="{{ $film->poster }}" class="card-img" alt="..."></a>
                                    <div class="card-body px-3 d-none">
                                        <div class="card-title h6 ">{{ $film->title }}</div>
                                        <div class="card-text d-flex">
                                            <span class="@if($film->rating >= 5) text-warning @endif align-self-center pr-2 text-monospace">
                                                <i class="fal fa-star mr-0 pr-1"></i>{{ $film->rating }}</span>
                                                            <span class="text-muted text-monospace align-self-center">
                                                {{ $film->age }}
                                            </span>
                                        </div>
                                    </div>
                                    <a class="text-white card-img-overlay d-flex" href="{{ route('film.show', $film) }}" >
                                        <div class="align-self-center flex-fill "><i class="fal fa-play-circle fa-2x"></i></div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
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
                    asdsad
                </div>
            </div>


        </div>
    </div>


@endsection
