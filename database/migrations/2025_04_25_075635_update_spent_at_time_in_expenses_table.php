<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {

        DB::table('expenses')
            ->whereRaw("TIME(spent_at) = '00:00:00'")
            ->update([
                'spent_at' => DB::raw("DATE_FORMAT(spent_at, '%Y-%m-%d 18:30:00')")
            ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        DB::table('expenses')
            ->whereRaw("TIME(spent_at) = '18:30:00'")
            ->update([
                'spent_at' => DB::raw("DATE_FORMAT(spent_at, '%Y-%m-%d 00:00:00')")
            ]);
    }
};
