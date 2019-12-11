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
        $products=Product::all()->where('category_id','=',2);
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
        // dd(Auth::user()->id);
        // $formInput=$request->except('image');

//        validation
        $request->validate([
            'name'=>'required',
            'price'=>'required',
            // 'image'=>'image|mimes:png,jpg,jpeg|max:10000'
        ]);
//        image upload
        // $image=$request->image;
        // if($image){
        //     $imageName=$image->getClientOriginalName();
        //     $image->move('images',$imageName);
        //     $formInput['image']=$imageName;
        // }
        

        $product = new Product([
            'user_id' =>Auth::user()->id,
            'name' => $request->get('name'),
            'description' => $request->get('description'),
            'price'=> $request->get('price'),
            'category_id'=> $request->get('category_id')
          ]);
          $product->save();
        //  Auth::user()->id->Product::create($formInput);
        // Product::create($formInput);
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

    public function uploadImages($productId,Request $request)
    {

            
        $product=Product::find($productId);

        //        image upload
        $image=$request->file('file');

        if($image){
            $imageName=time(). $image->getClientOriginalName();
            $image->move('images',$imageName);
            $imagePath= "/images/$imageName";
            $product->images()->create(['image_path'=>$imagePath]);
        }

        return "done";
        // Product::create($formInput);
    }
}


