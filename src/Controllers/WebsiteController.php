<?php

namespace RNRecipeWebsite\Controllers;

use Illuminate\Support\Facades\Request;
use Illuminate\Support\Str;
use Laravel\Lumen\Routing\Controller;
use Ramsey\Uuid\Uuid;
use RNRecipeWebsite\Models\Recipe;

class WebsiteController extends Controller
{
    public function index(Request $req)
    {
        return view("website.home", [
            "recipes" => Recipe::all()
        ]);
    }

    public function tips(Request $req)
    {
        return view("website.tips");
    }

    public function about(Request $req)
    {
        return view("website.about");
    }

    public function recipe($id, Request $req)
    {
        $recipe = Recipe::find(Uuid::fromString($id));

        return view("website.recipe", [
            "recipe" => $recipe
        ]);
    }
}
