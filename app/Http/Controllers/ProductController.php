<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;

class ProductController extends Controller
{
    public function index(){
        return view('products.index');
    }

    public function create(){
        return view('products.create');
    }

    public function store(Request $request){

        //validate

        $request->validate([
            'name'=> 'required',
            'description' => 'required',
            'image' => 'required|mime:jpg,png,jpeg,gif|max:1000'
        ]);

        //upload image
        $imageName = time().'.'.$request->image->extension();
        $request->image->move(public_path('products'),$imageName);

        $product = new Product;
        $product->name = $request->name;
        $product->description = $request->description;
        $product->image = $imageName;

        $product->save();

        return back();
    }
}
