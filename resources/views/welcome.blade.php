<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>E-Mart</title>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

        .carousel-item img {
            max-height: 400px;
            object-fit: cover;
        }

        .carousel-caption {
            background: rgba(0, 0, 0, 0.6);
            padding: 15px;
            border-radius: 8px;
        }

        .carousel-caption h2, .carousel-caption h3 {
            color: #fff;
            margin: 10px 0;
        }

        .navbar {
            background-color: #5ad197 !important;
        }

        .navbar .btn {
            background: white;
            margin-right: 10px;
            font-weight: bold;
            border-radius: 5px;
        }

        .navbar .nav-link {
            color: #333;
            font-weight: bold;
        }

        .carousel-control-prev-icon,
        .carousel-control-next-icon {
            background-color: rgba(0, 0, 0, 0.5);
            border-radius: 50%;
        }

        .custom-product {
            height: 80vh;
            overflow: hidden;
        }
    </style>
</head>
<body>
    <nav class="navbar navbar-expand-lg px-4 bg-light ">
        <div class="container-fluid">
            <!-- Brand -->
            <a class="navbar-brand" href="/">E-Mart</a>
    
            <!-- Login and Register Buttons -->
            <div class="d-flex">
                <a href="/" class="btn btn-outline-dark me-2">Login</a>
                <a href="/register" class="btn btn-outline-dark">Register</a>
            </div>
        </div>
    </nav>
    

    <div class="container custom-product mt-4">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($products as $index => $item)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img class="d-block w-100" src="{{ $item['image'] }}" alt="Slide {{ $index + 1 }}">
                        <div class="carousel-caption text-center">
                            <h2>{{ $item['name'] }}</h2>
                            <h3>{{ $item['description'] }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Carousel Controls -->
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
