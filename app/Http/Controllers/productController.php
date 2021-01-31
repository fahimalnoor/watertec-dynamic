<?php

namespace App\Http\Controllers;

use DB;
use App\Product;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class productController extends Controller
{
    public function add()
    {
    	$cat = DB::table('categories')->get();
    	return view('backend.products.add_product',compact('cat'));
    } 

    public function manage()
    {
        $cat = DB::table('categories')->get();
    	$product = DB::table('products')->orderBy('name', 'asc')->get();
    	return view('backend.products.manage_product',compact('product', 'cat'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            'pro_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

     if ($request->hasFile('image') && $request->hasFile('pro_image')) {
            // uploading cover image
        $postImage = $request->file('image');
        $imageName = $postImage->getClientOriginalName();
        $directory = 'public/image/imageProduct/';
        $imgUrl = $directory.$imageName;
        $postImage->move($directory, $imageName);
        //uploading product image
        $postProImage = $request->file('pro_image');
        $imageProName = $postProImage->getClientOriginalName();
        $directory1 = 'public/image/imageProductAll/';
        $imgProUrl = $directory1.$imageProName;
        $postProImage->move($directory1, $imageProName);
            // data sent to database

        $product = new product();
        $product->name = $request->name;
        $product->under_cat = $request->under_cat;
        $product->url = $request->url;
        $product->image = $imgUrl;
        $product->pro_image = $imgProUrl;
        $product->status=$request->status;
        $product->save();
        return redirect()->route('product.manage')
                        ->with('success','Product added Successfully.');
        }
    } 

    public function destroy($id)
    {
        $product =Product::where('id',$id)->first();
        $product->delete();
        return redirect()->back();                   
    }

    public function update(Request $request , $id)
    {  
        if ($request->hasFile('pro_image')){
        //uploading new product image
        $postProImage = $request->file('pro_image');
        $imageProName = $postProImage->getClientOriginalName();
        $directory1 = 'public/image/imageProductAll/';
        $imgProUrl = $directory1.$imageProName;
        $postProImage->move($directory1, $imageProName);

        $product=Product::find($request->id);
        $product->name=$request->name;
        $product->url=$request->url;
        $product->pro_image=$imgProUrl;
        $product->status=$request->status;
        $product->under_cat=$request->under_cat;
        $product->save();
        return redirect()->back();
        }
        else{
        $product=Product::find($request->id);
        $product->name=$request->name;
        $product->url=$request->url;
        $product->status=$request->status;
        $product->under_cat=$request->under_cat;
        $product->save();
        return redirect()->back();

        }
    } 
}
