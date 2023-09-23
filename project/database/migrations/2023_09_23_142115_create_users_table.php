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
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->foreignId('role_id')->constrained();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->string('si_no');
            $table->string('father');
            $table->string('mother');
            $table->text('address');
            $table->string('ac_no');
            $table->decimal('loan', 8, 2);
            $table->decimal('interest', 8, 2);
            $table->integer('time');
            $table->decimal('total_payments', 8, 2);
            $table->decimal('weekly_pay', 8, 2);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};