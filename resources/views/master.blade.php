<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-Mart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>



</head>
<body>
    {{View::make('header')}}
    @yield('content')
    {{View::make('footer')}}
</body>
<style>
    .carousel-item img {
        max-height: 400px; /* Adjust based on your desired height */
        max-width:400px; /* Adjust based on your desired height */
        /* object-fit: cover; Crop the image to fit */
    }

    .carousel-caption {
        background: rgba(175, 166, 166, 0.5); /* Semi-transparent background for captions */
        padding: 15px;
        border-radius: 8px;
    }

    .carousel-caption h2, .carousel-caption h3 {
        color: rgb(6, 6, 6); /* Text color for better contrast */
        margin: 10px; /* Remove default margin */
    }
</style>
</html>