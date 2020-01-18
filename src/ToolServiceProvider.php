<?php

namespace Roskovynskyi\ClickForRowDetails;

use Laravel\Nova\Nova;
use Laravel\Nova\Events\ServingNova;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Roskovynskyi\ClickForRowDetails\Http\Middleware\Authorize;

class ToolServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Nova::serving(function (ServingNova $event) {
            Nova::script('click-for-row-details', __DIR__ . '/../dist/js/tool.js');
        });
    }

}
