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
        Schema::create('contact_page_create', function (Blueprint $table) {
            $table->id();
            $table->text("map")->nullable();
            $table->string("config_mail")->nullable();
            $table->string("config_password")->nullable();
            $table->string("address")->nullable();
            $table->string("phone")->nullable();
            $table->string("mail")->nullable();
            $table->text("before_contact_us")->nullable();
            $table->string("schedule")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('contact_page_create');
    }
};
