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
        Schema::create('goals', function (Blueprint $table) {
            $table
                ->id();
            $table
                ->unsignedBigInteger('id_team')
                ->nullable(false);
            $table
                ->string('goal')
                ->nullable(false);
            $table
                ->enum('goal_level', [1, 2, 3, 4, 5])
                ->nullable(false);

            // FK
            $table
                ->foreign('id_team')
                ->references('id')
                ->on('teams')
                ->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('goals');
    }
};
