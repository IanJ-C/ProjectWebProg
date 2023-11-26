<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">
    <style>
        .navigation{
            background-color: rgb(231, 72, 1);
        }
        .footer{
            background-color: rgb(255, 122, 61);
        }
        .c-container{
            max-width: 100%;
            max-height: 37.5rem;
        }
        .c-item{
            width: 100%;
            height: 37.5rem;
        }
        .c-img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        .icon{
            font-size: 1.5rem;
        }
    </style>
    <title>CarSell | @yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg py-3 navigation">
        <div class="container-fluid px-5">
            <a class="navbar-brand fs-3 text-white" href="home">SELL<span class="fw-bold">CAR</span></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" style="flex-grow: 0.5;" id="navbarNav">
                <ul class="navbar-nav nav-underline">
                    <li class="nav-item">
                        <a class="nav-link mx-4 fs-5 link-light" href="buy">Buy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4 fs-5 link-light active" aria-current="page" href="sell">Sell</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4 fs-5 link-light" href="about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4 fs-5 link-light" href="contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

    <div class="container-fluid py-3 footer">
        <footer class="d-flex flex-wrap justify-content-center align-items-center my-4">
            <div class="col-md-4 d-flex align-items-center">
                <a class="navbar-brand fs-3 text-black" href="home">SELL<span class="fw-bold">CAR</span></a>
                <span class="ms-3 mb-3 mb-md-0 text-muted">© 2023 SellCar, Inc. All rights reserved.</span>
            </div>

            <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
                <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-twitter-x icon"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-instagram icon"></i></a></li>
                <li class="ms-3"><a class="text-muted" href="#"><i class="bi bi-facebook icon"></i></a></li>
            </ul>
        </footer>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>