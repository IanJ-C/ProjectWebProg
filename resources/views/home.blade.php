@extends('template.template')

@section('title', 'Home')

@section('content')
<!-- Banner -->
<div id="carouselExampleIndicators" class="carousel slide c-container m-auto rounded-bottom" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner rounded-bottom">
        <div class="carousel-item active c-item">
            <img src=" {{ URL('images/sandero-dacia.webp') }} " class="d-block w-100 c-img" alt="Dacia Sandero">
        </div>
        <div class="carousel-item c-item">
            <img src=" {{ URL('images/rimac-nevera.jpg') }} " class="d-block w-100 c-img" alt="Rimac Nevera">
        </div>
        <div class="carousel-item c-item">
            <img src=" {{ URL('images/vw-up.jpg') }} " class="d-block w-100 c-img" alt="Volkswagen Up">
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<!-- Category -->
<div class="container py-5">
    <div class="row g-8">
        <div class="col m-auto">
            <div class="card shadow-sm my-3 w-100">
                <img class="card-img" src="{{ URL('images/coupe.webp') }}" alt="Hatchback">
                <div class="card-body">
                    <h6 class="card-text text-center">Coupe</h6>
                </div>
            </div>
        </div>
        <div class="col m-auto">
            <div class="card shadow-sm my-3 w-100">
                <img class="card-img" src="{{ URL('images/hatchback.webp') }}" alt="Hatchback">
                <div class="card-body">
                    <h6 class="card-text text-center">Hatchback</h6>
                </div>
            </div>
        </div>
        <div class="col m-auto">
            <div class="card shadow-sm my-3 w-100">
                <img class="card-img" src="{{ URL('images/mpv.webp') }}" alt="Hatchback">
                <div class="card-body">
                    <h6 class="card-text text-center">MPV</h6>
                </div>
            </div>
        </div>
        <div class="col m-auto">
            <div class="card shadow-sm my-3 w-100">
                <img class="card-img" src="{{ URL('images/pickup.webp') }}" alt="Hatchback">
                <div class="card-body">
                    <h6 class="card-text text-center">Pickup</h6>
                </div>
            </div>
        </div>
        <div class="col justify-content-center">
            <div class="card shadow-sm my-3 w-100">
                <img class="card-img" src="{{ URL('images/sedan.webp') }}" alt="Hatchback">
                <div class="card-body">
                    <h6 class="card-text text-center">Sedan</h6>
                </div>
            </div>
        </div>
        <div class="col m-auto">
            <div class="card shadow-sm my-3 w-100">
                <img class="card-img" src="{{ URL('images/suv.jpg') }}" alt="Hatchback">
                <div class="card-body">
                    <h6 class="card-text text-center">SUV</h6>
                </div>
            </div>
        </div>
        <div class="col m-auto">
            <div class="card shadow-sm my-3 w-100">
                <img class="card-img" src="{{ URL('images/van.webp') }}" alt="Hatchback">
                <div class="card-body">
                    <h6 class="card-text text-center">Van</h6>
                </div>
            </div>
        </div>
        <div class="col m-auto">
            <div class="card shadow-sm my-3 w-100">
                <img class="card-img" src="{{ URL('images/wagon.jpg') }}" alt="Hatchback">
                <div class="card-body">
                    <h6 class="card-text text-center">Wagon</h6>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection