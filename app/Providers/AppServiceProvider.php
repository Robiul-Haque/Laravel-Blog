<?php

namespace App\Providers;

use App\Models\Category;
use App\Models\Setting;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrapFive();

        $categories = Category::all();
        view()->share('categories', $categories);

        $setting = Setting::first();
        view()->share('setting', $setting);

        $user = Auth::user();
        view()->share('user',$user);
    }
}
