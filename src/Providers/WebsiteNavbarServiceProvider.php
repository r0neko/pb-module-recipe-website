<?php

namespace RNRecipeWebsite\Providers;

use App\PookieBoard\Modules\Navigation\NavigationItem;
use App\PookieBoard\Modules\Navigation\NavigationItemCollection;
use App\PookieBoard\UI\FontAwesomeIconProvider;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class WebsiteNavbarServiceProvider extends ServiceProvider
{
    public function register() {
        $this->app->singleton('website.navigation', function ($app) {
            return new NavigationItemCollection();
        });
    }

    public function boot() {
        $nav = app('website.navigation');

        $nav->add(new NavigationItem("Acasă", "website.home"));
        $nav->add(new NavigationItem("Sfaturi și Trucuri", "website.tips"));
        $nav->add(new NavigationItem("Despre Noi", "website.about"));

        View::composer('*', function ($view) {
            $nav = $this->app->make('website.navigation');
            $view->with('websiteNavigation', $nav);
        });
    }
}
