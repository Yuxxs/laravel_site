<?php
declare(strict_types = 1);

namespace App\Providers;

use App\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
    if (Schema::hasTable('users')){
        if(!is_null(User::all()->first())) {
            $enableRegister =False;
        }
        else {
            $enableRegister =True;
        }
        View::share('enableRegister',  $enableRegister);
        }
    }
}
