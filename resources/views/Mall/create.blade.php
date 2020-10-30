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
    <div class="d-flex flex-column align-items-center justify-content-center">
        <h1 class="mt-5">Insert the data to create a new Mall</h1>
        <form class="d-flex flex-row align-items-center align-content-around" enctype="multipart/form-data" action="{{ route('mall.store') }}" method="post">

            <div class="w-100 col pt-5">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name"  id="name"  class="form-control">
                </div>

                <div class="form-group">
                    <label for="logo">Logo:</label>
                    <input type="file" class="form-control-file" id="logo" name="logo">
                </div>

                <input type="submit" value="submit">
            </div>

            @csrf
        </form>
    </div>

@endsection
