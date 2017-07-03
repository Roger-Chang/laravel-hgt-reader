<?php

namespace SleepCat\LaravelHgtReader;

use Illuminate\Support\ServiceProvider;

class ReaderServiceProvider extends ServiceProvider
{
    /**
     * 指定提供者載入是否延緩。
     *
     * @var bool
     */
    protected $defer = false;
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('HgtReader', function () {
           return new HgtReaderService();
        });
    }

    /**
     * 取得提供者所提供的服務。
     *
     * @return array
     */
    public function provides()
    {
        return ['HgtReader'];
    }
}
