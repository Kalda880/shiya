<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Models\Setting;
use Illuminate\Support\Facades\Schema;
use App\Models\Category;
use App\Models\Design;
use App\Models\Tag;
use App\Models\SiteSetting;

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
        if(Schema::hasTable('settings')){

            view()->share('setting', Setting::first());
            if (Schema::hasTable('site_settings')) {
                $settings = SiteSetting::all();
                foreach ($settings as $setting) {
                    $const_name = 'CONFIG_'.$setting->name;
                    if(!defined($const_name)){
                    define($const_name, $setting->value);
                    }
                    
                    //view()->share('CONFIG_'.$setting->name, $setting->value);
                }  
            }
         
            //view()->share('categories', Category::all());

            view()->share('pending', Design::where('status', 0)->count());

            $famouse_tags =  Tag::whereHas('designs', function ($q) { return $q->where('status', 1); })->withCount('designs')->orderBy('designs_count', 'desc')->take(10)->get();

            view()->share('famouse_tags', $famouse_tags);
        }
    }
}
