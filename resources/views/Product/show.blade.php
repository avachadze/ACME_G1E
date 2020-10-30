@extends('layouts.layout')

@section('style')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

<link rel="stylesheet" media="screen and (max-width:399)" href="{{ asset('css/error.css') }}">
<link rel="stylesheet" media="screen and (min-width:400px) and (max-width:599px)" href="{{ asset('css/all/main.css') }}">
<link rel="stylesheet" media="screen and (min-width:600px) and (max-width:999px)" href="{{ asset('css/all/mainT.css') }}">
<link rel="stylesheet" media="screen and (min-width:1000px)" href="{{ asset('css/all/mainC.css') }}">
    <style>
        body
        {
            background-color: #393737;
            color: white;
        }
        a
        {
            color:white;
        }
    </style>
@endsection

@section('content')
    @if (isset($product))

        <div id="space" class="d-flex justify-content-around pl-5">

            <div class="col">
                <img src="{{ asset($product->picture) }}">
            </div>

            <div class="col pt-4">

                <div class="row mt-1">
                    <h1>Product: {{ $product->name }}</h1>
                </div>

                <div class="row mt-1">
                    <h1>Price: {{ $product->price }}</h1>
                </div>

                <div class="row mt-1">
                    <h1>Stock: {{ $product->quantity }}</h1>
                </div>

                <div class="row mt-1">
                    <h1>From the shop: {{ $product->shopID }}</h1>
                </div>

                <form class="row mt-1" action="{{ route('product.destroy', $product->id) }}" method="POST">
                    <input type="submit" value="Delete this Product">
                    @method('DELETE')
                    @csrf
                </form>

            </div>

        </div>

    @else

        <h1>This product is not registered</h1>

    @endif

<div id="error">
    This device is not compatible with this page.
    <img id="errorImage" src="images/error.png">
</div>

@endsection
