@extends('layouts.layout')

@section('content')   
<section>
        <div id="error">
            This device is not compatible with this page.
            <img id="errorImage" src="images/error.png">
        </div>
        <div id="space">
            <a href="/all">
                <div id="mall1">
                    <img id="alcampo" src="images/alcampo2.png">
                </div>
            </a>
            <a href="/all">
                <div id="mall2">
                    <img id="urbil" src="images/urbil2.png">
                </div>
            </a>
        </div>
    </section>
@endsection