@extends('layouts.app')


@section('poster')

    <div id="carouselExampleIndicators" class="carousel slide carousel-fade" data-ride="carousel">
        <ol class="carousel-indicators">
            @foreach($films as $key => $film)
                <li data-target="#carouselExampleIndicators" data-slide-to="{{ $key }}" class="@if($key == 0) active @endif"></li>
            @endforeach
        </ol>
        <div class="carousel-inner">
            @foreach($films as $key => $film)
                <div class="carousel-item @if($key == 0) active @endif">
                    @include('include._post_head', $film)
                </div>
            @endforeach
        </div>
    </div>

@stop

@section('content')
    <div class="row justify-content-start pl-3 ">
        <div class="d-flex bd-highlight w-100">
            <div class="align-self-center my-4 pr-3 bd-highlight">
                <a class="h4 text-monospace text-black text-decoration-none" href="">Популярные Фильмы</a>
            </div>
            <div class="align-self-center border-top flex-fill mr-3"></div>
        </div>
    </div>
    <div class="row justify-content-start pl-3 ">
        @foreach($films as $film)
            <div class="col-6 col-sm-3 col-md-3 col-lg-2 mb-4 pl-0">
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
                       <div class="align-self-center flex-fill "><i class="fal fa-play-circle fa-5x"></i></div>
                    </a>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row justify-content-start pl-3 ">
        <div class="d-flex bd-highlight w-100">
            <div class="align-self-center my-4 pr-3 bd-highlight">
                <a class="h4  text-monospace text-black" href="">Популярные Фильмы</a>
            </div>
            <div class="align-self-center border-top flex-fill mr-3"></div>
        </div>
    </div>
    <div class="row justify-content-start pl-md-3 ">
        @foreach($films as $film)
            <div class="col-sm-3 col-md-3 col-lg-2 mb-4 pl-sm-0">
                <div class="card border-0 shadow-sm">
                    <img src="{{ $film->poster }}" class="card-img-top" alt="...">
                    <div class="card-body px-3">
                        <div class="card-title h6">{{ $film->title }}</div>
                        <p class="card-text"><small class="text-muted text-monospace">{{ $film->age }} </small></p>
                    </div>
                </div>
            </div>
        @endforeach
    </div>

    <div class="row justify-content-start pl-md-3 ">
        <a class="h4 font-weight-light my-4 text-monospace text-black-50" href="">Популярные Мультфильмы</a>
    </div>
    <div class="row justify-content-start pl-md-3 ">
        @foreach($films as $film)
            <div class="col-sm-3 col-md-3 col-lg-2 mb-4 pl-sm-0">
                <div class="card border-0 shadow-sm">
                    <img src="{{ $film->image }}" class="card-img-top" alt="...">
                    <div class="card-body px-3">
                        <div class="card-title h6">{{ $film->title }}</div>
                        <p class="card-text"><small class="text-muted text-monospace">{{ $film->age }} </small></p>
                    </div>

                </div>
            </div>
        @endforeach
    </div>
@endsection
