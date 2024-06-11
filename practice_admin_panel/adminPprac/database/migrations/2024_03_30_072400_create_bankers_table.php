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
        Schema::create('bankers', function (Blueprint $table) {
            $table->id();
            $table->string('bankname');
            $table->string('sancletter');
            $table->string('legreport');
            $table->string('finalloanamt');
            $table->string('cusmobile');
            $table->string('bankername');
            $table->string('bankerno');

            $table->unsignedBigInteger('client_id');
            $table->foreign('client_id')->references("id")->on('clients');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('bankers');
    }
};
