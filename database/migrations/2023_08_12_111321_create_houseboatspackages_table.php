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
        Schema::create('houseboatspackages', function (Blueprint $table) {
            $table->id();
            $table->string('hotelname');
            $table->string('image');
            $table->string('destination');
            $table->longText('packagedetails');
            $table->string('days');
            $table->string('class');
            $table->longtext('roomdetails');
            $table->longtext('facilities');
            $table->longtext('excludes');
            $table->integer('packagetype_id');
            $table->integer('hotel_id');
            $table->tinyInteger('showinhomepage');
            $table->integer('ordernumber');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('houseboatspackages');
    }
};
