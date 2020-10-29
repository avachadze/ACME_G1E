@extends('layouts.layout')

@section('style')

    <link rel="stylesheet" media="screen and (max-width:399)" href="css/error.css">
    <link rel="stylesheet" media="screen and (min-width:400px) and (max-width:599px)" href="css/all/main.css">
    <link rel="stylesheet" media="screen and (min-width:600px) and (max-width:999px)" href="css//all/mainT.css">
    <link rel="stylesheet" media="screen and (min-width:1000px)" href="css/all/mainC.css">
    <link href = {{ asset("bootstrap/css/bootstrap.css") }} rel="stylesheet" />
@endsection

@section('content')
    <h1>Insert the data to create a new entry</h1>
    <form enctype="multipart/form-data" action="{{ route('product.store') }}" method="post">

        <div class="form-group">
            <label for="name">Name:</label>
            <input type="text" class="form-control" name="name">
        </div>

        <div class="form-group">
            <label for="shopID">Shop ID:</label>
            <input type="text" class="form-control" name="shopID">
        </div>

        <div class="form-group">
            <label for="quantity">Stock:</label>
            <input type="text" class="form-control" name="quantity">
        </div>

        <div class="form-group">
            <label for="price">Price:</label>
            <input type="text" class="form-control" name="price">
        </div>

        <div class="form-group">
            <label for="picture">Product image:</label>
            <input type="file" class="form-control" name="picture">
        </div>

        <input type="submit" value="submit">
        @csrf
    </form>

@endsection
