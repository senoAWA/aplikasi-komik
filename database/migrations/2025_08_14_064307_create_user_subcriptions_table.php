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
        Schema::create('user_subcriptions', function (Blueprint $table) {
            $table->id();
            $table->enum('plan', ['free', 'premium_monthly', 'premium_yearly']);
            $table->dateTime('start_date');
            $table->dateTime('end_date');
            $table->boolean('is_active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_subcriptions');
    }
};
