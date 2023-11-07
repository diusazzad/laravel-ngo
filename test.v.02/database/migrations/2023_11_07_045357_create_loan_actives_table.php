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
        Schema::create('loan_actives', function (Blueprint $table) {
            $table->id();
            $table->string('loan_plan');
            $table->decimal('total_payable', 10, 2);
            $table->decimal('paid', 10, 2);
            $table->decimal('installment', 10, 2);
            $table->string('status');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('loan_actives');
    }
};
