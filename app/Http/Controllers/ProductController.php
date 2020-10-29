<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use Storage;

class ProductController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Product.create');
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'shopID'=>'required',
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'picture' => 'required'
        ]);

        $productName= $request->input('name');
        $img= $request->file('picture');
        $fileName= $productName . time();
        $path= $img->storeAs('public/images', $fileName);

        $product= new Product();
        $product->shopID= $request->input('shopID');
        $product->name= $productName;
        $product->quantity= $request->input('quantity');
        $product->price= $request ->input('price');
        $product->picture= $path;
        $product->save();
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product= Product::find($id);
        return view('Product.edit')->with('product', $product);
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'shopID'=>'required',
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required'
        ]);

        $product= Product::find($id);
        $product->shopID= $request->input('shopID');
        $product->name= $request->input('name');
        $product->quantity= $request->input('quantity');
        $product->price= $request ->input('price');
        $product->save();
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $productToDestroy = Product::find($id);
        $productToDestroy->delete();
    }
}
