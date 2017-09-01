<?php

use Illuminate\Support\ServiceProvider;

use Larahrm\Larahrm\Commands\LaraHrmInfo;

class LaraHrmServiceProvider extends ServiceProvider
{
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                LaraHrmInfo::class,
            ]);
        }
    }
}