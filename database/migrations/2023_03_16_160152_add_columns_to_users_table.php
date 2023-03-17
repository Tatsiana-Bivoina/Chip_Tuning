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
        Schema::table('users', function (Blueprint $table) {
            $table->string('surname');
            $table->string('phone')->nullable();
            $table->string('private_person');
            $table->string('company')->nullable();
            $table->string('company_reg_number')->nullable();
            $table->string('vat_number')->nullable();
            $table->string('country');
            $table->string('city');
            $table->string('address');
            $table->integer('zip');
            $table->string('agreement');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('surname');
            $table->dropColumn('phone');
            $table->dropColumn('private_person');
            $table->dropColumn('company');
            $table->dropColumn('company_reg_number');
            $table->dropColumn('vat_number');
            $table->dropColumn('country');
            $table->dropColumn('city');
            $table->dropColumn('address');
            $table->dropColumn('zip');
            $table->dropColumn('agreement');
        });
    }
};
