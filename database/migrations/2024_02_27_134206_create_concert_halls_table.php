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
        Schema::create('concert_halls', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->smallInteger('numberPlaces');
            $table->text('comment')->nullable();
            $table->date('date');
            $table->time('time');
            $table->string('adress_street');
            $table->foreignId('country_id')->constrained()->nullable();
            $table->foreignId('city_id')->constrained()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('concert_halls');
    }
};
