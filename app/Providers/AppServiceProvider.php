<?php

namespace App\Providers;



use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Session;
use App\Models\User;

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
        //
        View::composer('*', function ($view) {
            $data = null; // Set a default value for $data
            if (Session::has('loginId')) {
                $userId = Session::get('loginId');
                $data = User::find($userId); // Retrieve user data by the loginId from the session
            }
            $view->with('data', $data);
        });
        
    }
}
