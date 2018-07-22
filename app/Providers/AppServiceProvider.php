<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Billing\Stripe;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        view()->composer('layouts.sidebar', function($view) {
            $archives = \App\Post::archives();
            $tags = \App\Tag::has('posts')->pluck('name');

            $view->with(compact('archives', 'tags'));
//            $view->with('archives', \App\Post::archives());
//            $view->with('tags', \App\Tag::has('posts')->pluck('name'));
        });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {                    // it will accept argument, for example ($app)
        $this->app->singleton(Stripe::class, function() {

            //if you need to resolve other things to pass here, you can, thanks to the $app argument
//            $app->make('something');

            return new Stripe(config('services.stripe.secret'));
        });
    }
}
