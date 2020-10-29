@extends('layouts.layout')

@section('style')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
@endsection

@section('content')
    <div class="d-flex flex-column justify-content-center">
        <h1 class="d-flex">Insert the data to create a new entry</h1>
        <form class="d-flex" enctype="multipart/form-data" action="{{ route('product.store') }}" method="post">

            <section class="d-flex">

                <div class="w-50">
                    <div class="form-group">
                        <label for="name">Name:</label>
                        <input type="text" name="name" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="shopID">Shop ID:</label>
                        <input type="text" class="form-control"  name="shopID">
                    </div>

                    <div class="form-group">
                        <label for="quantity">Stock:</label>
                        <input type="text" class="form-control"  name="quantity">
                    </div>
                </div>

                <div class="w-50">
                    <div class="form-group">
                        <label for="price">Price:</label>
                        <input type="text" class="form-control"  name="price">
                    </div>

                    <div class="form-group">
                        <label for="picture">Product image:</label>
                        <input type="file" class="form-control-file"  name="picture">
                    </div>

                    <input type="submit" value="submit">
                </div>

            </section>

            @csrf
        </form>
    </div>

@endsection
