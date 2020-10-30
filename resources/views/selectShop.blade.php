@extends('layouts.layout')

@section('style')

    <style>
        #add
        {
            color: red;
        }
    </style>
@endsection

<input type="hidden" value="{{ $shops= \App\Models\Shop::all() }}">
@section('content')
    @if (count($shops) > 0)
        <div id="space">
            <h1>Select the shop for the object</h1>
            @foreach ($shops as $shop)


                <div id="box">
                    <a href="/product/create/{{ $shop->id }}">
                        <div id="image"><img src="{{ $shop->logo }}"></div>
                        <h3>{{ __($shop->name) }}</h3>
                    </a>
                </div>

            @endforeach
        </div>
    @else
        <h1>There are no shops registered yet</h1>
    @endif
    <div id="error">
        This device is not compatible with this page.
        <img id="errorImage" src="images/error.png">
    </div>

@endsection
