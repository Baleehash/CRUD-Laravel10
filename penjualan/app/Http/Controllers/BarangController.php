<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Barang;
 
class BarangController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $product = Barang::orderBy('created_at', 'DESC')->get();
  
        return view('products.index', compact('product'));
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('products.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Barang::create($request->all());
 
        return redirect()->route('products')->with('success', 'Barang berhasil ditambah !');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Barang::findOrFail($id);
  
        return view('products.show', compact('product'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Barang::findOrFail($id);
  
        return view('products.edit', compact('product'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Barang::findOrFail($id);
  
        $product->update($request->all());
  
        return redirect()->route('products')->with('success', 'Pembaruan Data Barang Berhasil !');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Barang::findOrFail($id);
  
        $product->delete();
  
        return redirect()->route('products')->with('success', 'Barang Telah dihapus !');
    }
}
