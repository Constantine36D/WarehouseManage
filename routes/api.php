<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


Route::prefix('auth')->namespace('Auth')->group(function () {
    Route::post('login', 'AuthController@login'); //普通登陆
    Route::post('adminlogin', 'AuthController@adminLogin'); //超级管理员登陆
    Route::post('logout', 'AuthController@logout'); //退出登陆
    Route::post('refresh', 'AuthController@refresh'); //刷新token
    Route::post('register', 'AuthController@registered'); //注册接口
});

Route::prefix('superadmin')->namespace('SuperAdmin')->group(function () {
    Route::get('outboundinformation', 'AuthAssController@outboundInformation');
    Route::get('outboundinformationmax', 'AuthAssController@outboundInformationMax');
    Route::get('outboundseinformation', 'AuthAssController@outboundSeInformation');
    Route::get('inboundinformation', 'AuthAssController@inboundInformation');
    Route::get('inboundinformationmax', 'AuthAssController@inboundInformationMax');
    Route::get('inboundseinformation', 'AuthAssController@inboundSeInformation');
    Route::get('wareinformationsearch', 'AuthAssController@wareInformationSearch');
    Route::get('wareinformationdrop', 'AuthAssController@wareInformationDrop');
    Route::get('wareinformationdropdis', 'AuthAssController@wareInformationDropDis');
    Route::get('fillpurchaseproorderlink', 'AuthAssController@fillPurchaseProOrderLink');
    Route::get('fillpurchaseorderdis', 'AuthAssController@fillPurchaseOrderDis');
    Route::get('fillpurchaseorderlink', 'AuthAssController@fillPurchaseOrderLink');
    Route::post('fillpurchaseorder', 'AuthAssController@fillPurchaseOrder');
    Route::get('traninformationdropdis', 'AuthAssController@tranInformationDropDis');
    Route::get('tranpurchaseorderdropdis', 'AuthAssController@tranPurchaseOrderDropDis');
    Route::post('tranpurchaseorder', 'AuthAssController@tranPurchaseOrder');
    Route::get('inboundinformationplus', 'AuthAssController@inboundInformationPlus');
});
