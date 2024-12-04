<?php
use App\Http\Controllers\ProductController;
$total = ProductController::cartItem();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Mart</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styles for Navbar */
        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: white !important;
        }

        .nav-link {
            color: white !important;
            margin-right: 15px;
        }

        .nav-link:hover {
            color: #ffd700 !important;
        }

        .btn-outline-success {
            color: white !important;
            border-color: white !important;
        }

        .btn-outline-success:hover {
            background-color: white !important;
            color: #007bff !important;
        }

        .form-control {
            border-radius: 20px;
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg" style="background-color: #5ad197;">
        <div class="container-fluid">
            <a class="navbar-brand" href="/product">E-Mart</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">My Orders</a>
                    </li>
                </ul>
                <form action="/search" class="d-flex mx-4" role="search">
                    <input name="query" class="form-control me-2" type="search" placeholder="Search"
                        aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <a class="nav-link mx-4 border border-dark border-2 p-2" href="#">Cart({{ $total }})</a>
                <!-- Dropdown -->
                <div class="dropdown">
                    <button class="btn mx-4 border border-2  dropdown-toggle" type="button" id="dropdownMenuButton"
                        data-bs-toggle="dropdown" aria-expanded="false">
                        @if (Session::has('user'))
                            {{ Session::get('user')['name'] }}
                        @else
                            <p>Coustom Visit</p>
                        @endif
                    </button>
                    <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                        <li><a class="dropdown-item" href="#">
                                @if (Session::has('user'))
                                    <a style="text-decoration: none; display:flex; justify-content:center" href="/">Logout</a>
                                @else
                                    <a style="text-decoration: none; display:flex; justify-content:center" href="/">Login</a>
                                @endif
                            </a></li>

                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>

</body>

</html>
