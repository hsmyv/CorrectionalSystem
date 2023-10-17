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
        Schema::create('home_page', function (Blueprint $table) {
            $table->id();
            $table->string("first_slide_first_word")->nullable();
            $table->string("first_slide_second_word")->nullable();
            $table->string("first_slide_third_word")->nullable();
            $table->string("first_slide_button")->nullable();
            $table->string("second_slide_first_word")->nullable();
            $table->string("second_slide_second_word")->nullable();
            $table->string("second_slide_third_word")->nullable();
            $table->string("second_slide_button")->nullable();
            $table->string("third_slide_first_word")->nullable();
            $table->string("third_slide_second_word")->nullable();
            $table->string("features_button")->nullable();
            $table->string("donate_title")->nullable();
            $table->string("donate_excerpt")->nullable();
            $table->string("donate_button")->nullable();
            $table->text("donate_content")->nullable();
            $table->string("act_title")->nullable();
            $table->string("act_excerpt")->nullable();
            $table->string("act_button")->nullable();
            $table->text("act_content")->nullable();
            $table->string("first_writing_title")->nullable();
            $table->text("first_writing_description")->nullable();
            $table->string("second_writing_title")->nullable();
            $table->text("second_writing_description")->nullable();
            $table->string("third_writing_title")->nullable();
            $table->text("third_writing_description")->nullable();
            $table->string("subscribe_title")->nullable();
            $table->string("subscribe_button")->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_page');
    }
};
