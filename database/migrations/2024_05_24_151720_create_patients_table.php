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
        Schema::create('patients', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->string("code")->nullable();
            $table->string("sex")->nullable();
            $table->date("date_of_birth")->nullable();
            $table->string("dm_type")->nullable();
            $table->text("drug_allergy")->nullable();
            $table->text("drug")->nullable();
            $table->integer("user_id")->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('profiles');
    }
};
