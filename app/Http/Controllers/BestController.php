<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Best;
use App\Produk;

class BestController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $best = Best::all();
        return view('bests.view')->with('best', $best);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        /*$this->validate($request, [
            'merek' => 'required' ,
            'harga' => 'required' ,
            //'gambar' => 'required|image|max:1999'
        ]);

        //Handle File Upload
        if($request -> hasFile('gambar')){
            // Get filename with the extension
            $fileNameWithExt = $request -> file('gambar')->getClientOriginalName();
            // Get just filename
            $filename = pathinfo($fileNameWithExt, PATHINFO_FILENAME);
            // Get just ext
            $extension = $request -> file('gambar')->getClientOriginalExtension();
            // Filename to store
            $fileNameToStore = $filename.'_'.time().'.'.$extension;
            // Upload image
            $path = $request->file('gambar')->storeAs('public/gambar', $fileNameToStore);
        } else{
            $fileNameToStore = 'noimage.jpg';
        }*/

        //create post
        $produk = Produk::find($request->id);
        Best::create([
            'id' => $produk->id,
            'merek' => $produk->merek,
            'harga' => $produk->harga,
        ]);

        return redirect('/best')->with('success','Success');
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
        //
        
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $best = Best::find($id);
        $best->delete();
        return redirect('/best')->with('Success,Delete Successful');
        //
    }
}
