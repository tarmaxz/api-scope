<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\NurseController;

Route::post('/login', function (Request $request) {
    $request->validate([
        'email' => 'required|email',
        'password' => 'required',
    ]);

    if (!Auth::attempt($request->only('email', 'password'))) {
        return response()->json(['message' => 'Unauthorized'], 401);
    }

    $user = Auth::user();
    $tokenResult = $user->createToken('API Token');
    $accessToken = $tokenResult->accessToken;

    return response()->json([
        'user' => $user,
        'access_token' => $accessToken,
        'token_type' => 'Bearer',
    ]);
});

Route::prefix('nurses')->group(function () {
    Route::get('/', [NurseController::class, 'index'])->middleware('auth:api');
});
