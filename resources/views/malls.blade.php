@extends('layouts.layout')

@section('style')
<style>
    #mall
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
        @if (count($malls) > 0)
                @foreach ($malls as $mall)
                    <div id="column">
                        <a href="/mall/{{ $mall->id }}">
                            <div id="mall1">
                                <img id="{{ $mall->name }}" src="{{ asset($mall->logo) }}">
                            </div>
                        </a>
                    </div>

                    @if($mall->id %2 == 0)
                        </div>
                        <div id="space">
                    @endif

                @endforeach
                        </div>
        @else
            <h1>There are no malls registered yet</h1>
        @endif

    </div>
</section>


@endsection
