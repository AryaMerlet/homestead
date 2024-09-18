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
        Schema::table('users', function (Blueprint $table) {
            $table->after('description', function (Blueprint $table){
                $table->string('first_name');
                $table->string('last_name');
            });
            Schema::dropColumns('users','name');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            Schema::dropColumns('users','first_name');
            Schema::dropColumns('users','last_name');
            $table->string('name');

        });
    }
};
