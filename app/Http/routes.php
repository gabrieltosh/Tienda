<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/',[
    'as' => 'home',
    'uses' => 'ControladorTienda@index'
]);

Route::get('producto/{slug}',[
    'as' => 'producto-detalle',
    'uses'=> 'ControladorTienda@show'
]);
//Carito
Route::get('cart/show',[
    'as' => 'cart-show',
    'uses'=> 'controladorCart@show'
]);

Route::bind('producto',function($slug)
{
	return App\Productos::where('slug',$slug)->first();
});
Route::get('cart/add/{producto}',[
		'as'=>'cart-add',
		'uses'=>'controladorCart@add'
	]);
Route::get('cart/delete/{producto}',[
        'as'=>'cart-delete',
        'uses'=>'controladorCart@delete'
    ]);
Route::get('cart/trash',[
    'as' => 'cart-trash',
    'uses'=> 'controladorCart@trash'
]);
Route::get('cart/update/{producto}/{cantidad}',[
        'as'=>'cart-update',
        'uses'=>'controladorCart@update'
    ]);

Route::resource('log','LogController');
Route::get('logout','LogController@logout');

Route::get('order-detail',[

    'as'=>'order-detail',
    'uses'=>'controladorCart@orderDetail'
    ]);