@extends('master')
@section('content')
    <div class="container mt-0 " style="height: 80vh">
        {{-- Order Now buttton --}}
        <h3 class="mb-4">Cart Items</h3>
        <div class="container d-flex justify-content-end item-center">
            <a class="btn btn-success m-4" href="ordernow">Order Now</a>
        </div>
        @foreach ($products as $item)
            <div class="row mb-4 align-items-center">
                <!-- Product Image -->
                <div class="col-md-3">
                    <img src="{{ $item->image }}" alt="{{ $item->name }}" class="img-fluid rounded"
                        style="height: 200px; width: 200px; object-fit: cover;">

                </div>
                <!-- Product Details -->
                <div class="col-md-2">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <h4 style="color: green">{{ $item->price }}</h4>
                    <p class="card-text">{{ Str::limit($item->description, 50, '...') }}</p>

                </div>
                <!-- Remove Button -->
                <div class="col-md-1 text-center">

                    <a class="btn btn-danger" href="/removecart/{{ $item->cart_id }}">remove</a>

                </div>
            </div>
            <hr>
        @endforeach
    </div>
@endsection
