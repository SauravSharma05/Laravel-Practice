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
        Schema::create('clients', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('mobile');
            $table->string('mortname');
            $table->string('mortnumber');
            $table->string('mortaadhar');
            $table->string('mortpan');
            $table->string('wit1name');
            $table->string('wit1aadhar');
            $table->string('wit1pan');
            $table->string('wit2name');
            $table->string('wit2aadhar');
            $table->string('wit2pan');
            $table->string('borname');
            $table->string('qrcode');

            $table->unsignedBigInteger('banker_id');
            $table->foreign('banker_id')->references("id")->on('bankers');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('clients');
    }
};
