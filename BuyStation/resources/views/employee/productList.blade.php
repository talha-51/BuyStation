@extends('employee.employeeNavbar')

@section('title')
    Product List
@endsection

@section('mainContent')
    <div class="container text-center mt-5">
        <a href="{{ route('product.addProduct') }}"><button type="button" class="btn btn-primary btn-lg mb-5">Add A New
                Product</button></a>
        <table class="table table-striped">
            <tr>
                <th>Product ID</th>
                <th>Product Name</th>
                <th>Product Price</th>
                <th>Product Details</th>
                <th>Thumbnail Image</th>
                <th>Image 1</th>
                <th>Image 2</th>
                <th>Action</th>
            </tr>
            @foreach ($products as $product)
                <tr>
                    <td>{{ $product->product_id }}</td>
                    <td>{{ $product->product_name }}</td>
                    <td>{{ $product->product_price }}</td>
                    <td>{{ $product->product_details }}</td>
                    <td>{{ $product->thumbnail_image }}</td>
                    <td>{{ $product->product_image1 }}</td>
                    <td>{{ $product->product_image2 }}</td>
                    <td>
                        <a href="{{ route('product.editProduct', $product->product_id) }}"><button type="button"
                                class="btn btn-warning">EDIT</button></a>
                        <a href="{{ route('product.deleteProduct', $product->product_id) }}"><button type="button"
                                class="btn btn-danger">Delete</button></a>
                    </td>
                </tr>
            @endforeach
        </table>
    </div>
@endsection
