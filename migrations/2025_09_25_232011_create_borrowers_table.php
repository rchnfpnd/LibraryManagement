<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('borrowers', function (Blueprint $table) {
            $table->id();
            $table->string('last_name');
            $table->string('first_name');
            $table->string('id_number')->unique();
            $table->string('section');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('borrowers');
    }
};
