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
        Schema::create('studentspackages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->string('destination');
            $table->longText('Itenarary');
            $table->string('days');
            $table->string('class');
            $table->longtext('includes');
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
        Schema::dropIfExists('studentspackages');
    }
};
