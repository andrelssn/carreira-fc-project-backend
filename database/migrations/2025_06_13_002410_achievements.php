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
        Schema::create('achievements', function (Blueprint $table) {
            $table
                ->id();
            $table
                ->unsignedBigInteger('id_team')
                ->nullable(false);
            $table
                ->string('name')
                ->nullable(true);
            $table
                ->integer('quantity')
                ->nullable(true);
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
        Schema::drop('achievements');
    }
};
