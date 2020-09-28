<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        view()->composer('layouts.index', function($view){
            $post=\App\Post::withTranslation(\App::getLocale())->first();
              $str=file_get_contents("http://cbu.uz/ru/arkhiv-kursov-valyut/json/");
            $json=json_decode($str, true);
            $partners=\App\Partner::all();
            $view->with(compact('post', 'json', 'partners'));
        });

        view()->composer('partials.comment', function($view){
             $comments=\App\Comment::whereNotNull('status')->get();
             $view->with(compact('comments'));
        });

        view()->composer('forms.direction', function($view){
             $marshruts=\App\MarshrutDirection::all();
             $view->with(compact('marshruts'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
