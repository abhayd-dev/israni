<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateViewmoreTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('viewmore', function (Blueprint $table) {
            $table->id();
            $table->string('video')->nullable();         // Column for video URL or file path
            $table->string('image1')->nullable();        // Column for primary image URL or file path
            $table->string('couple_name')->nullable();   // Column for couple's name
            $table->string('title');                     // Column for title
            $table->text('description');                 // Column for description
            $table->string('film_by')->nullable();       // Column for the person or company who filmed
            $table->text('outfit')->nullable();        // Column for outfit details
            $table->json('bulk_image')->nullable();    // Column for additional bulk images or file paths
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
        Schema::dropIfExists('viewmore');
    }
}
