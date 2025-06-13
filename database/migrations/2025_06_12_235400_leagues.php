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
        Schema::create('leagues', function (Blueprint $table) {
            $table
                ->id();
            $table
                ->string('name')
                ->nullable(false);
            $table
                ->string('country')
                ->nullable(false);
            $table
                ->integer('division')
                ->nullable(false);
            $table
                ->enum('difficulty', [1, 2, 3, 4, 5])
                ->nullable(false);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::drop('leagues');
    }
};
