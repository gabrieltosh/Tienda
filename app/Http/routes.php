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


Route::bind('producto',function($slug)
{
    return App\Productos::where('slug',$slug)->first();
});
Route::bind('categoria',function($categoria){
    return App\Categorias::find($categoria);
});

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
Route::get('logout',[
    'as'=>'logout',
    'uses'=>'LogController@logout'
    ]);

Route::get('order-detail',[

    'as'=>'order-detail',
    'uses'=>'controladorCart@orderDetail'
    ]);

Route::get('createUser',[
    'as'=>'createUser',
    'uses'=>'controladorUser@create'
    ]);
Route::resource('user','controladorUser');

Route::get('Enatex/admin',[
    'as' => 'admin',
    'uses' => 'ControladorTienda@admin'
]);

//paypal
//envio de Pedido
Route::get('payment',array(
    'as' => 'payment',
    'uses' => 'controladorPaypal@postPayment',
));

//Paypal redirecciona a esta ruta

Route::get('payment/status',array(
    'as' => 'payment.status',
    'uses' => 'controladorPaypal@getPaymentStatus',
));

//ADMIN
Route::resource('panel/producto','Admin\controladorProducto');
Route::resource('panel/categoria','Admin\controladorCategoria');
Route::resource('panel/login','Admin\controladorLogin');
Route::get('cerrar',[
    'as'=>'cerrar',
    'uses'=>'Admin\controladorLogin@logout'
    ]);
Route::resource('panel/usuario','Admin\controladorUsuario');
Route::resource('panel','Admin\controladorPanel');
//Injeccion de Dependencias de Categoria

