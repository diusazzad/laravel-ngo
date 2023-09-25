<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('socities', function (Blueprint $table) {
            $table->id('SocietyId'); // Primary key
            $table->string('SocietyName');
            $table->date('SocietyStartDate');
            $table->string('SocietyChairman');
            $table->string('SocietyManager');
            $table->string('ContactNumber');
            $table->string('UserName');

            // Timestamps for record creation and updates
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('socities');
    }
};
