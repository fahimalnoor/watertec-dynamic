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
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
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

          return view('frontend.frontmain.index',compact('menu', 'sub', 'logo', 'slider', 'product',
          'product_tap', 'product_bidets', 'product_shower', 'product_others', 'content2','content3',
          'content4', 'content5', 'content6', 'content7', 'content8', 'content9', 'content10'));
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
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.pages.about',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
    }


    public function aboutBuiltec()
   
    {
        $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'About Builtec')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.pages.about_builtec',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
    }
    public function aboutWatertec()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'About Watertec')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.pages.about_watertec',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
    }
    public function mission()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Mission')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.pages.mission',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
    }
    public function vision()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Vision')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.pages.vision',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
    }
    public function values()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Values')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.pages.values',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
    }
    public function advantage()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Advantage')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.pages.advantage',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
    }
    public function greenBuilding()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Green Building')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.pages.green_building',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
    }
    public function qcProcedure()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'QC Procedure')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.pages.qc_procedure',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
    }
    public function testimonial()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Testimonial')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.pages.testimonial',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
    }

    public function warranty()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Warranty')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.pages.warranty',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
    }
    public function modernDesign()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Modern Design')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.pages.modern_design',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
    }
    public function topDownShutOff()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Top Down Shut Off')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.pages.top_down_shut_off',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
    }
    public function fusion()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Fusion')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.pages.fusion',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
    }
    public function dismental()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Dismental')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.pages.dismental',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
    }
    public function basinTap()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Basin Tap')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_basinTap = DB::table('products')->
        where('name', 'Basin Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.product.basin_tap',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'product_basinTap', 'sub', 'logo', 'slider'));
    }

    public function sinkTap()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Sink Tap')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_sinkTap = DB::table('products')->
        where('name', 'Sink Tap')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.product.sink_tap',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'product_sinkTap', 'sub', 'logo', 'slider'));
    }
    public function bipTap()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Bip Tap')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_bipTap = DB::table('products')->
        where('name', 'Bip Tap')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.product.bip_tap',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'product_bipTap', 'sub', 'logo', 'slider'));
    }
    public function bidet()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Bidet')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_bidet = DB::table('products')->
        where('name', 'Bidet')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.product.bidet',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'product_bidet', 'sub', 'logo', 'slider'));
    }
    public function handBidet()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Hand Bidet')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_handBidet = DB::table('products')->
        where('name', 'Hand Bidet')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.product.hand_bidet',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'product_handBidet', 'sub', 'logo', 'slider'));
    }
    public function handShower()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Hand Shower')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_handShower = DB::table('products')->
        where('name', 'Hand Shower')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.product.hand_shower',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'product_handShower', 'sub', 'logo', 'slider'));
    }
    public function showerArm()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Shower Arm')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_showerArm = DB::table('products')->
        where('name', 'Shower Head Arm')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.product.shower_arm',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'product_showerArm', 'sub', 'logo', 'slider'));
    }
    public function connectionHoses()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Connection Hoses')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_connectionHoses = DB::table('products')->
        where('name', 'Connection Hoses')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.product.connection_hoses',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'product_connectionHoses', 'sub', 'logo', 'slider'));
    }
    public function mixer()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Mixer')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_mixer = DB::table('products')->
        where('name', 'Mixer')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.product.mixer',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'product_mixer', 'sub', 'logo', 'slider'));
    }
    public function stopValve()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Stop Valve')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_stopValve = DB::table('products')->
        where('name', 'Stop Valve')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.product.stop_valve',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'product_stopValve', 'sub', 'logo', 'slider'));
    }
    public function toilet()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Toilet')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_toilet = DB::table('products')->
        where('name', 'Toilet')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.product.toilet',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'product_toilet', 'sub', 'logo', 'slider'));
    }
    public function award()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Award Giving')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.pages.award',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
    }
    public function csr()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'CSR')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.pages.csr',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
    }
    public function exhibition()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Exhibition & Conference')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.pages.exhibition',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
    }
    public function meetPlumber()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Meet The Plumber')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.pages.meet_plumber',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
    }
    public function resource()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Resource Development')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.pages.resource',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
    }
    public function media()
   
    {   $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'All Media')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();

        return view('frontend.pages.media',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
    }


    
    public function contact()
   
    {
        $sub = DB::table('menus')->
        where('menu_status', 'Active')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();
        
        return view('frontend.pages.contact',compact('menu', 'sub', 'logo', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'slider'));
    }

    public function product()
   
    {
        $sub = DB::table('submenus')->
        where('sub_status', 'Active')->
        where('sub_name', 'Product')->get();
        $logo = DB::table('logos')->
        where('logo_status', 'Active')->get();
        $menu = Menu::where('menu_status', 'Active')->get();
        $slider = DB::table('sliders')->
        where('status', 'Active')->get();
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();
        
        return view('frontend.product.single-product',compact('menu', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'sub', 'logo', 'slider'));
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
        //all products
        $product = DB::table('products')->
        where('status', 'Active')->get();
        $product_tap = DB::table('products')->
        where('under_cat', 'Tap')->
        where('status', 'Active')->get();
        $product_bidets = DB::table('products')->
        where('under_cat', 'Bidets')->
        where('status', 'Active')->get();
        $product_shower = DB::table('products')->
        where('under_cat', 'Shower')->
        where('status', 'Active')->get();
        $product_others = DB::table('products')->
        where('under_cat', 'Others')->
        where('status', 'Active')->get();
        
        return view('frontend.pages.collection',compact('menu', 'sub', 'product', 'product_tap',
        'product_bidets', 'product_shower', 'product_others', 'logo', 'slider'));
    }
}

