<?php

use App\Http\Controllers\AddressController;
use App\Http\Controllers\PersonController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('people/search', [PersonController::class, 'index']);
Route::apiResource('people', PersonController::class);
Route::prefix('people/{personId}/addresses')->group(function () {
    Route::get('/', [AddressController::class, 'index']);
    Route::post('/', [AddressController::class, 'store']);
    Route::get('/{address}', [AddressController::class, 'show']);
    Route::put('/{address}', [AddressController::class, 'update']);
    Route::delete('/{address}', [AddressController::class, 'destroy']);
});


# /api/people/search?id=1 - Consulta uma pessoa pelo identificador 1.
# /api/people/search?cpf=12345678900 - Consulta pessoas pelo CPF 12345678900.
# /api/people/search?name=Fulano - Consulta pessoas cujo nome contém "Fulano".
