<?php

use App\Http\Controllers\Api\V1\Auth\AuthenticateController;
use App\Http\Controllers\Api\V1\CommentController;
use App\Http\Controllers\Api\V1\MediaController;
use App\Http\Controllers\Api\V1\PostCommentController;
use App\Http\Controllers\Api\V1\PostController;
use App\Http\Controllers\Api\V1\PostLikeController;
use App\Http\Controllers\Api\V1\UserCommentController;
use App\Http\Controllers\Api\V1\UserController;
use App\Http\Controllers\Api\V1\UserPostController;
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

Route::prefix('v1')->group(function () {
    Route::middleware(['auth:api', 'verified'])->group(function () {
        // API Routes here, authentication with API key. Authentication via token. You can create a new token in your user profile.
        //Then, you can use this token either as url parameter or in Authorization header :

        // GET http://blog.test/api/v1/posts?api_token=your_private_token_here
        // curl --header "Authorization: Bearer your_private_token_here" http://blog.test/api/v1/posts
    });

    Route::post('/authenticate', [AuthenticateController::class, 'authenticate'])->name('authenticate');

    // Comments
    Route::apiResource('posts.comments', PostCommentController::class)->only('index');
    Route::apiResource('users.comments', UserCommentController::class)->only('index');
    Route::apiResource('comments', CommentController::class)->only(['index', 'show']);

    // Posts
    Route::apiResource('posts', PostController::class)->only(['index', 'show']);
    Route::apiResource('users.posts', UserPostController::class)->only('index');

    // Users
    Route::apiResource('users', UserController::class)->only(['index', 'show']);

    // Media
    Route::apiResource('media', MediaController::class)->only('index');
});
