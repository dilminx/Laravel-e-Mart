@extends('master')
@section('content')
   

    <div class="container max-h custom-product mt-4" style="height: 80vh;">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($products as $index => $item)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <img class="d-block w-100 img-fluid" src="{{ $item['image'] }}" alt="Slide {{ $index + 1 }}">
                        <div class="carousel-caption text-center">
                            <h2>{{ $item['name'] }}</h2>
                            <h3>{{ $item['description'] }}</h3>
                        </div>
                    </div>
                @endforeach
            </div>

            <!-- Carousel Controls -->
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-black" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" style="background-color: rgb(241, 241, 241)" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-black" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>
@endsection
