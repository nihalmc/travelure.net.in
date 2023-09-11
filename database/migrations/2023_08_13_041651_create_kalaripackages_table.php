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
        Schema::create('kalaripackages', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('image');
            $table->integer('packagetype_id');
            $table->longText('PackageDetails');
            $table->longText('Itenarary');
            $table->string('days');
            $table->string('class');
            $table->string('destination');
            $table->longText('includes');
            $table->longText('excludes');
            $table->integer('ordernumber');
            $table->tinyInteger('showinhomepage');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kalaripackages');
    }
};
