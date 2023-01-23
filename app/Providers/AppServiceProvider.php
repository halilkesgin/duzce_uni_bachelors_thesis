<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;
use App\Models\Page;
use App\Models\SocialItem;
use App\Models\Setting;
use App\Models\Language;

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

        Paginator::useBootstrap();


        $social_item_data = SocialItem::get();
        $setting_data = Setting::where('id',1)->first();

        view()->share('global_social_item_data', $social_item_data);
        view()->share('global_setting_data', $setting_data);
    }
}
