@extends('layout')

@section('navbar')
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
            <a class="navbar-brand text-primary" href="{{ route('home.index') }}">BuyStation</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText"
                aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('employee.index') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" aria-current="page" href="{{ route('product.productList') }}">Products List</a>
                    </li>
                </ul>
                <span class="navbar-text">
                    <a href="{{ route('login.logout') }}"><button class="btn btn-outline-danger"
                            type="submit">Logout</button></a>
                </span>
            </div>
        </div>
    </nav>
@endsection
