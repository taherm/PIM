<?php
use App\Service;
use App\Slider;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

$slider=Slider::all();
    return view('index',compact('slider'));
});

Route::get('pages/about', function () {
    return view('pages.about');
});

Route::get('admin','AdminController@index');

Route::post('admin/slider','AdminController@add_slider');
Route::delete('admin/del-slider','AdminController@delete_slider');

Route::get('admin/delete-slider',function () {
    return view('admin.delete-slider');
});

Route::get('admin/add-slider',function () {
    return view('admin.add-slider');
});

Route::get('admin/create-page', function () {
    return view('admin.pages');
});
Route::delete('del','AdminController@del');

Route::post('sub-menu','AdminController@submenu');
Route::post('main-menu','AdminController@mainmenu');
Route::post('admin','AdminController@store');
Route::delete('admin/{id}','AdminController@destroy');
Route::get('admin/{id}/edit','AdminController@edit');
Route::post('admin/{id}','AdminController@update');
Route::get('admin/sub-menu', function () {
    return view('admin.sub-menu');
});
Route::get('admin/main-menu', function () {
    return view('admin.main-menu');
});

Route::get('admin/delete-menu', function () {
    return view('admin.delete-menu');
});


Route::get('services/claim-management', function () {
    return view('services.claim-management');
});


Route::get('services/construction-management', function () {
    return view('services.construction-management');
});

Route::get('pages/contact', function () {
    return view('pages.contact');
});

Route::get('services/project-management', function () {
    return view('services.project-management');
});

Route::get('services/project-control', function () {
    return view('services.project-control-systems');
});

Route::get('services/risk-management', function () {
    return view('services.risk-management');
});

Route::get('services/predesign-management', function () {
    return view('services.predesign-management');
});


Route::get('services/value-engineering', function () {
    return view('services.value-engineering');
});

Route::get('services/design-management', function () {
    return view('services.design-management');
});


Route::get('services/create','ServicesController@create');


Route::get('editmenu','MenuController@index');
Route::get('services/menu/{url}','ServicesController@show');
Route::get('services/{id}','ServicesController@find');



Route::get('menu/{url}','MenuController@show');

Route::post('editmenu','MenuController@store');

Route::get('del', function () {
    return view('menu.delete');
});

Route::delete('deletemenu','MenuController@del');


Route::get('services','ServicesController@index');


Route::post('services/{id}','ServicesController@update');
Route::get('services/{id}/edit','ServicesController@edit');

Route::post('services','ServicesController@store');

Route::delete('services/{id}','ServicesController@destroy');









