@extends('master')
@section('content')
    {{-- -------------------------------- Slider bar ----------------------- --}}
    <div class="container max-h custom-product mt-4" style=" height: 80vh; ">
        <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">
                @foreach ($products as $index => $item)
                    <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                        <a href="/detail/{{ $item['id'] }}">
                            <img class="w-100 h-100" src="{{ $item['image'] }}" alt="Slide {{ $index + 1 }}">
                            <div class="carousel-caption text-center text-light rounded p-2">
                                <h2>{{ $item['name'] }}</h2>
                                <p>{{ $item['description'] }}</p>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>

            <!-- Carousel Controls -->
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bg-black" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bg-black" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </a>
        </div>
    </div>

    {{-- --------------------------------- Trending Items ------------------- --}}
    <div class="container mt-0">
        <h3 class="mb-4">Trending Items</h3>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 ">
            @foreach ($products as $item)
                <div class="col">
                    <a href="/detail/{{ $item['id'] }}" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="card-img-top"
                                style="height: 200px; width:200px">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $item['name'] }}</h5>
                                <p class="card-text">{{ Str::limit($item['description'], 50, '...') }}</p>
                            </div>
                        </div>
                    </a>
                </div>
            @endforeach
        </div>
    </div>
@endsection
