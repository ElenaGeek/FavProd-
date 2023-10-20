<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
       // \App::setLocale(session('locale'));

        $menu = [
            [
                'title' => 'Home page',
                'alias' => 'home'
            ],          
            [
                'title' => 'Новости',
                'alias' => 'home'
            ],
            [
                'title' => 'Админка',
                'alias' => 'home'
            ],
 /*
            [
                'title' => 'Админка категорий',
                'alias' => 'admin::categories::index'
            ],
            [
                'title' => 'Профиль',
                'alias' => 'admin::profile::update'
            ],
            [
                'title' => 'Админка пользователей',
                'alias' => 'admin::profile::index'
            ],
            [
                'title' => 'Parser',
                'alias' => 'parser'
            ],

            */
        ];

        View::share('menu', $menu);
    }
}
