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
    </style>
    <title>CarSell | @yield('title')</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg py-3 navigation">
        <div class="container-fluid px-5">
            <a class="navbar-brand fs-3 text-white" href="home">SELL<span class="fw-bold">CAR</span> </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" style="flex-grow: 0.5;" id="navbarNav">
                <ul class="navbar-nav nav-underline">
                    <li class="nav-item">
                        <a class="nav-link mx-4 fs-5 link-light" href="buy">Buy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link mx-4 fs-5 link-light" href="sell">Sell</a>
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

    <footer class="main-footer p-4 text-center footer">
        <p class="m-0 text-light"><small>Copyright &copy; 2023. All Rights Reserved</small></p>
    </footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>