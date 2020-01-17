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
Route::get('deals', 'ApiController@getAllDeals');
Route::get('deals/{id}', 'ApiController@getDeal');
Route::post('deals', 'ApiController@createDeal');
Route::put('deal/update/{id}', 'ApiController@updateDeal');
Route::delete('deal/delete/{id}','ApiController@deleteDeal');
Route::put('deal/deal-status/{id}', 'ApiController@updateDealStatus');
Route::get('user-deals/{user_id}', 'ApiController@getUserDeals');



Route::post('offer', 'OfferController@createOffer');
Route::get('offers', 'OfferController@showAllOffers');
Route::get('offer/{id}', 'OfferController@getOffer');
Route::get('user-offers/{user_id}', 'OfferController@getUserOffers');
Route::get('deal-offers/{deal_id}', 'OfferController@getDealOffers');
Route::delete('offer/delete/{id}','OfferController@deleteOffer');
Route::put('offer/update/{id}', 'OfferController@updateOffer');
Route::put('offer/confirm-offer/{id}', 'OfferController@confirmOffer');
Route::put('offer/reject-offer/{id}', 'OfferController@rejectOffer');

Route::get('users', 'UserController@showAllUsers');
Route::get('user-agent/{user_role}', 'UserController@getAgentUser');
Route::get('user-investor/{id}', 'UserController@getInvestorUser');
Route::delete('user-agent/delete/{id}','UserController@deleteAgentUser');
Route::delete('user-investor/delete/{id}','UserController@deleteInvestorUser');
Route::put('verify-user/{id}', 'UserController@verifyUser');
Route::put('deverify-user/{id}', 'UserController@deverifyUser');


Route::group([

    'middleware' => 'api',

], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('signup', 'AuthController@signup');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
    Route::post('sendPasswordResetLink', 'ResetPasswordController@sendEmail');
    Route::post('resetPassword', 'ChangePasswordController@process');

});
