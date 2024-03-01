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
        Schema::create('events', function (Blueprint $table) {
            $table->id();
            $table->string('label');
            $table->text('comment')->nullable();
            $table->decimal('generalNote', $precision = 3, $scale = 2);
            $table->smallInteger('numberPlaces');
            $table->smallInteger('numberPlacesReserved');
            $table->boolean('is_open');
            $table->string('urlImage', 255);
            $table->foreignId('show_id')->constrained()->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('events');
    }
};
