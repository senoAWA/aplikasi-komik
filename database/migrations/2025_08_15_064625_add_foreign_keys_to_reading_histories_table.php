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
        Schema::table('reading_histories', function (Blueprint $table) {
            $table->foreignId('user_id')->references('id')->on('reading_histories')->onDelete('cascade');
            $table->foreignId('comic_id')->references('id')->on('reading_histories')->onDelete('cascade');
            $table->foreignId('chapter_id')->references('id')->on('reading_histories')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('reading_histories', function (Blueprint $table) {
            //
        });
    }
};
