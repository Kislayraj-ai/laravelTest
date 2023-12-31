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
        Schema::create('bussiness', function (Blueprint $table) {
            $table->id();
            $table->string("Name");
            $table->string("address");
            $table->string("email");
            $table->string("website");
            $table->string("contact_person");
            $table->string("phone_no");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bussiness');
    }
};