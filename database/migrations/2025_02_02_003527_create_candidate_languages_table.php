<?php
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up() {
        if (!Schema::hasTable('candidate_languages')) {
            Schema::create('candidate_languages', function (Blueprint $table) {
                $table->id();
                $table->unsignedBigInteger('language_id');
                $table->foreign('language_id')
                      ->references('id')
                      ->on('languages')
                      ->onDelete('cascade');
                $table->timestamps();
            });
            
        }
    }
    

    public function down() {
        Schema::dropIfExists('candidate_languages');
    }
};

