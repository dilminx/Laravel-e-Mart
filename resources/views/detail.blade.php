@extends('master')
@section('content')
    <div class="container mt-5">
        <div class="text-center mb-4">
            <h2>Product Details</h2>
        </div>
        <div class="row align-items-center">
            <!-- Product Image -->
            <div class="col-md-6 text-center">
                <img src="{{ $product['image'] }}" alt="{{ $product['name'] }}" class="img-fluid rounded"
                    style="max-height: 400px; object-fit: contain;">
            </div>

            <!-- Product Information -->
            <div class="col-md-6" style="height: 65vh">
                <h1 class="mb-3">{{ $product['name'] }}</h1>
                <h2 class="text-success mb-3">LKR {{ ($product['price']) }}</h2>
                <h4 class="text-muted mb-3">Category: {{ ($product['category']) }}</h4>
                <p class="text-secondary">{{ $product['description'] }}</p>

                <!-- Action Buttons -->
                <div class="mt-4">
                    <form action="/addToCart" method="POST">
                    @csrf
                        <input type="hidden" name="product_id" value={{ $product['id']}}>
                        <button class="btn btn-success m-2 p-2" type="submit">Add TO Cart</button>
                
                </form>

                    <a href="/product" class="btn btn-outline-secondary btn-lg">Back to Products</a>
                </div>
            </div>
        </div>
    </div>
@endsection
