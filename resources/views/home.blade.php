@extends('template.template')

@section('title', 'Home')

@section('content')
<div id="carouselExampleIndicators" class="carousel slide c-container m-auto">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
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
@endsection