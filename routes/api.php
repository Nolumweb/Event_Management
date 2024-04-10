<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\EventController;
use App\Http\Controllers\api\AttendeeController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::apiResource('events', EventController::class);
Route::apiResource('events.attendees', AttendeeController::class)
->scoped(['attendee' => 'event']);






Route::group(['prefix' => 'v1', 'namespace' => 'App\Http\Controllers\api\v1'], function (){
    Route::apiResource('customers', CustomerController::class);
   // Route::get('/api/v1/customers', [CustomerController::class, 'index']);

    Route::apiResource('invoices', InvoiceController::class);
});


