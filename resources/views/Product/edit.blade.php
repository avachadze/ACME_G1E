@extends('layouts.layout')

@section('style')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('content')
    <h1>Insert the data to edit</h1>
    <form enctype="multipart/form-data" action="{{ route('product.update', $product->id) }}" method="post">

        <section class="d-flex">

            <div class="w-auto">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" value="{{ $product->name }}">
                </div>

                <div class="form-group">
                    <label for="shopID">Shop ID:</label>
                    <input type="text" class="form-control"  name="shopID" value="{{ $product->shopID }}">
                </div>

                <div class="form-group">
                    <label for="quantity">Stock:</label>
                    <input type="text" class="form-control"  name="quantity" value="{{ $product->quantity }}">
                </div>
            </div>

            <div class="w-auto">
                <div class="form-group">
                    <label for="price">Price:</label>
                    <input type="text" class="form-control"  name="price" value="{{ $product->price }}">
                </div>

                <div class="form-group">
                    <label for="picture">Product image:</label>
                    <input type="file" class="form-control-file"  name="picture">
                </div>

                <input type="submit" value="submit">
            </div>

        </section>

        @method('put')
        @csrf
    </form>

@endsection
