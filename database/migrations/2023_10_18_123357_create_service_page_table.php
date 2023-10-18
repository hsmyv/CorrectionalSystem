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
        Schema::create('service_page', function (Blueprint $table) {
            $table->id();
            $table->string("upper_slide_title")->nullable();
            $table->string("upper_slide_description")->nullable();
            $table->string("middle_section_title")->nullable();
            $table->string("middle_section_excerpt")->nullable();
            $table->text("middle_section_content")->nullable();
            $table->string("middle_section_video")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('service_page');
    }
};
