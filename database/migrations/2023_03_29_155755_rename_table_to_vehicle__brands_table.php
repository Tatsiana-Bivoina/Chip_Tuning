<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class() extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::rename('vehicle__brands', 'vehicle_brands');
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::rename('vehicle_brands', 'vehicle__brands');
    }
};
