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
        Schema::create('biographs', function (Blueprint $table) {
            $table
                ->id();
            $table
                ->unsignedBigInteger('id_team')
                ->nullable(false);
            $table
                ->string('history', 2000)
                ->nullable(false);
            $table
                ->string('history_ptbr', 2000)
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
                ->on('teams_fc25')
                ->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('biographs');
    }
};
