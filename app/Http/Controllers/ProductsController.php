<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;
use Auth;

class ProductsController extends Controller
{

    public function __construct()
    {
        $this->middleware(['auth', 'verified']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function index()
    {
        // (Auth::user()->id);
        $products=Product::all()->where('id_user','=' ,(Auth::user()->id));
        return view('products.index',compact('products'));
         

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::pluck('name','id');
        return view('products.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
//        validation
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            // 'image'=>'image|mimes:png,jpg,jpeg|max:10000'
        ]);        

        $product = new Product();
            
        $product->name = $request->input('name');
        $product->id_user =Auth::user()->id;
        $product->status ='Available';
        $product->description = $request->input('description');
        $product->price= $request->input('price');
        $product->category_id= $request->input('category_id');

        if ($request->hasFile('image')){
            $file = $request->file('image');
            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.'. $extension;
            $file->move('public/images/', $filename);
            $product->image = $filename;
        }
        else{
                return $request;
                $product->image = '';
        }
          $product->save();

        return redirect()->route('products.index') ->with('success', 'Item has been added')
;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $products=Product::all()->where('status','!=' ,'Sold');
        return view('products.show',compact('products'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $product=Product::find($id);
        $categories=Category::pluck('name','id');
        return view('products.edit',compact(['product','categories']));
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
        $product=Product::find($id);
        $formInput=$request->except('image');

//        validation
        $this->validate($request,[
            'name'=>'required',
            'price'=>'required',
            'image'=>'image|mimes:png,jpg,jpeg|max:10000'
        ]);

        //        image upload
        $image=$request->image;
        if($image){
            $imageName=$image->getClientOriginalName();
            $image->move('images',$imageName);
            $formInput['image']=$imageName;
        }

         $product->update($formInput);
        return redirect()->route('products.index');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return back();
    }
}


