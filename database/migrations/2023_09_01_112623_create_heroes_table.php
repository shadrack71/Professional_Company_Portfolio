<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('hero_table', function (Blueprint $table) {
            $table->id();
            $table->string('hero_title');
            $table->longText('hero_desc');
            $table->string('hero_img_url');
            $table->string('hero_link');
            $table->string('hero_tagline');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('heroes');
    }
};