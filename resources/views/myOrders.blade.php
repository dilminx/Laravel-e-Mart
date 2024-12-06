@extends('master')
@section('content')
    <div class="container mt-0 " style="height: 190vh">
        {{-- Order Now buttton --}}
        <div class="m-2 p-2 item-center" style="background-color:rgb(108, 248, 73)">
            <h3 class="mb-4">My Orders</h3>

        </div>
        @foreach ($orders as $item)
            <div class="row mb-4 align-items-center">
                <!-- Product Image -->
                <div class="col-sm-2">
                    <img src="{{ $item->image }}" alt="{{ $item->name }}" class="img-fluid rounded"
                        style="height: 100px; width:100px; object-fit: cover;">

                </div>
                <!-- Product Details -->
                <div class="col-sm-4">
                    <h5 class="card-title">{{ $item->name }}</h5>
                    <h4 style="color: green">{{ $item->price }}</h4>

                </div>
                <div class="col-sm-2">
                    <h5 class="px-1">{{ $item->status }}</h5>

                </div>

            </div>
            <hr>
        @endforeach
    </div>
@endsection
