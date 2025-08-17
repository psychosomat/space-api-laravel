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
        Schema::table('planets', function (Blueprint $table) {
			$table->boolean('is_habitable')
				->default(false);
		});
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('planets', function (Blueprint $table) {
			$table->dropColumn('is_habitable');
        });
    }
};
