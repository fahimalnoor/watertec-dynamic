<?php

namespace App\Http\Controllers;

use DB;
use App\SubCategory;
use App\Category;
use App\Http\Requests;
use Illuminate\Http\Request;



class subCategoryController extends Controller
{
    
   public function add()
   
    {
        $subcat = DB::table('subcategories')->get();
        $cat = DB::table('categories')->get();
        return view('backend.categories.add_subcat',compact('cat', 'subcat'));
    } 

    public function store(Request $request)
    {
        $data=array();
        $data['subcat_name']=$request->subcat_name;
        $data['cat_id']=$request->cat_id;
        $data['subcat_status']=$request->subcat_status;
        DB::table('subcategories')->insert($data);
        
        return redirect()->back();

        // $this->validate($request,[
        //     'cat_name'=>'required',
        //     'cat_status'=>'required',
        // ]);
        // $categories = Category::create($request->all());
        // return redirect()->back();
    }

    


}
