<?php

namespace App\Http\Controllers;

use DB;
use App\Section;
use App\Http\Requests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class sectionsController extends Controller
{
    //all section views here
    
    // public function sliders1()
   
    // {   
    //     $content = DB::table('sections')->
    //     where('sec_name','section_1')->get();
    //     return view('backend.sections.section_1_slider',compact('content'));
    // } 

    public function products2()
   
    {   
        $content = DB::table('sections')->
        where('sec_name','section_2')->get();
        return view('backend.sections.section_2_product_slider',compact('content'));
    } 

    public function about3()
   
    {   
        $content = DB::table('sections')->
        where('sec_name','section_3')->get();
        return view('backend.sections.section_3_about',compact('content'));
    } 

    public function gallary4()
   
    {   
        $content = DB::table('sections')->
        where('sec_name','section_4')->get();
        return view('backend.sections.section_4_gallary',compact('content'));
    } 

    public function logos5()
   
    {   
        $content = DB::table('sections')->
        where('sec_name','section_5')->get();
        return view('backend.sections.section_5_logos',compact('content'));
    } 

    public function products6()
   
    {   
        $content = DB::table('sections')->
        where('sec_name','section_6')->get();
        return view('backend.sections.section_6_products',compact('content'));
    } 

    public function collections7()
   
    {   
        $content = DB::table('sections')->
        where('sec_name','section_7')->get();
        return view('backend.sections.section_7_collections',compact('content'));
    } 

    public function videos8()
   
    {   
        $content = DB::table('sections')->
        where('sec_name','section_8')->get();
        return view('backend.sections.section_8_videos',compact('content'));
    } 

    public function contacts9()
   
    {   
        $content = DB::table('sections')->
        where('sec_name','section_9')->get();
        return view('backend.sections.section_9_contacts',compact('content'));
    } 
    public function social10()
   
    {   
        $content = DB::table('sections')->
        where('sec_name','section_10')->get();
        return view('backend.sections.section_10_social',compact('content'));
        return view('frontend.inc.main-footer',compact('content'));
    } 


    //create operation here
    public function store(Request $request)
    {
        if ($request->hasFile('image')) {
            // uploading image
        $postImage = $request->file('image');
        $imageName = $postImage->getClientOriginalName();
        $directory = 'public/image/imageSection/';
        $imgUrl = $directory.$imageName;
        $postImage->move($directory, $imageName);
            // data sent to database
        $data=array();

        $data['sec_name']=$request->sec_name;
        $data['image']=$imgUrl;
        $data['status']=$request->status;
        $data['link']=$request->link;
        $data['description']=$request->description;
        DB::table('sections')->insert($data);
        }
        else{
            
            $data=array();
    
            $data['sec_name']=$request->sec_name;
            $data['status']=$request->status;
            $data['link']=$request->link;
            $data['description']=$request->description;
            DB::table('sections')->insert($data);
            
        }
        return redirect()->back(); 
      
    }

    //delete operation here

    public function destroy($id)

    {
        $section = Section::where('id',$id)->first();
        $section->delete();
        return redirect()->back();                   
    }


    //update operation
    public function update(Request $request , $id)
    {  
        $section= Section::find($request->id);
        $section->sec_name=$request->sec_name;
        $section->description=$request->description;
        $section->link=$request->link;
        $section->status=$request->status;
        $section->save();
        return redirect()->back();
    }

}
