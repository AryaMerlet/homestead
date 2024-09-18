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
                $table->boolean('is_accessible_worker')->default(true);
                $table->string('job',40)->nullable();
                $table->string('name',30);
            });
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('is_accessible_worker');
            $table->dropColumn('name');
            $table->dropColumn('job');
        });
    }
};
