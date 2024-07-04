<?php

namespace Playbackchat\Balajeeva;

use Illuminate\Support\ServiceProvider;

class chatapplication extends ServiceProvider
{
    /**
     * Register services.
     */
    public function register(): void
    {

    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        $this->loadRoutesFrom(__DIR__. '/routes/web.php');
        $this->loadViewsFrom(__DIR__.'/views', 'ChatApp');
    }
}
