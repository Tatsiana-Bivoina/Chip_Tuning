<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('vehicle_engines', function (Blueprint $table) {
            $table->id();
            $table->string('engine_capacity');
            $table->string('engine_classification');
            $table->string('engine_power');
            $table->string('torque');
            $table->string('engine_route');
            $table->timestamps();

            $table->unsignedBigInteger('vehicle_model_id');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('vehicle_engines');
    }
};
