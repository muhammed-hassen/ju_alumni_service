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
        //
        Schema::create('eductional_infos', function (Blueprint $table) {
            $table->id();
            $table->string('admition_type');
            //foregin key
            $table->foreignId('personal_info_id')->constrained();

            $table->string('degree_type');
            $table->string('college');
            $table->string('department');
            $table->string('graduated_year_ec')->nullable();
            $table->string('graduated_year_gc')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        //
        Schema::dropIfExists('eductional_infos');
    }
};
