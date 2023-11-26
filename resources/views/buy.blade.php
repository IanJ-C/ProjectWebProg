@extends('template.buytemplate')

@section('title', 'Buy')

@section('content')
<!-- Cars for Sale -->
<div class="container py-5">
    <div class="row">
        <!-- Sidebar -->
        <div class="col-md-3">
            <ul class="list-group small mb-3">
                <li class="list-group-item fw-medium fs-5 filter-title text-white">Filter Cars</li>
                <li class="list-group-item list-group-item-action">
                    <a href="#" class="text-decoration-none text-dark fs-6">Coupe</a>
                </li>
                <li class="list-group-item list-group-item-action">
                    <a href="#" class="text-decoration-none text-dark fs-6">Hatchback</a>
                </li>
                <li class="list-group-item list-group-item-action">
                    <a href="#" class="text-decoration-none text-dark fs-6">MPV</a>
                </li>
                <li class="list-group-item list-group-item-action">
                    <a href="#" class="text-decoration-none text-dark fs-6">Pickup</a>
                </li>
                <li class="list-group-item list-group-item-action">
                    <a href="#" class="text-decoration-none text-dark fs-6">Sedan</a>
                </li>
                <li class="list-group-item list-group-item-action">
                    <a href="#" class="text-decoration-none text-dark fs-6">SUV</a>
                </li>
                <li class="list-group-item list-group-item-action">
                    <a href="#" class="text-decoration-none text-dark fs-6">Van</a>
                </li>
                <li class="list-group-item list-group-item-action">
                    <a href="#" class="text-decoration-none text-dark fs-6">Wagon</a>
                </li>
            </ul>
        </div>
        <!-- Cars for Sale -->
        <div class="col-md-9">
            <div class="list-group mb-4">
                <a href="#" class="list-group-item list-group-item-action text-dark mb-4 rounded border">
                    <article class="row align-items-center">
                        <div class="col-md-4">
                            <img src="{{ URL('images/xpander.webp') }}" alt="Xpander" class="rounded s-img">
                        </div>
                        <div class="col-md-8">
                            <h3 class="fs-5 mt-2">2023 Mitsubishi Xpander</h3>
                            <p class="fw-medium">Rp 258,2 - 312,9 Million</p>
                            <p class="fw-light small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum voluptas dignissimos unde quae laboriosam distinctio recusandae beatae numquam repellendus, explicabo, facere eius ea natus vitae optio quidem repellat, doloremque minus?</p>
                            <p class="text-primary text-opacity-75 small">
                                See Details
                                <i class="bi bi-arrow-right"></i>
                            </p>
                        </div>
                    </article>
                </a>
                <a href="#" class="list-group-item list-group-item-action text-dark mb-4 rounded border">
                    <article class="row align-items-center">
                        <div class="col-md-4">
                            <img src="{{ URL('images/xpander.webp') }}" alt="Xpander" class="rounded s-img">
                        </div>
                        <div class="col-md-8">
                            <h3 class="fs-5 mt-2">2023 Mitsubishi Xpander</h3>
                            <p class="fw-medium">Rp 258,2 - 312,9 Million</p>
                            <p class="fw-light small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum voluptas dignissimos unde quae laboriosam distinctio recusandae beatae numquam repellendus, explicabo, facere eius ea natus vitae optio quidem repellat, doloremque minus?</p>
                            <p class="text-primary text-opacity-75 small">
                                See Details
                                <i class="bi bi-arrow-right"></i>
                            </p>
                        </div>
                    </article>
                </a>
                <a href="#" class="list-group-item list-group-item-action text-dark mb-4 rounded border">
                    <article class="row align-items-center">
                        <div class="col-md-4">
                            <img src="{{ URL('images/xpander.webp') }}" alt="Xpander" class="rounded s-img">
                        </div>
                        <div class="col-md-8">
                            <h3 class="fs-5 mt-2">2023 Mitsubishi Xpander</h3>
                            <p class="fw-medium">Rp 258,2 - 312,9 Million</p>
                            <p class="fw-light small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum voluptas dignissimos unde quae laboriosam distinctio recusandae beatae numquam repellendus, explicabo, facere eius ea natus vitae optio quidem repellat, doloremque minus?</p>
                            <p class="text-primary text-opacity-75 small">
                                See Details
                                <i class="bi bi-arrow-right"></i>
                            </p>
                        </div>
                    </article>
                </a>
                <a href="#" class="list-group-item list-group-item-action text-dark mb-4 rounded border">
                    <article class="row align-items-center">
                        <div class="col-md-4">
                            <img src="{{ URL('images/xpander.webp') }}" alt="Xpander" class="rounded s-img">
                        </div>
                        <div class="col-md-8">
                            <h3 class="fs-5 mt-2">2023 Mitsubishi Xpander</h3>
                            <p class="fw-medium">Rp 258,2 - 312,9 Million</p>
                            <p class="fw-light small">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Earum voluptas dignissimos unde quae laboriosam distinctio recusandae beatae numquam repellendus, explicabo, facere eius ea natus vitae optio quidem repellat, doloremque minus?</p>
                            <p class="text-primary text-opacity-75 small">
                                See Details
                                <i class="bi bi-arrow-right"></i>
                            </p>
                        </div>
                    </article>
                </a>
            </div>
        </div>
    </div>
</div>
@endsection