@extends('homeNavbar')

@section('title')
    Home
@endsection

@section('mainContent')
    <div class="text-center">
        <h1 class="text-primary-emphasis">Welcome to Buy Station</h1>
        <br><br>
        <h2>ALL Available Products</h2>
    </div>
    <br><br>
    <div class="container">
        <div class="row">
            @foreach ($products as $product)
                <div class="col-3 pb-3">
                    <div class="card text-center mb-3" style="width: 18rem;">
                        <img src="{{ asset($product->thumbnail_image) }}" class="card-img-top" alt="..." width="300"
                            height="300">
                        <div class="card-body">
                            <h5 class="card-title">{{ $product->product_name }}</h5>
                            <h6 class="card-title">Price: {{ $product->product_price }} BDT</h6>
                            <a href="{{ route('home.productDetails', $product->product_id) }}"
                                class="btn btn-primary">Product Details</a>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>
@endsection
