<div class="w-100 d-flex bg-poster-cover" style="background-image: url(https://lorempixel.com/1900/350/?90892);">
    <div class="container text-left d-flex justify-content-between">
        <div class="col-md-6 col-lg-5 pb-5 mb-4 pl-0 pl-lg-3 pl-xl-0 mt-auto text-white pr-0">
            <div class="h3 font-weight-bold">{{ $film->title }}</div>
            <div class="my-2 text-white clearfix">
                <div class="rating position-relative float-left" style="width: 200px;">
                    <div class="rating-plus text-nowrap overflow-hidden text-warning position-absolute" style="width: {{ $film->rating }}0%">
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                    </div>
                    <div class="rating-minus text-white-50">
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                        <i class="fal fa-star"></i>
                    </div>
                </div>
                <span class="text-white small">(99999)</span>
            </div>
            <nav class="nav small mb-2">
                <li class="nav-item">@foreach($film->years as $year){{ $year->name }} @if(!$loop->last), @endif @endforeach</li>
                <li class="nav-item mx-2" >&#8226;</li>
                <li class="nav-item">{{ $film->runtime }} мин</li>
                <li class="nav-item mx-2" >&#8226;</li>
                <li class="nav-item">@foreach($film->genres as $genre)<span class="mr-1 "> <a href="{{ route('genre.show', $genre) }}" class="text-white">{{ $genre->name }}</a> @if(!$loop->last), @endif </span>@endforeach</li>
                <li class="nav-item mx-2" >&#8226;</li>
                <li class="nav-item"><span class="badge badge-danger">{{ $film->age_limit }}+</span></li>
            </nav>
            <p class="small w-75">{{ $film->sh_description }}</p>
            <div class="btn-group-sm">
                <a class="btn btn-danger mr-1" href=""><i class="fas fa-play mr-1" aria-hidden="true"></i> Смотреть онлайн</a>
                <a class="btn btn-outline-warning mr-1" href=""><i class="fal fa-play mr-1" aria-hidden="true"></i> Трейлер</a>
                <a class="btn btn-outline-danger mr-1" href=""><i class="fas fa-heart" aria-hidden="true"></i> </a>
                <a class="btn btn-outline-light" href=""><i class="fal fa-eye" aria-hidden="true"></i> </a>
            </div>
        </div>
        <div class="d-md-block d-none col-sm-6 col-lg-2 text-center my-auto">
            <a class="text-white" href=""><i class="fal fa-play-circle fa-5x"></i></a>
        </div>
        <div class="d-md-block d-none col-5 mt-auto" ></div>
    </div>
</div>