<?php

use Illuminate\Support\Facades\Route;
use Symfony\Component\ErrorHandler\Debug;

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
    return view('welcome');
});

// ROCKETS

Route::get('/rocket/{id}', function ($id) {
    $request = Request::create('/api/rocket/' . $id, 'GET');
    $response = Route::dispatch($request)->getContent();
    return view($view='rocket', ['data'=>$response]);
});

Route::get('/rockets', function () {
    $request = Request::create('/api/rockets', 'GET');
    $response = Route::dispatch($request)->getContent();
    return view($view='rockets', ['data'=>$response]);
});

Route::get('/rockets/active/{active}', function ($active) {
    $request = Request::create('/api/rockets/active/' . $active, 'GET');
    $response = Route::dispatch($request)->getContent();
    return view($view='rockets', ['data'=>$response]);
});

Route::get('/rockets/success/{min}/{max}', function ($min, $max) {
    $request = Request::create('/api/rockets/success/' . $min . '/' . $max, 'GET');
    $response = Route::dispatch($request)->getContent();
    return view($view='rockets', ['data'=>$response]);
});

// MANUFACTURERS

Route::get('/manufacturer/{id}', function ($id) {
    $request = Request::create('/api/manufacturer/' . $id, 'GET');
    $response = Route::dispatch($request)->getContent();
    return view($view='manufacturer', ['data'=>$response]);
});

Route::get('/manufacturer/name/{name}', function ($name) {
    $request = Request::create('/api/manufacturer/name/' . $name, 'GET');
    $response = Route::dispatch($request)->getContent();
    return view($view='manufacturer-name', ['data'=>$response]);
});