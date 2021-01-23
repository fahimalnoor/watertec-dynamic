<?php


Route::group(['middleware' => 'auth'], function() {
    Route::get('/admin','adminController@index')->name('admin.index');


//Route for logo
    Route::get('/admin/logo/manage','logoController@index')->name('logo.index');
    Route::post('/admin/logo/store','logoController@store')->name('logo.store');
    Route::get('/admin/logo/destroy/{id}','logoController@destroy')->name('logo.destroy');
    Route::post('/admin/logo/update/{id}','logoController@update')->name('logo.update');

//Route for sections
    
    Route::post('/admin/sections/store','sectionsController@store')->name('section.store');
    Route::get('/admin/sections/1/sliders','sectionsController@sliders1')->name('section.1');
    Route::get('/admin/sections/2/products','sectionsController@products2')->name('section.2');
    Route::get('/admin/sections/3/about','sectionsController@about3')->name('section.3');
    Route::get('/admin/sections/4/gallary','sectionsController@gallary4')->name('section.4');
    Route::get('/admin/sections/5/logos','sectionsController@logos5')->name('section.5');
    Route::get('/admin/sections/6/products','sectionsController@products6')->name('section.6');
    Route::get('/admin/sections/7/collections','sectionsController@collections7')->name('section.7');
    Route::get('/admin/sections/8/videos8','sectionsController@videos8')->name('section.8');
    Route::get('/admin/sections/9/contacts9','sectionsController@contacts9')->name('section.9');



//Route for sections update/destroy
    Route::post('/admin/sections/update/{id}','sectionsController@update')->name('section.update');
    Route::get('/admin/sections/destroy/{id}','sectionsController@destroy')->name('section.destroy');


//Route for Categories
    Route::get('/admin/categories/add','categoriesController@add')->name('categories.add');
    Route::post('/admin/categories/store','categoriesController@store')->name('categories.store');
    Route::get('/admin/categories/destroy/{id}','categoriesController@destroy')->name('categories.destroy');
    Route::post('/admin/categories/update/{id}','categoriesController@update')->name('categories.update');

    //Route for SubCategories
    Route::get('/admin/subcategories/add','subCategoryController@add')->name('subcategory.add');
    Route::post('/admin/subcategories/store','subCategoryController@store')->name('subcategory.store');
    Route::get('/admin/subcategories/destroy/{id}','subCategoryController@destroy')->name('subcategory.destroy');
    Route::post('/admin/subcategories/update/{id}','subCategoryController@update')->name('subcategory.update');
    //Route::get('/admin/categories/manage','subCategoryController@manage')->name('categories.manage');

//Route for Menu
    Route::get('/admin/menu/manage','menuController@index')->name('menu.index');
    Route::post('/admin/menu/store','menuController@store')->name('menu.store');
    Route::get('/admin/menu/destroy/{id}','menuController@destroy')->name('menu.destroy');
    Route::post('/admin/menu/update/{id}','menuController@update')->name('menu.update');


//Route for SubMenu
    Route::get('/admin/submenu/manage','subMenuController@index')->name('submenu.index');
    Route::post('/admin/submenu/store','subMenuController@store')->name('submenu.store');
    Route::get('/admin/submenu/destroy/{id}','subMenuController@destroy')->name('submenu.destroy');
    Route::post('/admin/submenu/update/{id}','subMenuController@update')->name('submenu.update');

//Route for Slider
    Route::get('/admin/slider/manage','sliderController@index')->name('slider.index');
    Route::post('/admin/slider/store','sliderController@store')->name('slider.store');
    Route::get('/admin/slider/destroy/{id}','sliderController@destroy')->name('slider.destroy');
    Route::post('/admin/slider/update/{id}','sliderController@update')->name('slider.update');


//Route for Products
    Route::get('/admin/products/add','productController@add')->name('product.add');
    Route::get('/admin/products/manage','productController@manage')->name('product.manage');
    Route::post('/admin/products/store','productController@store')->name('products.store');
    Route::get('/admin/products/destroy/{id}','productController@destroy')->name('products.destroy');
    Route::post('/admin/products/update/{id}','productController@update')->name('products.update');

//Route for Blog
    Route::get('/admin/blog/add','blogController@add')->name('blog.add');
    Route::post('/admin/blog/store','blogController@store')->name('blog.store');
    Route::get('/admin/blog/destroy/{id}','blogController@destroy')->name('blog.destroy');
    Route::post('/admin/blog/update/{id}','blogController@update')->name('blog.update');


//Route for Contact Us
    Route::get('/admin/contact/add','contactController@index')->name('contact.index');
    Route::post('/admin/contact/store','contactController@store')->name('contact.store');
    Route::get('/admin/contact/destroy/{id}','contactController@destroy')->name('contact.destroy');
    Route::post('/admin/contact/update/{id}','contactController@update')->name('contact.update');
});
//Route for admin


//Route for Frontend
Route::get('/','websiteController@index')->name('front.index');
Route::get('/front/about','websiteController@about')->name('front.about');
Route::get('/front/contact','websiteController@contact')->name('front.contact');
Route::get('/front/collection','websiteController@collection')->name('front.collection');
Route::get('/front/products','websiteController@product')->name('front.products');

//Route for Frontend Menus and Submenus
Route::get('/about/builtec','websiteController@aboutBuiltec');
Route::get('/about/watertec','websiteController@aboutWatertec');
Route::get('/mission','websiteController@mission');
Route::get('/vision','websiteController@vision');
Route::get('/values','websiteController@values');
Route::get('/advantage','websiteController@advantage');
Route::get('/greenbuilding','websiteController@greenBuilding');
Route::get('/qc-procedure','websiteController@qcProcedure');
Route::get('/testimonial','websiteController@testimonial');
Route::get('/warranty','websiteController@warranty');
Route::get('/modern-design','websiteController@moderDesign');
Route::get('/top-down-shut-off','websiteController@topDownShutOff');
Route::get('/fusion','websiteController@fusion');
Route::get('/dismental','websiteController@dismental');

//Route for frontend menu products
Route::get('/basin-tap','websiteController@basinTap');
Route::get('/sink-tap','websiteController@sinkTap');
Route::get('/bip-tap','websiteController@bipTap');
Route::get('/bidet','websiteController@bidet');
Route::get('/hand-bidet','websiteController@handBidet');
Route::get('/hand-shower','websiteController@handShower');
Route::get('/shower-arm','websiteController@showerArm');
Route::get('/connection-hoses','websiteController@connetionHoses');
Route::get('/mixer','websiteController@mixer');
Route::get('/stop-valve','websiteController@stopValve');
Route::get('toilet','websiteController@toilet');
Route::get('award','websiteController@award');
Route::get('csr','websiteController@csr');
Route::get('exhibition','websiteController@exhibition');
Route::get('meet-plumber','websiteController@meetPlumber');
Route::get('resource','websiteController@resource');
Route::get('media','websiteController@media');

//contact router menu
Route::get('contact','websiteController@contact');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
