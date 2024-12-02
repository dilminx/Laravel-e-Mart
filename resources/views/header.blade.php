<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E-Mart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* Custom Styles for Navbar */


        .navbar-brand {
            font-weight: bold;
            font-size: 1.5rem;
            color: white !important;
            /* White text for the brand */
        }

        .nav-link {
            color: white !important;
            margin-right: 15px;
        }

        .nav-link:hover {
            color: #ffd700 !important;
            /* Gold on hover */
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
    <nav class="navbar  navbar-expand-lg" style="background-color: #5ad197;">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">E-Mart</a>
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
                        <a class="nav-link" href="#">Orderst</a>
                    </li>
                </ul>
                <form class="d-flex mx-2" role="search">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
                <a class="nav-link mx-4 border border-dark border-2 p-2" href="#">Cart</a>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
