<?php

namespace RNRecipeWebsite\Providers;

use App\PookieBoard\Modules\Navigation\ModelNavigationItem;
use App\PookieBoard\UI\FontAwesomeIconProvider;
use Illuminate\Support\ServiceProvider;
use RNRecipeWebsite\Models\Recipe;

class AdminServiceProvider extends ServiceProvider
{
    public function boot() {
        // register page in sidebar panel
        app('cms.sidebar.navigation')->add(new ModelNavigationItem("Recipes", "rn_recipe", new FontAwesomeIconProvider("book", "solid")));

        // register entities
        app('cms.models')->registerModel("rn_recipe", Recipe::class);
    }
}
