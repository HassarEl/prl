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
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('date_reservation');
            $table->time('heureDebut');
            $table->decimal('duree', 5, 2)->default(0);
            $table->string('phone', 15)->nullable();
            $table->string('title_reunion');
            $table->string('description')->nullable();
            $table->string('piece_jointe')->nullable();
            $table->foreignId('room_id')->constrained()->nullable()->default(1);
            $table->foreignId('user_id')->constrained();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('reservations');
    }
};
