<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('rn_recipes', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->string('title', 64);
            $table->string('description', 512);
            $table->string("preview_text");
            $table->uuid("media_id");
            $table->text('ingredients');
            $table->text('instructions');
            $table->timestamps();

            $table->foreign("media_id")->references("id")->on("pb_media");
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('rn_recipes');
    }
};
