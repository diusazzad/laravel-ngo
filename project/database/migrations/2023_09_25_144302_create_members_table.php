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
        Schema::create('members', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('society_id');
            $table->string('member_name');
            $table->string('father');
            $table->string('mother');
            $table->date('date_of_birth');
            $table->text('present_address');
            $table->text('permanent_address');
            $table->string('nationality');
            $table->string('id_card_number');
            // Add other fields as needed
            $table->timestamps();

            $table->foreignId('society_id')->references('id')->on('societies')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('members');
    }
};
