<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [App\Http\Controllers\Frontend\HomeController::class, 'index'])->name('home');
Route::get('/post/{slug}', [App\Http\Controllers\Frontend\PostController::class, 'index'])->name('post');
Route::get('/about', [App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about');
Route::get('/contact', [App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact');
Route::post('/contact', [App\Http\Controllers\Frontend\ContactController::class, 'store']);
Route::get('/category/{categoryId}', [App\Http\Controllers\Frontend\PostController::class, 'getPostByCategory'])->name('postByCategory');

Route::get('/login', [App\Http\Controllers\Auth\LoginController::class, 'loginIndex'])->name('login');
Route::post('/login', [App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::get('/register', [App\Http\Controllers\Auth\RegisterController::class, 'registerIndex'])->name('register');

Route::middleware('auth')->group(function () {
    // Logout Route
    Route::get('/logout', [App\Http\Controllers\Auth\LogoutController::class, 'logout'])->name('logout');

    // User Routes
    // Route::middleware('user')->group(function () {
    //     Route::get('/category', [App\Http\Controllers\Frontend\CategoryController::class, 'index'])->name('category');
    //     Route::get('/post/{slug}', [App\Http\Controllers\Frontend\PostController::class, 'index'])->name('post');
    //     Route::get('/about', [App\Http\Controllers\Frontend\AboutController::class, 'index'])->name('about');
    //     Route::get('/contact', [App\Http\Controllers\Frontend\ContactController::class, 'index'])->name('contact');
    // });

    // Admin Routes
    Route::middleware('admin')->prefix('admin')->group(function () {
        Route::get('/', [\App\Http\Controllers\Backend\DashbordController::class, 'index'])->name('admin.dashbord');

        //  Category Routes
        Route::prefix('category')->group(function () {
            Route::get('/', [\App\Http\Controllers\Backend\CategoryController::class, 'index'])->name('admin.category.index');
            Route::get('/create-category', [\App\Http\Controllers\Backend\CategoryController::class, 'create'])->name('admin.category.create');
            Route::post('/create-category', [\App\Http\Controllers\Backend\CategoryController::class, 'store']);
            Route::get('/edit/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'edit'])->name('admin.category.edit');
            Route::post('/edit/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'update']);
            Route::get('/delete/{id}', [\App\Http\Controllers\Backend\CategoryController::class, 'delete'])->name('admin.category.delete');
        });

        // Tag Routes
        Route::prefix('tag')->group(function () {
            Route::get('/', [\App\Http\Controllers\Backend\TagController::class, 'index'])->name('admin.tag.index');
            Route::get('/create-tag', [\App\Http\Controllers\Backend\TagController::class, 'create'])->name('admin.tag.create');
            Route::post('/create-tag', [\App\Http\Controllers\Backend\TagController::class, 'store']);
            Route::get('/edit/{id}', [\App\Http\Controllers\Backend\TagController::class, 'edit'])->name('admin.tag.edit');
            Route::post('/edit/{id}', [\App\Http\Controllers\Backend\TagController::class, 'update']);
            Route::get('/delete/{id}', [\App\Http\Controllers\Backend\TagController::class, 'delete'])->name('admin.tag.delete');
        });

        // Post Routes
        Route::prefix('post')->group(function () {
            Route::get('/', [\App\Http\Controllers\Backend\PostController::class, 'index'])->name('admin.post.index');
            Route::get('/create-post', [\App\Http\Controllers\Backend\PostController::class, 'create'])->name('admin.post.create');
            Route::post('/create-post', [\App\Http\Controllers\Backend\PostController::class, 'store']);
            Route::get('/view/{id}', [\App\Http\Controllers\Backend\PostController::class, 'view'])->name('admin.post.view');
            Route::get('/edit/{id}', [\App\Http\Controllers\Backend\PostController::class, 'edit'])->name('admin.post.edit');
            Route::post('/edit/{id}', [\App\Http\Controllers\Backend\PostController::class, 'update']);
            Route::get('/delete/{id}', [\App\Http\Controllers\Backend\PostController::class, 'delete'])->name('admin.post.delete');
        });

        // Message Routes
        Route::prefix('message')->group(function () {
            Route::get('/', [\App\Http\Controllers\Backend\ContactController::class, 'index'])->name('admin.message.index');
            Route::get('/view/{id}', [\App\Http\Controllers\Backend\ContactController::class, 'view'])->name('admin.message.view');
            Route::get('/delete/{id}', [\App\Http\Controllers\Backend\ContactController::class, 'delete'])->name('admin.message.delete');
        });

        // User Routes
        Route::prefix('user')->group(function () {
            Route::get('/', [App\Http\Controllers\Auth\UserController::class, 'index'])->name('admin.user.index');
            Route::get('/edit/{id}', [App\Http\Controllers\Auth\UserController::class, 'edit'])->name('admin.user.edit');
            Route::post('/edit/{id}', [App\Http\Controllers\Auth\UserController::class, 'update']);
        });

        // Setting Routes
        Route::prefix('setting')->group(function () {
            Route::get('/', [\App\Http\Controllers\Backend\SettingController::class, 'index'])->name('admin.setting.index');
            Route::get('/create-site-information', [\App\Http\Controllers\Backend\SettingController::class,'create'])->name('admin.setting.create');
            Route::post('/create-site-information', [\App\Http\Controllers\Backend\SettingController::class, 'store']);
            // Route::get('/edit-site-information', [\App\Http\Controllers\Backend\SettingController::class, 'edit'])->name('admin.setting.edit');
            // Route::post('/edit-site-information/{id}', [\App\Http\Controllers\Backend\SettingController::class, 'update']);
            Route::get('/delete-site-information/{id}', [\App\Http\Controllers\Backend\SettingController::class, 'delete'])->name('admin.setting.delete');
        });

        // Profile Routes
        Route::prefix('profile')->group(function () {
            Route::get('/', [App\Http\Controllers\Auth\ProfileController::class, 'profile'])->name('admin.profile.index');
            Route::post('/', [App\Http\Controllers\Auth\ProfileController::class, 'update']);
        });
    });
});

