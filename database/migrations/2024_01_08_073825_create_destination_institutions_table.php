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
        Schema::create('destination_institutions', function (Blueprint $table) {
            $table->id();
            //foregin key
            $table->foreignId('personal_info_id')->constrained();
            $table->String('Name');
            $table->Text('Address');
            $table->String('Mailing_Agent');
            //$table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('destination_institutions');
    }
};
