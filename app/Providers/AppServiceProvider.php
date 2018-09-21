<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        View::share([
            'company_name'=> '河南法帮法律咨询服务有限公司',
            'company_phone' => '0371-55681929',
            'company_mobile_phone' => '182182182182',
            'company_address' => '河南省郑州市郑东新区商都路与中兴南路建正东方中心A2408',
            'company_beian' => '豫ICP备18005257号'
        ]);
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
