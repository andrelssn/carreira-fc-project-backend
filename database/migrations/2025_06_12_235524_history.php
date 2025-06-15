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
        Schema::create('history', function (Blueprint $table) {
            $table
                ->id();
            $table
                ->unsignedBigInteger('id_team')
                ->nullable(false);
            $table
                ->string('history', 1000)
                ->nullable(false);
            $table
                ->string('foundation')
                ->nullable(false);
            $table
                ->string('stadium')
                ->nullable(false);
            $table
                ->string('goalscorer')
                ->nullable(false);
            $table
                ->integer('goalscorer_total')
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
        Schema::drop('history');
    }
};
