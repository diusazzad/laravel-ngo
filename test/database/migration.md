<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTables extends Migration
{
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->increments('id');
            $table->string('username', 50)->unique();
            $table->string('userpassword', 255);
            $table->string('name', 100);
            $table->string('category', 50);
        });

        Schema::create('societies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('address', 255);
            $table->string('contact_info', 255);
        });

        Schema::create('employees', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('contact_info', 255);
            $table->string('role', 50);
            $table->integer('society_id')->unsigned();
            $table->foreign('society_id')->references('id')->on('societies');
        });

        Schema::create('members', function (Blueprint $table) {
            $table->increments('id');
            $table->string('name', 100);
            $table->string('contact_info', 255);
            $table->integer('society_id')->unsigned();
            $table->foreign('society_id')->references('id')->on('societies');
        });

        Schema::create('loans', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('loan_amount', 10, 2);
            $table->decimal('interest_rate', 5, 2);
            $table->date('application_date');
            $table->string('status', 50);
        });

        Schema::create('loan_applications', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('application_amount', 10, 2);
            $table->date('application_date');
            $table->string('status', 50);
            $table->integer('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('members');
            $table->integer('loan_id')->unsigned();
            $table->foreign('loan_id')->references('id')->on('loans');
        });

        Schema::create('share_collection', function (Blueprint $table) {
            $table->increments('id');
            $table->decimal('collection_amount', 10, 2);
            $table->date('collection_date');
            $table->integer('member_id')->unsigned();
            $table->foreign('member_id')->references('id')->on('members');
        });

        Schema::create('loan_approvals', function (Blueprint $table) {
            $table->increments('id');
            $table->date('approval_date');
            $table->string('status', 50);
            $table->integer('user_id')->unsigned();
            $table->foreign('user_id')->references('id')->on('users');
            $table->integer('loan_id')->unsigned();
            $table->foreign('loan_id')->references('id')->on('loans');
        });
    }

    public function down()
    {
        Schema::dropIfExists('loan_approvals');
        Schema::dropIfExists('share_collection');
        Schema::dropIfExists('loan_applications');
        Schema::dropIfExists('loans');
        Schema::dropIfExists('members');
        Schema::dropIfExists('employees');
        Schema::dropIfExists('societies');
        Schema::dropIfExists('users');
    }
}
