@extends('layouts.layout')

@section('content')
<section>
    <div id="error">
        This device is not compatible with this page.
        <img id="errorImage" src="images/error.png">
    </div>
    <div id="space">
        <div id="column">
            <a href="/all">
                <div id="mall1" ondblclick="change()">
                    <img id="alcampo" src="images/alcampo2.png">
                </div>

            </a>
            <input type="button" name="map" value="map" onclick="map1()">
        </div>
        <div id="column">
            <a href="/all">
                <div id="mall2">
                    <img id="urbil" src="images/urbil2.png">
                </div>
            </a>
            <input type="button" name="map" value="map" onclick="map2()">
        </div>
    </div>
</section>


@endsection