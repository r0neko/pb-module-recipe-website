<?php

namespace RNRecipeWebsite\Controllers\Admin;

use Illuminate\Http\Request;
use Laravel\Lumen\Routing\Controller;

class RecipeController extends Controller
{
    public function recipes(Request $req) {
        return redirect(route("cms.model.all", ["model" => "rn_recipe"]));
    }
}
