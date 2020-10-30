<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;
use App\Models\Shop;

class ShopController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $shops= Shop::All();
        return view('shops')->with('shops', $shops);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Shop.create');
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
            'name' => 'required',
            'mallID' => 'required',
            'logo' => 'required'
        ]);

        $shopName= $request->input('name');
        $img= $request->file('logo');
        $fileName= $shopName . '-' . time() . '-' . date(DATE_ATOM);
        $path= $img->storeAs('public/images/logos', $fileName);

        $shop = new Shop();
        $shop->name= $shopName;
        $shop->mallID= $request->input('mallID');
        $shop->logo= $path;
        $shop->save();
        redirect('/shop');
        return redirect('/mall/' . $request->input('mallID'));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products= Product::all();
        $shop= Shop::find($id);
        return view('Shop.show')->with(['shop' => $shop, 'products' => $products, 'id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $shop= Shop::find($id);
        return view('Shop.edit')->with('shop', $shop);
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
        $request->validate($request, [
            'name'=>'required'
        ]);
        $shop = new Shop();
        $shop->name = $request->input('name');
        $shop->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $shopToDestroy = Shop::find($id);
        $shopToDestroy->delete();
        return redirect('/');
    }
}
