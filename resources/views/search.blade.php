@extends('master')
@section('content')
    {{-- --------------------------------- Serch Items ------------------- --}}
    <div class="container mt-0">
        <h3 class="mb-4 text-center">Find Items</h3>
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 justify-content-center">
            @foreach ($products as $item)
                <div class="col d-flex justify-content-center align-items-center mb-4">
                    <a href="/detail/{{ $item['id'] }}" class="text-decoration-none text-dark">
                        <div class="card h-100">
                            <img src="{{ $item['image'] }}" alt="{{ $item['name'] }}" class="card-img-top"
                                style="height: 200px; width: 200px; object-fit: cover;">
                            <div class="card-body text-center">
                                <h5 class="card-title">{{ $item['name'] }}</h5>
                                <h3 style="color: green;">{{ $item['price'] }}</h3>
                            </div>
                        </div>
                    </a>
                </div>

        </div>
    </div>
    @endforeach
    </div>
    </div>
@endsection
