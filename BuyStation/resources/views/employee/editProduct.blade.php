@extends('employee.employeeNavbar')

@section('title')
    Edit Product
@endsection

@section('mainContent')
    <div class="d-flex justify-content-center mt-3">
        <h1>Edit Product</h1>
    </div>
    <br>
    <div class="d-flex justify-content-center">
        <form method="post" style="width:20%" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label class="form-label">Product Name</label>
                <input type="text" class="form-control" name="product_name" value="{{ $product->product_name }}">
                <div class="form-text text-danger">{{ $errors->first('product_name') }}</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Product Price</label>
                <input type="number" class="form-control" name="product_price" value="{{ $product->product_price }}">
                <div class="form-text text-danger">{{ $errors->first('product_price') }}</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Product Details</label>
                <input type="text" class="form-control" name="product_details" value="{{ $product->product_details }}">
                <div class="form-text text-danger">{{ $errors->first('product_details') }}</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Thumbnail Image</label>
                <input type="file" class="form-control-file" name="thumbnail_image">
                <div class="form-text text-danger">{{ $errors->first('thumbnail_image') }}</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Product Image 1</label>
                <input type="file" class="form-control-file" name="product_image1">
                <div class="form-text text-danger">{{ $errors->first('product_image1') }}</div>
            </div>
            <div class="mb-3">
                <label class="form-label">Product Image 2</label>
                <input type="file" class="form-control-file" name="product_image2">
                <div class="form-text text-danger">{{ $errors->first('product_image2') }}</div>
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
@endsection
