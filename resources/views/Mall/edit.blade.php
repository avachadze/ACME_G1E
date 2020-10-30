@extends('layouts.layout')

@section('style')
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <style>
        .hid
        {
            display: none;
        }
        body
        {
            background-color: #393737;
            color: white;
        }
    </style>
@endsection

@section('content')
    <div class="d-flex flex-column align-items-center">
        <h1 class="mt-5">Insert the data to edit the Mall {{ __($mall->name) }}</h1>
        <form class="d-flex flex-row align-items-center align-content-around" enctype="multipart/form-data" action="{{ route('mall.update', $mall->id) }}" method="post">
            @method('PUT')
            <div class="w-100 col pt-5">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name"  id="name" class="form-control" value="{{ $mall->name }}">
                </div>

            </div>
            <input class="mb-3" type="submit" value="submit">
            @csrf
        </form>
    </div>


@endsection
