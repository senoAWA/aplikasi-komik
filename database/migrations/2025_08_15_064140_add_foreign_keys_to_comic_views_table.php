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
        Schema::table('comic_views', function (Blueprint $table) {
            $table->foreignId('comic_id')->references('id')->on('comic_views')->onDelete('cascade');
            $table->foreignId('user_id')->references('id')->on('comic_views')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('comic_views', function (Blueprint $table) {
            //
        });
    }
};
