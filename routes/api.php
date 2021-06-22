<?php


use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

// use App\Http\Controllers\Api\V1\DeskController;



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});



Route::apiResources([
	'desks' => DeskController::class,
]);

// Route::get('/desks', [DeskController::class, 'index'])->name('desk.home');
// Route::get('/desks/{id}', [DeskController::class, 'show'])->name('desk.show');




