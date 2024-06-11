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
        Schema::create('saledeed', function (Blueprint $table) {
            $table->id();
            $table->string('clientname');
            $table->string('buyername');
            $table->string('mobile');
            $table->string('mortnumber');

            $table->string('wit1name');
            $table->string('wit1aadhar');
            $table->string('wit1pan');
            $table->string('wit2name');
            $table->string('wit2aadhar');
            $table->string('wit2pan');


            $table->unsignedBigInteger('lawyer_id');
            $table->foreign('lawyer_id')->references("id")->on('lawyer');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('saledeed');
    }
};
