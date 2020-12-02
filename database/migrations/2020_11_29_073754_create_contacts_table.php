<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateContactsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('contacts', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('job_title')->nullable();
            $table->unsignedBigInteger('lead_status_id')->nullable();
            $table->unsignedBigInteger('account_id');
            $table->string('company_associated')->nullable();
            $table->string('description')->nullable();
            $table->unsignedBigInteger('phone')->nullable();
            $table->unsignedBigInteger('landline')->nullable();
            $table->string('fax')->nullable();
            $table->string('avatar')->nullable();
            $table->string('address')->nullable();
            $table->unsignedInteger('postcode')->nullable();
            $table->string('state_code', 2)->nullable();
            $table->string('country_code', 2)->nullable();
            $table->unsignedBigInteger('created_by')->nullable();
            $table->enum('status', ['0', '1']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('contacts');
    }
}
