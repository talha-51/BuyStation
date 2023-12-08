@extends('homeNavbar')

@section('title')
    Product Details
@endsection

@section('mainContent')
    <div class="container mt-5">
        <h2 class="text-center">Product Details</h2>
        <div class="row mt-5">
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <div id="carouselExampleInterval" class="carousel slide carousel-fade" data-bs-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-bs-interval="2000">
                            <img src="{{ asset($product->thumbnail_image) }}" class="d-block w-100" alt="..."
                                width="500" height="500">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="{{ asset($product->product_image1) }}" class="d-block w-100" alt="..."
                                width="500" height="500">
                        </div>
                        <div class="carousel-item" data-bs-interval="2000">
                            <img src="{{ asset($product->product_image2) }}" class="d-block w-100"alt="..." width="500"
                                height="500">
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval"
                        data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
            <div class="col-sm-6 col-md-5 offset-md-2 col-lg-6 offset-lg-0">
                <h4>Product Name</h4>
                {{ $product->product_name }}
                <h4>Product Price</h4>
                {{ $product->product_price }} BDT
                <h4>Product Details</h4>
                {{ $product->product_details }}
            </div>
        </div>
    </div>
@endsection
