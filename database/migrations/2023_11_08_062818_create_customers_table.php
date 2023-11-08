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
        Schema::create('customers', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->nullable();
            $table->string('landline')->nullable();
            $table->string('mobile');
            $table->integer('customer_type');
            $table->string('contact_person');
            $table->string('contact_person_mobile');
            $table->string('shop_no');
            $table->string('building_floor');
            $table->integer('country_id');
            $table->integer('state_id');
            $table->integer('zone_id');
            $table->longText('description')->nullable();
            $table->longText('special_remarks')->nullable();
            $table->tinyInteger('status');
            $table->integer('created_by');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('customers');
    }
};
