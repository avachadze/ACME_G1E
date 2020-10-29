@extends('layouts.layout')

@section('style')

    <link rel="stylesheet" media="screen and (max-width:399)" href="css/error.css">
    <link rel="stylesheet" media="screen and (min-width:400px) and (max-width:599px)" href="css/all/main.css">
    <link rel="stylesheet" media="screen and (min-width:600px) and (max-width:999px)" href="css//all/mainT.css">
    <link rel="stylesheet" media="screen and (min-width:1000px)" href="css/all/mainC.css">
    <link href = {{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />
@endsection

@section('content')
    <div class="d-flex flex-column align-items-center">
        <h1 class="mt-5">Insert the data to edit the Product</h1>
        <form class="d-flex flex-row align-items-center align-content-around" enctype="multipart/form-data" action="{{ route('product.update', $product->id) }}" method="post">

            <div class="w-100 col pt-5">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name"  id="name" class="form-control" value="{{ $product->name }}">
                </div>

                <div class="form-group">
                    <label for="shopID">Shop ID:</label>
                    <input type="text" class="form-control"  name="shopID" id="shopID" value="{{ $product->shopID }}">
                </div>

                <div class="form-group">
                    <label for="quantity">Stock:</label>
                    <input type="text" class="form-control" id="quantity" name="quantity" value="{{ $product->quantity }}">
                </div>
            </div>

            <div class="w-100 col">
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control" id="price" name="price" value="{{ $product->price }}">
                </div>

                <div class="form-group">
                    <label for="picture">Product image:</label>
                    <input type="file" class="form-control-file" id="picture" name="picture">
                </div>

                <input type="submit" value="submit">
            </div>

            @method('put')
            @csrf
        </form>
    </div>


@endsection
