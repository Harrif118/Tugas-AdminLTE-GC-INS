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
        Schema::table('perans', function (Blueprint $table) {
            //
            $table->foreignId('cast_id')->constrained('casts');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('perans', function (Blueprint $table) {
            //
            $table->dropForeign(['cast_id']);
            $table->dropColumn('cast_id');
        });
    }
};