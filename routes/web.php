<?php

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

// Routes to Angular application.
// Take optional 'path' parameter which captures the rest of the URI.
// name('<app-name>'): so we have named route, that way if we change routes we don't have to change files.
// where('path', '.*'): use regex for optional 'path' that will ignore the rest of the URI
// so Laravel doesn't get in the way of passing route to Angular.

Route::get('angular-app1/{path?}', function () {
    return view('NgApp1');
})->where('path', '.*')
  ->name('app1');

Route::get('angular-app2/{path?}', function () {
    return view('NgApp2');
})->where('path', '.*')
  ->name('app2');


// This route is path to Angular application created with angular-cli tool.
// It's no different from other Angular routes.
Route::get('ngcli/app1/{path?}', function () {
    return view('ng-cli-app1');
})->where('path', '.*')
  ->name('ng_app1');

Route::get('ngcli/app2/{path?}', function () {
    return view('ng-cli-app2');
})->where('path', '.*')
  ->name('ng_app2');

// Default route.
Route::get('/', function () {
    return view('welcome');
});
