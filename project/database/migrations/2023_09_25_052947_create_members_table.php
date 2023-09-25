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
            $table->unsignedBigInteger('socities_id'); // Foreign key to associate with the society
            $table->string('member_name');
            $table->string('father_name');
            $table->string('mother_name');
            $table->date('date_of_birth');
            $table->text('present_address');
            $table->text('permanent_address');
            $table->string('nationality');
            $table->string('id_card_number')->unique();

            // Timestamps for record creation and updates
            $table->timestamps();

            // Define foreign key constraint
            $table->foreign('socities_id')->references('SocietyId')->on('socities');

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
