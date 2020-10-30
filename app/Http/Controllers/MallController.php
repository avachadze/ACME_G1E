<?php

namespace App\Http\Controllers;

use App\Models\Shop;
use Illuminate\Http\Request;
use App\Models\Mall;
use Storage;

class MallController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $malls= Mall::All();
        return view('malls')->with('malls', $malls);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Mall.create');
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
            'logo' => 'required'
        ]);

        $mallName= $request->input('name');
        $img= $request->file('logo');
        $fileName= $mallName . '-' . time() . '-' . date(DATE_ATOM) . '.jpg';
        $path= $img->storeAs('public/images/mallLogos', $fileName);

        $mall = new Mall();
        $mall->name= $mallName;
        $mall->logo= $path;
        $mall->save();

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $shops= Shop::all();
        $mall= Mall::find($id);
        return view('Mall.show')->with(['mall' => $mall, 'shops' => $shops, 'id' => $id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $mall= Mall::find($id);
        return view('Mall.edit')->with('mall', $mall);
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
            'name' => 'required'
        ]);

        $mall = Mall::find($id);
        $mall->name= $request->input('name');
        $mall->save();

        return redirect('/');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $mallToDestroy = Mall::find($id);
        self::destroyShops($mallToDestroy);
        $mallToDestroy->delete();
        return redirect('/');
    }

    private static function destroyShops($toDestroy)
    {
        $id= $toDestroy->id;
        $shops= Shop::all();
        foreach ($shops as $shop)
        {
            if ($shop->mallID == $id)
            {
                ShopController::destroyProducts($shop);
                $shop->delete();
            }
        }
    }
}
