<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Shop;
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
        return redirect('/shop');
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create($shopID)
    {
        return view('Product.create')->with('shopID', $shopID);
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
            'shopID' => '',
            'name' => 'required',
            'quantity' => 'required',
            'price' => 'required',
            'picture' => 'required'
        ]);

        $productName= $request->input('name');
        $img= $request->file('picture');
        $fileName= $productName . '-' . time() . '-' . date(DATE_ATOM);
        $path= $img->storeAs('public/images/products', $fileName);

        $product= new Product();
        $product->shopID= $request->input('shopID');
        $product->name= $productName;
        $product->quantity= $request->input('quantity');
        $product->price= $request ->input('price');
        $product->picture= $path;

        $shop= Shop::find($request->input('shopID'));
        $product->mallID= $shop->mallID;

        $product->save();

        return redirect('/shop/' . $request->input('shopID'));
    }


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product= Product::find($id);
        return view('Product.show')->with('product', $product);
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
        return redirect('/');
    }
}
