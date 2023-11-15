<?php

namespace App\Providers;


use View;
use App\Models\Wishlist;
use App\Models\Category;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
            View::composer('*', function ($view) {
                $customerId = Session::get('customer_id');
                $wishlistCount = $customerId ? Wishlist::where('customer_id', $customerId)->count() : 0;
                $view->with('wishlistCount', $wishlistCount);
            });
    }
}
