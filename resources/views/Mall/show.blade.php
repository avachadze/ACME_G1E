@extends('layouts.layout')

@section('style')

<link rel="stylesheet" media="screen and (max-width:399)" href="css/error.css">
<link rel="stylesheet" media="screen and (min-width:400px) and (max-width:599px)" href="css/all/main.css">
<link rel="stylesheet" media="screen and (min-width:600px) and (max-width:999px)" href="css//all/mainT.css">
<link rel="stylesheet" media="screen and (min-width:1000px)" href="css/all/mainC.css">

@section('style')
    <style>
        #mall
        {
            color: red;
        }
    </style>
@endsection

@endsection

@section('content')
@if (count($shops) > 0)
<div id="space">


    @foreach ($shops as $shop)
        @if($shop->mallID == $id)

            <div id="column">
                <a href="/shop/{{ $shop->id }}">
                    <div id="mall1"><img src="{{ asset($shop->logo) }}"></div>
                    <h3>{{ __($shop->name) }}</h3>
                </a>
            </div>

        @endif
    @endforeach

        <form class="row mt-1" action="{{ route('mall.edit', $mall->id) }}" method="GET">
            <input type="submit" value="Edit this Mall">
            @csrf
        </form>

        <form class="row mt-1" action="{{ route('mall.destroy', $mall->id) }}" method="POST">
            <input type="submit" value="Delete this Mall">
            @method('DELETE')
            @csrf
        </form>

</div>
@else
<h1>There are no shops yet</h1>
@endif
<div id="error">
    This device is not compatible with this page.
    <img id="errorImage" src="images/error.png">
</div>

@endsection
