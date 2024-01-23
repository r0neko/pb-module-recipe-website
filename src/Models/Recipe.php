<?php

namespace RNRecipeWebsite\Models;

use App\Models\Media;
use App\Models\PBModel;

class Recipe extends PBModel
{
    protected $table = "rn_recipes";

    public static array $tableMapping = [
//            "ID" => "id",
        "Title" => "title",
        "Description" => "description"
    ];

    public static array $formFields = [
        "Title" => [
            "id" => "recipeTitle",
            "type" => "text",
            "value" => "title"
        ],
        "Description" => [
            "id" => "recipeDescription",
            "type" => "text",
            "value" => "description"
        ],
        "Short Preview Description" => [
            "id" => "recipePreviewText",
            "type" => "text",
            "value" => "preview_text"
        ],
        "Media" => [
            "id" => "recipeMedia",
            "type" => "media",
            "value" => "media"
        ],
        "Ingredients" => [
            "id" => "recipeIngredients",
            "type" => "text-list",
            "value" => "ingredients"
        ],
        "Instructions" => [
            "id" => "recipeInstructions",
            "type" => "text-list",
            "value" => "instructions"
        ]
    ];

    public function media() {
        return $this->belongsTo(Media::class);
    }

    public function getIngredientsAttribute($value) {
        return json_decode($value);
    }

    public function getInstructionsAttribute($value) {
        return json_decode($value);
    }
}
