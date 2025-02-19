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
        Schema::table('job_applications', function (Blueprint $table) {
            // Add the new column
            $table->unsignedBigInteger('job_stage_id')->nullable()->after('notes');

            // Add the foreign key constraint
            $table->foreign('job_stage_id')->references('id')->on('job_stages')
                ->onDelete('cascade')
                ->onUpdate('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('job_applications', function (Blueprint $table) {
            // Drop the foreign key constraint first
            $table->dropForeign(['job_stage_id']);
            
            // Now drop the column
            $table->dropColumn('job_stage_id');
        });
    }
};
