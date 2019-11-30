<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produk;

class ProdukController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $produk = Produk::all();
        return view('produks.view')->with('produk',$produk);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('produks.upload');
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
            'merek' => 'required' ,
            'ukuran' => 'required' ,
            'warna' => 'required' ,
            'harga' => 'required' ,
            'description' => 'required' ,
            'gambar' => 'required|image|max:1999'
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
        }

        //create post
        $produk = new Produk;
        $produk->merek = $request->input('merek');
        $produk->ukuran = $request->input('ukuran');
        $produk->warna = $request->input('warna');
        $produk->harga = $request->input('harga');
        $produk->description = $request->input('description');
        $produk->gambar = $fileNameToStore;
        $produk->save();

        return redirect('/produk')->with('success','Upload Success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $produk = Produk::find($id);
        return view('produks.show')->with('produk',$produk);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $produk = Produk::find($id);
        return view('produks.edit')->with('produk',$produk);
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
            'merek' => 'required' ,
            'ukuran' => 'required' ,
            'warna' => 'required' ,
            'harga' => 'required' ,
            'description' => 'required' 
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
        }

        //create post
        $produk = Produk::find($id);
        $produk->merek = $request->input('merek');
        $produk->ukuran = $request->input('ukuran');
        $produk->warna = $request->input('warna');
        $produk->harga = $request->input('harga');
        $produk->description = $request->input('description');
        if($request -> hasFile('gambar')){
            $produk->gambar = $fileNameToStore;
        }
        $produk->save();

        return redirect('/produk')->with('success','Edit Success');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $produk = Produk::find($id);
        $produk->delete();
        return redirect('/produk')->with('success','Delete Success');
    }
}
