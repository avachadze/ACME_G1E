@extends('layouts.layout')

@section('style')

    <style>
        #add
        {
            color: red;
        }
    </style>
@endsection

<input type="hidden" value="{{ $malls= \App\Models\Mall::all() }}">
@section('content')
    @if (count($malls) > 0)
        <div id="space">
            <h1>Select the mall for the object</h1>
            @foreach ($malls as $mall)


                <div id="box">
                    <a href="/shop/create/{{ $mall->id }}">
                        <div id="image"><img src="{{ $mall->logo }}"></div>
                        <h3>{{ __($mall->name) }}</h3>
                    </a>
                </div>

            @endforeach
        </div>
    @else
        <h1>There are no malls registered yet</h1>
    @endif
    <div id="error">
        This device is not compatible with this page.
        <img id="errorImage" src="images/error.png">
    </div>

@endsection
