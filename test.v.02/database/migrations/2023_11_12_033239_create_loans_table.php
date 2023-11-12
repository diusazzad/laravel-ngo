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
        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('loan_plan_id');
            $table->decimal('total_payable', 10, 2);
            $table->decimal('paid', 10, 2);
            $table->decimal('installment', 10, 2);
            $table->enum('status', ['plan', 'pending', 'active', 'paid', 'closed']);
            $table->timestamps();

            $table->foreign('loan_plan_id')->references('id')->on('loan_plans');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loans');
    }
};
