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
        Schema::create('std_tbl', function (Blueprint $table) {
            $table->id();
            $table-> string('name', 30);
            $table-> string ('email', 30);
            $table-> string('password', 20);
            $table-> string('gender', 20);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('std_tbl');
    }
};
