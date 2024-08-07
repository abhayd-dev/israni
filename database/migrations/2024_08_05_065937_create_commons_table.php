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
        Schema::create('commons', function (Blueprint $table) {
            $table->id();
            $table->string('homepage_main_video')->nullable();
            $table->string('homepage_main_heading')->nullable();
            $table->string('homepage_title')->nullable();
            $table->text('homepage_description')->nullable();
            $table->string('homepage_status')->default('active');
            $table->string('footer_address1_title')->nullable();
            $table->text('full_address1')->nullable();
            $table->string('email1')->nullable();
            $table->string('phone1')->nullable();
            $table->string('footer_address2_title')->nullable();
            $table->text('full_address2')->nullable();
            $table->string('email2')->nullable();
            $table->string('phone2')->nullable();
            $table->string('logo')->nullable();
            $table->string('film_main_video')->nullable();
            $table->string('film_main_heading')->nullable();
            $table->string('about_main_image')->nullable();
            $table->string('about_main_heading')->nullable();
            $table->text('about_main_subheading')->nullable();
            $table->string('about_title')->nullable();  
            $table->text('about_description1')->nullable();
            $table->text('about_description2')->nullable();
            $table->string('about_image')->nullable();
            $table->string('faq_heading')->nullable();
            $table->string('faq_image')->nullable();
            $table->text('faq_description')->nullable();
            $table->string('contact_image')->nullable();
            $table->string('contact_heading')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('commons');
    }
};
