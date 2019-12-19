<?php

namespace App\Http\Controllers;

use App\Category;
use App\Product;
use Illuminate\Http\Request;

class CategoriesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    // public function index()
    // {
    //     $products = Product::all();

    //     return view('categories.index', compact('products'));
    // }

    public function show($categoryId=null)
    {
        if(!empty($categoryId)){
            $products=Category::find($categoryId)->products;
        }
        $categories=Category::all();

        return view('category.show',compact(['categories','products']));

    }
}