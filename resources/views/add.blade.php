@extends('layouts.layout')

@section('style')
    <style>
        #add
        {
            color: red;
        }
    </style>
@endsection

@section('content')
    <section>
        <div id="error">
            This device is not compatible with this page.
            <img id="errorImage" src="images/error.png">
        </div>
        <div id="space">
            <div id="column">
                <a href="/mall/create">
                    <div id="mall1">
                        <h1>Mall</h1>
                        <img src="/images/mall.jpg">
                    </div>
                </a>
            </div>

            <div id="column">
                <a href="/selectMall">
                    <div id="mall1">
                        <h1>Shop</h1>
                        <img src="/images/shop.png">
                    </div>
                </a>
            </div>

            <div id="column">
                <a href="/selectShop">
                    <div id="mall1">
                        <h1>Product</h1>
                        <img src="/images/product.jpg">
                    </div>
                </a>
            </div>
        </div>
    </section>


@endsection
