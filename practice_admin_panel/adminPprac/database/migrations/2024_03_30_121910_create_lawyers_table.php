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
        Schema::create('lawyers', function (Blueprint $table) {
            $table->id();
            $table->string('sno');
            $table->string('stampamt');
            $table->string('feesamt');
            $table->string('totalamt');
            $table->timestamps();


            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references("id")->on('clients');

            $table->unsignedBigInteger('banker_id');
            $table->foreign('banker_id')->references("id")->on('bankers');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('lawyers');
    }
};
