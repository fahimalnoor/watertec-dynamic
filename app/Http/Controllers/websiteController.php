<?php

namespace App\Http\Controllers;

use DB;
use App\Menu;
use App\SubMenu;
use App\Logo;
use App\Slider;
use App\Http\Requests;
use Illuminate\Http\Request;

class websiteController extends Controller
{
    public function index()
   
    {
        $sub = DB::table('submenus')->
        where('sub_status', 'Active')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        // sections data
        //sections all
        $content2 = DB::table('sections')->
        where('sec_name','section_2')->where('status','Active')->get();
        $content3 = DB::table('sections')->
        where('sec_name','section_3')->where('status','Active')->get();
        $content4 = DB::table('sections')->
        where('sec_name','section_4')->where('status','Active')->get();
        $content5 = DB::table('sections')->
        where('sec_name','section_5')->where('status','Active')->get();
        $content6 = DB::table('sections')->
        where('sec_name','section_6')->where('status','Active')->get();
        $content7 = DB::table('sections')->
        where('sec_name','section_7')->where('status','Active')->get();
        $content8 = DB::table('sections')->
        where('sec_name','section_8')->where('status','Active')->get();
        $content9 = DB::table('sections')->
        where('sec_name','section_9')->where('status','Active')->get();
        $content10 = DB::table('sections')->
        where('sec_name','section_10')->where('status','Active')->get();


          return view('frontend.frontmain.index',compact('menu', 'sub', 'logo', 'slider',
          'content2','content3', 'content4', 'content5', 'content6', 'content7', 'content8', 'content9',
        'content10'));
    }

    public function about()
   
    {
        $sub = DB::table('submenus')->
        where('sub_status', 'Active')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        return view('frontend.pages.about',compact('menu', 'sub', 'logo', 'slider'));
    }


    public function aboutBuiltec()
   
    {
        return view('frontend.pages.about_builtec');
    }
    public function aboutWatertec()
   
    {
        return view('frontend.pages.about_watertec');
    }
    public function mission()
   
    {
        return view('frontend.pages.mission');
    }
    public function vision()
   
    {
        return view('frontend.pages.vision');
    }
    public function values()
   
    {
        return view('frontend.pages.values');
    }
    public function advantage()
   
    {
        return view('frontend.pages.advantage');
    }
    public function greenBuilding()
   
    {
        return view('frontend.pages.green_building');
    }
    public function qcProcedure()
   
    {
        return view('frontend.pages.qc_procedure');
    }
    public function testimonial()
   
    {
        return view('frontend.pages.testimonial');
    }

    public function warranty()
   
    {
        return view('frontend.pages.warranty');
    }
    public function moderDesign()
   
    {
        return view('frontend.pages.modern_design');
    }
    public function topDownShutOff()
   
    {
        return view('frontend.pages.top_down_shut_off');
    }
    public function fusion()
   
    {
        return view('frontend.pages.fusion');
    }
    public function dismental()
   
    {
        return view('frontend.pages.dismental');
    }
    public function basinTap()
   
    {
        return view('frontend.product.basin_tap');
    }

    public function sinkTap()
   
    {
        return view('frontend.product.sink_tap');
    }
    public function bipTap()
   
    {
        return view('frontend.product.bip_tap');
    }
    public function bidet()
   
    {
        return view('frontend.product.bidet');
    }
    public function handBidet()
   
    {
        return view('frontend.product.hand_bidet');
    }
    public function handShower()
   
    {
        return view('frontend.product.hand_shower');
    }
    public function showerArm()
   
    {
        return view('frontend.product.shower_arm');
    }
    public function connetionHoses()
   
    {
        return view('frontend.product.connection_hoses');
    }
    public function mixer()
   
    {
        return view('frontend.product.mixer');
    }
    public function stopValve()
   
    {
        return view('frontend.product.stop_valve');
    }
    public function toilet()
   
    {
        return view('frontend.product.toilet');
    }
    public function award()
   
    {
        return view('frontend.pages.award');
    }
    public function csr()
   
    {
        return view('frontend.pages.csr');
    }
    public function exhibition()
   
    {
        return view('frontend.pages.exhibition');
    }
    public function meetPlumber()
   
    {
        return view('frontend.pages.meet_plumber');
    }
    public function resource()
   
    {
        return view('frontend.pages.resource');
    }
    public function media()
   
    {
        return view('frontend.pages.media');
    }


    
    public function contact()
   
    {
        $sub = DB::table('submenus')->
        where('sub_status', 'Active')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        
        return view('frontend.pages.contact',compact('menu', 'sub', 'logo', 'slider'));
    }

    public function product()
   
    {
        $sub = DB::table('submenus')->
        where('sub_status', 'Active')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        
        return view('frontend.product.single-product',compact('menu', 'sub', 'logo', 'slider'));
    }

    public function collection()
   
    {
        $sub = DB::table('submenus')->
        where('sub_status', 'Active')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        
        return view('frontend.pages.collection',compact('menu', 'sub', 'logo', 'slider'));
    }
}

