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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->integer('destination_id');
            $table->string('title');
            $table->string('image');
            $table->longText('text');
            $table->longText('plaintext')->nullable();
            $table->longText('facilities');
            $table->string('roomtype');
            $table->tinyInteger('photo_service')->nullable();
            $table->tinyInteger('rooms');
            $table->tinyInteger('webpage');
            $table->tinyInteger('reservation');
            $table->tinyInteger('showinhome page')->default(0);
            $table->integer('ordernumber');
            $table->longText('rooms_details');
            $table->string('link')->nullable();
            $table->longText('popularplaces');
            $table->longText('excludes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('hotels');
    }
};
