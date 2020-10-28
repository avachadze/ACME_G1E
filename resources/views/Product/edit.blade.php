@extends('layouts.layout')

@section('style')

    <link rel="stylesheet" media="screen and (max-width:399)" href="css/error.css">
    <link rel="stylesheet" media="screen and (min-width:400px) and (max-width:599px)" href="css/all/main.css">
    <link rel="stylesheet" media="screen and (min-width:600px) and (max-width:999px)" href="css//all/mainT.css">
    <link rel="stylesheet" media="screen and (min-width:1000px)" href="css/all/mainC.css">
@endsection

@section('content')
    <h1>Insert the data to edit</h1>
    <form enctype="multipart/form-data" action="{{ route('product.update') }}" method="post">
        <label for="name">Name:</label>
        <input type="text" name="name"><br>
        <label for="shopID">Shop ID:</label>
        <input type="text" name="shopID"><br>
        <label for="quantity">Stock:</label>
        <input type="text" name="quantity"><br>
        <label for="price">Price:</label>
        <input type="text" name="price"><br>
        <label for="picture">Product image:</label>
        <input type="file" name="picture"><br>
        <input type="submit">
        @csrf
    </form>

@endsection
