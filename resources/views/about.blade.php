@extends('template.abouttemplate')

@section('title', 'About')

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
        <h2>Categories</h2>
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

<!-- Popular Cars -->
<div class="container pb-5">
    <div class="row g-4">
        <h2>Popular Cars</h2>
        <div class="col-md-3">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="{{ URL('images/xpander.webp') }}" alt="Xpander">
                <div class="card-body">
                    <h3 class="fs-5">2023 Mitsubishi Xpander</h3>
                    <p class="fw-medium">Rp 258,2 - 312,9 Million</p>
                    <a href="#" class="icon-link icon-link-hover link-underline link-underline-opacity-0 link-underline-opacity-100-hover">
                        See Details
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="{{ URL('images/avanza.webp') }}" alt="Avanza">
                <div class="card-body">
                    <h3 class="fs-5">2022 Toyota Avanza</h3>
                    <p class="fw-medium">Rp 235,1 - 272,5 Million</p>
                    <a href="#" class="icon-link icon-link-hover link-underline link-underline-opacity-0 link-underline-opacity-100-hover">
                        See Details
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="{{ URL('images/sigra.webp') }}" alt="Sigra">
                <div class="card-body">
                    <h3 class="fs-5">2022 Daihatsu Sigra</h3>
                    <p class="fw-medium">Rp 136 - 180,6 Million</p>
                    <a href="#" class="icon-link icon-link-hover link-underline link-underline-opacity-0 link-underline-opacity-100-hover">
                        See Details
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="{{ URL('images/city.webp') }}" alt="City">
                <div class="card-body">
                    <h3 class="fs-5">2021 Honda City Hatchback</h3>
                    <p class="fw-medium">Rp 345,3 - 375,3 Million</p>
                    <a href="#" class="icon-link icon-link-hover link-underline link-underline-opacity-0 link-underline-opacity-100-hover">
                        See Details
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>       
    </div>
</div>

<!-- New Cars -->
<div class="container pb-5">
    <div class="row g-4">
        <h2>New Cars</h2>
        <div class="col-md-3">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="{{ URL('images/ayla.webp') }}" alt="Ayla">
                <div class="card-body">
                    <h3 class="fs-5">2023 Daihatsu Ayla</h3>
                    <p class="fw-medium">Rp 189,9 Million</p>
                    <a href="#" class="icon-link icon-link-hover link-underline link-underline-opacity-0 link-underline-opacity-100-hover">
                        See Details
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="{{ URL('images/brio.webp') }}" alt="Brio">
                <div class="card-body">
                    <h3 class="fs-5">2023 Honda Brio</h3>
                    <p class="fw-medium">Rp 236,9 Million</p>
                    <a href="#" class="icon-link icon-link-hover link-underline link-underline-opacity-0 link-underline-opacity-100-hover">
                        See Details
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="{{ URL('images/wrv.webp') }}" alt="WR-V">
                <div class="card-body">
                    <h3 class="fs-5">2023 Honda WR-V</h3>
                    <p class="fw-medium">Rp 270,2 Million</p>
                    <a href="#" class="icon-link icon-link-hover link-underline link-underline-opacity-0 link-underline-opacity-100-hover">
                        See Details
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="{{ URL('images/ioniq6.webp') }}" alt="Ioniq 6">
                <div class="card-body">
                    <h3 class="fs-5">2023 Hyundai Ioniq 6</h3>
                    <p class="fw-medium">Rp 1,2 Billion</p>
                    <a href="#" class="icon-link icon-link-hover link-underline link-underline-opacity-0 link-underline-opacity-100-hover">
                        See Details
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>       
    </div>
</div>

<!-- Used Cars -->
<div class="container pb-5">
    <div class="row g-4">
        <h2>Used Cars</h2>
        <div class="col-md-3">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="{{ URL('images/used-hrv.webp') }}" alt="HR-V">
                <div class="card-body">
                    <h3 class="fs-5">2017 Honda HRV</h3>
                    <p class="fw-medium">Rp 225 Million</p>
                    <a href="#" class="icon-link icon-link-hover link-underline link-underline-opacity-0 link-underline-opacity-100-hover">
                        See Details
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="{{ URL('images/used-freed.webp') }}" alt="Brio">
                <div class="card-body">
                    <h3 class="fs-5">2013 Honda Freed</h3>
                    <p class="fw-medium">Rp 178 Million</p>
                    <a href="#" class="icon-link icon-link-hover link-underline link-underline-opacity-0 link-underline-opacity-100-hover">
                        See Details
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="{{ URL('images/used-xenia.webp') }}" alt="WR-V">
                <div class="card-body">
                    <h3 class="fs-5">2016 Daihatsu Xenia</h3>
                    <p class="fw-medium">Rp 135 Million</p>
                    <a href="#" class="icon-link icon-link-hover link-underline link-underline-opacity-0 link-underline-opacity-100-hover">
                        See Details
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="card shadow-sm mb-3">
                <img class="card-img-top" src="{{ URL('images/used-ertiga.webp') }}" alt="Ioniq 6">
                <div class="card-body">
                    <h3 class="fs-5">2022 Suzuki Ertiga</h3>
                    <p class="fw-medium">Rp 195 Million</p>
                    <a href="#" class="icon-link icon-link-hover link-underline link-underline-opacity-0 link-underline-opacity-100-hover">
                        See Details
                        <i class="bi bi-arrow-right"></i>
                    </a>
                </div>
            </div>
        </div>       
    </div>
</div>
@endsection