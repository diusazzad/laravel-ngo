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
        Schema::create('ngos', function (Blueprint $table) {
            $table->id();
            $table->string('serial_no');
            $table->string('name');
            $table->string('father');
            $table->string('mother');
            $table->text('address');
            $table->string('ac_no');
            $table->decimal('loan', 8, 2);
            $table->decimal('interest', 8, 2);
            $table->integer('time');
            $table->decimal('total_pay', 8, 2);
            $table->decimal('weekly_pay', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ngos');
    }
};
