<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::all();

        return view('products.index', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    public function create()
    {
        return view('products.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd(Auth::user()->id);
        $request->validate([
            'product_name'=>'required',
            'product_price'=> 'required|integer',
            'product_qty' => 'required|integer'
          ]);
          $product = new Product([
            'product_name' => $request->get('product_name'),
            'user_id' =>Auth::user()->id,
            'product_price'=> $request->get('product_price'),
            'product_qty'=> $request->get('product_qty')
          ]);
          $product->save();
          return redirect('/products')->with('success', 'Item has been added');
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
        $product = Product::find($id);

        return view('products.edit', compact('product'));
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
        $request->validate([
            'product_name'=>'required',
            'product_price'=> 'required|integer',
            'product_qty' => 'required|integer'
          ]);
    
          $product = Product::find($id);
          $product->product_name = $request->get('product_name');
          $product->product_price = $request->get('product_price');
          $product->product_qty = $request->get('product_qty');
          $product->save();
    
          return redirect('/products')->with('success', 'Item has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $product = Product::find($id);
        $product->delete();
   
        return redirect('/products')->with('success', 'Item has been deleted Successfully');
    }
}
