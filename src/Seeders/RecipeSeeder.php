<?php

namespace RNRecipeWebsite\Seeders;

use App\Models\Media;
use Illuminate\Database\Seeder;
use RNRecipeWebsite\Models\Recipe;
use function Illuminate\Filesystem\join_paths;

class RecipeSeeder extends Seeder
{
    public function run(): void
    {
        $sampleDir = realpath(join_paths(__DIR__, '../sample'));
        $dataPath = realpath(join_paths($sampleDir, 'data.json'));

        $data = (array) json_decode(file_get_contents($dataPath));

        foreach($data as $r) {
            $r = (object) $r;
            $assetPath = realpath(join_paths($sampleDir, $r->previewImage->url));

            $recipe = new Recipe();

            // firstly create a media entity
            $media = new Media();

            $media->fromFile($assetPath);
            $media->description = $r->previewImage->description;

            $media->save();

            // add recipe and associate media
            $recipe->id = $r->id;
            $recipe->title = $r->title;
            $recipe->description = $r->textHtml;
            $recipe->preview_text = $r->previewHtml;

            $recipe->ingredients = json_encode($r->ingredients);
            $recipe->instructions = json_encode($r->instructions);

            $recipe->media()->associate($media);

            $recipe->save();
        }
    }
}
