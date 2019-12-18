<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\indexing;
use App\city;
use App\detail;


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
        if(!$this->app->runningInconsole()){
            view()->share('ViewIntro',indexing::where('id_tags',1)->get());
            view()->share('ViewHs',indexing::where('id_tags',2)->get());
            view()->share('ViewIf',indexing::where('id_tags',3)->get());
            view()->share('ViewKk',indexing::where('id_tags',4)->get());
            view()->share('ViewGood',indexing::where('id_tags',5)->get());
            view()->share('ViewLb',indexing::where('id_tags',6)->get());
            view()->share('ViewCom',indexing::where('id_tags',7)->get());
            view()->share('ViewFb',indexing::where('id_tags',8)->get());
            view()->share('ViewCity',city::all());
            view()->share('Rtab1', detail::orderby('id','desc')->limit(6)->get());
            view()->share('Rtab2', detail::orderby('views','desc')->limit(6)->get());
            
        }
        
    }
}
