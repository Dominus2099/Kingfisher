<?php

namespace App\Providers;

use App\Models\Article;
use App\Models\Category;
use App\Models\Setting;
use Illuminate\Support\ServiceProvider;

<<<<<<< Updated upstream
=======
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\URL;
use Illuminate\Pagination\Paginator;

>>>>>>> Stashed changes
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
<<<<<<< Updated upstream
        //
=======
        Schema::defaultStringLength(191);
        Paginator::useBootStrap();
>>>>>>> Stashed changes
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $settings = Setting::all(); //site settings to implement in frontend
        foreach ($settings as $key => $setting) {
            if($key === 0) $system_name = $setting->value;
            elseif($key === 1) $favicon = $setting->value;
            elseif($key === 2) $web_logo = $setting->value;
            elseif($key === 3) $admin_logo = $setting->value;
        }

        $categories = Category::where('status', 1)->get();
        $popular = Article::where('status', 1)->orderBy('view_count','DESC')->limit(10)->get();//side articles

        $shareData = array(
            'system_name' => $system_name,
            'favicon' => $favicon,
            'web_logo' => $web_logo,
            'admin_logo' => $admin_logo,
            'categories' => $categories,
            'popular'=>$popular,
        );
        
        view()->share('shareData', $shareData);
    }   
}