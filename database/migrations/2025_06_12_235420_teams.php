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
        Schema::create('teams', function (Blueprint $table) {
            $table
                ->id();
            $table
                ->string('name')
                ->nullable(false);
            $table
                ->string('city')
                ->nullable(false);
            $table
                ->string('country')
                ->nullable(false);
            $table
                ->string('stadium')
                ->nullable(false);
            $table
                ->unsignedBigInteger('id_league');
            $table
                ->enum('size', [1, 2, 3, 4, 5])
                ->nullable(false);

            // FK
            $table
                ->foreign('id_league')
                ->references('id')
                ->on('leagues');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('teams');
    }
};
