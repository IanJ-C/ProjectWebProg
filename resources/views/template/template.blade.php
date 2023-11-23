<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        .navigation{
            background-color: rgb(231, 72, 1);
        }
        .c-container{
            max-width: 93.75rem;
            max-height: 37.5rem;
        }
        .c-item{
            width: 93.75rem;
            height: 37.5rem;
        }
        .c-img{
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
    </style>
    <title>CarSell | @yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg py-3 navigation">
        <div class="container-fluid px-5">
            <a class="navbar-brand fs-3 text-white" href="#">SELL<span class="fw-bold">CAR</span> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" style="flex-grow: 0.5;" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active mx-4 fs-5 link-light" aria-current="page" href="#">Jual</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4 fs-5 link-light" href="#">Beli</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4 fs-5 link-light" href="#">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4 fs-5 link-light" href="#">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    @yield('content')

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>