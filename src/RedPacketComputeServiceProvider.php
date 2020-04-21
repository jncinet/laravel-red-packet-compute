<?php

namespace Qihucms\RedPacketCompute;

use Illuminate\Support\ServiceProvider;

class RedPacketComputeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(RedPacketCompute::class, function () {
            return new RedPacketCompute();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
