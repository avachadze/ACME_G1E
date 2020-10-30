@extends('layouts.layout')

@section('style')

<link rel="stylesheet" media="screen and (max-width:399)" href="css/error.css">
<link rel="stylesheet" media="screen and (min-width:400px) and (max-width:599px)" href="css/all/main.css">
<link rel="stylesheet" media="screen and (min-width:600px) and (max-width:999px)" href="css//all/mainT.css">
<link rel="stylesheet" media="screen and (min-width:1000px)" href="css/all/mainC.css">

@section('style')
    <style>
        #all
        {
            color: red;
        }
    </style>
@endsection

@section('content')
@if (count($products) > 0)
<div id="space">

    @foreach ($products as $product)
        @if($product->shopID == $id && $product->mallID == $shop->mallID)

            <div id="column">
                <a href="/product/{{ $product->id }}">
                    <div id="mall1"><img src="{{ asset($product->picture) }}"></div>
                    <h3>{{ __($product->name) }}</h3>
                </a>
            </div>

        @endif
    @endforeach

        <form class="row mt-1" action="{{ route('shop.edit', $shop->id) }}" method="GET">
            <input type="submit" value="Edit this Shop">
            @csrf
        </form>

        <form class="row mt-1" action="{{ route('shop.destroy', $shop->id) }}" method="POST">
            <input type="submit" value="Delete this Shop">
            @method('DELETE')
            @csrf
        </form>

</div>
@else
<h1>There are no products yet</h1>
@endif
<div id="error">
    This device is not compatible with this page.
    <img id="errorImage" src="images/error.png">
</div>

@endsection
