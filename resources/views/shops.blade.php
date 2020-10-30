@extends('layouts.layout')

@section('style')

<link rel="stylesheet" media="screen and (max-width:399)" href="css/error.css">
<link rel="stylesheet" media="screen and (min-width:400px) and (max-width:599px)" href="css/all/main.css">
<link rel="stylesheet" media="screen and (min-width:600px) and (max-width:999px)" href="css//all/mainT.css">
<link rel="stylesheet" media="screen and (min-width:1000px)" href="css/all/mainC.css">
@endsection

@section('content')
@if (count($shops) > 0)
<div id="space">
    @foreach ($shops as $shop)


    <div id="box">
        <a href="/shop/{{ $shop->id }}">
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
